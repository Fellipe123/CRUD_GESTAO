<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
         'nome' , 'marca' ,  'quantidade' , 'situacao' , 'preco' , 'descricao' , 
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    // nao vai ultilizar
    // protected $hidden = [
    //     'password', 'remember_token',
    // ];
}
