<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Passport\HasApiTokens;
use App\Models\Board;
use App\Traits\Uuid;

class User extends Authenticatable
{
    use HasApiTokens, SoftDeletes, Uuid, Notifiable;

    protected $fillable = ['name', 'email', 'password'];
    protected $hidden = ['password', 'remember_token'];

    public function boards()
    {
        return $this->hasMany(Board::class);
    }
}