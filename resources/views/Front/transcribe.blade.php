@extends('Front.base.basefile')
@section('content')
<!--================ Start Home Banner Area =================-->
<section class="home_banner_area">
<div class="banner_inner">
<div class="container">
   <div class="row">

<!--Grid column-->
<div class="col-md-6 mb-4">

  <!--Title-->
  <!--
  <h2 class="">
    Default file input
  </h2>
  -->

  <!--Description
  <p>Default styling for Bootstrap File Input component</p>
  -->

  <!-- Description 
  <p>The file input is the most gnarly of the bunch and requires additional JavaScript if you’d like to hook them up
    with functional Choose file… and selected file name text.
  </p>
  -->


  <!--Section: Live preview-->
  <section class="section-preview">
  <form class="md-form my-3" action="{{route('transcription.store')}}" method= "POST" enctype="multipart/form-data">
  @csrf
  
      <div class="file-field">
        <div class="btn btn-warning btn-sm float-left ">
          <span>Choose file</span>
          <input type="file" name="file">
        </div>
      </div>
      <div>
      <input type= "submit" class="btn btn-danger" value="Upload File">
      </div>
    </form>

  </section>
  <!--Section: Live preview-->

</div>
<!--Grid column-->

<!--Grid column-->
<div class="col-md-6 mb-md-0 mb-4">

  <!--Title-->
  <h2 class="">
    Have a file ready?
    <a href="" target="_blank" class="btn btn-danger btn-sm waves-effect waves-light" role="button">Procced to Checkout
      <i class="far fa-gem ml-1"></i>
    </a>
  </h2>

  <!--Description-->
  

  <!--Section: Live preview-->
  <section class="section-preview">

    

  </section>
  <!--Section: Live preview-->

</div>
<!--Grid column-->

</div>
          </div>
        </div>
      </div>
    </section>
@endsection