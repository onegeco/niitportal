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
                  <form class="card" method="POST" action="{{ route('addS') }}">
                    @csrf
                    <div class="card-body">
                    @if (session('success'))
                      <div class="alert alert-success" role="alert" style="border-radius: 0px;">
                          {{ __('Student added successfully!.') }}
                      </div>
                  @endif
                      <div class="row">
                        <div class="col-md-4">
                          <div class="mb-3">
                            <label class="form-label">First Name</label>
                            <input class="form-control @error('reg_id') is-invalid @enderror" type="text" placeholder="First name" name="first_name" required>
                            @error('first_name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                          </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-3">
                              <label class="form-label">Middle Name</label>
                              <input class="form-control @error('reg_id') is-invalid @enderror" type="text" placeholder="Middle name" name="middle_name">
                              @error('middle_name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                              @enderror
                            </div>
                        </div>
                        <div class="col-md-4">
                          <div class="mb-3">
                            <label class="form-label">Last name</label>
                            <input class="form-control @error('last_name') is-invalid @enderror" type="text" placeholder="Last name" name="last_name" required>
                            @error('last_name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                          </div>
                        </div>
                        <div class="col-md-4">
                          <div>
                            <label class="form-label">Email</label>
                            <input class="form-control @error('email') is-invalid @enderror" type="email" placeholder="Email" name="email" required>
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                          </div>
                        </div>
                        <div class="col-md-4">
                          <div>
                            <label class="form-label">Course</label>
                            <select class="form-control @error('reg_course') is-invalid @enderror btn-square" name="reg_course" required>
                              <option value="" selected>--Select--</option>
                              <option value="Management Information System (MIS)">Management Information System (MIS)</option>
                              <option value="Python Programming">Python Programming</option>
                              <option value="Web Development">Web Development</option>
                              <option value="Web Design">Web Design</option>
                            </select>
                            @error('reg_course')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                            @enderror
                          </div>
                        </div>
                        <div class="col-md-4">
                          <div>
                            <label class="form-label">Mobile Number</label>
                            <input class="form-control @error('mobile') is-invalid @enderror" type="text" placeholder="Mobile" required name="mobile">
                            @error('mobile')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="card-footer text-end">
                      <button class="btn btn-primary" type="submit">Add Student</button> <a class="btn btn-danger" href="/admin/students">Cancle</a>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    @endsection