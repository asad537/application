@extends('layouts.app')

@section('content')
<style>
    .case-study-hero {
        min-height: 250px;
        background: linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.6)), url('{{ $data->image ? asset("assets/images/case-studies/".$data->image) : asset("images/banners/1-01.jpg") }}');
        background-size: cover;
        background-position: center;
        display: flex;
        align-items: center;
        color: #fff;
        margin-top: 80px;
    }
    .case-study-content {
        padding: 60px 0;
        line-height: 1.8;
        font-size: 16px;
    }
    .sidebar-widget {
        background: #fdfdfd;
        padding: 25px;
        border: 1px solid #eee;
        border-radius: 8px;
        margin-bottom: 30px;
    }
    .widget-title {
        font-size: 18px;
        font-weight: 700;
        color: #002147;
        margin-bottom: 20px;
        padding-bottom: 10px;
        border-bottom: 2px solid #002147;
    }
    .recent-case-study {
        margin-bottom: 15px;
        padding-bottom: 15px;
        border-bottom: 1px solid #eee;
    }
    .recent-case-study:last-child {
        border-bottom: none;
    }
    .recent-case-study a {
        color: #333;
        font-weight: 600;
        text-decoration: none;
        display: block;
        margin-bottom: 5px;
        line-height: 1.4;
    }
    .recent-case-study a:hover {
        color: #002147;
    }
    .recent-case-study span {
        font-size: 13px;
        color: #777;
    }
    .main-text img {
        max-width: 100%;
        height: auto;
        border-radius: 8px;
        margin: 20px 0;
    }
</style>

<div class="case-study-hero">
    <div class="container">
        <h1>{{ $data->title }}</h1>
        <p>By {{ $data->author }} | {{ \Carbon\Carbon::parse($data->date)->format('M d, Y') }}</p>
    </div>
</div>

<div class="case-study-content">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="main-text">
                    {!! $data->text !!}
                </div>
            </div>
            <div class="col-lg-4">
                <div class="sidebar-widget">
                    <h3 class="widget-title">Recent Case Studies</h3>
                    @foreach($recent_case_studies as $recent)
                    <div class="recent-case-study">
                        <a href="{{ url('case-study/'.$recent->seokey) }}">{{ $recent->title }}</a>
                        <span>{{ \Carbon\Carbon::parse($recent->date)->format('M d, Y') }}</span>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
