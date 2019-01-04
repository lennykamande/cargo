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
                                <li><span>Destinations</span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6 clearfix">
                        <div class="user-profile pull-right">
                            <img class="avatar user-thumb" src="assets/images/author/avatar.png" alt="avatar">
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
                    <div class="col-lg-6 mt-5">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="header-title">Add Destination</h4>
                                <a href="/destinations/create" class="btn btn-outline-success mb-4"> New Destination</a>
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-12 mt-5">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="header-title">Destinations</h4>
                                <div class="single-table">
                                    <div class="table-responsive">
                                        <table class="table table-hover progress-table text-center">
                                            <thead class="text-uppercase">
                                                <tr>
                                                    <th scope="col">ID</th>
                                                    <th scope="col">Name</th>
                                                    <th scope="col">Code</th>
                                                    <th scope="col">Title</th>
                                                    <th scope="col">status</th>
                                                    <th scope="col">action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($destinations as $destination)
                                                <tr>
                                                    <th scope="row">{{ $destination->id }}</th>
                                                    <td>{{ $destination->name }}</td>
                                                    <td>{{ $destination->code }}</td>
                                                    <td>{{ $destination->title }}</td>
                                                    <!--<td>
                                                        <div class="progress" style="height: 8px;">
                                                            <div class="progress-bar" role="progressbar" style="width: 50%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </td>-->
                                                    <td><span class="status-p bg-success">Active</span></td>
                                                    <td>
                                                        <ul class="d-flex justify-content-center">
                                                            <li class="mr-3"><a href="/destinations/{{ $destination->id }}/edit" class="text-secondary"><i class="fa fa-edit"></i></a></li>
                                                            <li><a href="#" class="text-danger"><i class="ti-trash"></i></a></li>
                                                            
                                                        </ul>
                                                    </td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Progress Table end -->
                </div>
            </div>
@endsection