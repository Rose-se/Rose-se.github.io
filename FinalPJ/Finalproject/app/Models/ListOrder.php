<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ListOrder extends Model
{
    use HasFactory;
    protected $table = 'list';
    protected $fillable = [
        'name',
        'fullname',
        'codename',
        'address'
    ];
}
