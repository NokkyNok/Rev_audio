@extends('Front.base.basefile')
@section('content')

<section class="blog_area single-post-area section_gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 posts-list">


                <div class="navigation-area">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-12 nav-left flex-row d-flex justify-content-start align-items-center">
                            <div class="thumb">
                                <a href="#"><img class="img-fluid" src="img/blog/prev.jpg" alt=""></a>
                            </div>
                            <div class="arrow">
                                <a href="#"><i class="text-white ti-arrow-left"></i></a>
                            </div>
                            <div class="detials">
                                <p>All orders</p>
                                <a href="#">
                                    <h4>Select an order you need</h4>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12 nav-right flex-row d-flex justify-content-end align-items-center">
                            <div class="detials">
                                <p></p>
                                <a href="#">
                                    <h4></h4>
                                </a>
                            </div>
                            <div class="arrow">
                                <a href="#"><i class="text-white ti-arrow-right"></i></a>
                            </div>
                            <div class="thumb">
                                <a href="#"><img class="img-fluid" src="img/blog/next.jpg" alt=""></a>
                            </div>
                        </div>
                    </div>
                </div>










                <div class="comments-area">
                        <h4> Order Files</h4>
                        @foreach($details as $details)
                        <div class="comment-list">
                            <div class="single-comment justify-content-between d-flex">
                                <div class="user justify-content-between d-flex">
                                    <div class="thumb">
                                        <img src="img/blog/c1.jpg" alt="">
                                    </div>
                                    
                                    <div class="desc">
                                        <h5><a href="#">{{$details->Filename}}</a></h5>
                                        <p class="date">{{$details->created_at}}</p>
                                        <p class="comment">
                                           
                                        </p>
                                    </div>
                                    
                                </div>
                                <div class="reply-btn">
                                    <button class="btn btn-primary btn-sm">Audio</button>
                                    <audio controls>
                                     <source src="/storage/{{$details->Filename}}" type="audio/mpeg"> 
                                    </audio> 
                                </div>
                            </div>
                        </div>
                        @endforeach
                        
                        
                        </div>
                    </div>
                </div>
            </section>


@endsection