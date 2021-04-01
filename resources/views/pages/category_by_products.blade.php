@extends('layout')

@section('content')

{{-- <h2 class="title text-center">Feacture Drugs</h2> --}}
<h2 class="title text-center">{{$category[0]->category_name}}</h2>

<?php foreach ($product_by_category as $v_category_by_product) { ?>
						<div class="col-sm-3">
							<div class="product-image-wrapper" style="max-height: 410px">
								<div class="single-products" style="max-height: 410px">
										<div class="productinfo text-center"  style="overflow: hidden; min-height: 280px; max-height: 280px; max-width: 230px;"><p class="title text-center"><strong>{{$v_category_by_product->product_name}}</strong></p>
                                        <img src="{{URL::to($v_category_by_product->product_image)}}"  class="img-responsive" style="max-height: 200px" alt="" />
                                         <p class="title text-center"><strong>#{{$v_category_by_product->product_price}}</strong></p>
										<!--	<h2> # {{$v_category_by_product->product_price}}</h2>
											<p>{{$v_category_by_product->product_short_description}}</p>
											<a href="{{URL::to('/view_product/'.$v_category_by_product->product_id)}}" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>-->
										</div>
										<div class="product-overlay">
											<div class="overlay-content">
												<h2> # {{$v_category_by_product->product_price}}</h2>
												<p>{{$v_category_by_product->product_name}}</p>
												<p>{{substr($v_category_by_product->product_description,0,50)}}...</p>
												<a href="{{URL::to('/view_product/'.$v_category_by_product->product_id)}}" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
											</div>
										</div>
								</div>
							<!--	<div class="choose">
									<ul class="nav nav-pills nav-justified">
										<li><a href="#"><i class="fa fa-plus-square"></i>{{$v_category_by_product->product_name}}</a></li>
										<li><a href="{{URL::to('/view_product/'.$v_category_by_product->product_id)}}"><i class="fa fa-plus-square"></i>View Product</a></li>
									</ul>
								</div>-->
							</div>
						</div>
                    <?php } ?>

                    </div>


				 <div class="row">
                     
                     <div class="col-12 text-center">
                         {{ $product_by_category->links() }}
                     </div>
                 </div>
                                   
                </div>


@endsection
