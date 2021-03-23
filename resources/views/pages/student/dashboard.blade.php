@extends('layouts.app')
@section('title', 'Student Portal')

@section('content')
    <div class="page-wrapper compact-wrapper" id="pageWrapper">
      @include('layouts.partials.nav')
      <!-- Page Header Ends-->
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
                    <li class="breadcrumb-item"><a href="index.html"><i data-feather="home"></i></a></li>
                    <li class="breadcrumb-item">Learning</li>
                    <li class="breadcrumb-item active">Learning List</li>
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
                              <li><i class="icon-link"></i></li>
                              <li><i class="icon-import"></i></li>
                            </ul>
                          </div>
                        </div>
                        <div class="blog-details-main">
                          <ul class="blog-social">
                            <li>9 April 2018</li>
                            <li>by: Admin</li>
                            <li>0 Hits</li>
                          </ul>
                          
                          <h6 class="blog-bottom-details">Perspiciatis unde omnis iste natus error sit.Dummy text</h6>
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
                              <li><i class="icon-link"></i></li>
                              <li><i class="icon-import"></i></li>
                            </ul>
                          </div>
                        </div>
                        <div class="blog-details-main">
                          <ul class="blog-social">
                            <li>9 April 2018</li>
                            <li>by: Admin</li>
                            <li>0 Hits</li>
                          </ul>
                          
                          <h6 class="blog-bottom-details">Perspiciatis unde omnis iste natus error sit.Dummy text</h6>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-xl-4 xl-33 col-sm-6 box-col-6">
                    <div class="card">
                      <div class="blog-box blog-grid text-center product-box">
                        <div class="product-img"><img class="img-fluid top-radius-blog" src="{{ asset('/images/faq/4.jpg') }}" alt="">
                          <div class="product-hover">
                            <ul>
                              <li><i class="icon-link"></i></li>
                              <li><i class="icon-import"></i></li>
                            </ul>
                          </div>
                        </div>
                        <div class="blog-details-main">
                          <ul class="blog-social">
                            <li>9 April 2018</li>
                            <li>by: Admin</li>
                            <li>0 Hits</li>
                          </ul>
                          
                          <h6 class="blog-bottom-details">Perspiciatis unde omnis iste natus error sit.Dummy text</h6>
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
                              <li><i class="icon-link"></i></li>
                              <li><i class="icon-import"></i></li>
                            </ul>
                          </div>
                        </div>
                        <div class="blog-details-main">
                          <ul class="blog-social">
                            <li>9 April 2018</li>
                            <li>by: Admin</li>
                            <li>0 Hits</li>
                          </ul>
                          
                          <h6 class="blog-bottom-details">Perspiciatis unde omnis iste natus error sit.Dummy text</h6>
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
        @include('layouts.partials.footer')
      </div>
    </div>
@endsection