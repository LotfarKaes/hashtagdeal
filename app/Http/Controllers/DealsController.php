<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\CompanyImport;

class DealsController extends Controller
{
    public function AddDeals(){
        $id = Auth::user()->id;
        return view('companies.deals.add_deals',compact('id'));
    }

    public function AllDeals(){
        $companySelectedId = Auth::user()->id;
        $dealData = CompanyImport::select('deal_title','deal_value','person_last_name','deal_currency_of_value','person_name','organization_name')->where('company_id', $companySelectedId)->get();
        $dealDataCount = $dealData->count();
        return view('companies.deals.all_deals',compact('dealData'));
    }
}
