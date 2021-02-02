@extends ('Front.base.basefile')

@section('content')
<section class="blog_area section_gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="blog_right_sidebar">
                    
                        <aside class="single_sidebar_widget ads_widget">
                            <a href="#"><img class="img-fluid" src="img/blog/add.jpg" alt=""></a>
                            <div class="br"></div>
                        </aside>
                        <aside class="single_sidebar_widget post_category_widget">
                            <h4 class="widget_title">Complete Your payment {{Auth()->user()->name}}</h4>
                            
                            <ul class="list cat-list">
                                <li>
                                    <a href="#" class="d-flex justify-content-between">
                                        <p>Cart Count</p>
                                        <p>{{Cart::session(Auth::id())->getContent()->count()}}</p>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="d-flex justify-content-between">
                                        <p>Cart Total</p>
                                        <p>{{\Cart::session(Auth::id())->getTotal()}}</p>
                                    </a>
                                </li>

                                
                                
                        
                               
                            </ul>
                            <div class="br"></div>
                            <form method="POST" action="{{route('orders.store')}}" enctype="multipart/form-data">
                            @csrf
                                
                                <button class="btn btn-success" type="submit">Pay with Paypal</button>
                            </form>
                        </aside>
                       
                        
                    </div>
                    <div class="content text-center">
 
                </div>
            </div>
        </div>

    </section>


@endsection