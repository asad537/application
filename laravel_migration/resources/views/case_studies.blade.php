@extends('layouts.app')
@section('content')
<style>
    .hero {
    min-height: 350px;
    background:
        linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)),
        url("https://images.unsplash.com/photo-1505751172876-fa1923c5c528?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D");
    background-size: cover;
    background-position: center;
    display: flex;
    align-items: center;
    padding: 0 80px;
}

.hero-content {
    color: #fff;
    max-width: 600px;
}

.hero-content h1 {
    font-size: 48px;
    font-weight: 700;
    margin-bottom: 0px;
    color:white;
    
}

.hero-content p {
    font-size: 18px;
    line-height: 1.5;
        color:white;

    
}


.content {
    padding: 50px 20px 20px 20px;
    text-align: center;
    max-width: 900px;
    margin: auto;
background: white;
}

.content h2 {
    font-size: 21px;
    font-weight: 550;
    margin-bottom: 20px;
}
.content p{
  
  font-size: 25px;
    font-weight: 550;
    
}

.articles-section {
  padding: 20px 0 40px 0;
  color: #fff;
}

.search-section {
  padding: 20px 0 0 0;
  background: white;
}

.articles-container {
  width: 90%;
  max-width: 1200px;
  margin: auto;
}

/* Search Bar Styles */
.search-bar-wrapper {
  margin: 10px;
  margin-bottom: 30px;
  display: flex;
  justify-content: flex-end;
}

.search-bar-container {
  position: relative;
  width: 100%;
  max-width: 350px;
}

.search-input {
  width: 100%;
  padding: 12px 50px 12px 20px;
  font-size: 14px;
  border: 2px solid #002147;
  border-radius: 50px;
  outline: none;
  transition: all 0.3s ease;
  background: #fff;
  color: #333;
}

.search-input:focus {
  border-color: #002147;;
  box-shadow: 0 0 0 4px rgba(138, 27, 97, 0.1);
}

.search-input::placeholder {
  color: #999;
}

.search-btn {
  position: absolute;
  right: 6px;
  top: 50%;
  transform: translateY(-50%);
  background: #002147;
  border: none;
  border-radius: 50%;
  width: 38px;
  height: 38px;
  display: flex;
  align-items: center;
  justify-content: center;
  cursor: pointer;
  transition: all 0.3s ease;
}

.search-btn:hover {
  background: #002147;;
  transform: translateY(-50%) scale(1.05);
}

.search-btn svg {
  stroke: #fff;
}

.articles-grid {
  display: flex;
  gap: 20px;
  justify-content: flex-start;
  flex-wrap: wrap;
}

.article-card {
  flex: 0 1 calc(25% - 15px);
  min-width: 250px;
  max-width: 280px;
  background: #fff;
  border-radius: 12px;
  overflow: hidden;
  box-shadow: 0 10px 30px rgba(0, 0, 0, 0.15);
  border: 1px solid #002147;
  transition: transform 0.3s ease;
}

.article-card:hover {
  transform: translateY(-8px);
}

.article-card img {
  width: 100%;
  height: 220px;
  object-fit: cover;
}

.card-content {
  padding: 22px;
}

.card-content h3 {
  font-size: 15px;
  font-weight: 600;
  margin-bottom: 6px;
  color: #000;
  line-height: 1.4;
}

.card-content p {
  font-size: 12px;
  line-height: 1.5;
  color: #000;
  margin-bottom: 16px;
  display: -webkit-box;
  -webkit-line-clamp: 3;
  -webkit-box-orient: vertical;
  overflow: hidden;
  text-overflow: ellipsis;
  height: 54px;
}

.read-more {
  font-size: 14px;
  font-weight: 600;
  margin-right:2px;
   padding-left: 2px;
  text-decoration: none;
  color: #002147;
  background: white;
  padding: 8px 5px ;
  border-radius: 6px;
  border:1px solid #002147;
  transition: all 0.3s ease;
}

.read-more:hover {
  background: #002147;
  text-decoration: none;
  color:white;
}

.card-footer {
  display: flex !important;
  background: #FFFFFF;
  justify-content: space-between !important;
  align-items: center !important;
  margin: 16px -22px 0 -22px;
  padding: 12px 10px 0 10px;
  border-top: 1px solid #002147;
}

.card-footer .read-more {
  order: 2 !important;
}

.card-footer .date {
  font-size: 14px;
  color: #002147;
  font-weight: 500;
  order: 1 !important;
}

@media (max-width: 1200px) {
  .article-card {
    flex: 0 1 calc(33.333% - 14px);
    min-width: 250px;
  }
}

@media (max-width: 900px) {
  .article-card {
    flex: 0 1 calc(50% - 10px);
    min-width: 250px;
  }
}

