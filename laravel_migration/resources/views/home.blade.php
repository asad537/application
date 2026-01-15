@extends('layouts.app')

@section('content')
<!-- Hero Section -->
<section class="hero-wrapper">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-7">
                <div class="hero-tag">MEDICAL BILLING SERVICES</div>
                <h1 class="hero-title">The Medical Billing Service <br>Provider for <span class="text-usa">USA</span> Healthcare</h1>
                
                <p class="hero-subtitle">BellMedEx is the USA's top medical billing firm - deploying the best practices in medical billing and coding for physicians looking to outsource billing and coding to an expert 3rd party billing agency.</p>
                <p class="hero-subtitle">Our certified medical coders and billers help healthcare organizations recover Aged Receivables and resolve insurance Claim Denials, as well.</p>
                
                <form action="{{ url('contact-us.php') }}" method="POST" class="hero-form-inline">
                    @csrf
                    <input type="text" name="name" class="form-control" placeholder="Name" required>
                    <input type="email" name="email" class="form-control" placeholder="Email" required>
                    <input type="text" name="phone" class="form-control" placeholder="Phone Number" required>
                    <button type="submit" class="submit-btn">BOOK A FREE CONSULTATION</button>
                </form>

                <div class="hero-rating-wrap">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/c/c1/Google_Logo.svg" alt="Google">
                    <div class="rating-info">
                        <span class="rating-score">Google Rating 4.8</span>
                        <div class="rating-stars">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="hero-img-box">
                    <div class="hero-purple-bg"></div>
                    <img src="{{ asset('images/hero_doctor.png') }}" alt="Doctor" class="hero-main-img">
                    <!-- Note: The text swirling around the image would ideally be a PNG overlay or SVG text-path -->
                    <div class="swirling-text">
                        <!-- Placeholder for swirling icons/text -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Stats Strip -->
<section class="stats-strip">
    <div class="container">
        <div class="row stat-row">
            <div class="col-md-4">
                <div class="stat-unit">
                    <i class="fa fa-star"></i>
                    <span>1500+ Satisfied Providers</span>
                </div>
            </div>
            <div class="col-md-4">
                <div class="stat-unit">
                    <i class="fa fa-heartbeat"></i>
                    <span>Serving More Than 75 Specialties</span>
                </div>
            </div>
            <div class="col-md-4">
                <div class="stat-unit">
                    <i class="fa fa-user-md"></i>
                    <span>1200+ Billing and Coding Experts</span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Software Partners -->
<section class="py-5 bg-white border-bottom">
    <div class="container text-center">
        <p class="mb-4 text-uppercase font-weight-bold" style="letter-spacing: 2px; color: #aaa; font-size: 13px;">Working with major software vendors</p>
        <div class="d-flex flex-wrap justify-content-center align-items-center" style="gap: 40px; filter: grayscale(1); opacity: 0.5;">
            <h4 class="mb-0">eClinicalWorks</h4>
            <h4 class="mb-0">AthenaHealth</h4>
            <h4 class="mb-0">AdvancedMD</h4>
            <h4 class="mb-0">Kareo</h4>
            <h4 class="mb-0">NextGen</h4>
            <h4 class="mb-0">DrChrono</h4>
        </div>
    </div>
</section>

<!-- Main Services Section -->
<section class="service-grid">
    <div class="container">
        <div class="text-center mb-5 pb-3">
            <h2 style="font-size: 38px;">Healthcare Professional Services</h2>
            <p class="mx-auto" style="max-width: 700px; font-size: 17px;">We provide comprehensive revenue cycle management solutions designed to streamline your practice's financial performance.</p>
        </div>
        
        <div class="row">
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card-bell">
                    <div>
                        <div class="icon-circle"><i class="fa fa-stethoscope"></i></div>
                        <h4>Medical Billing</h4>
                        <p>Our expert billers ensure your claims are submitted correctly from day one, reducing denials and accelerating cash flow.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card-bell">
                    <div>
                        <div class="icon-circle"><i class="fa fa-code"></i></div>
                        <h4>Medical Coding</h4>
                        <p>Certified coders meticulously review documentation to ensure ICD-10 and CPT compliance, maximizing your reimbursement.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card-bell">
                    <div>
                        <div class="icon-circle"><i class="fa fa-id-card"></i></div>
                        <h4>Provider Credentialing</h4>
                        <p>Simplifying the complex payer enrollment process so you can start seeing patients and getting paid faster.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Expertise Full Width Section -->
<section class="expertise-section">
    <div class="container">
        <div class="indigo-box">
            <div class="row align-items-center">
                <div class="col-lg-7">
                    <h2>Transforming Your Practice <br>Through Technical Expertise</h2>
                    <ul>
                        <li><i class="fa fa-check-circle"></i> 24/7 Live Patient Support for all 32+ specialties.</li>
                        <li><i class="fa fa-check-circle"></i> Dedicated Account Managers for personalized attention.</li>
                        <li><i class="fa fa-check-circle"></i> Real-time analytics and financial reporting dashbaords.</li>
                        <li><i class="fa fa-check-circle"></i> Seamless integration with leading EHR/EMR platforms.</li>
                    </ul>
                    <a href="{{ url('contact-us.php') }}" class="btn btn-light mt-4 px-5 py-3" style="color: var(--primary); font-weight: 700; border-radius: 5px;">GET A FREE QUOTE</a>
                </div>
                <div class="col-lg-5 d-none d-lg-block">
                    <img src="{{ asset('assets/images/doctors-icon.png') }}" alt="Expertise" class="img-fluid" style="filter: brightness(0) invert(1); opacity: 0.1;">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Trust & KPI Highlight -->
<section class="py-100 bg-white">
    <div class="container">
        <div class="row text-center align-items-center">
            <div class="col-md-4">
                <h3 class="font-weight-bold" style="font-size: 50px; color: var(--primary);">4.8/5</h3>
                <p class="text-uppercase font-weight-bold">Google Reviews</p>
            </div>
            <div class="col-md-4">
                <h3 class="font-weight-bold" style="font-size: 50px; color: var(--primary);">96%</h3>
                <p class="text-uppercase font-weight-bold">Happiness Score</p>
            </div>
            <div class="col-md-4">
                <h3 class="font-weight-bold" style="font-size: 50px; color: var(--primary);">1.2K+</h3>
                <p class="text-uppercase font-weight-bold">Billing Experts</p>
            </div>
        </div>
    </div>
</section>

<!-- Recent Blogs -->
<section class="py-100 bg-light">
    <div class="container">
        <div class="text-center mb-5">
            <h2>Latest From Our Blog</h2>
        </div>
        <div class="row">
            @foreach($recent_blogs->take(3) as $blog)
            <div class="col-md-4 mb-4">
                <div class="card h-100 shadow-sm border-0">
                    <img src="{{ asset('assets/images/'.$blog->image) }}" class="card-img-top" alt="{{ $blog->title }}" style="height: 200px; object-fit: cover;">
                    <div class="card-body">
                        <small class="text-muted">{{ date('M d, Y', strtotime($blog->date)) }}</small>
                        <h5 class="card-title mt-2">{{ $blog->title }}</h5>
                        <a href="{{ url('blog/'.$blog->seokey) }}" class="btn btn-link p-0 text-indigo font-weight-bold">Read More →</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

@endsection
