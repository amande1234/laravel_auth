<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $table ='contacts';
    protected $fillable = ['Name','Phone','Address','Email'];
    protected $guarded=['Photo'];
    
    use HasFactory;
}
