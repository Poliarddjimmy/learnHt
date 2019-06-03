@extends('./layouts.app')

@section('title', $id)

@section('content') 

@foreach($cours as $cours)
@php $nom=str_replace(array(" "), "-", $cours->nom_cours); @endphp
<div class="featured-content">
    <div class="substrate">
        <img src="{{ asset('wel/site_bg.jpg') }}" class="fullwidth" alt="">			
    </div>
    <div class="row">
        <div class="page-title">
			<style>
				.nomargin.l a{color:rgba(255,255,255,1);}
			</style>
			<h1 class="nomargin l"> {{$cours->nom_cours}}
			    <a href="/ajouter-un-module/{{$cours->id}}/{{$nom}}" class="right" style="display:inline-block;">
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
                    @foreach($cours->module as $module)
                    <li class="current">
                        <h5 class="nomargin">
                            @php $tit=str_replace(array(" "), "-", $module->titre); @endphp

                            <a href="{{$nom}}/{{$tit}}">{{$module->titre}}</a>
                        </h5>
                    </li>
                    @endforeach
                </ul>
            </div>

            <div class="panes column ninecol last">
                <div class="pane current" id="ad41d8cd98f00b204e9800998ecf8427e-tab" style="display: block;">
                    <div class="ninecol column">
                        
                        
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