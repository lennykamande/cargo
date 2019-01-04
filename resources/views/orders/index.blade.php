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
                                <li><span>Orders</span></li>
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
                <!-- visitor graph area start 
                <div class="card mt-5">
                    <div class="card-body">
                        <div class="d-flex justify-content-between mb-5">
                            <h4 class="header-title mb-0">Visitor Graph</h4>
                            <select class="custome-select border-0 pr-3">
                                <option selected="">Last 7 Days</option>
                                <option value="0">Last 7 Days</option>
                            </select>
                        </div>
                        <div id="visitor_graph"></div>
                    </div>
                </div> -->
                <!-- visitor graph area end -->
                <!-- order list area start -->
                <div class="col-lg-6 mt-5">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="header-title">Add Order</h4>
                                <a href="/orders/create" class="btn btn-outline-success mb-4"> New Order</a>
                                
                            </div>
                        </div>
                    </div>
                <div class="card mt-5">
                    <div class="card-body">
                        <h4 class="header-title">Order List</h4>
                        <div class="table-responsive">
                            <table class="dbkit-table">
                                <tbody>
                                    <tr class="heading-td">
                                        <td>Product Name</td>
                                        <td>Product Code</td>
                                        <td>Order Status</td>
                                        <td>Client Number</td>
                                        <td>Zip Code</td>
                                        <td>View Order</td>
                                    </tr>
                                    <tr>
                                        <td>Ladis Sunglass</td>
                                        <td>#894750374</td>
                                        <td><span class="status-p bg-primary">Pending</span></td>
                                        <td>01976 74 92 00</td>
                                        <td>9241</td>
                                        <td><a href="#" class="btn btn-outline-success mb-3"> View Order</a></td>
                                    </tr>
                                    <tr>
                                        <td>Ladis Sunglass</td>
                                        <td>#894750374</td>
                                        <td><span class="status-p bg-warning">Shipment</span></td>
                                        <td>01976 74 92 00</td>
                                        <td>9241</td>
                                        <td><a href="#" class="btn btn-outline-success mb-3"> View Order</a></td>
                                    </tr>
                                    <tr>
                                        <td>Ladis Sunglass</td>
                                        <td>#894750374</td>
                                        <td><span class="status-p bg-primary">Pending</span></td>
                                        <td>01976 74 92 00</td>
                                        <td>9241</td>
                                        <td><a href="#" class="btn btn-outline-success mb-3"> View Order</a></td>
                                    </tr>
                                    <tr>
                                        <td>Ladis Sunglass</td>
                                        <td>#894750374</td>
                                        <td><span class="status-p bg-success">Confirmed </span></td>
                                        <td>01976 74 92 00</td>
                                        <td>9241</td>
                                        <td><a href="#" class="btn btn-outline-success mb-3"> View Order</a></td>
                                    </tr>
                                    <tr>
                                        <td>Ladis Sunglass</td>
                                        <td>#894750374</td>
                                        <td><span class="status-p bg-primary">Pending</span></td>
                                        <td>01976 74 92 00</td>
                                        <td>9241</td>
                                        <td><a href="#" class="btn btn-outline-success mb-3"> View Order</a></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="pagination_area pull-right mt-5">
                            <ul>
                                <li><a href="#"><i class="fa fa-chevron-left"></i></a></li>
                                <li><a href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#"><i class="fa fa-chevron-right"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- order list area end -->
                
            </div>
@endsection