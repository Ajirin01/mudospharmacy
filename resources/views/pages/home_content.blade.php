@extends('blue_layout')
@section('content')
{{-- @include('slider') --}}
<h2 class="title text-center">Features Items</h2>


 @foreach ($all_published_product as $v_published_product) 
 
						<div class="col-sm-3">
						    
							<div class="product-image-wrapper" style="max-height: 410px">
								<div class="single-products" style="max-height: 410px">
										<div class="productinfo text-center"  style="overflow: hidden; min-height: 280px; max-height: 280px; max-width: 230px;"><p class="title text-center"><strong>{{$v_published_product->product_name}}</strong></p>
                                        <img src="{{$v_published_product->product_image}}" alt="" class="img-responsive" style="max-height: 200px"/>
				                        <p class="title text-center"><strong>#{{$v_published_product->product_price}}</strong></p>
										<!--	<a href="{{URL::to('/view_product/'.$v_published_product->product_id)}}" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>-->
										</div>
										<div class="product-overlay">
											<div class="overlay-content">
												<h2>#{{$v_published_product->product_price}}</h2>
													<p>{{$v_published_product->product_name}}</p>
												<p>{{$v_published_product->manufacture_name}}</p>
												<a href="{{URL::to('/view_product/'.$v_published_product->product_id)}}" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
												
											</div>
										</div>
								</div>
								
							</div>
					
						</div>
                      @endforeach

                 </div>
                 <div class="row">
                     
                     <div class="col-12 text-center">
                         {{ $all_published_product->links() }}
                     </div>
                 </div>
                  
                </div>

					<!--/recommended_items-->



@endsection
