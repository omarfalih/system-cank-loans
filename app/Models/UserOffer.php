<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class UserOffer extends Model
{
    use  HasFactory;

    protected $table = "users_offers";

    protected $fillable = [
        'user_id',
        'offer_id',
    ];


}
