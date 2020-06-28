<?php

namespace App\Models;

use App\Http\Traits\TimestampsTrait;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use TimestampsTrait;
    
    //definir tabela
    protected $table = 'tasks';
}
