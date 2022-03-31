<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable; //追加
use App\Models\Attendance;

class User extends Authenticatable // class User extends Model を左記にように変更
{
    use HasFactory;

    protected $fillable = ['name', 'email', 'password'];

    public static $rules = array(
        'name' => 'required|string|max:191',
        'mail_address' => 'required|string|email|unique:users|max:191',
        'password' => 'required|min:8|max:191'
    );

    public function attendances()
    {
        return $this->hasMany('App\Models\Attendance');
    }
}
