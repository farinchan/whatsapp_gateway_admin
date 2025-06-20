<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    protected $guarded = ['id', 'created_at', 'updated_at'];

    public function users()
    {
        return $this->belongsToMany(User::class, 'package_users')
            ->withPivot('start_at', 'end_at', 'is_active', 'status')
            ->withTimestamps();
    }

    public function packageUsers()
    {
        return $this->hasMany(PackageUser::class);
    }
}
