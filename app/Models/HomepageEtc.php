<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HomepageEtc extends Model
{
    protected $table='homepage_etc';
    protected $primaryKey='id';
    public $incrementing= true;
    protected $keyType='int';
    public $timestamps=false;
}
