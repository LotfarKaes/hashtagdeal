<?php

namespace App\Imports;

use App\Models\CompanyImport;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Illuminate\Support\Facades\Auth;

class CustomerImport implements ToModel, WithHeadingRow
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        
        // echo"<pre>";
        // print_r($row);
        // echo"</pre>";
        // die();

        $companyId = Auth::user()->id;
        return new CompanyImport([
            'company_id' => $companyId,
            'person_name' => $row['name'],
            'person_first_name' => $row['firstname'],
            'person_last_name' => $row['lastname'],
            'person_phone' => $row['personphone'],
            'person_email' => $row['personemail'],
            'person_job_title' => $row['personjobtitle'],
            'organization_name' => $row['organizationname'],
            'organization_address' => $row['organizationaddress'],
            'deal_title' => $row['dealtitle'],
            'deal_value' => $row['dealvalue'],
            'deal_currency_of_value' => $row['dealcurrencyofvalue'],
            'activity_subject' => $row['activitysubject'],
            'activity_due_date' => $row['activityduedate'],
            'note_content' => $row['notecontent'],
        ]);
    }
}
