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
                                <li><span>Dashboard</span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6 clearfix">
                        <div class="user-profile pull-right">
                            <img class="avatar user-thumb" src="assets/images/author/avatar.png" alt="avatar">
                            <h4 class="user-name dropdown-toggle" data-toggle="dropdown">Kumkum Rai <i class="fa fa-angle-down"></i></h4>
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
                <!-- sales report area start -->
                <div class="sales-report-area sales-style-two">
                    <div class="row">
                        <div class="col-xl-3 col-ml-3 col-md-6 mt-5">
                            <div class="single-report">
                                <div class="s-sale-inner pt--30 mb-3">
                                    <div class="s-report-title d-flex justify-content-between">
                                        <h4 class="header-title mb-0">Product Sold</h4>
                                        <select class="custome-select border-0 pr-3">
                                            <option selected="">Last 7 Days</option>
                                            <option value="0">Last 7 Days</option>
                                        </select>
                                    </div>
                                </div>
                                <canvas id="coin_sales4" height="100"></canvas>
                            </div>
                        </div>
                        <div class="col-xl-3 col-ml-3 col-md-6 mt-5">
                            <div class="single-report">
                                <div class="s-sale-inner pt--30 mb-3">
                                    <div class="s-report-title d-flex justify-content-between">
                                        <h4 class="header-title mb-0">Gross Profit</h4>
                                        <select class="custome-select border-0 pr-3">
                                            <option selected="">Last 7 Days</option>
                                            <option value="0">Last 7 Days</option>
                                        </select>
                                    </div>
                                </div>
                                <canvas id="coin_sales5" height="100"></canvas>
                            </div>
                        </div>
                        <div class="col-xl-3 col-ml-3 col-md-6  mt-5">
                            <div class="single-report">
                                <div class="s-sale-inner pt--30 mb-3">
                                    <div class="s-report-title d-flex justify-content-between">
                                        <h4 class="header-title mb-0">Orders</h4>
                                        <select class="custome-select border-0 pr-3">
                                            <option selected="">Last 7 Days</option>
                                            <option value="0">Last 7 Days</option>
                                        </select>
                                    </div>
                                </div>
                                <canvas id="coin_sales6" height="100"></canvas>
                            </div>
                        </div>
                        <div class="col-xl-3 col-ml-3 col-md-6 mt-5">
                            <div class="single-report">
                                <div class="s-sale-inner pt--30 mb-3">
                                    <div class="s-report-title d-flex justify-content-between">
                                        <h4 class="header-title mb-0">New Coustomers</h4>
                                        <select class="custome-select border-0 pr-3">
                                            <option selected="">Last 7 Days</option>
                                            <option value="0">Last 7 Days</option>
                                        </select>
                                    </div>
                                </div>
                                <canvas id="coin_sales7" height="100"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- sales report area end -->
                <!-- visitor graph area start -->
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
                </div>
                <!-- visitor graph area end -->
                <!-- order list area start -->
                <div class="card mt-5">
                    <div class="card-body">
                        <h4 class="header-title">Todays Order List</h4>
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
                                        <td><span class="pending_dot">Pending</span></td>
                                        <td>01976 74 92 00</td>
                                        <td>9241</td>
                                        <td>View Order</td>
                                    </tr>
                                    <tr>
                                        <td>Ladis Sunglass</td>
                                        <td>#894750374</td>
                                        <td><span class="shipment_dot">Shipment</span></td>
                                        <td>01976 74 92 00</td>
                                        <td>9241</td>
                                        <td>View Order</td>
                                    </tr>
                                    <tr>
                                        <td>Ladis Sunglass</td>
                                        <td>#894750374</td>
                                        <td><span class="pending_dot">Pending</span></td>
                                        <td>01976 74 92 00</td>
                                        <td>9241</td>
                                        <td>View Order</td>
                                    </tr>
                                    <tr>
                                        <td>Ladis Sunglass</td>
                                        <td>#894750374</td>
                                        <td><span class="confirmed _dot">Confirmed </span></td>
                                        <td>01976 74 92 00</td>
                                        <td>9241</td>
                                        <td>View Order</td>
                                    </tr>
                                    <tr>
                                        <td>Ladis Sunglass</td>
                                        <td>#894750374</td>
                                        <td><span class="pending_dot">Pending</span></td>
                                        <td>01976 74 92 00</td>
                                        <td>9241</td>
                                        <td>View Order</td>
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