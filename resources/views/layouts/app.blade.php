<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="wf-opensans-n4-active wf-opensans-i4-active wf-opensans-n6-active wf-active">
    <head>
			<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	    <title>LearnHt | @yield('title')</title>
	
			<!--[if lt IE 9]>
				<script type="text/javascript" src="./wels/html5.js"></script>
			<![endif]-->
	
			<link rel="stylesheet" id="woocommerce-layout-css" href="{{ asset('wel/woocommerce-layout.css')}}" type="text/css" media="all">
			<link rel="stylesheet" id="woocommerce-smallscreen-css" href="{{ asset('wel/woocommerce-smallscreen.css')}}" type="text/css" media="only screen and (max-width: 768px)">
			<link rel="stylesheet" id="woocommerce-general-css" href="{{ asset('wel/woocommerce.css')}}" type="text/css" media="all">
			<link rel="stylesheet" id="general-css" href="{{ asset('wel/style.css')}}" type="text/css" media="all">
			<link rel="stylesheet" id="woocommerce-general-css" href="{{ asset('css/font-awesome.min.css')}}" type="text/css" media="all">
			<script src="{{ asset('wel/all.js.téléchargement')}}" async="" crossorigin="anonymous"></script>
			<script id="facebook-jssdk" src="{{ asset('wel/all.js(1).téléchargement')}}"></script>
			<script id="twitter-wjs" src="{{ asset('wel/widgets.js.téléchargement')}}"></script>
			<script src="{{ asset('wel/webfont.js.téléchargement')}}" type="text/javascript" async=""></script>
			<script type="text/javascript" src="{{ asset('wel/jquery.js.téléchargement')}}"></script>
			<script type="text/javascript" src="{{ asset('wel/jquery-migrate.min.js.téléchargement')}}"></script>
			<script type="text/javascript" src="{{ asset('wel/jquery.hoverIntent.min.js.téléchargement')}}"></script>
			<script type="text/javascript" src="{{ asset('wel/jquery.placeholder.min.js.téléchargement')}}"></script>
			<script type="text/javascript" src="{{ asset('wel/jquery.jplayer.min.js.téléchargement')}}"></script>
            <script type="text/javascript" src="{{ asset('wel/jquery.themexSlider.js.téléchargement')}}"></script>
            
            <script type="text/javascript">
            /* <![CDATA[ */
            var options = {"templateDirectory":"https:\/\/demo.themex.co\/academy\/wp-content\/themes\/academy\/"};
            /* ]]> */
            </script>
            <script type="text/javascript" src="{{ asset('wel/jquery.raty.min.js.téléchargement')}}"></script>
            <script type="text/javascript">
            /* <![CDATA[ */
            var options = {"templateDirectory":"https:\/\/demo.themex.co\/academy\/wp-content\/themes\/academy\/"};
            /* ]]> */
            </script>

<style type="text/css">
.form-style-10{
    width:92%;
    padding:30px;
    margin:40px auto;
    background: #FFF;
    border-radius: 10px;
    -webkit-border-radius:10px;
    -moz-border-radius: 10px;
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.13);
    -moz-box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.13);
    -webkit-box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.13);
}
.form-style-10 .inner-wrap{
    padding: 30px;
    background: #F8F8F8;
    border-radius: 6px;
    margin-bottom: 15px;
}
.form-style-10 label{
    display: block;
    font: 13px Arial, Helvetica, sans-serif;
    color: #888;
    margin-bottom: 15px;
}
.form-style-10 input[type="text"],
.form-style-10 input[type="date"],
.form-style-10 input[type="datetime"],
.form-style-10 input[type="email"],
.form-style-10 input[type="number"],
.form-style-10 input[type="search"],
.form-style-10 input[type="time"],
.form-style-10 input[type="url"],
.form-style-10 input[type="password"],
.form-style-10 textarea,
.form-style-10 select {
    display: block;
    box-sizing: border-box;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    width: 100%;
    padding: 8px;
    border-radius: 6px;
    -webkit-border-radius:6px;
    -moz-border-radius:6px;
    border: 2px solid #fff;
    box-shadow: inset 0px 1px 1px rgba(0, 0, 0, 0.33);
    -moz-box-shadow: inset 0px 1px 1px rgba(0, 0, 0, 0.33);
    -webkit-box-shadow: inset 0px 1px 1px rgba(0, 0, 0, 0.33);
}

