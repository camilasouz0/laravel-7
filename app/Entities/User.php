<?php

namespace App\Entities;


use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use SoftDeletes;
    use Notifiable;

    public $timestamps = true;
    protected $table = 'users';
    protected $fillable = ['cpf', 'name', 'phone', 'birth', 'gender','notes', 'email', 'password', 'status', 'permission'];
    protected $hidden = ['password', 'remember_token'];

    public function setPasswordAttribute($value){
        $this->attributes['password'] = env('PASSWORD_HASH') ? bcrypt($value) : $value;
    }

    /* protected $casts = ['email_verified_at' => 'datetime',]; */

    public function getCpfAttribute()
    {
        $cpf = $this->attributes['cpf'];

        return substr($cpf, 0, 3);
    }

}