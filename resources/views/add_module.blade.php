@extends('./layouts.app')

@section('title','Ajouter-un-cours')

@section('content')
<div class="featured-content">
    <div class="substrate">
        <img src="./wel/site_bg.jpg" class="fullwidth" alt="">			
    </div>
    <div class="row">
        <div class="page-title">
			<style>
				.nomargin a{color:rgba(255,255,255,1);}
			</style>
			<h1 class="nomargin">Cours</h1>
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

                    <div class="eightcol column" >
                    <div style=" margin-top:-10%%;  background-color:rgba(255,255,255,0.00001);box-shadow:rgba(255,255,255,0.00001) 0px 0px 0px;" >
        <div class="form-style-10 prinska" style="margin: 0 auto;">
          @if(Auth::user()->email == 'poliarddjimmy@gmail.com')
           <form id="" action="/addmodule" method="post">
                {{ csrf_field() }}

                <style>
                .input-group-addon{width:100px;}
                .kk{min-width:250px;}
                </style>

                <div class="section">
                <span>1</span>
                Description, titre &amp; contenu
                </div>
                <div class="inner-wrap">
                    

                    <label>Titre
                        <input id="titre1" name="titre" value="" style="width:; border:rgba(255,255,255,0.00001) solid 1px; border-radius:0px;" class="form-control titre" type="text" placeholder="Ajouter un titre">
                    </label>

                    <label>Description
                        <input id="titre1" name="description" value="" style="width:; border:rgba(255,255,255,0.00001) solid 1px; border-radius:0px;" class="form-control titre" type="text" placeholder="Description">
                        <input id="" name="cours_id" value="{{$id}}" type="hidden" placeholder="">
                    </label>
                

                    <script src="{{ asset('summernote/dist/jquery-3.2.1.slim.min.js') }}"></script>  
                    <link href="{{ asset('summernote/dist/summernote-lite.css') }}" rel="stylesheet">
                    <script src="{{ asset('summernote/dist/summernote-lite.js') }}"></script>
        
                    <label>Contenu
                        <textarea id="summernote" name="content" value="" style="width:; resize: vertical; min-height:350px; border:rgba(255,255,255,0.00001) solid 1px;" class="form-control para1" type="text" placeholder="Votre paragraphe ici"></textarea>
                    </label>

                    <script>
                        $(document).ready(function() {
                            $('#summernote').summernote();
                            });
                        </script>

                    <button type="submit" onclick="document.getElementById('form1l').style.display='none';document.getElementById('form2').style.display='block'" name="form11" class="btn btn-success pull-right button" style="margin-right:10px;margin-top:10px;">
                        Suivant
                    </button>

                </div>

            </form>
          @else
          Vous n'avez pas d'acces dans cette zone
          @endif

          <script type="text/javascript">
            $(document).ready(function() {
              // submit form using $.ajax() method
              $('#addc').submit(function(e){
                e.preventDefault(); // Prevent Default Submission
                $.ajax({
                  url: '/ajouter/cours/',
                  type: 'POST',
                  data: $(this).serialize() // it will serialize the form data
                })
                  .done(function(data){
                  $('#addc').fadeOut('slow', function(){
                    $('#addc').fadeIn('slow').html(data);
                  });
                })
                  .fail(function(){
                  alert('Ajax Submit Failed ...');
                });
              });
            });
          </script>

        </div>
      </div>
                    </div>

                    <div class="fourcol column last">

        </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection