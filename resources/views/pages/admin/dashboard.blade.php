@extends('layouts.app')
@section('title', 'Admin Portal')

@section('content')
    <div class="page-wrapper compact-wrapper" id="pageWrapper">
      @include('layouts.partials.nav')
      <!-- Page Body Start-->
      <div class="page-body-wrapper">
        <!-- Page Sidebar Start-->
        @include('layouts.partials.side_bar')
        <!-- Page Sidebar Ends-->
        <div class="page-body">
          <div class="container-fluid">
            <div class="page-title">
              <div class="row">
                <div class="col-6">
                </div>
                <div class="col-6">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item">Home</li>
                    <li class="breadcrumb-item">E-Portal</li>
                    <li class="breadcrumb-item">Admin</li>
                    <li class="breadcrumb-item active">Dasboard</li>
                  </ol>
                </div>
              </div>
            </div>
          </div>
          <!-- Container-fluid starts-->
          <div class="container-fluid">
            <div class="row">
              <div class="col-xl-12 xl-100">
                <div class="row">
                  <div class="col-xl-4 xl-33 col-sm-6 box-col-6">
                    <div class="card">
                      <div class="blog-box blog-grid text-center product-box">
                        <div class="product-img"><img class="img-fluid top-radius-blog" src="{{ asset('/images/faq/3.jpg') }}" alt="">
                          <div class="product-hover">
                            <ul>
                              <li><a href="/students"><i class="fas fa-eye"></i></a></li>
                            </ul>
                          </div>
                        </div>
                        <div class="blog-details-main">
                          <h6 class="blog-bottom-details">Students List</h6>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-xl-4 xl-33 col-sm-6 box-col-6">
                    <div class="card">
                      <div class="blog-box blog-grid text-center product-box">
                        <div class="product-img"><img class="img-fluid top-radius-blog" src="{{ asset('/images/faq/1.jpg') }}" alt="">
                          <div class="product-hover">
                            <ul>
                              <li><a href="/tutor"><i class="fas fa-eye"></i></a></li>
                            </ul>
                          </div>
                        </div>
                        <div class="blog-details-main">
                          
                          <h6 class="blog-bottom-details">Lecturers List</h6>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-xl-4 xl-33 col-sm-6 box-col-6">
                    <div class="card">
                      <div class="blog-box blog-grid text-center product-box">
                        <div class="product-img"><img class="img-fluid top-radius-blog" src="{{ asset('/images/faq/2.jpg') }}" alt="">
                          <div class="product-hover">
                            <ul>
                            <li><a href="/tutor"><i class="fas fa-eye"></i></a></li>
                              </ul>
                          </div>
                        </div>
                        <div class="blog-details-main">
                          <h6 class="blog-bottom-details">Active Classes</h6>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Container-fluid Ends-->
        </div>
        <!-- footer start-->
      </div>
    </div>
@endsection