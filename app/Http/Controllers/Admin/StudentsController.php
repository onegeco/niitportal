<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StudentsController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }

    public function index() {
        return view('pages.admin.students');
    }

    public function showAdd() {
        return view('pages.admin.add');
    }
}
