@extends('layouts.backend')

@section('content')

<div class="row">
    <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
        <div class="userWidget-1">
            <div class="avatar bg-info">
                <img src="img/av7.png" alt="avatar">
                <div class="name osLight"> Jane Smith </div>
            </div>
            <div class="title"> Web Designer </div>
            <div class="address"> Los Angeles, CA, USA </div>
            <ul class="fullstats">
                <li> <span>280</span>Followers </li>
                <li> <span>345</span>Following </li>
                <li> <span>36</span>Posts </li>
            </ul>
            <div class="clearfix"> </div>
        </div>
        <div class="panel">
            <div class="panel-heading">
                <h3 class="panel-title"><i class="fa fa-user"> </i> User Information</h3>
            </div>
            <div class="panel-body">
                <table class="table">
                    <tbody>
                        <tr>
                            <td><i class="fa fa-external-link ph-5"></i></td>
                            <td> URL </td>
                            <td> www.google.com</td>
                        </tr>
                        <tr>
                            <td><i class="fa fa-envelope-o ph-5"></i></td>
                            <td> Email </td>
                            <td>{{ Auth::user()->email }} </td>
                        </tr>
                        <tr>
                            <td><i class="fa fa-phone ph-5"></i></td>
                            <td> Phone </td>
                            <td> {{config('app.phone')}} </td>
                        </tr>
                        <tr>
                            <td><i class="fa fa-skype ph-5"></i></td>
                            <td> Skype </td>
                            <td> peterclark82 </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="panel">
            <div class="panel-heading">
                <h4 class="panel-title"> <i class="fa fa-users"></i> Online Friends </h4>
            </div>
            <div class="panel-body">
                <ul class="list-inline">
                    <li>
                        <a href="javascript:void(0)" class="pull-left avatar">
                        <img src="img/av1.png" alt="" class="img-sm">
                        <i class="on bottom text-light"></i>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0)" class="pull-left avatar">
                        <img src="img/av2.png" alt="" class="img-sm">
                        <i class="on bottom text-light"></i>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0)" class="pull-left avatar">
                        <img src="img/av3.png" alt="" class="img-sm">
                        <i class="busy bottom text-light"></i>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0)" class="pull-left avatar">
                        <img src="img/av4.png" alt="" class="img-sm">
                        <i class="busy bottom text-light"></i>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0)" class="pull-left avatar">
                        <img src="img/av5.png" alt="" class="img-sm">
                        <i class="on bottom text-light"></i>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0)" class="pull-left avatar">
                        <img src="img/av6.png" alt="" class="img-sm">
                        <i class="on bottom text-light"></i>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0)" class="pull-left avatar">
                        <img src="img/av7.png" alt="" class="img-sm">
                        <i class="busy bottom text-light"></i>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0)" class="pull-left avatar">
                        <img src="img/av1.png" alt="" class="img-sm">
                        <i class="on bottom text-light"></i>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0)" class="pull-left avatar">
                        <img src="img/av2.png" alt="" class="img-sm">
                        <i class="on bottom text-light"></i>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0)" class="pull-left avatar">
                        <img src="img/av3.png" alt="" class="img-sm">
                        <i class="on bottom text-light"></i>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0)" class="pull-left avatar">
                        <img src="img/av4.png" alt="" class="img-sm">
                        <i class="busy bottom text-light"></i>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0)" class="pull-left avatar">
                        <img src="img/av5.png" alt="" class="img-sm">
                        <i class="busy bottom text-light"></i>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0)" class="pull-left avatar">
                        <img src="img/av6.png" alt="" class="img-sm">
                        <i class="on bottom text-light"></i>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0)" class="pull-left avatar">
                        <img src="img/av7.png" alt="" class="img-sm">
                        <i class="on bottom text-light"></i>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0)" class="pull-left avatar">
                        <img src="img/av4.png" alt="" class="img-sm">
                        <i class="on bottom text-light"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="panel">
            <div class="panel-heading">
                <h3 class="panel-title"><i class="fa fa-user"> </i> User Information</h3>
            </div>
            <div class="panel-body">
                <table class="table">
                    <tbody>
                        <tr>
                            <td> Position </td>
                            <td>UI Designer</td>
                        </tr>
                        <tr>
                            <td> Last Logged In </td>
                            <td>56 min </td>
                        </tr>
                        <tr>
                            <td> Status </td>
                            <td><span class="label label-sm label-info">Administrator</span></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="col-lg-9 col-md-9 col-sm-8 col-xs-12">
        <div class="panel">
            <div class="panel-body pad-no">
                <!--Default Tabs (Left Aligned)--> 
                <!--===================================================-->
                <div class="tab-base">
                    <!--Nav Tabs-->
                    <ul class="nav nav-tabs">
                        <li class="active"> <a data-toggle="tab" href="#demo-lft-tab-1"> Timeline </a> </li>
                        <li> <a data-toggle="tab" href="#demo-lft-tab-2">Invoice</a> </li>
                        <li> <a data-toggle="tab" href="#demo-lft-tab-3">Chat History</a> </li>
                    </ul>
                    <!--Tabs Content-->
                    <div class="tab-content">
                        <div id="demo-lft-tab-1" class="tab-pane fade active in">
                            <!-- Timeline --> 
                            <!--===================================================-->
                            <div class="timeline">
                                <!-- Timeline header -->
                                <div class="timeline-header">
                                    <div class="timeline-header-title bg-info">Now</div>
                                </div>
                                <div class="timeline-entry">
                                    <div class="timeline-stat">
                                        <div class="timeline-icon bg-purple"><i class="fa fa-check fa-lg"></i> </div>
                                    </div>
                                    <div class="timeline-label">
                                        <img class="img-xs img-circle" src="img/av1.png" alt="Profile picture"> <a href="#" class="btn-link text-semibold"> John Doe </a> posted a new blog.
                                        <div>
                                            <img src="img/photos/profile-pic-1.png" class="profile-img img-left" alt="">
                                            <h4>Lorem ipsum dolor sit amet, consectetur adipiscing elit..</h4>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat...</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="timeline-entry">
                                    <div class="timeline-stat">
                                        <div class="timeline-icon bg-mint"><i class="fa fa-users fa-lg"></i> </div>
                                    </div>
                                    <div class="timeline-label"> <img class="img-xs img-circle" src="img/av4.png" alt="Profile picture"> <a href="#" class="btn-link text-semibold">Shirley Anderson</a> started following. <img class="img-xs img-circle" src="img/av7.png" alt="Profile picture"> <img class="img-xs img-circle" src="img/av6.png" alt="Profile picture"></div>
                                </div>
                                <div class="timeline-entry">
                                    <div class="timeline-stat">
                                        <div class="timeline-icon bg-primary"><i class="fa fa-image fa-lg"></i> </div>
                                    </div>
                                    <div class="timeline-label">
                                        <img class="img-xs img-circle" src="img/av1.png" alt="Profile picture"> <a href="#" class="btn-link text-semibold"> Jonathan Anderson </a> Uploaded 4 images
                                        <h4>Lorem ipsum dolor sit amet, consectetur adipiscing elit..</h4>
                                        <div> <img src="img/photos/profile-pic-1.png" class="profile-img" alt=""> <img src="img/photos/profile-pic-1.png" class="profile-img" alt=""> <img src="img/photos/profile-pic-1.png" class="profile-img" alt=""> <img src="img/photos/profile-pic-1.png" class="profile-img" alt=""> </div>
                                    </div>
                                </div>
                                <div class="timeline-entry">
                                    <div class="timeline-stat">
                                        <div class="timeline-icon bg-info"><i class="fa fa-tasks fa-lg"></i> </div>
                                    </div>
                                    <div class="timeline-label"> <img class="img-xs img-circle" src="img/av4.png" alt="Profile picture"> <a href="#" class="btn-link text-semibold">Shirley Anderson</a> completed the task “Application UI Re-design” within the dead line</div>
                                </div>
                                <div class="timeline-entry">
                                    <div class="timeline-stat">
                                        <div class="timeline-icon bg-danger"><i class="fa fa-building fa-lg"></i> </div>
                                    </div>
                                    <div class="timeline-label">
                                        <h4 class="mar-no pad-btm"><a href="#" class="text-danger">Job Meeting</a></h4>
                                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt.</p>
                                    </div>
                                </div>
                                <div class="timeline-entry">
                                    <div class="timeline-stat">
                                        <div class="timeline-icon"><img src="img/av4.png" alt="Profile picture"> </div>
                                    </div>
                                    <div class="timeline-label">
                                        <p class="mar-no pad-btm"><a href="#" class="btn-link text-semibold">Lisa D.</a> commented on <a href="#">The Article</a> </p>
                                        <blockquote class="bq-sm bq-open">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt.</blockquote>
                                    </div>
                                </div>
                                <div class="timeline-entry">
                                    <div class="timeline-stat">
                                        <div class="timeline-icon bg-purple"><i class="fa fa-check fa-lg"></i> </div>
                                    </div>
                                    <div class="timeline-label"> <img class="img-xs img-circle" src="img/av3.png" alt="Profile picture"> <a href="#" class="btn-link text-semibold">Bobby Marz</a> followed you. </div>
                                </div>
                                <div class="timeline-entry">
                                    <div class="timeline-stat">
                                        <div class="timeline-icon"><img src="img/av4.png" alt="Profile picture"></div>
                                    </div>
                                    <div class="timeline-label">
                                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt.</p>
                                    </div>
                                </div>
                            </div>
                            <!--===================================================--> 
                            <!-- End Timeline --> 
                        </div>
                        <div id="demo-lft-tab-2" class="tab-pane fade">
                            <!--Hover Rows-->
                            <!--===================================================-->
                            <table class="table table-hover table-vcenter">
                                <thead>
                                    <tr>
                                        <th>Invoice</th>
                                        <th>Name</th>
                                        <th class="text-center">Value</th>
                                        <th>Delivery date</th>
                                        <th class="hidden-xs">Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Order #53451</td>
                                        <td>
                                            <span class="text-semibold">Desktop</span>
                                            <br>
                                            <small class="text-muted">Last 7 days : 4,234k</small>
                                        </td>
                                        <td class="text-center">$250</td>
                                        <td>2012/04/25</td>
                                        <td class="hidden-xs">
                                            <div class="label label-table label-info">On Process</div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Order #53451</td>
                                        <td>
                                            <span class="text-semibold">Laptop</span>
                                            <br>
                                            <small class="text-muted">Last 7 days : 3,876k</small>
                                        </td>
                                        <td class="text-center">$350</td>
                                        <td>2012/04/25</td>
                                        <td class="hidden-xs">
                                            <div class="label label-table label-danger">Cancelled</div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Order #53451</td>
                                        <td>
                                            <span class="text-semibold">Tablet</span>
                                            <br>
                                            <small class="text-muted">Last 7 days : 45,678k</small>
                                        </td>
                                        <td class="text-center">$325</td>
                                        <td>2012/04/25</td>
                                        <td class="hidden-xs">
                                            <div class="label label-table label-success">Shipped</div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Order #53451</td>
                                        <td>
                                            <span class="text-semibold">Smartphone</span>
                                            <br>
                                            <small class="text-muted">Last 7 days : 34,553k</small>
                                        </td>
                                        <td class="text-center">$250</td>
                                        <td>2012/04/25</td>
                                        <td class="hidden-xs">
                                            <div class="label label-table label-warning">Pending</div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <!--===================================================-->
                            <!--End Hover Rows-->
                        </div>
                        <div id="demo-lft-tab-3" class="tab-pane fade">
                <!--Chat widget-->
                <!--===================================================-->
                <div id="demo-chat-body" class="collapse in">
                    <div class="nano" style="height:550px">
                        <div class="nano-content pad-all">
                            <ul class="list-unstyled media-block">
                                <li class="mar-btm">
                                    <div class="media-left">
                                        <img src="img/av1.png" class="img-circle img-sm" alt="Profile Picture">
                                    </div>
                                    <div class="media-body pad-hor speech-left">
                                        <div class="speech">
                                            <a href="#" class="media-heading">John Doe</a>
                                            <p> Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. </p>
                                        </div>
                                    </div>
                                </li>
                                <li class="mar-btm">
                                    <div class="media-right">
                                        <img src="img/av4.png" class="img-circle img-sm" alt="Profile Picture">
                                    </div>
                                    <div class="media-body pad-hor speech-right">
                                        <div class="speech">
                                            <a href="#" class="media-heading">Lucy Doe</a>
                                            <p> Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. </p>
                                        </div>
                                    </div>
                                </li>
                                <li class="mar-btm">
                                    <div class="media-left">
                                        <img src="img/av1.png" class="img-circle img-sm" alt="Profile Picture">
                                    </div>
                                    <div class="media-body pad-hor speech-left">
                                        <div class="speech">
                                            <a href="#" class="media-heading">John Doe</a>
                                            <p> Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. </p>
                                        </div>
                                    </div>
                                </li>
                                <li class="mar-btm">
                                    <div class="media-right">
                                        <img src="img/av4.png" class="img-circle img-sm" alt="Profile Picture">
                                    </div>
                                    <div class="media-body pad-hor speech-right">
                                        <div class="speech">
                                            <a href="#" class="media-heading">Lucy Doe</a>
                                            <p> Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. </p>
                                        </div>
                                    </div>
                                </li>
                                <li class="mar-btm">
                                    <div class="media-right">
                                        <img src="img/av4.png" class="img-circle img-sm" alt="Profile Picture">
                                    </div>
                                    <div class="media-body pad-hor speech-right">
                                        <div class="speech">
                                            <a href="#" class="media-heading">Lucy Doe</a>
                                            <p> Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. </p>
                                        </div>
                                    </div>
                                </li>
                                <li class="mar-btm">
                                    <div class="media-left">
                                        <img src="img/av1.png" class="img-circle img-sm" alt="Profile Picture">
                                    </div>
                                    <div class="media-body pad-hor speech-left">
                                        <div class="speech">
                                            <a href="#" class="media-heading">John Doe</a>
                                            <p> Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. </p>
                                        </div>
                                    </div>
                                </li>
                                <li class="mar-btm">
                                    <div class="media-right">
                                        <img src="img/av4.png" class="img-circle img-sm" alt="Profile Picture">
                                    </div>
                                    <div class="media-body pad-hor speech-right">
                                        <div class="speech">
                                            <a href="#" class="media-heading">Lucy Doe</a>
                                            <p> Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. </p>
                                        </div>
                                    </div>
                                </li>
                                <li class="mar-btm">
                                    <div class="media-left">
                                        <img src="img/av1.png" class="img-circle img-sm" alt="Profile Picture">
                                    </div>
                                    <div class="media-body pad-hor speech-left">
                                        <div class="speech">
                                            <a href="#" class="media-heading">John Doe</a>
                                            <p> Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. </p>
                                        </div>
                                    </div>
                                </li>
                                <li class="mar-btm">
                                    <div class="media-right">
                                        <img src="img/av4.png" class="img-circle img-sm" alt="Profile Picture">
                                    </div>
                                    <div class="media-body pad-hor speech-right">
                                        <div class="speech">
                                            <a href="#" class="media-heading">Lucy Doe</a>
                                            <p> Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. </p>
                                        </div>
                                    </div>
                                </li>
                                <li class="mar-btm">
                                    <div class="media-left">
                                        <img src="img/av1.png" class="img-circle img-sm" alt="Profile Picture">
                                    </div>
                                    <div class="media-body pad-hor speech-left">
                                        <div class="speech">
                                            <a href="#" class="media-heading">John Doe</a>
                                            <p> Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. </p>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!--Widget footer-->
                    <div class="panel-footer">
                        <div class="row">
                            <div class="col-xs-10">
                                <input type="text" placeholder="Enter your text" class="form-control chat-input">
                            </div>
                            <div class="col-xs-2">
                                <button class="btn btn-primary btn-block" type="submit">Send</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!--===================================================-->
                <!--Chat widget-->

                        </div>
                    </div>
                </div>
                <!--===================================================--> 
                <!--End Default Tabs (Left Aligned)--> 
            </div>
        </div>
    </div>
</div>
    
@endsection