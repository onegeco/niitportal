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
                  <h3>
                     Course Materials</h3>
                </div>
                <div class="col-6">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                    <li class="breadcrumb-item">Home</li>
                    <li class="breadcrumb-item">E-Portal</li>
                    <li class="breadcrumb-item">Admin</li>
                    <li class="breadcrumb-item active">Training Materials</li>
                  </ol>
                </div>
              </div>
            </div>
          </div>
          <!-- Container-fluid starts-->
          <div class="container-fluid">
            <div class="row">
              <div class="col-xl-12 col-md-12 box-col-12">
                <div class="file-content">
                    <div class="card">
                    <div class="card-body file-manager">
                      <h6>Folders</h6>
                      <ul class="folder">
                        <li class="folder-box">
                          <div class="media"><i class="fas fa-video f-36 txt-warning"></i>
                            <div class="media-body ms-3">
                              <h6 class="mb-0">Videos</h6>
                              <p>10 files</p>
                            </div>
                          </div>
                        </li>
                        <li class="folder-box">
                          <div class="media"><i class="fa fa-file-archive-o f-36 txt-warning"></i>
                            <div class="media-body ms-3">
                              <h6 class="mb-0">Documents</h6>
                              <p>101 files</p>
                            </div>
                          </div>
                        </li>
                        <li class="folder-box">
                          <div class="media"><i class="fa fa-file-audio f-36 txt-warning"></i>
                            <div class="media-body ms-3">
                              <h6 class="mb-0">Audio</h6>
                              <p>0 files</p>
                            </div>
                          </div>
                        </li>
                        <li class="folder-box">
                          <div class="media"><i class="fa fa-image f-36 txt-warning"></i>
                            <div class="media-body ms-3">
                              <h6 class="mb-0">Images</h6>
                              <p>108 files</p>
                            </div>
                          </div>
                        </li>
                      </ul>
                      <h6 class="mt-4">Recently viewed</h6>
                      <ul class="files">
                        <li class="file-box">
                          <div class="file-top">  <i class="fa fa-file-image-o txt-primary"></i><i class="fa fa-ellipsis-v f-14 ellips"></i></div>
                          <div class="file-bottom">
                            <h6>Logo.psd </h6>
                            <p class="mb-1">2.0 MB</p>
                            <p> <b>last open : </b>1 hour ago</p>
                          </div>
                        </li>
                        <li class="file-box">
                          <div class="file-top">  <i class="fa fa-file-archive-o txt-secondary"></i><i class="fa fa-ellipsis-v f-14 ellips"></i></div>
                          <div class="file-bottom">
                            <h6>Project.zip </h6>
                            <p class="mb-1">1.90 GB</p>
                            <p> <b>last open : </b>1 hour ago</p>
                          </div>
                        </li>
                        <li class="file-box">
                          <div class="file-top">  <i class="fa fa-file-excel-o txt-success"></i><i class="fa fa-ellipsis-v f-14 ellips"></i></div>
                          <div class="file-bottom">
                            <h6>Backend.xls</h6>
                            <p class="mb-1">2.00 GB</p>
                            <p> <b>last open : </b>1 hour ago</p>
                          </div>
                        </li>
                        <li class="file-box">
                          <div class="file-top">  <i class="fa fa-file-text-o txt-info"></i><i class="fa fa-ellipsis-v f-14 ellips"></i></div>
                          <div class="file-bottom">
                            <h6>requirements.txt </h6>
                            <p class="mb-1">0.90 KB</p>
                            <p> <b>last open : </b>1 hour ago</p>
                          </div>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Container-fluid Ends-->
        </div>
      </div>
@endsection