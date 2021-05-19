<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserType extends Model
{
    protected $table='usertype';

    protected $primaryKey='id_usertype';

    public $timestamps=false;


    protected $fillable =[
        'name',
    ];

    protected $guarded =[

    ];
}
