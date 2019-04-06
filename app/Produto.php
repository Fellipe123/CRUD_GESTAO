<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Produto;

class Produto extends Model
{

       protected $table = 'produtos';

       protected $fillable = [
            'nome' , 'marca' ,  'quantidade' , 'situacao' , 'preco' , 'descricao' , 
        ];

}
