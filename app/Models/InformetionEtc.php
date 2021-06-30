<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class InformetionEtc extends Model
{
    protected $table='informetion_itc';
    protected $primaryKey='id';
    public $incrementing= true;
    protected $keyType='int';
    public $timestamps=false;
}
