<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CompanyEvents extends Model
{
    use HasFactory;

    protected $guarded = [];
    
    protected $fillable = ['company_id','title', 'start_date', 'end_date'];
}
