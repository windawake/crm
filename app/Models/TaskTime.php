<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\TaskTime
 *
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Invoice[] $invoices
 * @property-read \App\Models\Task $tasks
 * @mixin \Eloquent
 */
class TaskTime extends Model
{
    protected $fillable = [
        'time',
        'overtime',
        'task_id',
        'title',
        'comment',
        'value'
    ];

    protected $hidden = ['remember_token'];

    protected $table = 'tasks_time';

    public function tasks()
    {
        return $this->belongsTo(Task::class);
    }

    public function invoices()
    {
        return $this->belongsToMany(Invoice::class);
    }
}
