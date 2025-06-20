<?php

namespace App\Http\Controllers\back;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class UserController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'List Pengguna',
            'breadcrumbs' => [
                [
                    'name' => 'Administrator',
                ],
                [
                    'name' => 'Pengguna',
                    'link' => route('back.user.index')
                ],
            ],
            'users' => User::all()
        ];

        return view('back.pages.user.index', $data);
    }

    public function create()
    {
        $data = [
            'title' => 'Tambah Pengguna',
            'breadcrumbs' => [
                [
                    'name' => 'Administrator',
                ],
                [
                    'name' => 'Pengguna',
                    'link' => route('back.user.index')
                ],
                [
                    'name' => 'Tambah Pengguna',
                    'link' => route('back.user.create')
                ],
            ],
            'sub_menu' => '',
        ];

        return view('back.pages.user.create', $data);
    }

    public function store(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'photo' => 'nullable|image|mimes:jpg,jpeg,png',
            'name' => 'required',
            'phone' => 'nullable',
            'email' => 'required|email|unique:users,email',
            'password' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput()->with('error', $validator->errors()->all());
        }

        $user = new User();
        $user->name = $request->name;
        $user->phone = $request->phone;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        if ($request->hasFile('photo')) {
            $photo = $request->file('photo');
            $photoName = Str::slug($request->name) . "-" . time() . "." . $photo->getClientOriginalExtension();
            $photoPath = $photo->storeAs('uploads/user/photo', $photoName, 'public');
            $user->photo = $photoPath;
        }
        $user->save();

        if ($request->super_admin) {
            $user->assignRole('super-admin');
        }

        if ($request->user) {
            $user->assignRole('user');
        }

        return redirect()->route('back.user.index')->with('success', 'Data pengguna berhasil ditambahkan');
    }

    public function edit($id)
    {
        $data = [
            'title' => 'Edit Pengguna',
            'breadcrumbs' => [
                [
                    'name' => 'Administrator',
                ],
                [
                    'name' => 'Pengguna',
                    'link' => route('back.user.index')
                ],
                [
                    'name' => 'Edit Pengguna',
                    'link' => route('back.user.edit', $id)
                ],
            ],
            'user' => User::find($id)
        ];

        return view('back.pages.user.edit', $data);
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'photo' => 'nullable|image|mimes:jpg,jpeg,png',
            'name' => 'required',
            'phone' => 'nullable',
            'email' => 'required|email|unique:users,email,' . $id,
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput()->with('error', $validator->errors()->all());
        }

        $user = User::find($id);
        $user->name = $request->name;
        $user->phone = $request->phone;
        $user->email = $request->email;
        if ($request->hasFile('photo')) {
            if ($user->photo) {
                Storage::delete('public/' . $user->photo);
            }
            $photo = $request->file('photo');
            $photoName = Str::slug($request->name) . "-" . time() . "." . $photo->getClientOriginalExtension();
            $photoPath = $photo->storeAs('uploads/user/photo', $photoName, 'public');
            $user->photo = $photoPath;
        }
        $user->save();

        if ($request->super_admin) {
            $user->assignRole('super-admin');
        } else {
            $user->removeRole('super-admin');
        }

        if ($request->user) {
            $user->assignRole('user');
        } else {
            $user->removeRole('user');
        }

        return redirect()->route('back.user.index')->with('success', 'Data pengguna berhasil diubah');
    }

    public function delete($id)
    {
        $user = User::find($id);
        if ($user->photo) {
            Storage::delete('public/' . $user->photo);
        }
        $user->delete();

        return redirect()->route('back.user.index')->with('success', 'Data pengguna berhasil dihapus');
    }
}
