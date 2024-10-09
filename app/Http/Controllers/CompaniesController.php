<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\CompanyCount;
use App\Models\CompanyEvents;

use Illuminate\Support\Facades\Hash;


class CompaniesController extends Controller
{
    public function CompaniesDashboard(){
        $id = Auth::user()->id;
        $companiesData = User::find($id);
        return view('companies.companies_dashboard_all',compact('companiesData'));
    }

    public function CompaniesLogin(){

        return view('companies.companies_login');
    
    } // End method

     /**
     * Destroy an authenticated session.
     */
    public function CompaniesDestroy(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');

    } // End method

    public function CompaniesProfile(){
        
        $id = Auth::user()->id;
        $companiesData = User::find($id);
        return view('companies.companies_profile_view',compact('companiesData'));
    } // End method

    public function CompaniesProfileStore(Request $request){

        $id = Auth::user()->id;
        $data = User::find($id);
        $data->name = $request->name;
        $data->email = $request->email;
        $data->phone = $request->phone;
        $data->address = $request->address; 
        $data->location = $request->location;
        $data->company_size = $request->company_size;
        $data->about_info = $request->about_info;
        $data->website = $request->website;
        $data->social_link = $request->social_link;
        $data->age = $request->age;
        $data->skills = $request->skills;
        $data->position = $request->position;
        

        if ($request->file('photo')) {
            $file = $request->file('photo');
            @unlink(public_path('upload/companies_images/'.$data->photo));
            $filename = date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('upload/companies_images'),$filename);
            $data['photo'] = $filename;
        }

        $data->save();

        $notification = array(
            'message' => 'Companies Profile Updated Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);

    } // End Mehtod 

    public function CompaniesChangePassword(){
        return view('companies.companies_change_password');
    } // End Mehtod 

    public function CompaniesUpdatePassword(Request $request){
        // Validation 
        $request->validate([
            'old_password' => 'required',
            'new_password' => 'required|confirmed', 
        ]);

        // Match The Old Password
        if (!Hash::check($request->old_password, auth::user()->password)) {
            return back()->with("error", "Old Password Doesn't Match!!");
        }

        // Update The new password 
        User::whereId(auth()->user()->id)->update([
            'password' => Hash::make($request->new_password)

        ]);
        return back()->with("status", " Password Changed Successfully");

    } // End Mehtod 

    public function companiesEncounters(){
        
        $id = Auth::user()->id;
        $salersData = User::where('status','active')->where('role','sales')->latest()->get();
        return view('companies.companies_encounters_view',compact('salersData'));
    } // End method

    public function companiesLiked(){

        $id = Auth::user()->id;        
        $salersData = CompanyCount::where('liked','1')->pluck('saler_id');
        $salersLiked = User::whereIn('id',  $salersData)->get();
        return view('companies.companies_liked_view',compact('salersLiked'));
    } // End method

    public function companiesInterested(){

        $id = Auth::user()->id;        
        $salersData = CompanyCount::where('interested','1')->pluck('saler_id');
        $salersInterested = User::whereIn('id',  $salersData)->get();
        return view('companies.companies_interested_view',compact('salersInterested'));
    } // End method

    public function companiesInterestedCount(Request $request){

        $salerId =$request->saler_id ?? 0;
        //display meesgae if data is existed
        $companyId = Auth::user()->id;
        $companyCount = CompanyCount::updateOrCreate([
            'company_id' => $companyId,
            'saler_id' => $salerId,
            'liked' => 0,
            'visitor' => 0,
            'interested' => 1,

        ]);

        
        $notification = array(
            'message' => 'Selected profile save on you interested list',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);

     }

     public function companiesEvent(){  //Even manage calendar

        $events = array();

        $id = Auth::user()->id;        
 
        $companyEvents = CompanyEvents::where('company_id',  $id)->get();

        //$companyEvents = CompanyEvents::all();
        foreach($companyEvents as $companyEvent){ 
            $events[] =[
                'id' => $companyEvent->id,
                'title' => $companyEvent->title,
                'start' => $companyEvent->start_date,
                'end' => $companyEvent->end_date,

            ];

        }
        // return $events;

        return view('companies.companies_event_view', ['events' => $events]);
    } // End method

    public function companiesEventStore(Request $request){

        $this->validate($request, [
            'title' => 'required|string',
           
        ]);

        $companyId = Auth::user()->id;
        $companyEvent = CompanyEvents::create([
            'company_id' => $companyId,
            'title' => $request->title,
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,

        ]);


        return $companyEvent;
        die();
   

        return response()->json($companyEvent);

        // CompanyEvents::create();
     
       
    } // End method

    public function companiesEventUpdate(Request $request, $id){

        $companyEvents = CompanyEvents::find($id);

        if (! $companyEvents ){
            return response()->json([
                'error' => 'Unable to locate the event'
            ], 404);
        }
        $companyEvents->update([
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,

        ]);
        
        return response()->json('Event updated');
       
    } // End method
    
    // Listing item view 
    public function ItemListingDashboard(){
  
        return view('companies.companies_item_listing_view');
    }

}
