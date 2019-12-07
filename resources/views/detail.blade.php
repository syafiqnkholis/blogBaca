@extends('template')
@section('konten')

@foreach($article as $data)
			<!-- start banner Area -->
			<section class="relative about-banner">	
				<div class="overlay overlay-bg"></div>
				<div class="container">				
					<div class="row d-flex align-items-center justify-content-center">
						<div class="about-content col-lg-12">
							<h1 class="text-white">
								Banyak nulis, Baca banyak				
							</h1>	
							<p class="text-white link-nav"><a href="/">Home </a>  <span class="lnr lnr-arrow-right"></span> <a> Halaman ini </a></p>
						</div>	
					</div>
				</div>
			</section>
			<!-- End banner Area -->					  
			
			<!-- Start post-content Area -->
			<section class="post-content-area single-post-area">
				<div class="container">
					<div class="row">
						<div class="col-lg-8 posts-list">
							<div class="single-post row">
								<div class="col-lg-12">
									
								</div>
								<div class="col-lg-3  col-md-3 meta-details">
									<ul class="tags">
										<li><a href="#">{{ $data->category_id }}</a></li>
									</ul>
									<div class="user-details row">
                                    <p class="date col-lg-12 col-md-12 col-6"><a href="#">{{ $data->updated_at }}</a> <span class="lnr lnr-calendar-full"></span></p>																				
									</div>
								</div>
								<div class="col-lg-9 col-md-9">
									<h3 class="mt-20 mb-20">{{ $data->name }}</h3>
									<p class="excert">
										{{ $data->content }}
									</p>
								</div>
							</div>
						</div>
            <!-- End post-content Area -->
            @endforeach
@endsection