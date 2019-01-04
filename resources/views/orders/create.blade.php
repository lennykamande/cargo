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
                                        <h4 class="header-title">Add Order</h4>
                                        <form method="POST" action="/orders">
                                            {{ csrf_field() }}
                                            <div class="form-group">
                                                <label for="name">Product Name</label>
                                                <input type="text" class="form-control" id="name" name="description" placeholder="Product Name" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="origin">Origin</label>
                                                <select class="custom-select">
                                                <option id="from"selected="selected">Select Origin</option>
                                                @foreach ($destinations as $destination)
                                                <option value="{{ $destination->id }}"> {{ $destination->name }}</option>
                                               @endforeach
                                            </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="title">Destination</label>
                                                <select class="custom-select">
                                                <option id="destination"selected="selected">Select Destination</option>
                                                @foreach ($destinations as $destination)
                                                <option value="{{ $destination->id }}"> {{ $destination->name }}</option>
                                                @endforeach
                                                 </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="total">Total</label>
                                                <input type="text" class="form-control" id="total" name="total" placeholder="Payment Total" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="title">Payment Status</label>
                                                <select class="custom-select">
                                                <option id="paystatus" selected="selected">Pay Status</option>
                                                <option value="1"> False</option>
                                                <option value="0"> True</option>
                                            </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="title">Booking Status</label>
                                                <input type="text" class="form-control" id="bookingstatus" name="bookingstatus" placeholder="Booking Status" required>
                                            </div>
                                        
                                            <div class="form-group">
                                                <label for="title">Client</label>
                                                <input type="text" class="form-control" id="client" name="client" placeholder="Client Name" required>
                                            </div>

                                            <div class="form-group">
                                                <label for="productno">Product Number</label>
                                                <input type="text" class="form-control" id="productno" name="productno" placeholder="Product No" required>
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