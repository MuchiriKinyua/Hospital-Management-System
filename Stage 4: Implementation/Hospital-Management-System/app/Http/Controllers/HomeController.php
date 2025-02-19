<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Doctor;
use App\Models\Staff;
use App\Models\Patient;
use App\Models\Appointment;
use App\Models\Notification;
use App\Models\Billing;
use App\Models\Record;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function redirect(){
        if(Auth::check()) // check if the user is logged in
        {
            if(Auth::user()->usertype == '0')
            {
                $user = User::all();
                $doctor = Doctor::all();
                $patient = Patient::all();
                $appointment = Appointment::all();
                $staff = Staff::all();
                $notification = Notification::all();
                $billing = Billing::all();
                $record = Record::all();
                return view('home.home', compact('user', 'doctor', 'patient', 'appointment', 'staff', 'notification', 'billing', 'record'));
            }
            else
            {
                $totalUsers = User::count();
                $totalDoctors = Doctor::count();
                $totalPatients = Patient::count();
                $totalAppointments = Appointment::count();
                $totalStaff = Staff::count();
                $totalNotification = Notification::count();
                $totalBillings = Billing::count();
                $totalRecords = Record::count();
                
    
                return view('home', compact('totalUsers', 'totalDoctors', 'totalPatients', 'totalAppointments', 'totalStaff', 'totalNotification', 'totalBillings', 'totalRecords'));
            }
        }
        else
        {
            return redirect()->back();
        }
    }
    
    

    public function index(){
        if(Auth::id())
        {
            return redirect('home');
        }
        else
        {

        $doctor = doctor::all();

        return view('home.home', compact('doctor'));
        }
    }
    
    public function appointment(Request $request){
        $data = new appointment;
        $data->name=$request->name;
        $data->email=$request->email;
        $data->date=$request->date;
        $data->phone=$request->phone;
        $data->message=$request->message;
        $data->doctor=$request->doctor;
        $data->status='In Progress';
        if(Auth::id())
        {
        $data->user_id=Auth::user()->id;
        }
        $data->save();

        return redirect()->back()->with('message', 'Appointment Request Successful. We will contact you soon');
    }
    public function myappointment(){
        if(Auth::id())
        {
            if(Auth::user()->usertype==0)
            {
                $userid = Auth::user()->id;

                $appoint = appointment::where('user_id', $userid)->get();
            
                return view('home.my_appointment', compact('appoint'));
            }
            else
            {
                return redirect()->back();
            }

        }
        else{
            return redirect()->back();
        }
    }
    public function cancel_appoint($id){
        $data = appointment::find($id);

        $data->delete();

        return redirect()->back();
    }
}
