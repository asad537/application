@extends('layouts.app')

@section('content')
<!--banner-->
<div class="page-top clearfix">
    <!--page main heading-->
    <div class="container">
        <h1 class="entry-title">Contact Us </h1>
        <nav class="bread-crumb">
            <ul class="breadcrumb clearfix">
                <li><a href="{{ url('/') }}">Home</a><span class="divider"></span></li>
                <li class="active">Contact Us</li>
            </ul>
        </nav>
    </div>
</div>

<div class="contact-page clearfix">
    <div class="container">

        <!--contact form section-->
        <div class="blog-page-single clearfix py-5">
            <article class="page type-page hentry  clearfix">
                <div class="full-width-contents">
                    <div class="entry-content">
                        <h2>Get in Touch</h2>
                    </div>
                </div>
            </article>
        </div>

        <div class="clearfix"></div>
        <!--contact form-->
        <div class="row">
            
            <div class="col-lg-12 col-md-12 col-sm-12 ">
<p>
	&nbsp;</p>
<p>
	<strong>24/7 Live Support (Call, Email and Chat)</strong></p>
<p>
	Billing service also have a support unit for its clients to address and resolve their issues on time. It can be accessed by call back contact numbers, emails, live chats and other available sources.</p>
<p>
	&nbsp;</p>
<p>
	<strong>PHONE #&nbsp;</strong>184-773-734<strong>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;FAX #&nbsp;&nbsp;</strong>847-737-3402</p>
<p>
	<strong>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;</strong></p>
<p>
	<strong>EMAIL:&nbsp;</strong>info@amdsol.com&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <strong>ADDRESS :&nbsp;</strong>9933 Franklin Ave Suite 109 Franklin Park IL 60131</p>
<p>
	&nbsp;</p>
	
    @if(session('red_msg'))
        <div class="alert alert-danger">{{ session('red_msg') }}</div>
    @endif
    @if(session('green_msg'))
        <div class="alert alert-success">{{ session('green_msg') }}</div>
    @endif
    
    <form role="form" method="post" action="{{ url('contact-us.php') }}">
        @csrf
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="col-md-6">
            <div class="form-group">
                <p>Name</p>
                <input type="text" name="name" required class="form-control" placeholder="Your Name">
            </div>
            
            <div class="form-group">
                <p>Contact Number</p>
                <input type="text" name="phone" required class="form-control" placeholder="Contact Number">
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <p>Email address</p>
                <input type="email" name="email" required class="form-control" placeholder="Your email">
            </div>
            
            <div class="form-group">
                <p>Company</p>
                <input type="text" name="company" required class="form-control" placeholder="Company">
            </div>
        </div>
        
        <div class="col-md-6">
            <div class="form-group">
                <p>Message</p>
                <textarea name="message" placeholder="Your Message" class="form-control" style="height: 150px; "></textarea>
            </div>				    
            <div class="form-group">
                <input type="submit" name="btnSubmit" class="btn btn-primary btn-lg" value="Submit" />
            </div>				    					
        </div>
    </form>	
            </div>


        </div>

    </div>
</div>
@endsection
