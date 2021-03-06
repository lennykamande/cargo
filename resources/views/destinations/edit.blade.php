 @section('title')
 App
 @endsection

 @extends('layouts.admin')

 @section('content')
 <div class="page-title-area">
                <div class="row align-items-center">
                    <div class="col-sm-6">
                        <div class="breadcrumbs-area clearfix">
                            <h4 class="page-title pull-left">Dashboard</h4>
                            <ul class="breadcrumbs pull-left">
                                <li><a href="index.html">Home</a></li>
                                <li><span>Form</span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6 clearfix">
                        <div class="user-profile pull-right">
                            <img class="avatar user-thumb" src="{{ asset('assets/images/author/avatar.png') }}" alt="avatar">
                            <h4 class="user-name dropdown-toggle" data-toggle="dropdown">Lenny Kamande <i class="fa fa-angle-down"></i></h4>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Message</a>
                                <a class="dropdown-item" href="#">Settings</a>
                                <a class="dropdown-item" href="#">Log Out</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- page title area end -->
            <div class="main-content-inner">
                <div class="row">
                    
                    <div class="col-lg-6 col-ml-12">
                        <div class="row">
                            <!-- basic form start -->
                            <div class="col-12 mt-5">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title">Add Destination</h4>
                                        <form method="POST" action="/destinations/{{ $destinations->id }}">
                                            {{ method_field('PATCH') }}
                                            {{ csrf_field() }}
                                            <div class="form-group">
                                                <label for="name">Destination Name</label>
                                                <input type="text" class="form-control" id="name" name="name" placeholder="Destination Name" value="{{ $destinations->name }} ">
                                            </div>
                                            <div class="form-group">
                                                <label for="code">Destination Code</label>
                                                <input type="text" class="form-control" id="code" name="code" placeholder="IATA Code" value="{{ $destinations-> code}} " >
                                            </div>
                                            <div class="form-group">
                                                <label for="title">Destination Title</label>
                                                <input type="text" class="form-control" id="title" name="title" placeholder="Destination Title" value="{{ $destinations->title }}">
                                            </div>
                                            <button type="submit" class="btn btn-primary mt-4 pr-4 pl-4">Submit</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <!-- basic form end -->
                        </div>
                    </div>
                </div>
            </div>
@endsection