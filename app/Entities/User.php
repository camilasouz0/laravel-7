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

        return substr($cpf, 0, 3).'.'.substr($cpf, 4, 3).'.'.substr($cpf, 8, 3).'-'.substr($cpf, -2);//posições do cpf
    }

    /* public function getPhoneAttribute()
    {
        $phone = $this->attributes['phone'];

        return substr($phone, 0, 2).substr($phone, 3, 6)."-".substr($phone, -4);
    } */

    public function getBirthAttribute()
    {
        $birth = explode('-', $this->attributes['birth']);
        if(count($birth) != 3)
            return "";
        $birth = $birth[2].'/'.$birth[1].'/'.$birth[0];
        return $birth;
    }

}