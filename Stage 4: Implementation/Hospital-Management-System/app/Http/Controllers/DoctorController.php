<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateDoctorRequest;
use App\Http\Requests\UpdateDoctorRequest;
use App\Http\Controllers\AppBaseController;
use App\Repositories\DoctorRepository;
use Illuminate\Http\Request;
use Flash;

class DoctorController extends AppBaseController
{
    /** @var DoctorRepository $doctorRepository*/
    private $doctorRepository;

    public function __construct(DoctorRepository $doctorRepo)
    {
        $this->doctorRepository = $doctorRepo;
    }

    /**
     * Display a listing of the Doctor.
     */
    public function index(Request $request)
    {
        $doctors = $this->doctorRepository->paginate(10);

        return view('doctors.index')
            ->with('doctors', $doctors);
    }

    /**
     * Show the form for creating a new Doctor.
     */
    public function create()
    {
        return view('doctors.create');
    }

    /**
     * Store a newly created Doctor in storage.
     */

    /**
     * Display the specified Doctor.
     */
    public function show($id)
    {
        $doctor = $this->doctorRepository->find($id);

        if (empty($doctor)) {
            Flash::error('Doctor not found');

            return redirect(route('doctors.index'));
        }

        return view('doctors.show')->with('doctor', $doctor);
    }

    /**
     * Show the form for editing the specified Doctor.
     */
    public function edit($id)
    {
        $doctor = $this->doctorRepository->find($id);

        if (empty($doctor)) {
            Flash::error('Doctor not found');

            return redirect(route('doctors.index'));
        }

        return view('doctors.edit')->with('doctor', $doctor);
    }

    /**
     * Update the specified Doctor in storage.
     */




     public function store(CreateDoctorRequest $request)
     {
         $input = $request->all();
     
         // Validate image size and type
         if ($request->hasFile('image')) {
             $request->validate([
                 'image' => 'image|mimes:jpeg,png,jpg,gif,svg',  
             ]);
     
             $imageName = time() . '.' . $request->image->extension();
             $request->image->move(public_path('images'), $imageName);
             $input['image'] = $imageName;  // Store the image filename as a string
         }
     
         $doctor = $this->doctorRepository->create($input);
     
         Flash::success('Doctor saved successfully.');
     
         return redirect(route('doctors.index'));
     }
     
     public function update($id, UpdateDoctorRequest $request)
     {
         $doctor = $this->doctorRepository->find($id);
     
         if (empty($doctor)) {
             Flash::error('Doctor not found');
             return redirect(route('doctors.index'));
         }
     
         $input = $request->all();
     
         // Validate image size and type
         if ($request->hasFile('image')) {
             $request->validate([
                 'image' => 'image|mimes:jpeg,png,jpg,gif,svg', 
             ]);
     
             // Delete the old image
             if ($doctor->image) {
                 unlink(public_path('images/' . $doctor->image));
             }
     
             $imageName = time() . '.' . $request->image->extension();
             $request->image->move(public_path('images'), $imageName);
             $input['image'] = $imageName;  // Store the new image filename as a string
         }
     
         $doctor = $this->doctorRepository->update($input, $id);
     
         Flash::success('Doctor updated successfully.');
     
         return redirect(route('doctors.index'));
     }
     
    /**
     * Remove the specified Doctor from storage.
     *
     * @throws \Exception
     */
    public function destroy($id)
    {
        $doctor = $this->doctorRepository->find($id);

        if (empty($doctor)) {
            Flash::error('Doctor not found');

            return redirect(route('doctors.index'));
        }

        $this->doctorRepository->delete($id);

        Flash::success('Doctor deleted successfully.');

        return redirect(route('doctors.index'));
    }
}