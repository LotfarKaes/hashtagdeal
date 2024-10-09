<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class LeadsController extends Controller
{
    public function AllLeads(){
        $products = Product::latest()->get();
        return view('companies.leads.all_leads',compact('products'));
    } // End Method 

    public function AddLeads(){
        $products = Product::latest()->get();
        return view('companies.leads.add_leads');
    } // End Method 
    
}
