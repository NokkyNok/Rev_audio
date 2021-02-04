@extends ('Front.base.basefile')

@section('content')

<section class="feature_area section_gap">
      <div class="container">
        <div class="row">
          <div class="col-lg-3 col-md-4">
            <div class="single_feature">
              <div class="desc">
                <h4 class="mt-3 mb-2"> Media FileName</h4>
                <p>
                  {{$active_uploads->file}}
                </p>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="single_feature">
              <div class="desc">
                <h4 class="mt-3 mb-2">File duration in Minute</h4>
                <p>Hi, you are about to upload a file of length
                {{$active_uploads->duration}} Minutes
                </p>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="single_feature">
              <div class="desc">
                <h4 class="mt-3 mb-2">Cost</h4>
                <bold>
                ${{$active_uploads->cost}}
                </bold>
              </div>
            </div>
          </div>
          <div class="col-lg-3 right-contents mt-3">
                    <ul>
                    
                        
                        <li>
                            <a class="justify-content-between d-flex" href="#">
                                <p>Transaction Fee </p>
                                <span>0.00</span>
                            </a>
                        </li>
                        <li>
                            <a class="justify-content-between d-flex" href="#">
                                <p>Available Files </p>
                                <span>1</span>
                            </a>
                        </li>
                        <li>
                            <a class="justify-content-between d-flex" href="#">
                                <p>Totals </p>
                                <span>${{$active_uploads->cost}}</span>
                            </a>
                        </li>
                    </ul>
                    <a href="{{route('cart.adddirect',$active_uploads->id)}}" class="btn btn-warning p-2  enroll rounded-0 text-dark">Proceed to Checkout</a>
                    <a href="{{route('cart.add',$active_uploads->id)}}" class="primary-btn2 mt-3 text-uppercase enroll rounded-0 text-white">Add to cart</a>
              </div>
        </div>
      </div>
    </section>
    <!--================ End Feature Area =================-->


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
                <h4>How it Works</h4>
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
    </section>
    <!--================ End About Area =================-->




@endsection