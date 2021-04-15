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
                  <h3>Lecturer's List</h3>
                </div>
                <div class="col-6">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item">Home</li>
                    <li class="breadcrumb-item">E-Portal</li>
                    <li class="breadcrumb-item">Admin</li>
                    <li class="breadcrumb-item active">Lecturers</li>
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
                      <table class="display tutor_datatable">
                        <thead>
                          <tr>
                            <th>Name</th>
                            <th>Lecturing Course</th>
                            <th>Mobile Number</th>
                            <th>Email</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                       
                        </tbody>
                      </table>
                    </div>
                  </div>
                  <div class="card-footer text-center">
                      <a href="/admin/tutors/add" class="btn btn-primary"><i class="fas fa-plus"></i> Add Lecturer</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection
