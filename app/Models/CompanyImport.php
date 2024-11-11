<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CompanyImport extends Model
{
    use HasFactory;

    protected $guarded = [];
    
    protected $fillable = [
        'company_id',
        'person_name',
        'person_first_name',
        'person_last_name',
        'person_phone',
        'person_email',
        'person_job_title',
        'organization_name',
        'organization_address',
        'deal_title',
        'deal_value',
        'deal_currency_of_value',
        'activity_subject',
        'activity_due_date',
        'note_content',
    ];
}
