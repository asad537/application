@extends('layouts.app')

@section('content')
<div class="pageContent" style="margin-top: 90px;">
	<div class="breadcrumbs" style=" margin-bottom: 15px; background: #333333; padding: 10px;color: white;">
		<div class="container">
			<a href="{{ url('/') }}" style="color:#FFF">Home</a><i style="color:#FFF;padding: 5px;" class="fa fa-long-arrow-right main-color"></i><span style="color:#FFF">{{ $data->title }}</span>
		</div>
	</div>
	<div class="md-padding">
		<div class="container">
			<div class="row row-eq-height">

				<div class="col-md-8" style="margin-bottom: 20px;">
					<div class="heading style3">
						<h1 class="uppercase"><span class="main-color">{{ $data->title }}</span></h1>
					</div>
                        <img width="100%" height="250px" src="{{ asset('assets/images/'.$data->image) }}" class=" wp-post-image img-responsive" alt="{{ $data->alt_image }}" />
         
                    <!--post title-->
                    <span style="font-size: 12px; float: left; margin-top: 6px;">By: {{ $data->author }}</span>
					<span style="font-size: 12px; float: right;margin-top: 6px;">Posted On: {{ \Carbon\Carbon::parse($data->date)->format('m-d-Y') }}</span>      
                    <div class="clearfix"></div>
                        <p><strong>{{ $data->title }}</strong></p>
                    <div style="padding-bottom: 10px;">{!! $data->text !!}</div>
    		</div>
            <div class="col-md-4">
                <h3 style="background: black;color: white;padding: 15px;text-align: center;text-transform: uppercase;margin-top: 30px;">Recent Blogs</h3>
                <ul style="padding-top: 10px; list-style: none;">
                    @foreach($recent_blogs as $r)
                    <li style="margin-bottom: 15px;">
                        <a style="color: black;font-size: 17px;font-weight: 500;" href="{{ url('blog/'.$r->seokey) }}" title="{{ $r->title }}">{{ $r->title }}</a>
                        <br>
                        <span style="font-size: 12px; color: #666;">{{ \Carbon\Carbon::parse($r->date)->format('m-d-Y') }}</span>
                    </li>
                    @endforeach
                </ul>
            </div>    		
    	</div>
    </div>
</div>
@endsection
