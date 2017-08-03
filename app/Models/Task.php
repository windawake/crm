<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Carbon;

/**
 * App\Models\Task
 *
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Activity[] $activity
 * @property-read \App\Models\Client $client
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Comment[] $comments
 * @property-read \App\Models\User $creator
 * @property-read mixed $assigned_user
 * @property-read mixed $creator_user
 * @property-read mixed $days_until_deadline
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\TaskTime[] $time
 * @property-read \App\Models\User $user
 * @mixin \Eloquent
 */
class Task extends Model
{

    protected $fillable = [
        'title',
        'description',
        'status',
        'user_assigned_id',
        'user_created_id',
        'client_id',
        'deadline'
    ];
    protected $dates = ['deadline'];

    protected $hidden = ['remember_token'];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_assigned_id');
    }

    public function client()
    {
        return $this->belongsTo(Client::class, 'client_id');
    }

    public function creator()
    {
        return $this->belongsTo(User::class, 'user_created_id');
    }

    public function comments()
    {
        return $this->morphMany(Comment::class, 'source');
    }
    
    public function getDaysUntilDeadlineAttribute()
    {
        return Carbon\Carbon::now()
            ->startOfDay()
            ->diffInDays($this->deadline, false); // if you are past your deadline, the value returned will be negative.
    }

    public function getAssignedUserAttribute()
    {
        return User::findOrFail($this->user_assigned_id);
    }

    public function getCreatorUserAttribute()
    {
        return User::findOrFail($this->user_assigned_id);
    }

    public function time()
    {
        return $this->hasMany(TaskTime::class, 'task_id', 'id');
    }

    public function activity()
    {
        return $this->morphMany(Activity::class, 'source');
    }

    /**
     * Add a reply to the thread.
     *
     * @param  array $reply
     * @return Model
     */
    public function addComment($reply)
    {
        $reply = $this->comments()->create($reply);
        return $reply;
    }
}
