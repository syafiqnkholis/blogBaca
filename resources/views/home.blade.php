@extends('template')
@section('konten')

			<!-- start banner Area -->
			<section class="banner-area relative blog-home-banner" id="home">	
				<div class="overlay overlay-bg"></div>
				<div class="container">				
					<div class="row d-flex align-items-center justify-content-center">
						<div class="about-content blog-header-content col-lg-12">
							<h1 class="text-white">
                                Aku og!
							</h1>	
							<p class="text-white">
								Buka mata, buka pikiran, perbanyak membaca, syukuri rasa, berbahagia.
							</p>
						</div>	
					</div>
				</div>
			</section>
			<!-- End banner Area -->				  
			
			<!-- Start post-content Area -->
			<section class="post-content-area">
				<div class="container">
					<div class="row">
						<div class="col-lg-8 posts-list">
                            @foreach($article as $data)
							<div class="single-post row">
								<div class="col-lg-3  col-md-3 meta-details">
									<ul class="tags">
										<li><a href="">{{ $data->category_id }}</a></li>
									</ul>
									<div class="user-details row">
										<p class="date col-lg-12 col-md-12 col-6"><a href="#">{{ $data->updated_at }}</a> <span class="lnr lnr-calendar-full"></span></p>					
									</div>
								</div>
								<div class="col-lg-9 col-md-9 ">
									<a class="posts-title" href="/{{ $data->id }}"><h3>{{ $data->name }}</h3></a>
									<p class="excert">
										{{ Str::words($data->content,2,'....') }}
									</p>
									<a href="/{{ $data->id }}" class="primary-btn">View More</a>
								</div>
                            </div>					
                            @endforeach							
						</div>
						
			<!-- End post-content Area -->
@endsection