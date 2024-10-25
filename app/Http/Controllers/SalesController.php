<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class SalesController extends Controller
{
    public function SalesDashboard(){

        return view('sales.sales_dashboard');
    }
    public function SalesLogin(){

        return view('sales.sales_login');
    
    } // End method

     /**
     * Destroy an authenticated session.
     */
    public function SalesDestroy(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');

    } // End method

    public function SalesProfile(){
        
        $id = Auth::user()->id;
        $salesData = User::find($id);
        return view('sales.sales_profile_view',compact('salesData'));
    } // End method

    public function SalesProfileStore(Request $request){

        $id = Auth::user()->id;
        $data = User::find($id);
        $data->name = $request->name;
        $data->email = $request->email;
        $data->phone = $request->phone;
        $data->address = $request->address; 

        $data->age = $request->age;
        $data->location = $request->location;
        $data->languages = $request->languages;
        $data->skills = $request->skills;
        $data->position = $request->position; 
        $data->about_info = $request->about_info;
        $data->website = $request->website;
        $data->social_link = $request->social_link;

        if (!empty($request->address)) {
                // Google Maps API Key 
        $GOOGLE_API_KEY = 'AIzaSyBdIEAxjlWXHPPfZThdBAJEMbXCRLaxI4M'; 
        // Address from which the latitude and longitude will be retrieved 
        $address = $request->address; 
        // Formatted address 
        $formatted_address = str_replace(' ', '+', $address); 
        // Get geo data from Google Maps API by address 
        $geocodeFromAddr = file_get_contents("https://maps.googleapis.com/maps/api/geocode/json?address={$formatted_address}&key={$GOOGLE_API_KEY}"); 
        // Decode JSON data returned by API 
        $apiResponse = json_decode($geocodeFromAddr); 

        // Retrieve latitude and longitude from API data 
        $latitude  = $apiResponse->results[0]->geometry->location->lat;  
        $longitude = $apiResponse->results[0]->geometry->location->lng; 

        $data->latitude = $latitude;
        $data->longitude = $longitude;

        // echo 'Latitude: '.$latitude; 
        // echo '<br/>Longitude: '.$longitude;

        }

        if ($request->file('photo')) {
            $file = $request->file('photo');
            @unlink(public_path('upload/sales_images/'.$data->photo));
            $filename = date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('upload/sales_images'),$filename);
            $data['photo'] = $filename;
        }

        $data->save();

        $notification = array(
            'message' => 'Sales Profile Updated Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);

    } // End Mehtod 

    public function SalesChangePassword(){
        return view('sales.sales_change_password');
    } // End Mehtod 

    public function SalesUpdatePassword(Request $request){
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

    public function salesEncounters(){
        
        $id = Auth::user()->id;
        $companiesData = User::where('status','active')->where('role','companies')->latest()->get();
        return view('sales.sales_encounters_view',compact('companiesData'));
    } // End method

    // public function salesEncountersOverview(Request $request){
    //     $id = $request->id;
    //     $companiesData = User::where('status','active')->where('id', $id)->get();
    //     return view('sales.sales_encounters_view',compact('companiesOverview'));
    // } // End method

    // public function salesEncountersJobs(Request $request){
    //     $id = $request()->id;
    //     $companiesData = User::where('status','active')->where('id', $id)->get();
    //     return view('sales.sales_encounters_view',compact('companiesJobs'));
    // } // End method


    public function Becomesaler(){
        
        return view('auth.become_saler');
    } // End method

    public function SalerRegister(Request $request){
        
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'confirmed'],
        ]);

        $user = User::insert([ 
            'name' => $request->name,
            'username' => $request->username,
            'email' => $request->email,
            // 'phone' => $request->phone,
            // 'location' => $request->location,
            'password' => Hash::make($request->password),
            'role' => $request->role,
            'status' => 'active',
        ]);

          $notification = array(
            'message' => 'Registered Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('login')->with($notification);
    } // End method
    
    public function SalesSellerMap(Request $request){
        

        // $companyId =$request->company_id ?? 0;
        // $mapComDisplayById = User::whereIn('id',  $companyId)->get();
        $mapData = User::where('status','active')->where('role','companies')->latest()->get();

        // $property = json_decode($mapData);

            foreach ($mapData as $data) {
                $property = json_decode($data);
                $latitude = (float) $property->latitude;
                $longitude = (float) $property->longitude;
                $about =  mb_strimwidth($data->about_info, 0, 50, "...");
                $locations[] = array('id' => $property->id, 'name' => $property->name, 'profession' => $property->position, 'skills' => $property->position, 'description' => $about, 'address' => $property->address, 'position' => ['lat' => $latitude, 'lng' => $longitude], 'type' => 'home', 'photo' => $property->photo);
            }

            // return $locations;
            // die();

         return view('sales.sales_seller_map_view',compact('locations', 'mapData'));
    } // End method
    
}
