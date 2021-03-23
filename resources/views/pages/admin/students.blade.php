@extends('layouts.app')
@section('title', 'Admin Portal')

@section('content')
<div class="page-wrapper compact-wrapper" id="pageWrapper">
        @include('layouts.partials.nav')
      <div class="page-body-wrapper">
        @include('layouts.partials.side_bar')
        <div class="page-body">
          <div class="container-fluid">
            <div class="page-title">
              <div class="row">
                <div class="col-6">
                  <h3>Student's List</h3>
                </div>
                <div class="col-6">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item">Home</li>
                    <li class="breadcrumb-item">E-Portal</li>
                    <li class="breadcrumb-item">Admin</li>
                    <li class="breadcrumb-item active">Students</li>
                  </ol>
                </div>
              </div>
            </div>
          </div>
          <!-- Container-fluid starts-->
          <div class="container-fluid">
            <div class="row">
              <!-- Base styles-->
              <div class="col-sm-12">
                <div class="card">
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="display" id="example-style-1">
                        <thead>
                          <tr>
                            <th>Name</th>
                            <th>Reg Number</th>
                            <th>Course</th>
                            <th>Mobile Number</th>
                            <th>Email</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>System Architect</td>
                            <td><a href="">Tiger Nixon</a></td>
                            <td>Edinburgh</td>
                            <td>61</td>
                            <td>2011/04/25</td>
                            <td>
                                <a class="badge badge-primary p-2" href="#"><i class="fas fa-eye"></i></a> <a class="badge badge-danger p-2" href="#"><i class="fas fa-trash"></i></a>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                  <div class="card-footer text-center">
                      <a href="/admin/student/add" class="btn btn-primary"><i class="fas fa-plus"></i> Add Student</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection