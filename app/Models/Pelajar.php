<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pelajar extends Model
{
    protected $table = 'pelajar';

    protected $primaryKey = 'id_pelajar';

    protected $fillable = [
        'user_id',
        'name',
    ];

    // public function user()
    // {
    //     return $this->belongsTo(User::class);
    // }

    // app/Models/Pelajar.php

public function user()
{
    return $this->belongsTo(User::class, 'user_id', 'id');
}

}


