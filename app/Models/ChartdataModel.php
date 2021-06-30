<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ChartdataModel extends Model
{
    protected $table='Chart_data';
    protected $primaryKey='id';
    public $incrementing= true;
    protected $keyType='int';
    public $timestamps=false;
}
