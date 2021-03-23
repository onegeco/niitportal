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
                  <form class="card">
                    <div class="card-body">
                      <div class="row">
                        <div class="col-md-5">
                          <div class="mb-3">
                            <label class="form-label">First Name</label>
                            <input class="form-control" type="text" placeholder="First name" name="first_name">
                          </div>
                        </div>
                        <div class="col-sm-6 col-md-3">
                          <div class="mb-3">
                            <label class="form-label">Username</label>
                            <input class="form-control" type="text" placeholder="Username">
                          </div>
                        </div>
                        <div class="col-sm-6 col-md-4">
                          <div class="mb-3">
                            <label class="form-label">Email address</label>
                            <input class="form-control" type="email" placeholder="Email">
                          </div>
                        </div>
                        <div class="col-sm-6 col-md-6">
                          <div class="mb-3">
                            <label class="form-label">First Name</label>
                            <input class="form-control" type="text" placeholder="Company">
                          </div>
                        </div>
                        <div class="col-sm-6 col-md-6">
                          <div class="mb-3">
                            <label class="form-label">Last Name</label>
                            <input class="form-control" type="text" placeholder="Last Name">
                          </div>
                        </div>
                        <div class="col-md-12">
                          <div class="mb-3">
                            <label class="form-label">Address</label>
                            <input class="form-control" type="text" placeholder="Home Address">
                          </div>
                        </div>
                        <div class="col-sm-6 col-md-4">
                          <div class="mb-3">
                            <label class="form-label">City</label>
                            <input class="form-control" type="text" placeholder="City">
                          </div>
                        </div>
                        <div class="col-sm-6 col-md-3">
                          <div class="mb-3">
                            <label class="form-label">Postal Code</label>
                            <input class="form-control" type="number" placeholder="ZIP Code">
                          </div>
                        </div>
                        <div class="col-md-5">
                          <div class="mb-3">
                            <label class="form-label">Country</label>
                            <select class="form-control btn-square">
                              <option value="0">--Select--</option>
                              <option value="1">Germany</option>
                              <option value="2">Canada</option>
                              <option value="3">Usa</option>
                              <option value="4">Aus</option>
                            </select>
                          </div>
                        </div>
                        <div class="col-md-12">
                          <div>
                            <label class="form-label">About Me</label>
                            <textarea class="form-control" rows="5" placeholder="Enter About your description"></textarea>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="card-footer text-end">
                      <button class="btn btn-primary" type="submit">Update Profile</button>
                    </div>
                  </form>
                </div>
                <div class="col-md-12">
                  <div class="card">
                    <div class="card-header">
                      <h4 class="card-title mb-0">Add projects And Upload</h4>
                      <div class="card-options"><a class="card-options-collapse" href="#" data-bs-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a><a class="card-options-remove" href="#" data-bs-toggle="card-remove"><i class="fe fe-x"></i></a></div>
                    </div>
                    <div class="table-responsive add-project">
                      <table class="table card-table table-vcenter text-nowrap">
                        <thead>
                          <tr>
                            <th>Project Name</th>
                            <th>Date</th>
                            <th>Status</th>
                            <th>Price</th>
                            <th></th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td><a class="text-inherit" href="#">Untrammelled prevents </a></td>
                            <td>28 May 2018</td>
                            <td><span class="status-icon bg-success"></span> Completed</td>
                            <td>$56,908</td>
                            <td class="text-end"><a class="icon" href="javascript:void(0)"></a><a class="btn btn-primary btn-sm" href="javascript:void(0)"><i class="fa fa-pencil"></i> Edit</a><a class="icon" href="javascript:void(0)"></a><a class="btn btn-transparent btn-sm" href="javascript:void(0)"><i class="fa fa-link"></i> Update</a><a class="icon" href="javascript:void(0)"></a><a class="btn btn-danger btn-sm" href="javascript:void(0)"><i class="fa fa-trash"></i> Delete</a></td>
                          </tr>
                          <tr>
                            <td><a class="text-inherit" href="#">Untrammelled prevents</a></td>
                            <td>12 June 2018</td>
                            <td><span class="status-icon bg-danger"></span> On going</td>
                            <td>$45,087</td>
                            <td class="text-end"><a class="icon" href="javascript:void(0)"></a><a class="btn btn-primary btn-sm" href="javascript:void(0)"><i class="fa fa-pencil"></i> Edit</a><a class="icon" href="javascript:void(0)"></a><a class="btn btn-transparent btn-sm" href="javascript:void(0)"><i class="fa fa-link"></i> Update</a><a class="icon" href="javascript:void(0)"></a><a class="btn btn-danger btn-sm" href="javascript:void(0)"><i class="fa fa-trash"></i> Delete</a></td>
                          </tr>
                          <tr>
                            <td><a class="text-inherit" href="#">Untrammelled prevents</a></td>
                            <td>12 July 2018</td>
                            <td><span class="status-icon bg-warning"></span> Pending</td>
                            <td>$60,123</td>
                            <td class="text-end"><a class="icon" href="javascript:void(0)"></a><a class="btn btn-primary btn-sm" href="javascript:void(0)"><i class="fa fa-pencil"></i> Edit</a><a class="icon" href="javascript:void(0)"></a><a class="btn btn-transparent btn-sm" href="javascript:void(0)"><i class="fa fa-link"></i> Update</a><a class="icon" href="javascript:void(0)"></a><a class="btn btn-danger btn-sm" href="javascript:void(0)"><i class="fa fa-trash"></i> Delete</a></td>
                          </tr>
                          <tr>
                            <td><a class="text-inherit" href="#">Untrammelled prevents</a></td>
                            <td>14 June 2018</td>
                            <td><span class="status-icon bg-warning"></span> Pending</td>
                            <td>$70,435</td>
                            <td class="text-end"><a class="icon" href="javascript:void(0)"></a><a class="btn btn-primary btn-sm" href="javascript:void(0)"><i class="fa fa-pencil"></i> Edit</a><a class="icon" href="javascript:void(0)"></a><a class="btn btn-transparent btn-sm" href="javascript:void(0)"><i class="fa fa-link"></i> Update</a><a class="icon" href="javascript:void(0)"></a><a class="btn btn-danger btn-sm" href="javascript:void(0)"><i class="fa fa-trash"></i> Delete</a></td>
                          </tr>
                          <tr>
                            <td><a class="text-inherit" href="#">Untrammelled prevents</a></td>
                            <td>25 June 2018</td>
                            <td><span class="status-icon bg-success"></span> Completed</td>
                            <td>$15,987</td>
                            <td class="text-end"><a class="icon" href="javascript:void(0)"></a><a class="btn btn-primary btn-sm" href="javascript:void(0)"><i class="fa fa-pencil"></i> Edit</a><a class="icon" href="javascript:void(0)"></a><a class="btn btn-transparent btn-sm" href="javascript:void(0)"><i class="fa fa-link"></i> Update</a><a class="icon" href="javascript:void(0)"></a><a class="btn btn-danger btn-sm" href="javascript:void(0)"><i class="fa fa-trash"></i> Delete</a></td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Container-fluid Ends-->
        </div>
      </div>
    </div>
    @endsection