<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class ElectoralCommissioner extends Model
{
    protected $table = 'electorial_commisiona';
    
    protected $fillable = ['name', 'password'];
}