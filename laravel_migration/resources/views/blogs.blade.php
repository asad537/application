@extends('layouts.app')
@section('content')
<style>
.articles-hero {
  position: relative;
  width: 100%;
  height: 380px;
  background-image: url("https://images.unsplash.com/photo-1655313719493-16ebe4906441?q=80&w=1471&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D");
  background-size: cover;
  background-position: center;
  display: flex;
  align-items: center;
}

.articles-hero .overlay {
  position: absolute;
  inset: 0;
  background: rgba(0, 0, 0, 0.6);
  z-index: 2;
}

.articles-hero .content {
  position: relative;
  max-width: 700px;
  padding-left: 80px;
  color: #fff;
  z-index: 3;
}

.articles-hero h1 {
	color:white;

  font-size: 52px;
  font-weight: 600;
  margin-bottom: 15px;
}

.articles-hero p {
  font-size: 20px;
  line-height: 1.6;
  color: white;
}

@media (max-width: 768px) {
  .articles-hero {
    height: 300px;
  }
  
  .articles-hero .content {
    padding: 0 20px;
  }
  
  .articles-hero h1 {
    font-size: 36px;
  }
  
  .articles-hero p {
    font-size: 16px;
  }
}

.articles-section {
  padding: 80px 0;
  background: #f7f8fa;
}

.articles-container {
  width: 90%;
  max-width: 1200px;
  margin: auto;
}

.articles-grid {
  display: flex;
  gap: 30px;
  justify-content: space-between;
  flex-wrap: wrap;
}

.article-card {
  flex: 1;
  min-width: 300px;
  max-width: 360px;
  background: #fff;
  border-radius: 12px;
  overflow: hidden;
  box-shadow: 0 10px 30px rgba(0, 0, 0, 0.15);
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
  font-size: 22px;
  font-weight: 600;
  margin-bottom: 12px;
  color: #000;
  display: -webkit-box;
  -webkit-line-clamp: 2;
  -webkit-box-orient: vertical;
  overflow: hidden;
  text-overflow: ellipsis;
  line-height: 1.4;
  height: 61.6px;
}

.card-content p {
  font-size: 15px;
  line-height: 1.6;
  color: #555;
  margin-bottom: 16px;
  display: -webkit-box;
  -webkit-line-clamp: 3;
  -webkit-box-orient: vertical;
  overflow: hidden;
  text-overflow: ellipsis;
  height: 72px;
}

.read-more {
  font-size: 15px;
  font-weight: 600;
  text-decoration: none;
   color: var(--primary) !important;

}

.read-more:hover {
  text-decoration: underline;
}

.pagination-wrapper {
  display: flex;
  justify-content: center;
  margin-top: 50px;
}

.pagination {
  display: flex;
  gap: 10px;
  align-items: center;
}

.pagination a, .pagination span {
  padding: 10px 15px;
  border: 1px solid #ddd;
  color: #333;
  text-decoration: none;
  border-radius: 5px;
  transition: all 0.3s ease;
}

.pagination a:hover {
  background: #8a1b61;
  color: white;
  border-color: #8a1b61;
}

.pagination .active span {
  background: #8a1b61;
  color: white;
  border-color: #8a1b61;
}

@media (max-width: 768px) {
  .articles-grid {
    flex-direction: column;
    gap: 20px;
  }
  
  .article-card {
    max-width: 100%;
  }
}
</style>

<section>
  <section class="articles-hero">
    <div class="overlay"></div>
    <div class="content">
      <h1>Blogs</h1>
      <p>
        Discover health IT news and learn more about the ongoing trends around
        you with our article hub!
      </p>
    </div>
  </section>
</section>

<section class="articles-section">
  <div class="articles-container">
    @if($data->count() > 0)
      <div class="articles-grid">
        @foreach($data as $blog)
          <div class="article-card">
            @if($blog->image)
              <img src="{{ asset('images/banners/' . $blog->image) }}" alt="{{ $blog->title }}">
            @else
              <img src="{{ asset('images/article-1.jpg') }}" alt="{{ $blog->title }}">
            @endif
            
            <div class="card-content">
              <h3>{{ $blog->title }}</h3>
              <p>{{ strip_tags($blog->description) }}</p>
              <a href="{{ url('blog/' . $blog->seokey) }}" class="read-more">Read More »</a>
            </div>
          </div>
        @endforeach
      </div>

      <!-- Pagination -->
      <div class="pagination-wrapper">
        {{ $data->links() }}
      </div>
    @else
      <div style="text-align: center; padding: 50px;">
        <h3>No blogs found</h3>
        <p>Please check back later for new articles.</p>
      </div>
    @endif
  </div>
</section>

@endsection