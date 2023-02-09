<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;



class Log extends Model

{
    protected $table ='log';
    protected $fillable = [
        'method',
        'url',
        'code',
        'response',
        'msec',
        'date'

    ];
    use HasFactory;
    public function saveLog($values)
    {
        $this->insert($values);
    }
}
