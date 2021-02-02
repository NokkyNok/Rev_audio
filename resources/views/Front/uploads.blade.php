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
                        
						<div class="table-row">
                        
							<div class="serial">{{$active_uploads->file}}</div>
							<div class="country"> <i class="fa fa-file-audio-o" aria-hidden="true"></i></div>
							<div class="visit">{{$active_uploads->cost}}</div>
							<div>
							   <a href=" {{route('cart.add',$active_uploads->id)}}" class="btn btn-success p-3" >Add to cart</a>
							<!--
                	         <form id="delete-form-{{ $active_uploads->id }}" method="post" action="{{ route('check_status.destroy',$active_uploads->id) }}" style="display: none">
                                {{ csrf_field() }}
                                {{ method_field('DELETE') }}
                              </form>
                	             <a href="" onclick="if(confirm('Are you sure, You Want to delete this?'))
                	                    {
                                     event.preventDefault();
                                       document.getElementById('delete-form-{{ $active_uploads->id }}').submit();
                                         }
                                         else{
                                          event.preventDefault();
                                        }"


                	               class="">Remove</a>
								   -->
                           </div>
						   
                      
						</div>
						
                        
						
					
						
					</div>
				</div>
			</div>

            <h2 class="">
			@include('Front.base.messages')
    
    
	
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
    <!--================ End About Area =================-->




@endsection