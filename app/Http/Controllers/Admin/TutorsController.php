<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use DataTables;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class TutorsController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }

    public function index(Request $request) {
        if ($request->ajax()) {
            $students = User::where('roles', 'tutor')->get();
            return Datatables::of($students)
                ->addIndexColumn()
                ->addColumn('action', function($row) {
                    $actionBtns = '<a class="badge badge-info p-2" href="#"><i class="fas fa-login"></i></a> <a class="badge badge-primary p-2" href="#"><i class="fas fa-eye"></i></a> <a class="badge badge-danger p-2" href="#"><i class="fas fa-trash"></i></a>';
                    return $actionBtns;
                })
                ->rawColumns(['action'])
                ->make(true);
            }
        return view('pages.admin.tutors');
    }

    public function showAdd() {
        return view('pages.admin.add_tutor');
    }

    public function addTutor(Request $request) {
        $request->validate([
    		'first_name' => ['required','string'],
    		'middle_name' => ['required', 'string'],
    		'last_name' => ['required', 'string'],
    		'email' => ['required', 'email'],
            'reg_course' => ['required', 'string'],
    		'mobile' => ['required', 'numeric'],
        ]);
        
        $regID = 'LC' . $request->mobile;

        User::create([
            'first_name' => $request->first_name,
            'middle_name' => $request->middle_name,
            'last_name' => $request->last_name,
            'email' => strtolower($request->email),
            'mobile' => $request->mobile,
            'reg_course' => $request->reg_course,
            'reg_id' => $regID,
            'roles' => 'tutor',
            'password' => Hash::make($regID),
         ]);
         
        return back()->with('success', 'Lecturer added successfully!');
     
    }
}