@media (max-width: 768px) {
  .articles-grid {
    flex-direction: column;
    gap: 20px;
  }
  
  .article-card {
    flex: 0 1 100%;
    max-width: 100%;
    min-width: auto;
  }
}

.content p {
    font-size: 18px;
    color: #000;
    line-height: 1.7;
}


@media (max-width: 768px) {

    .hero {
        padding: 0 40px;
        min-height: 300px;
    }

    .hero-content h1 {
        font-size: 38px;
    }

    .hero-content p {
        font-size: 16px;
    }

    .content h2 {
        font-size: 30px;
    }

    .content p {
        font-size: 16px;
    }
}


@media (max-width: 576px) {

    .hero {
        padding: 0 20px;
        justify-content: center;
        text-align: center;
        min-height: 260px;
    }

    .hero-content {
        max-width: 100%;
    }

    .hero-content h1 {
        font-size: 30px;
    }

    .hero-content p {
        font-size: 15px;
    }

    .content {
        padding: 60px 15px;
    }

    .content h2 {
        font-size: 24px;
        line-height: 1.4;
    }

    .content p {
        font-size: 15px;
    }
}
</style>
<section class="hero">
    <div class="hero-content">
        <h1>Case Studies</h1>
        <p>Here’s how we turned billing challenges into success stories</p>
    </div>
</section>

<!-- Content Section -->
<section class="content">
    <h2>
        Our case studies are more than just stories;<br>
        they're blueprints for success.
    </h2>
    <p>
       Success leaves clues, and our case studies are a rich treasure trove of real-world insights and proven strategies. Join us as we explore the journeys of practices that have not only grown but truly thrived under Transcure, uncovering the decisions, challenges, and innovations that made their success possible.
    </p>
</section>

<!-- Search Bar Section -->
<section class="search-section">
  <div class="articles-container">
    <div class="search-bar-wrapper">
      <form action="{{ url('case-studies') }}" method="GET" class="search-bar-container">
        <input type="text" name="q" id="caseStudySearch" class="search-input" placeholder="Search case studies..." value="{{ request('q') }}">
        <button type="submit" class="search-btn">
          <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
            <circle cx="11" cy="11" r="8"/>
            <path d="m21 21-4.35-4.35"/>
          </svg>
        </button>
      </form>
    </div>
  </div>
</section>

<section class="articles-section">
  <div class="articles-container">
    <div class="articles-grid">
      @forelse($case_studies as $item)
      <div class="article-card">
        @if($item->image)
            <img src="{{ asset('assets/images/case-studies/' . $item->image) }}" alt="{{ $item->alt_image ?? $item->title }}">
        @else
            <img src="{{ asset('images/banners/1-01.jpg') }}" alt="{{ $item->title }}">
        @endif
        
        <div class="card-content">
          <h3>{{ $item->title }}</h3>
          <p>{!! \Illuminate\Support\Str::limit(strip_tags($item->text), 150) !!}</p>
          <div class="card-footer">
            <a href="{{ url('case-study/' . $item->seokey) }}" class="read-more">Read More »</a>
            <span class="date">{{ \Carbon\Carbon::parse($item->date)->format('M d Y') }}</span>
          </div>
        </div>
      </div>
      @empty
      <div class="col-12 text-center py-5">
        <h3 class="text-dark">No Case Studies Found</h3>
      </div>
      @endforelse
    </div>

    <!-- Pagination -->
    <div class="pagination-wrapper mt-50 d-flex justify-content-center">
        {{ $case_studies->appends(request()->query())->links() }}
    </div>
  </div>
</section>
<section class="dedicated-accounts-section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-5 mb-4 mb-lg-0">
                <div class="dedicated-accounts-image-wrap">
                    <div class="dedicated-accounts-circle"></div>
                    <img src="{{ asset('assets/images/dedicated-accounts-doctors.webp') }}" alt="Dedicated Accounts Managers" class="dedicated-accounts-img">
                </div>
            </div>
            <div class="col-lg-7">
                <h2 class="dedicated-accounts-title">
                    Dedicated Accounts Managers &amp; Expert<br>
                    <span class="text-primary-gradient">Medical Billers for Health Centers</span>
                </h2>
                <p class="dedicated-accounts-text">
                    Healthcare organizations are at the heart of our medical billing and collections team. From primary care physicians to specialty clinics,
                    our dedicated clinical coding officers and claims examiners implement a precision-driven approach so that revenue flows smoothly and claim
                    denials fade away.
                </p>

                <a href="{{ url('contact-us.php') }}" class="btn btn-outline-primary dedicated-accounts-cta">
                    Claim Free Practice Audit
                </a>
            </div>
        </div>
    </div>
</section>
@endsection
