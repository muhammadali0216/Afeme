<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Passport\HasApiTokens;
 

class Client extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    use HasFactory;
    protected $fillable=[
        'name',
        'email',
        'phone',
        'pasport',
        'user_type',
        'devays_id',
        'devays_type',
        'save',
        'token',
        'password',
    ];
  
}
