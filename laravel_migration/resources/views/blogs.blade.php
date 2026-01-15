@extends('layouts.app')

@section('content')
<div class="pageContent" style="margin-top: 90px;">
	<div class="breadcrumbs" style=" margin-bottom: 15px; background: #333333; padding: 10px;">
		<div class="container">
			<a href="{{ url('/') }}" style="color:#FFF">Home</a><i style="color:#FFF;padding: 5px;" class="fa fa-long-arrow-right main-color"></i><span style="color:#FFF">Blogs</span>
		</div>
	</div>
	<div class="md-padding">
		<div class="container">
			<div class="row row-eq-height">
				<div class="col-md-12">
					<div class="heading style3">
						<h1 class="uppercase"><span class="main-color">Our Blogs</span></h1>
					</div>
                @foreach($data as $d)
					<a href="{{ url('blog/'.$d->seokey) }}" title="{{ $d->title }}">
                        <img width="100%" height="250px" src="{{ asset('assets/images/'.$d->image) }}" class=" wp-post-image img-responsive" alt="{{ $d->alt_image }}" />
                    </a>           
                    <!--post title-->
                    <span style="font-size: 12px; float: left; margin-top: 6px;">By: {{ $d->author }}</span>
					<span style="font-size: 12px; float: right;margin-top: 6px;">Posted On: {{ \Carbon\Carbon::parse($d->date)->format('m-d-Y') }}</span>      
                    <div class="clearfix"></div>
                    <a style="font-size: 17px;color: #333333;font-weight: 900;" href="{{ url('blog/'.$d->seokey) }}">{{ $d->title }}</a>
                    <p style="padding-bottom: 10px;">{{ Str::limit(strip_tags($d->text), 200) }} <a class="read-more" href="{{ url('blog/'.$d->seokey) }}">Read More</a></p>
                @endforeach
                
                    <!--pagination-->
                    <div class='pagination'>
            			{{ $data->links() }}
            		</div>				
			    </div>
		    </div>
	    </div>
    </div>
</div>
@endsection
