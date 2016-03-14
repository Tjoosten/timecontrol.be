@extends('welcome') 

@section('breakcrumbs')
<div class="download">
        <div class="container">
            <div class="row">
                <div class="col-md-9 animated fadeInLeft">
                    <span>Time control 1.0 Released.</span>
                    <p>This release has some great improvements and new features...</p>
                </div>
                <div class="col-md-3 btn-buy animated fadeInRight">
                    <a href="https://github.com/idevelopment/timecontrol.be/archive/master.zip" class="btn btn-primary btn-lg"><i class="fa fa-cloud-download"></i> Download Now</a>
                </div>
            </div>
        </div>
    </div>
    @endsection

@section('content')       
    <div class="container content-sm">
                <div class="headline">
                <h2>Features</h2>
            </div>
        <div class="row margin-bottom-30">
            <div class="col-md-4">
                <div class="service">
                    <i class="fa fa-clock-o service-icon"></i>
                    <div class="desc">
                        <h4>Time tracking</h4>
                        <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus etiam sem... <a href="">read more</a></p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="service">
                    <i class="fa fa-tasks service-icon"></i>
                    <div class="desc">
                        <h4>Schedule tasks</h4>
                        <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus etiam sem... <a href="">read more</a></p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="service">
                    <i class="fa fa-file service-icon"></i>
                    <div class="desc">
                        <h4>Reporting</h4>
                        <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus etiam sem... <a href="">read more</a></p>
                    </div>
                </div>
            </div>
        </div>

        <div class="row margin-bottom-30">
            <div class="col-md-4">
                <div class="service">
                    <i class="fa fa-phone service-icon"></i>
                    <div class="desc">
                        <h4>VOIP integration</h4>
                        <p>Connect your company's VOIP system to <strong>Time control</strong> to have realtime reporting <a href="">read more</a> </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="service">
                    <i class="fa fa-medkit service-icon"></i>
                    <div class="desc">
                        <h4>Sick leave</h4>
                        <p>It's easier than ever to track each employee's sick leave allowance and to keep a record of the sick days they've taken. To get started, you need to enter your employee's sick allowance on their employee profile... <a href="">read more</a></p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="service">
                    <i class="fa fa-users service-icon"></i>
                    <div class="desc">
                        <h4>User management</h4>
                        <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus etiam sem... <a href="">read more</a></p>
                    </div>
                </div>
            </div>
        </div>
</div>
@endsection