<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ItemListingController extends Controller
{
    public function ItemListingDashboard(){
  
        return view('companies.companies_itemListingPage');
    }
}
