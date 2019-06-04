@extends('layouts.app')
@section('title','Accueil')
@section('content')
<div class="featured-content">
    <div class="substrate">
        <img src="{{asset('/wel/site_bg.jpg')}}')}}" class="fullwidth" alt="">			
    </div>
    <div class="row">
        <div class="page-title">
            <h1 class="nomargin">Profile</h1>
        </div>
        <!-- /page title -->				
    </div>
</div>
<!-- /featured -->
<div class="main-content">
    <div class="row">
        <div class="sevencol column">
            <div class="user-profile">
                <div class="user-image">
                    <div class="bordered-image thick-border">
                        <img src="{{ asset(Auth::user()->photo)}}" class="avatar" width="200" alt="">			
                    </div>
                    <div class="user-links">
                        <a href="http://twitter.com/" class="twitter" target="_blank" title="Twitter"></a>	
                        <a href="http://www.facebook.com/" class="facebook" target="_blank" title="Facebook"></a>		
                        <a href="http://www.tumblr.com/" class="tumblr" target="_blank" title="Tumblr"></a>		
                        <a href="http://vimeo.com/" class="vimeo" target="_blank" title="Vimeo"></a>		
                    </div>		
                </div>
                <div class="user-description">
                    <h1>{{Auth::user()->last_name}} {{Auth::user()->first_name}}</h1>
                    <div class="signature">Project Manager</div>
					<p>Cras a neque diam. Aenean dapibus accumsan velit eget imperdiet. Quisque sapien neque, fermentum ac pharetra ac, iaculis a elit. Morbi tincidunt, lectus et dignissim pharetra, elit leo lacinia purus, eu porta. Aenean adipiscing, sed lacinia sapien tincidunt.</p>
					<p>Fusce vehicula tortor quis odio interdum auctor. Ut iaculis eleifend pharetra. Nulla rutrum, magna non pulvinar tincidunt, neque dui eleifend lacus, fringilla cursus justo augue non nulla. Vivamus sem nunc, tincidunt sit cursus, porttitor pharetra.</p>
                </div>
            </div>
        </div>
        <div class="fivecol column last">
            <div class="user-courses-listing">

				<div class="course-item ">
					<div class="course-title">
						<h4 class="nomargin">
                            <a href="">Dashboard</a>
                        </h4>
					</div>
                    <div class="course-meta">
                        <div class="course-rating rating-form">
                            
                        </div>		
                    </div>
				</div>

				<div class="course-item ">
					<div class="course-title">
						<h4 class="nomargin">
							<a href="">Curriculum Vitae</a>
						</h4>
					</div>
                    <div class="course-meta">
                        <div class="course-rating rating-form">
                            
                        </div>		
                    </div>
				</div>
				<div class="course-item ">
					<div class="course-title">
						<h4 class="nomargin">
                            <a href="">Other thing</a>
                        </h4>
					</div>

                    <div class="course-meta">
                        <div class="course-rating rating-form">
                            
                        </div>		
                    </div>
				</div>
				<div class="course-item ">
					<div class="course-title">
						<h4 class="nomargin">
                            <a href="">Other thing</a>
                        </h4>
					</div>

                    <div class="course-meta">
                        <div class="course-rating rating-form">
                            
                        </div>		
                    </div>
				</div>
				<div class="course-item ">
					<div class="course-title">
						<h4 class="nomargin">
                            <a href="">Other thing</a>
                        </h4>
					</div>

                    <div class="course-meta">
                        <div class="course-rating rating-form">
                            
                        </div>		
                    </div>

				</div>
			</div>
		</div>
	</div>
</div>
<!-- /content -->
@endsection
