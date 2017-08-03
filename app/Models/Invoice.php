<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Invoice
 *
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Client[] $clients
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\TaskTime[] $tasktime
 * @mixin \Eloquent
 */
class Invoice extends Model
{
    protected $fillable = [
        'received',
        'sent',
        'payment_date'
    ];

    public function clients()
    {
        return $this->belongsToMany(Client::class);
    }

    public function tasktime()
    {
        return $this->belongsToMany(TaskTime::class);
    }
}
