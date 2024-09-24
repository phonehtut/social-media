<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class FriendShip extends Model
{
    use HasFactory;

    protected $fillable = [
        'requester_id',
        'addressee_id',
        'status'
    ];

    /**
     * Summary of requester
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function requester(): BelongsTo
    {
        return $this->belongsTo(User::class, 'requester_id');
    }

    /**
     * Summary of addressee
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function addressee(): BelongsTo
    {
        return $this->belongsTo(User::class,'addressee_id');
    }

}
