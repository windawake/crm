<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\PermissionRole
 *
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\PermissionRole[] $employee
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Permissions[] $hasperm
 * @property-read \App\Models\Setting $settings
 * @mixin \Eloquent
 */
class PermissionRole extends Model
{
    protected $table = 'permission_role';

    protected $fillable = [
        'permission_id',
        'role_id'
    ];

    public function settings()
    {
        return $this->belongsTo(Setting::class);
    }

    public function employee()
    {
        return $this->hasMany(PermissionRole::class, 'role_id', 3);
    }

    public function hasperm()
    {
        return $this->hasMany(Permissions::class, 'Permission_role');
    }
}
