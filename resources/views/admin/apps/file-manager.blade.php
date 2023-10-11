@extends('layouts.admin.master')

@section('title')File Manager
 {{ $title }}
@endsection

@push('css')
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/dropzone.css')}}">
@endpush

@section('content')
	@component('components.breadcrumb')
		@slot('breadcrumb_title')
			<h3>File Manager</h3>
		@endslot
		<li class="breadcrumb-item">Apps</li>
		<li class="breadcrumb-item active">File Manager</li>
	@endcomponent
	
	<div class="container-fluid">
	    <div class="row">
	      <div class="col-xl-3 box-col-6 pe-0">
	        <div class="job-sidebar"><a class="btn btn-primary job-toggle" href="javascript:void(0)">file filter</a>
	          <div class="job-left-aside custom-scrollbar">
	            <div class="file-sidebar">
	              <div class="card">
	                <div class="card-body">
	                  <ul>
	                    <li>    
	                      <div class="btn btn-primary"><i data-feather="home">                                    </i>Home </div>
	                    </li>
	                    <li>
	                      <div class="btn btn-light"><i data-feather="folder"></i>All    </div>
	                    </li>
	                    <li>
	                      <div class="btn btn-light"><i data-feather="clock"></i>Recent    </div>
	                    </li>
	                    <li>
	                      <div class="btn btn-light"><i data-feather="star"></i>Starred      </div>
	                    </li>
	                    <li>
	                      <div class="btn btn-light"><i data-feather="alert-circle"></i>Recovery        </div>
	                    </li>
	                    <li>
	                      <div class="btn btn-light"><i data-feather="trash-2"></i>Deleted </div>
	                    </li>
	                  </ul>
	                  <hr>
	                  <ul>
	                    <li>
	                      <div class="btn btn-outline-primary"><i data-feather="database">   </i>Storage   </div>
	                      <div class="m-t-15">
	                        <div class="progress sm-progress-bar mb-1">
	                          <div class="progress-bar bg-primary" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
	                        </div>
	                        <h6>25 GB of 100 GB used</h6>
	                      </div>
	                    </li>
	                  </ul>
	                  <hr>
	                  <ul>
	                    <li>
	                      <div class="btn btn-outline-primary"><i data-feather="grid">   </i>Pricing plan</div>
	                    </li>
	                    <li> 
	                      <div class="pricing-plan">
	                        <h6>Trial Version </h6>
	                        <h5>FREE</h5>
	                        <p> 100 GB Space</p>
	                        <div class="btn btn-outline-primary btn-xs">Selected</div><img class="bg-img" src="{{asset('assets/images/dashboard/folder.png')}}" alt="">
	                      </div>
	                    </li>
	                    <li> 
	                      <div class="pricing-plan">
	                        <h6>Premium</h6>
	                        <h5>$5/month</h5>
	                        <p> 200 GB Space</p>
	                        <div class="btn btn-outline-primary btn-xs">Contact Us</div><img class="bg-img" src="{{asset('assets/images/dashboard/folder1.png')}}" alt="">
	                      </div>
	                    </li>
	                  </ul>
	                </div>
	              </div>
	            </div>
	          </div>
	        </div>
	      </div>
	      <div class="col-xl-9 col-md-12 box-col-12">
	        <div class="file-content">
	          <div class="card">
	            <div class="card-header">
	              <div class="media">
	                <form class="form-inline" action="#" method="get">
	                  <div class="form-group d-flex mb-0">                                      <i class="fa fa-search"></i>
	                    <input class="form-control-plaintext" type="text" placeholder="Search...">
	                  </div>
	                </form>
	                <div class="media-body text-end">
	                  <form class="d-inline-flex" action="#" method="POST" enctype="multipart/form-data" name="myForm">
	                    <div class="btn btn-primary" onclick="getFile()"> <i data-feather="plus-square"></i>Add New</div>
	                    <div style="height: 0px;width: 0px; overflow:hidden;">
	                      <input id="upfile" type="file" onchange="sub(this)">
	                    </div>
	                  </form>
	                  <div class="btn btn-outline-primary ms-2"><i data-feather="upload">   </i>Upload  </div>
	                </div>
	              </div>
	            </div>
	            <div class="card-body file-manager">
	              <h4>All Files</h4>
	              <h6>Recently opened files</h6>
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
	              <h5 class="mt-4">Folders</h5>
	              <ul class="folder">
	                <li class="folder-box">
	                  <div class="media"><i class="fa fa-file-archive-o f-36 txt-warning"></i>
	                    <div class="media-body ms-3">
	                      <h6 class="mb-0">Viho admin</h6>
	                      <p>204 files, 50mb</p>
	                    </div>
	                  </div>
	                </li>
	                <li class="folder-box">
	                  <div class="media"><i class="fa fa-folder f-36 txt-warning"></i>
	                    <div class="media-body ms-3">
	                      <h6 class="mb-0">Viho admin</h6>
	                      <p>101 files, 10mb</p>
	                    </div>
	                  </div>
	                </li>
	                <li class="folder-box">
	                  <div class="media"><i class="fa fa-file-archive-o f-36 txt-warning"></i>
	                    <div class="media-body ms-3">
	                      <h6 class="mb-0">Viho admin</h6>
	                      <p>25 files, 2mb</p>
	                    </div>
	                  </div>
	                </li>
	                <li class="folder-box">
	                  <div class="media"><i class="fa fa-folder f-36 txt-warning"></i>
	                    <div class="media-body ms-3">
	                      <h6 class="mb-0">Viho admin</h6>
	                      <p>108 files, 5mb</p>
	                    </div>
	                  </div>
	                </li>
	              </ul>
	              <h5 class="mt-4">Files</h5>
	              <ul class="files">
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
	                <li class="file-box">
	                  <div class="file-top">  <i class="fa fa-file-text-o txt-primary"></i><i class="fa fa-ellipsis-v f-14 ellips"></i></div>
	                  <div class="file-bottom">
	                    <h6>Logo.psd </h6>
	                    <p class="mb-1">2.0 MB</p>
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
	
	@push('scripts')
	<script src="{{asset('assets/js/dropzone/dropzone.js')}}"></script>
    <script src="{{asset('assets/js/dropzone/dropzone-script.js')}}"></script>
	@endpush

@endsection