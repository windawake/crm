<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Document
 *
 * @mixin \Eloquent
 */
class Document extends Model
{
    protected $fillable = ['name', 'size', 'path', 'file_display', 'client_id'];

    public function clients()
    {
        $this->belongsTo(Client::class, 'client_id');
    }
}
