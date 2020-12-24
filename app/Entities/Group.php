<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Group extends Model implements Transformable
{
    use TransformableTrait;

    public $timestamps = true;
    protected $table = 'groups';
    protected $fillable = ['name', 'user_id', 'instituition_id'];

    public function owner() {
        // RELACIONAMENTO 1:N
        return $this->belongsTo(User::class, 'user_id');
    }

    public function instituition() {
        return $this->belongsTo(Instituition::class,'instituition_id');
    }

}
