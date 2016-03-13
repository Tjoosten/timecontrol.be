@extends('welcome')

@section('breakcrumbs')
<div class="download">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <span>Services</span>
                    <p>Nobody is better placed to help you than the people who write the software</p>
                </div>
            </div>
        </div>
    </div>
    @endsection

@section('content')

    <div class="container content">
<div class="row content-boxes-v4 content-boxes-v4-sm margin-bottom-30">
            <div class="col-md-4 md-margin-bottom-40">
                <i class="pull-left fa fa-info-circle"></i>
                <div class="content-boxes-in-v4">
                    <h2>Training</h2>
                    <p>From Developer to User. From on-site to remote. From bespoke to generic. Contact us to discuss your needs..</p>
                    <a href="#">Learn More</a>
                </div>
            </div>
            <div class="col-md-4 md-margin-bottom-40">
                <i class="pull-left fa fa-wrench"></i>
                <div class="content-boxes-in-v4">
                    <h2>Customizations</h2>
                    <p><strong>Time control</strong> is a great foundation for starting with your business processes.
                    Contact us to discuss how it can help your business..</p>
                    <a href="#">Learn More</a>
                </div>
            </div>
            <div class="col-md-4">
                <i class="pull-left fa fa-cloud"></i>
                <div class="content-boxes-in-v4">
                    <h2>Hosting</h2>
                    <p>In case you don't have a server, we can host <strong>Time control</strong> for you in the cloud.<br /><br /></p>
                    <a href="#">Learn More</a>
                </div>
            </div>
        </div>
    </div>

    <div class="process-v1 bg-color-light">
        <div class="container content-sm">
            <div class="headline-center margin-bottom-60">
                <h2>Customization process</h2>
                <p class="">In case you need customisation work on your instance of <strong>Time control</strong> then please contact us for a quotation.<br /> The revenue we get from customisation projects enables us to continue developing the open source code that goes into <strong>Time control</strong>. </p>
            </div>
            <ul class="list-inline row process-in process-border">
                <li class="col-sm-3 sm-margin-bottom-50">
                    <div class="process-icon">
                        <i class="rounded-x dot-active"></i>
                    </div>
                    <div class="process-desc">
                        <h3>Concept</h3>
                        <p>Before we can develop a line of code, we need to understand what it is you are trying to achieve.</p>
                    </div>
                </li>
                <li class="col-sm-3 sm-margin-bottom-50">
                    <div class="process-icon">
                        <i class="rounded-x dot-active"></i>
                    </div>
                    <div class="process-desc">
                        <h3>Design</h3>
                        <p>We provide detailed specifications in non-technical business english so that you can understand them without an interpreter.</p>
                    </div>
                </li>
                <li class="col-sm-3 sm-margin-bottom-50">
                    <div class="process-icon">
                        <i class="rounded-x dot-active"></i>
                    </div>
                    <div class="process-desc">
                        <h3>Coding</h3>
                        <p>To make sure that there are no surprises, we put you at the centre of the development process.
                           Each project has milestones where we will give you a walk through and demonstrations of the work in progress.</p>
                    </div>
                </li>
                <li class="col-sm-3">
                    <div class="process-icon">
                        <i class="rounded-x dot-active"></i>
                    </div>
                    <div class="process-desc">
                        <h3>Launch</h3>
                        <p>To ensure that what we create does what it’s supposed to do, we develop and then we test rigorously before we demonstrate anything to you. It's a virtuous circle designed to ensure what you get is what you expect.</p>
                    </div>
                </li>
            </ul>
        </div><!--/end container-->
    </div>
@endsection