<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pengguna extends Model
{
    use HasFactory;
    protected $table = 'pengguna';

    public function roles(){
        return $this->belongsTo(role::class, 'role_id', 'id');
        // role = nmmodel, roleid=foreign, id=primarytblrole
    }
}
