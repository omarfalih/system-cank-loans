<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Offer extends Model
{
    use  HasFactory;

    protected $table = "offers";

    protected $fillable = [
        'name',
        'price',
        'salary_min',
        'salary_max'
    ];


}
