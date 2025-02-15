<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Doctor;
use App\Models\Appointment;

class AdminController extends Controller
{
    public function addview(){
        return view('admin.add_doctor');
    }

    public function upload(Request $request){
        $doctor = new doctor;
    
        // Handle file upload
        if ($request->hasFile('file')) {
            $image = $request->file('file');
            $imagename = time().'.'.$image->getClientOriginalExtension();
            $image->move(public_path('doctorimage'), $imagename);
    
            // Save image filename in the database
            $doctor->image = $imagename;  // Fix: store the image in the correct column
        }
    
        // Save doctor details
        $doctor->name = $request->name; // Fix: Make sure the doctor's name is saved correctly
        $doctor->phone = $request->number;
        $doctor->room = $request->room;
        $doctor->speciality = $request->speciality;
    
        $doctor->save();
    
        return redirect()->back()->with('message', 'Doctor added successfully');
    }

    public function showappointment(){
        $data = appointment::all();

        return view('admin.showappointment', compact('data'));
    }

    public function approved($id)
    {
        $data = appointment::find($id);

        $data->status='Approved';

        $data->save();

        return redirect()->back();
    }

    public function cancelled($id)
    {
        $data = appointment::find($id);

        $data->status='Cancelled';

        $data->save();

        return redirect()->back();
    }

    public function doctor()
    {
        $data = doctor::all();

        return view('admin.doctor', compact('data'));
    }

    public function deletedoctor($id)
    {
        $data = doctor::find($id);

        $data->delete();

        return redirect()->back();
    }
    
}
