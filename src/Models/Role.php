<?php

namespace ElvisAdmin\LaravelRoles\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Role extends Model
{
    protected $fillable = ['name', 'slug'];

    public static function boot()
    {
        parent::boot();

        static::creating(function ($role) {
            if (!$role->slug) {
                $role->slug = Str::slug($role->name);
            }
        });
    }

    public function users()
    {
        return $this->belongsToMany(\App\Models\User::class, 'role_user');
    }
}
