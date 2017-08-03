<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Zizaco\Entrust\EntrustRole;
use App\Models\Permissions;

/**
 * App\Models\Role
 *
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Permissions[] $permissions
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Permissions[] $perms
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Role[] $userRole
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\User[] $users
 * @mixin \Eloquent
 */
class Role extends EntrustRole
{
    protected $fillable = [
        'name',
        'display_name',
        'description'
    ];

    public function userRole()
    {
        return $this->hasMany(Role::class, 'user_id', 'id');
    }

    public function permissions()
    {
        return $this->belongsToMany(permissions::class, 'permission_role', 'role_id', 'permission_id');
    }
}
