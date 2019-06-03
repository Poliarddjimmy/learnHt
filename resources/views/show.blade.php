@extends('./layouts.app')

@section('title','Home')

@section('content') 
@foreach($module as $module)
@php $nom=str_replace(array(" "), "-", $tit); @endphp
<div class="featured-content">
    <div class="substrate">
        <img src="{{ asset('wel/site_bg.jpg') }}" class="fullwidth" alt="">			
    </div>
    <div class="row">
        <div class="page-title">
			<style>
				.nomargin.l a{color:rgba(255,255,255,1);}
			</style>
			<h1 class="nomargin l"> {{$module->titre}}
			    <a href="" class="right" style="display:inline-block;">
                    <i class="fa fa-plus"></i> Ajouter un module
                </a>
			</h1>
        </div>
        <!-- /page title -->
    </div>
</div>

<div class="main-content">
    <div class="row">
        <div class="tabs-container vertical-tabs clearfix">
            <div class="column threecol tabs">
                <ul>
                    @foreach($cours as $cours)
                    @foreach($cours->module as $modulea)
                    @if($modulea->titre == $module->titre)
                    <li class="" style="background-color:rgba(0,0,0,0.1);">
                    @else
                    <li class="" style="">
                    @endif
                        <h5 class="nomargin">
                            @php $tit=str_replace(array(" "), "-", $modulea->titre); @endphp
                            <a href="{{$tit}}">{{$modulea->titre}}</a>
                        </h5>
                    </li>
                    @endforeach
                    @endforeach
                </ul>
            </div>

            <div class="panes column ninecol last">
                <div class="pane current" id="ad41d8cd98f00b204e9800998ecf8427e-tab" style="display: block;">
                    <div class="ninecol column">
                        <p style="font-size:1.2em;" >{{$module->description}}</p>
                        {!!$module->content!!}
                        
                    </div>


                    <div class="threecol column last">
                        <img src="{{ asset('wel/image_62.jpg') }}" alt="">
                    </div>
                    <div class="clear"></div>
                </div>
            </div>


        </div>
        <p>&nbsp;</p>
    
        <div class="clear"></div>								
    </div>
</div>




@endforeach
@endsection