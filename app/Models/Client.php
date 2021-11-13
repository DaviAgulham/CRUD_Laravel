<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    //use HasFactory;
    protected $table = "client";
    protected $primatyKey ="id";
    protected $fillable = [
        'first', 'last', 'email', 'phone', 'location', 'hobby'
    ];
    public $timestamps = false;
}
