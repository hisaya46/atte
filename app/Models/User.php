<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public static $rules = array(
        'name' => 'required|string|max:191',
        'mail_address' => 'required|string|email|unique:users|max:191',
        'password' => 'required|min:8|max:191'
    );
}
