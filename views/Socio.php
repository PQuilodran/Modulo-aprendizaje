<?php
namespace App;

use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Socio extends Eloquent
{
    protected $connection = 'mongodb';
    protected $collection = 'socios';
    
    protected $fillable = [
        'nombre', 'ciudad'
    ];
}
?>
