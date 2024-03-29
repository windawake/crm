<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Activity
 *
 * @property-read \Illuminate\Database\Eloquent\Model|\Eloquent $source
 * @property-read \App\Models\Task $task
 * @property-read \App\Models\User $user
 * @mixin \Eloquent
 */
class Activity extends model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'activity_log';
    protected $fillable = [
        'user_id',
        'text',
        'source_type',
        'source_id',
        'action',
    ];
    protected $guarded = ['id'];

    /**
     * Get the user that the activity belongs to.
     *
     * @return object
     */
    public function task()
    {
        return $this->belongsTo(Task::class, 'task_id', 'id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function source() {
        return $this->morphTo();
    }
}