.form-style-10 .section{
    font: normal 20px 'Bitter', serif;
    color: #2A88AD;
    margin-bottom: 5px;
}
.form-style-10 .section span {
    background: #2A88AD;
    padding: 5px 10px 5px 10px;
    position: absolute;
    border-radius: 50%;
    -webkit-border-radius: 50%;
    -moz-border-radius: 50%;
    border: 4px solid #fff;
    font-size: 14px;
    margin-left: -45px;
    color: #fff;
    margin-top: -3px;
}
.form-style-10 input[type="button"],
.form-style-10 input[type="submit"]{
    background: #2A88AD;
    padding: 8px 20px 8px 20px;
    border-radius: 5px;
    -webkit-border-radius: 5px;
    -moz-border-radius: 5px;
    color: #fff;
    text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.12);
    font: normal 30px 'Bitter', serif;
    -moz-box-shadow: inset 0px 2px 2px 0px rgba(255, 255, 255, 0.17);
    -webkit-box-shadow: inset 0px 2px 2px 0px rgba(255, 255, 255, 0.17);
    box-shadow: inset 0px 2px 2px 0px rgba(255, 255, 255, 0.17);
    border: 1px solid #257C9E;
    font-size: 15px;
}
.form-style-10 input[type="button"]:hover,
.form-style-10 input[type="submit"]:hover{
    background: #2A6881;
    -moz-box-shadow: inset 0px 2px 2px 0px rgba(255, 255, 255, 0.28);
    -webkit-box-shadow: inset 0px 2px 2px 0px rgba(255, 255, 255, 0.28);
    box-shadow: inset 0px 2px 2px 0px rgba(255, 255, 255, 0.28);
}
.form-style-10 .privacy-policy{
    float: right;
    width: 250px;
    font: 12px Arial, Helvetica, sans-serif;
    color: #4D4D4D;
    margin-top: 10px;
    text-align: right;
}
</style>


			<script type="text/javascript" src="{{ asset('wel/general.js.téléchargement')}}"></script>
			<link rel="shortcut icon" href="/wp-content/themes/academy/framework/assets/images/favicon.ico">
			<style type="text/css">.featured-content{}body, input, select, textarea{font-family:Open Sans, Arial, Helvetica, sans-serif;}h1,h2,h3,h4,h5,h6, .header-navigation div > ul > li > a{font-family:Crete Round, Arial, Helvetica, sans-serif;}input[type="submit"], input[type="button"], .button, .jp-play-bar, .jp-volume-bar-value, .free-course .course-price .price-text, .lessons-listing .lesson-attachments a, ul.styled-list.style-4 li:before, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt, .woocommerce #respond input#submit.alt, .woocommerce #content input.button.alt, .woocommerce-page a.button.alt, .woocommerce-page button.button.alt, .woocommerce-page input.button.alt, .woocommerce-page #respond input#submit.alt, .woocommerce-page #content input.button.alt, .woocommerce a.button.alt:hover, .woocommerce button.button.alt:hover, .woocommerce input.button.alt:hover, .woocommerce #respond input#submit.alt:hover, .woocommerce #content input.button.alt:hover, .woocommerce-page a.button.alt:hover, .woocommerce-page button.button.alt:hover, .woocommerce-page input.button.alt:hover, .woocommerce-page #respond input#submit.alt:hover, .woocommerce-page #content input.button.alt:hover{background-color:#f3715d;}.free-course .course-price .corner{border-top-color:#f3715d;border-right-color:#f3715d;}.button.secondary, .quiz-listing .question-number, .lessons-listing .lesson-title .course-status, .course-price .price-text, .course-price .corner, .course-progress span, .questions-listing .question-replies, .course-price .corner-background, .user-links a:hover, .payment-listing .expanded .toggle-title:before, .styled-list.style-5 li:before, .faq-toggle .toggle-title:before, ul.styled-list.style-1 li:before, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button, .woocommerce #respond input#submit, .woocommerce #content input.button, .woocommerce-page a.button, .woocommerce-page button.button, .woocommerce-page input.button, .woocommerce-page #respond input#submit, .woocommerce-page #content input.button, .woocommerce a.button:hover, .woocommerce button.button:hover, .woocommerce input.button:hover, .woocommerce #respond input#submit:hover, .woocommerce #content input.button:hover, .woocommerce-page a.button:hover, .woocommerce-page button.button:hover, .woocommerce-page input.button:hover, .woocommerce-page #respond input#submit:hover, .woocommerce-page #content input.button:hover{background-color:#5ea5d7;}a, a:hover, a:focus, ul.styled-list li > a:hover{color:#5ea5d7;}.button.dark, .jp-gui, .jp-controls a, .jp-video-play-icon, .header-wrap, .header-navigation ul ul, .select-menu, .search-form, .mobile-search-form, .login-button .tooltip-text, .footer-wrap, .site-footer:after, .site-header:after, .widget-title{background-color:#3d4e5b;}.jp-jplayer{border-color:#3d4e5b;}.widget-title{border-bottom-color:#3d4e5b;}::-moz-selection{background-color:#f3715d;}::selection{background-color:#f3715d;}
			</style>
			<style type="text/css">
					@font-face {
						font-family: "Crete Round";
						src: url("/wp-content/themes/academy/fonts/creteround-regular-webfont.eot");
						src: url("/wp-content/themes/academy/fonts/creteround-regular-webfont.eot?#iefix") format("embedded-opentype"),
								url("/wp-content/themes/academy/fonts/creteround-regular-webfont.woff") format("woff"),
								url("/wp-content/themes/academy/fonts/creteround-regular-webfont.ttf") format("truetype"),
								url("/wp-content/themes/academy/fonts/creteround-regular-webfont.svg#crete_roundregular") format("svg");
						font-weight: normal;
						font-style: normal;
					}
			</style>
			<script type="text/javascript">
				WebFontConfig = {google: { families: [ "Open Sans:400,400italic,600" ] } };
					(function() {
						var wf = document.createElement("script");
						wf.src = ("https:" == document.location.protocol ? "https" : "http") + "://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js";
						wf.type = "text/javascript";
						wf.async = "true";
						var s = document.getElementsByTagName("script")[0];
						s.parentNode.insertBefore(wf, s);
					})();
			</script>	
			<style type="text/css">.recentcomments a{display:inline !important;padding:0 !important;margin:0 !important;}</style>
			<link rel="stylesheet" href="{{ asset('wel/css')}}" media="all">
			<script charset="utf-8" src="{{ asset('wel/button.509719336ca39171c37a321231ccaf83.js.téléchargement')}}"></script>
			<style type="text/css">
			  .fb_hidden{position:absolute;top:-10000px;z-index:10001}.fb_reposition{overflow:hidden;position:relative}.fb_invisible{display:none}.fb_reset{background:none;border:0;border-spacing:0;color:#000;cursor:auto;direction:ltr;font-family:"lucida grande", tahoma, verdana, arial, sans-serif;font-size:11px;font-style:normal;font-variant:normal;font-weight:normal;letter-spacing:normal;line-height:1;margin:0;overflow:visible;padding:0;text-align:left;text-decoration:none;text-indent:0;text-shadow:none;text-transform:none;visibility:visible;white-space:normal;word-spacing:normal}.fb_reset>div{overflow:hidden}@keyframes fb_transform{from{opacity:0;transform:scale(.95)}to{opacity:1;transform:scale(1)}}.fb_animate{animation:fb_transform .3s forwards}
			  .fb_dialog{background:rgba(82, 82, 82, .7);position:absolute;top:-10000px;z-index:10001}.fb_dialog_advanced{border-radius:8px;padding:10px}.fb_dialog_content{background:#fff;color:#373737}.fb_dialog_close_icon{background:url(https://static.xx.fbcdn.net/rsrc.php/v3/yq/r/IE9JII6Z1Ys.png) no-repeat scroll 0 0 transparent;cursor:pointer;display:block;height:15px;position:absolute;right:18px;top:17px;width:15px}.fb_dialog_mobile .fb_dialog_close_icon{left:5px;right:auto;top:5px}.fb_dialog_padding{background-color:transparent;position:absolute;width:1px;z-index:-1}.fb_dialog_close_icon:hover{background:url(https://static.xx.fbcdn.net/rsrc.php/v3/yq/r/IE9JII6Z1Ys.png) no-repeat scroll 0 -15px transparent}.fb_dialog_close_icon:active{background:url(https://static.xx.fbcdn.net/rsrc.php/v3/yq/r/IE9JII6Z1Ys.png) no-repeat scroll 0 -30px transparent}.fb_dialog_iframe{line-height:0}.fb_dialog_content .dialog_title{background:#6d84b4;border:1px solid #365899;color:#fff;font-size:14px;font-weight:bold;margin:0}.fb_dialog_content .dialog_title>span{background:url(https://static.xx.fbcdn.net/rsrc.php/v3/yd/r/Cou7n-nqK52.gif) no-repeat 5px 50%;float:left;padding:5px 0 7px 26px}body.fb_hidden{height:100%;left:0;margin:0;overflow:visible;position:absolute;top:-10000px;transform:none;width:100%}.fb_dialog.fb_dialog_mobile.loading{background:url(https://static.xx.fbcdn.net/rsrc.php/v3/ya/r/3rhSv5V8j3o.gif) white no-repeat 50% 50%;min-height:100%;min-width:100%;overflow:hidden;position:absolute;top:0;z-index:10001}.fb_dialog.fb_dialog_mobile.loading.centered{background:none;height:auto;min-height:initial;min-width:initial;width:auto}.fb_dialog.fb_dialog_mobile.loading.centered #fb_dialog_loader_spinner{width:100%}.fb_dialog.fb_dialog_mobile.loading.centered .fb_dialog_content{background:none}.loading.centered #fb_dialog_loader_close{clear:both;color:#fff;display:block;font-size:18px;padding-top:20px}#fb-root #fb_dialog_ipad_overlay{background:rgba(0, 0, 0, .4);bottom:0;left:0;min-height:100%;position:absolute;right:0;top:0;width:100%;z-index:10000}#fb-root #fb_dialog_ipad_overlay.hidden{display:none}.fb_dialog.fb_dialog_mobile.loading iframe{visibility:hidden}.fb_dialog_mobile .fb_dialog_iframe{position:sticky;top:0}.fb_dialog_content .dialog_header{background:linear-gradient(from(#738aba), to(#2c4987));border-bottom:1px solid;border-color:#1d3c78;box-shadow:white 0 1px 1px -1px inset;color:#fff;font:bold 14px Helvetica, sans-serif;text-overflow:ellipsis;text-shadow:rgba(0, 30, 84, .296875) 0 -1px 0;vertical-align:middle;white-space:nowrap}.fb_dialog_content .dialog_header table{height:43px;width:100%}.fb_dialog_content .dialog_header td.header_left{font-size:12px;padding-left:5px;vertical-align:middle;width:60px}.fb_dialog_content .dialog_header td.header_right{font-size:12px;padding-right:5px;vertical-align:middle;width:60px}.fb_dialog_content .touchable_button{background:linear-gradient(from(#4267B2), to(#2a4887));background-clip:padding-box;border:1px solid #29487d;border-radius:3px;display:inline-block;line-height:18px;margin-top:3px;max-width:85px;padding:4px 12px;position:relative}.fb_dialog_content .dialog_header .touchable_button input{background:none;border:none;color:#fff;font:bold 12px Helvetica, sans-serif;margin:2px -12px;padding:2px 6px 3px 6px;text-shadow:rgba(0, 30, 84, .296875) 0 -1px 0}.fb_dialog_content .dialog_header .header_center{color:#fff;font-size:16px;font-weight:bold;line-height:18px;text-align:center;vertical-align:middle}.fb_dialog_content .dialog_content{background:url(https://static.xx.fbcdn.net/rsrc.php/v3/y9/r/jKEcVPZFk-2.gif) no-repeat 50% 50%;border:1px solid #4a4a4a;border-bottom:0;border-top:0;height:150px}.fb_dialog_content .dialog_footer{background:#f5f6f7;border:1px solid #4a4a4a;border-top-color:#ccc;height:40px}#fb_dialog_loader_close{float:left}.fb_dialog.fb_dialog_mobile .fb_dialog_close_button{text-shadow:rgba(0, 30, 84, .296875) 0 -1px 0}.fb_dialog.fb_dialog_mobile .fb_dialog_close_icon{visibility:hidden}#fb_dialog_loader_spinner{animation:rotateSpinner 1.2s linear infinite;background-color:transparent;background-image:url(https://static.xx.fbcdn.net/rsrc.php/v3/yD/r/t-wz8gw1xG1.png);background-position:50% 50%;background-repeat:no-repeat;height:24px;width:24px}@keyframes rotateSpinner{0%{transform:rotate(0deg)}100%{transform:rotate(360deg)}}
			  .fb_iframe_widget{display:inline-block;position:relative}.fb_iframe_widget span{display:inline-block;position:relative;text-align:justify}.fb_iframe_widget iframe{position:absolute}.fb_iframe_widget_fluid_desktop,.fb_iframe_widget_fluid_desktop span,.fb_iframe_widget_fluid_desktop iframe{max-width:100%}.fb_iframe_widget_fluid_desktop iframe{min-width:220px;position:relative}.fb_iframe_widget_lift{z-index:1}.fb_iframe_widget_fluid{display:inline}.fb_iframe_widget_fluid span{width:100%}
			</style>
		</head>
		
    <body class="blog">
    	<div class="site-wrap">
		    <div class="header-wrap">
			    <header class="site-header">
						<div class="row">
							<div class="site-logo left">
								<a href="/" rel="home">	<img src="{{ asset('wel/logo.png')}}" alt="learnHt"></a>
							</div>
							<!-- /logo -->
							<div class="header-options right clearfix">					
								<div class="login-options right">
									<div class="button-wrap left tooltip login-button">
									@guest
									<a href="#" class="button dark"><span class="fa fa-key" aria-hidden="true"></span>Sign In</a>
									@endguest
									<div class="tooltip-wrap">
										<div class="tooltip-text">
											<form method="POST" action="/login" aria-label="{{ __('Login') }}" class=" popup-form">
												@csrf
												<div class="message"></div>
												<div class="field-wrap">
													<input type="text" name="email" value="" placeholder="Email">
												</div>
												<div class="field-wrap">
													<input type="password" name="password" value="" placeholder="password">
												</div>
												<div class="button-wrap left nomargin">
													<button class="button submit-button">Sign In</button>
												</div>
												<div class="button-wrap switch-button left">
													<a href="/register#" class="button dark" title="Password Recovery">
														<span class="button-icon help"></span>
													</a>
												</div>
											</form>
										</div>
									</div>
									<div class="tooltip-wrap password-form">
										<div class="tooltip-text">
											<form action="/" class="ajax-form popup-form" method="POST">
												<div class="message"></div>
												<div class="field-wrap">
													<input type="text" name="user_email" value="Email">
												</div>
												<div class="button-wrap left nomargin">
													<a href="/reset#" class="button submit-button">Reset Password</a>
												</div>
												<input type="hidden" name="user_action" value="reset_password">
												<input type="hidden" name="nonce" class="nonce" value="55e0cac1df">
												<input type="hidden" name="action" class="action" value="themex_update_user">
											</form>
										</div>
									</div>
								</div>
							@guest
							<div class="button-wrap left">
								<a href="/register" class="button"><span class="button-icon register"></span>Register</a>
							</div>
							@else
							<div class="button-wrap left">
							  <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="button">
                  <i class="fa fa-sign-out" aria-hidden="true"></i>Logout
								</a>
								</div>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                  @csrf
                </form>
							@endguest
						</div>
						<!-- /login options -->										
						<div class="search-form right ">
							<form role="search" method="GET" action="/" >
								<input type="text" value="" name="s" class="fa fa-search">
							</form>
						</div>
						<!-- /search form -->
				</div>
				<!-- /header options -->
				<div class="mobile-search-form">
					<form role="search" method="GET" action="/">
						<input type="text" value="" name="s">
					</form>					
				</div>
				<!-- /mobile search form -->
				<nav class="header-navigation right">
					<div class="menu">
						<ul id="menu-main-menu" class="menu">
							<li id="menu-item-187" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-187">
								<a href="/">Home</a>
								<ul class="sub-menu">
									<li id="menu-item-773" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-773"><a href="/">Stretched Slider</a></li>
									<li id="menu-item-772" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-772"><a href="/?slider=boxed">Boxed Slider</a></li>
									<li id="menu-item-774" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-774"><a href="/register#">Dropdowns</a>
										<ul class="sub-menu">
											<li id="menu-item-775" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-775"><a href="/register#">Sample One</a></li>
											<li id="menu-item-776" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-776"><a href="/register#">Sample Two</a></li>
											<li id="menu-item-777" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-777"><a href="/register#">Sample Three</a></li>
										</ul>
									</li>
								</ul>
							</li>
							<li id="menu-item-238" class="menu-item menu-item-type-taxonomy menu-item-object-course_category menu-item-238"><a href="/courses">Courses</a></li>
							<li id="menu-item-2114" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2114"><a href="/plans">Plans</a></li>
							<li id="menu-item-189" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-189"><a href="/category/news">News</a></li>
							<li id="menu-item-184" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-184"><a href="/about">About</a></li>
							<li id="menu-item-603" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-603"><a href="/support">Support</a></li>
						</ul>
					</div>						
					<div class="select-menu">
						<span>Home</span>
						<select style="opacity: 0;"><option value="/">Home</option><option value="/">Stretched Slider</option><option value="/?slider=boxed">Boxed Slider</option><option value="#">Dropdowns</option><option value="#">Sample One</option><option value="#">Sample Two</option><option value="#">Sample Three</option><option value="/courses/all">Courses</option><option value="/plans">Plans</option><option value="/category/news">News</option><option value="/about">About</option><option value="/support">Support</option></select>							
					</div>
					<!--/ select menu-->
				</nav>
				<!-- /navigation -->						
			</div>			
		</header>
		<!-- /header -->
	</div>

            @yield('content')
            <div class="footer-wrap">
				<footer class="site-footer">
					<div class="row">
						<div class="copyright left">
							Academy Theme © 2019						
						</div>				
					</div>			
				</footer>				
			</div>
			<!-- /footer -->			
		</div>
		<!-- /site wrap -->
		<script type="text/javascript" src="{{ asset('wel/add-to-cart.min.js.download')}}"></script>
		<script type="text/javascript" src="{{ asset('wel/jquery.blockUI.min.js.download')}}"></script>
		<script type="text/javascript" src="{{ asset('wel/woocommerce.min.js.download')}}"></script>
		<script type="text/javascript" src="{{ asset('wel/jquery.cookie.min.js.download')}}"></script>
		<script type="text/javascript" src="{{ asset('wel/cart-fragments.min.js.download')}}"></script>
		<script type="text/javascript" src="{{ asset('wel/comment-reply.min.js.download')}}"></script>

			
		<iframe scrolling="no" frameborder="0" allowtransparency="true" src="./Academy – Learning Management Theme_files/widget_iframe.bb9f4b065c53172f0378057aff0cb3f7.html" title="Twitter settings iframe" style="display: none;"></iframe>
    </body>
</html>