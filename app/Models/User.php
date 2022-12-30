<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticable;

class User extends Authenticable
{
    use HasFactory;

    protected $table = 'tbl_user';
    protected $primaryKey = 'user_id';

    protected $fillable = ['fullname', 'email', 'username', 'password'];
}