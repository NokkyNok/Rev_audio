@extends ('Front.base.basefile')

@section('content')
<!--================ Start Course Details Area =================-->
<section class="course_details_area section_gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 course_details_left">
                    <div class="content_wrapper">
                       

                        <h4 class="title">Cart Content</h4>
                        <div class="content">
                            <ul class="course_list">
                            @foreach($cartitems as $cartitem)
                                <li class="justify-content-between d-flex">
                                    <p class="text-truncate">{{$cartitem->name}}</p>
                                   
                                    <i class="fa fa-trash" aria-hidden="true"></i><a href="{{route('cart.destroy', $cartitem->id)}}" class="" >Remove</a>
                                </li>
                              @endforeach
                               

                            </ul>
                        </div>
                    </div>
                </div>


                <div class="col-lg-4 right-contents mt-3">
                    <ul>
                    
                        <li>
                            <a class="justify-content-between d-flex" href="#">
                                <p> Name</p>
                                <span class="or">{{Auth::user()->name}}</span>
                            </a>
                        </li>
                        <li>
                            <a class="justify-content-between d-flex" href="#">
                                <p>Transaction Fee </p>
                                <span>0.00</span>
                            </a>
                        </li>
                        <li>
                            <a class="justify-content-between d-flex" href="#">
                                <p>Available Files </p>
                                <span>{{\Cart::session(auth()->id())->getContent()->count()}}</span>
                            </a>
                        </li>
                        <li>
                            <a class="justify-content-between d-flex" href="#">
                                <p>Totals </p>
                                <span>{{\Cart::session(auth()->id())->getTotal()}}</span>
                            </a>
                        </li>
                    </ul>
                    <a href="{{route('payment.index')}}" class="primary-btn2 text-uppercase enroll rounded-0 text-white">Proceed to Checkout</a>
                    <a href="{{route('transcription.index')}}" class="primary-btn2 mt-3 text-uppercase enroll rounded-0 text-white">Add File</a>
              </div>
            </div>
          </section>




<div class="section-top-border">

<section class="about_area section_gap">
      <div class="container">
        <div class="row h_blog_item">
          <div class="col-lg-6">
            <div class="h_blog_img">
              <img class="img-fluid" src="img/about.png" alt="" />
            </div>
          </div>
          <div class="col-lg-6">
            <div class="h_blog_text">
              <div class="h_blog_text_inner left right">
                <h4>Files</h4>
                <p>
                  Upload a video or audio file of less than 50Mb of size. Add the file to the list of 
				  files you would need to be transcribed. Each file has a price which is automatically 
				  calculated from its duration. Submit the file and complete the payment. Then Wait for 
				  the success email upon complete payment.
                </p>
               
                <a class="primary-btn" href="/uploads/check_status">
                  Replace the file <i class="ti-arrow-right ml-1"></i>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
      </div>
      </div>
    </section>



@endsection