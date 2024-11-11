<?php

namespace App\Http\Controllers;

use App\Models\CompanyImport;
use Illuminate\Http\Request;
use App\Imports\CustomerImport;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;


class ImportExportController extends Controller
{
    public function ImportView(){

        return view('companies.importExport.import_view');
    } // End Method 


    public function ImportListView(){

        //$companyImport = CompanyImport::latest()->get();
        $companySelectedId = Auth::user()->id;
        $dealData = CompanyImport::select('deal_title','deal_value','person_last_name','deal_currency_of_value','person_name','organization_name')->where('company_id', $companySelectedId)->get();
        $dealDataCount = $dealData->count();
        $peopleData = CompanyImport::select('person_name','person_first_name','person_last_name','person_phone','person_email','organization_name')->where('company_id', $companySelectedId)->get();
        $peopleDataCount = $peopleData->count();
        
        $organizationsData = CompanyImport::select('organization_name','organization_address')->where('company_id', $companySelectedId)->get();
        $orgDataCount = $organizationsData->count();
        
        $activitiesData = CompanyImport::select('activity_subject','activity_due_date','deal_title','person_name','organization_name')->where('company_id', $companySelectedId)->get();
        $activitiesDataCount = $activitiesData->count();
        
        $notesData = CompanyImport::select('note_content','deal_title','person_name','organization_name')->where('company_id', $companySelectedId)->whereNotNull('note_content')->orderBy('note_content', 'desc')->get();
        $noteDataCount = $notesData->count();

        return view('companies.importExport.all_import_view', compact('dealDataCount', 'peopleDataCount','orgDataCount','activitiesDataCount','noteDataCount','dealData','peopleData','organizationsData', 'activitiesData', 'notesData'));
    } // End Method 


    public function AddImport(Request $request)
    {



        $request->validate([
            'file' => 'required|mimes:xlsx,xls',
            'person_name' => 'required',
        ]);


        $file = $request->file('file');

        Excel::import(new CustomerImport, $file);

        $notification = array(
            'message' => 'Import file insert sucessfully',
            'alert-type' => 'success'
        );

        // return redirect()->back()->with($notification);
        return redirect()->route('companies.import.list.view')->with($notification);


        
        // echo "Product imported";
        // return redirect()->route('companies.import.view');

 
    }
}
