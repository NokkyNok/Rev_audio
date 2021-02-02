@extends ('Front.base.basefile')

@section('content')

<div class="section-top-border">
				<h3 class="mb-30 title_color">Table</h3>
				<div class="progress-table-wrap">
					<div class="progress-table">
					
						<div class="table-head">
							<div class="serial">File_name</div>
							<div class="country">Type</div>
							<div class="visit">Cost</div>
							<div class="percentage"></div>
						</div>
					
					@include('Front.base.messages')
                        @forelse ($cartitems as $cartitem)
						<div class="table-row">
                        
							<div class="serial">{{$cartitem->name}}</div>
							<div class="country"> <i class="fa fa-file-audio-o" aria-hidden="true"></i></div>
							<div class="visit">{{$cartitem->price}}</div>
							<div>
							   <a href="{{route('cart.destroy', $cartitem->id)}}" class="" >Remove</a>
							<!--
                	         
								   -->
                           </div>
						   
                      
						</div>
						@empty
                         <h3>No item in the cart</h3>
						@endforelse
                        
						
					
						
					</div>
                   <div  class="text-center"><h2>Total Cost:: $ {{\Cart::session(Auth::id())->getTotal()}}</h2></div>
				</div>
			</div>

            <h2 class="">
			<a class="btn btn-primary" href="/payment">
                  Proceed to Pay <i class="ti-arrow-right ml-1"></i>
            </a>
			<!--
       
	   -->
       
	
  </h2>
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



@endsection