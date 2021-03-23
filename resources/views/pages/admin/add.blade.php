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
                  <h3>Add Student</h3>
                </div>
                <div class="col-6">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item">Home</li>
                    <li class="breadcrumb-item">E-Portal</li>
                    <li class="breadcrumb-item"> Admin</li>
                    <li class="breadcrumb-item active"> Add new Student</li>
                  </ol>
                </div>
              </div>
            </div>
          </div>
          <!-- Container-fluid starts-->
          <div class="container-fluid">
            <div class="edit-profile">
              <div class="row">
                <div class="col-xl-12">
                  <form class="card" method="POST" action="{{ route('add') }}">
                    @csrf
                    <div class="card-body">
                      <div class="row">
                        <div class="col-md-4">
                          <div class="mb-3">
                            <label class="form-label">First Name</label>
                            <input class="form-control" type="text" placeholder="First name" name="first_name" required>
                          </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label class="form-label">Middle Name</label>
                                <input class="form-control" type="text" placeholder="Middle name" name="middle_name">
                            </div>
                        </div>
                        <div class="col-md-4">
                          <div class="mb-3">
                            <label class="form-label">Last name</label>
                            <input class="form-control" type="text" placeholder="Last name" name="middle_name" required>
                          </div>
                        </div>
                        <div class="col-md-4">
                          <div class="mb-3">
                            <label class="form-label">Email</label>
                            <input class="form-control" type="email" placeholder="Email" name="email" required>
                          </div>
                        </div>
                        <div class="col-md-4">
                          <div class="mb-3">
                            <label class="form-label">Course</label>
                            <select class="form-control btn-square" name="course" required>
                              <option>--Select--</option>
                              <option value="Management Information System">Management Information System</option>
                              <option value="Python Programming">Python Programming</option>
                              <option value="Web Development">Web Development</option>
                              <option value="Web Design">Web Design</option>
                            </select>
                          </div>
                        </div>
                        <div class="col-md-4">
                          <div class="mb-3">
                            <label class="form-label">Mobile Number</label>
                            <input class="form-control" type="text" placeholder="Mobile" required name="mobile">
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="card-footer text-end">
                      <button class="btn btn-primary" type="submit">Add Student</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
          <!-- Container-fluid Ends-->
        </div>
      </div>
    </div>
    @endsection