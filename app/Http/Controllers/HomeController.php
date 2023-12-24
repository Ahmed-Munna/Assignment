<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\BusStop;
use Carbon\Carbon;

class HomeController extends Controller
{
    // user Controller
    public function user_type_check(){
        // dd(Auth::user());
        if(Auth::id()){
            $usertype=Auth()->user()->role;
            // return $usertype;
            if($usertype=== 0){
            // Pass the counts to the view
            return view('adminDashboard.index');
            // return view('dashboard');

            } elseif($usertype=== 1) {

                
             return view('userDashboard.index');
                 //   return view('dashboard');
            }
         }
    }
    public function showDropdown()
    {
        $busStops = BusStop::pluck('name');
    
        return view('index', compact('busStops'));
    }

    public function busView(Request $request)
    {
        // Your logic to handle the form submission goes here

        // You can access form data like this:
        $from = $request->input('from');
        $to = $request->input('to');
        $doj = $request->input('doj');

        $dhakaTime = Carbon::now('Asia/Dhaka');
        // Format the time as 'H:i:s'
        $formattedDhakaTime = $dhakaTime->format('H:i:s');
       //dd($formattedDhakaTime);

        $busInfoResults = DB::table('buses')
        ->join('bus_fares', 'buses.id', '=', 'bus_fares.bus_id')
        //->join('bus_info', 'buses.id', '=', 'bus_info.id') // Adjust based on your actual relationship
        ->where('bus_fares.boarding_point', $from)
        //->where('bus_fares.boarding_time', $formattedDhakaTime)
        ->where('bus_fares.dropping_point', $to)
        ->select('buses.*', 'bus_fares.*')
        ->get();
        // Seats Available
        $total_ticket_sold = DB::table('ticket_sales')
        ->where('doj', $doj)
        ->sum('seat');

//dd ( $busInfoResults);
         $total_no = $busInfoResults->count();

         return view('bus_view', compact('busInfoResults', 'total_no', 'from', 'to', 'doj','total_ticket_sold'));
    }

    public function processPurchase(Request $request)
    {
        // Check if the user is logged in
        if (Auth::check()) {
            $user_id=Auth()->user()->id;
            $from = $request->input('from');
            $to = $request->input('to');
            $doj = $request->input('doj');
            $bus_id = $request->input('bus_id');
            $coach_name = $request->input('coach_name');
            $coach_type = $request->input('coach_type');
           
            $available_seat= $request->input('available_seat');
            $boarding_point = $request->input('boarding_point');
            $dropping_point = $request->input('dropping_point');
            $fare = $request->input('fare');
            // If logged in, proceed to checkout
            return view('checkout', compact('user_id','from', 'to', 'doj','bus_id','coach_name','coach_type','boarding_point','dropping_point','fare','available_seat'));
        } else {
            // If not logged in, show a message
            return redirect()->route('bus_view_Notice');
        }
    }
    public function processPurchase_Final(Request $request)
    {
        // Validate the form data
        $request->validate([
            'user_id' => 'required',
            'bus_id' => 'required',
            'from' => 'required',
            'to' => 'required',
            'doj' => 'required',
            'seat' => 'required',
            'fare' => 'required',
            'amount' => 'required',
        ]);

        // Use the DB facade to insert data into the 'ticket_sales' table
        DB::table('ticket_sales')->insert([
            'user_id' => $request->user_id,
            'bus_id' => $request->bus_id,
            'from' => $request->from,
            'to' => $request->to,
            'doj' => $request->doj,
            'seat' => $request->seat,
            'fare' => $request->fare,
            'amount' => $request->amount,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Optionally, you can redirect the user to a thank you page or another page
        return redirect()->route('dashboard');
    }
    
}
