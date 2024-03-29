<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Department
 *
 * @mixin \Eloquent
 */
class Department extends Model
{
    protected $fillable =
        [
            'name',
            'description'
        ];
}
