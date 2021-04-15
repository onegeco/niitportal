<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use DataTables;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class StudentsController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }

    public function index(Request $request) {
        include(app_path() . '\Classes\phpgrid\jqgrid_dist.php');
        $db_conf = array(
            "type" => 'mysqli',
            "server" => 'localhost',
            "user" => 'root',
            "password" => '',
            "database" => 'niitportal'
        );
        $g = new \jqgrid($db_conf);
        $g->error_msg = "System was unable to process your request. Please contact technical support.";

        $g->table = 'niit_users';
            // Options
        $opt["page"] = 1;
        $opt["forceFit"] = true;
        $opt["autowidth"] = true;
        $opt["tooltip"] = true;
        $opt["cellEdit"] = true;


        $g->set_options($opt);
        $g->select_command = "SELECT reg_id, first_name, last_name, middle_name, email, mobile, reg_course FROM `niit_users`";
        $out = $g->render("students_list");
        
        return view('pages.admin.students', array('phpgrid_output' => $out));
    }

    public function showAdd() {
        return view('pages.admin.add_student');
    }

    public function addStudent(Request $request) {
        $request->validate([
    		'first_name' => ['required','string'],
    		'middle_name' => ['required', 'string'],
    		'last_name' => ['required', 'string'],
    		'email' => ['required', 'email'],
            'reg_course' => ['required', 'string'],
    		'mobile' => ['required', 'numeric'],
        ]);
        
        $regID = 'ST' . $request->mobile;

        User::create([
            'first_name' => $request->first_name,
            'middle_name' => $request->middle_name,
            'last_name' => $request->last_name,
            'email' => strtolower($request->email),
            'mobile' => $request->mobile,
            'reg_course' => $request->reg_course,
            'reg_id' => $regID,
            'roles' => 'student',
            'password' => Hash::make($regID),
         ]);
         
        return back()->with('success', 'Student added successfully!');
     
    }
}
