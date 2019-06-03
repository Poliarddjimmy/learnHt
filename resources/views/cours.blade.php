@extends('./layouts.app')

@section('title','Cours')

@section('content') 

<div class="featured-content">
    <div class="substrate">
        <img src="./wel/site_bg.jpg" class="fullwidth" alt="">			
    </div>
    <div class="row">
        <div class="page-title">
			<style>
				.nomargin.l a{color:rgba(255,255,255,1);}
			</style>
			<h1 class="nomargin l">Courses
			    <a href="/ajouter-un-cours" class="right" style="display:inline-block;"><i class="fa fa-plus"></i> Ajouter</a>
			</h1>
        </div>
        <!-- /page title -->
    </div>
</div>
<!-- /featured -->
<div class="main-content" >
    <div class="main-content">
        <div class="row">
			<div class="fullwidth-section" style="margin-top:-5%;">
				<div class="courses-listing clearfix">
				
				
					@foreach($cours as $cours)
					@php $nom=str_replace(array(" "), "-", $cours->nom_cours); @endphp
					@if($cours->price > 0)
					<div class="column threecol ">
						<div class="course-preview premium-course">
							<div class="course-image">
								<a href="/courses/show/{{$nom}}"><img width="420" height="420" src="./wel/image_45-420x420.jpg" class="attachment-normal wp-post-image" alt="image_45"></a>
								<div class="course-price product-price">
									<div class="price-text"><span class="amount">${{$cours->price}}</span></div>
									<div class="corner-wrap">
										<div class="corner"></div>
										<div class="corner-background"></div>
									</div>			
								</div>
							</div>
							<div class="course-meta">
								<header class="course-header">
									<h5 class="nomargin"><a href="/courses/show/{{$nom}}/">{{$cours->nom_cours}}</a></h5>
									<a href="" class="author">{{$cours->user->last_name}} {{$cours->user->first_name}}</a>
								</header>
								<footer class="course-footer clearfix">
									<div class="course-users left">12</div>
									<div class="course-rating rating-form">
										<div data-score="4" data-readonly="true" title="" style="cursor: default; width: auto;">
											<img src="./wel/star-on.png" alt="1" title="">
											<img src="./wel/star-on.png" alt="2" title="">
											<img src="./wel/star-on.png" alt="3" title="">
											<img src="./wel/star-on.png" alt="4" title="">
											<img src="./wel/star-off.png" alt="5" title="">
											<input type="hidden" name="score" value="4" readonly="readonly">
										</div>
									</div>
								</footer>
							</div>
						</div>
					</div>
					
					@else
					<div class="column threecol ">
						<div class="course-preview free-course">
							<div class="course-image">
								<a href="https://demo.themex.co/academy/course/home-fitness-training"><img width="420" height="420" src="./wel/image_49-420x420.jpg" class="attachment-normal wp-post-image" alt="image_49"></a>
								<div class="course-price product-price">
									<div class="price-text">Free</div>
										<div class="corner-wrap">
										<div class="corner"></div>
										<div class="corner-background"></div>
									</div>			
								</div>
							</div>
							<div class="course-meta">
								<header class="course-header">
									<h5 class="nomargin"><a href="https://demo.themex.co/academy/course/home-fitness-training">Home Fitness Training</a></h5>
									<a href="https://demo.themex.co/academy/profile/marco" class="author">Mark Blackwood</a>
								</header>
								<footer class="course-footer clearfix">
									<div class="course-users left">12</div>
									<div class="course-rating rating-form">
									<div data-score="4" data-readonly="true" title="" style="cursor: default; width: auto;">
										<img src="./wel/star-on.png" alt="1" title="">
										<img src="./wel/star-on.png" alt="2" title="">
										<img src="./wel/star-on.png" alt="3" title="">
										<img src="./wel/star-on.png" alt="4" title="">
										<img src="./wel/star-off.png" alt="5" title="">
										<input type="hidden" name="score" value="4" readonly="readonly"></div>
									</div>
								</footer>
							</div>
						</div>
					</div>
					@endif
					@endforeach




				</div>
			</div>
		</div>
	</div>
 </div>
@endsection