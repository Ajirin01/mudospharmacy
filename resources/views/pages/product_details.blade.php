@extends('blue_layout')
<?php session_start(); ?>
@section('content')
<div class="col-sm-20 padding-right">

    <div class="product-details"><!--product-details-->
        <div class="col-sm-4">
            <div class="view-product">

            <img src="{{URL::to($product_by_details->product_image)}}"  style="height:300px;"   alt="" />
                <h3>ZOOM</h3>
            </div>
        </div>
        <div class="col-sm-8">
            <div class="product-information"><!--/product-information-->
                <img src="images/product-details/new.jpg" class="newarrival" alt="" />
            <h2>{{$product_by_details->product_name}}</h2>
                <p>{{$product_by_details->product_size}}</p>
                <img src="{{URL::to('fontend/images/product-details/rating.png')}}" alt="" />
                <span>
                    <span># {{$product_by_details->product_price}}</span>
                    
                    @if (session('prescription'))
                        @if (session('prescription') == 'confirmed')
                        <form action="{{url('/add-to-cart')}}" method="post" style="display: none" id="confirm-prescription">
                            @csrf
                            <label>Quantity:</label>
                            <input type="text" name="qty" value="1" />
                            <input type="hidden" name="product_id" value="{{$product_by_details->product_id}}" />
                            <button type="submit" class="btn btn-fefault cart">
                                <i class="fa fa-shopping-cart"></i>
                                Add to cart
                            </button>
                        </form>
                        <script>
                                // document.getElementById("whatsapp-pharm-notification").click();
                                document.getElementById("confirm-prescription").submit();
                        </script>
                        <?php session_destroy();?>
                        @endif
                    @endif
                    @if ($product_by_details->prescription == 'true')
                        <div class="btn btn-default add-to-cart" id="add-to-cart">
                            <strong class="text text-success">
                                <br>
                                THIS IS A PRESCRIPTION DRUG, PLEASE UPLOAD YOUR <br> DOCTOR'S PRESCRIPTION IMAGE <br> <br>
                            </strong> 
                            
                            <form action="{{url('/send-pharm-notification')}}" method="post" id="send-pharm-notification" enctype="multipart/form-data">
                                @csrf
                                <input style="width: 100%" class="form-control" type="file" name="prescription_file" required placeholder="click to upload"> <br>
                                <input style="width: 100%" class="form-control" type="email" name="email" required placeholder="please enter your email">
                                <input type="hidden" name="drug_id" value="{{$product_by_details->product_id}}">
                                <input style="width: 100%" class="btn btn-primary add-to-cart form-control" type="submit" value="Send">
                            </form>
                        </div>
                        {{-- <form action="https://api.whatsapp.com/send?phone=08069153379&text=drug_name= {{$product_by_details->product_name}} AND drug_id= {{$product_by_details->product_id}}" method="POST" id="whatsapp-pharm-notification">
                            @csrf
                        </form> --}}
                        {{-- <a href=" https://api.whatsapp.com/send?phone=08069153379&drug_name={{$product_by_details->product_name}}&drug_id={{$product_by_details->product_id}}" id="whatsapp-pharm-notification">consult pharmacist</a> --}}
                        
                        @if (session('code'))
                            @if (session('code') == 301)
                            <script>
                                    // document.getElementById("whatsapp-pharm-notification").click();
                                    alert("Your prescription has been submited, please check your email to continue");
                            </script>
                            <?php session_destroy();?>
                            @endif
                        @endif
                    @else
                    <form action="{{url('/add-to-cart')}}" method="post">
                        {{ csrf_field() }}
                        <label>Quantity:</label>
                        <input type="text" name="qty" value="1" />
                        <input type="hidden" name="product_id" value="{{$product_by_details->product_id}}" />
                        <button type="submit" class="btn btn-fefault cart">
                            <i class="fa fa-shopping-cart"></i>
                            Add to cart
                        </button>
                    </form>
                    {{-- <a href="{{URL::to('/view_product/'.$v_published_product->product_id)}}" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a> --}}
                    @endif
                
                </span>
                <p><b>Availability:</b> In Stock</p>
                <p><b>Condition:</b> New</p>
                <p><b>Brand:</b>{{$product_by_details->manufacture_name}}</p>
                <p><b>Category:</b>{{$product_by_details->category_name}}</p>
                <p><b>Size:</b>{{$product_by_details->product_size}}</p>

            </div><!--/product-information-->
        </div>
        

    </div><!--/product-details-->
    <div class="category-tab shop-details-tab"><!--category-tab-->
        <div class="col-sm-12">
            <ul class="nav nav-tabs">
                <li><a href="#details" data-toggle="tab">Details</a></li>
                <li><a href="#companyprofile" data-toggle="tab">Company Profile</a></li>
                <li><a href="#tag" data-toggle="tab">Tag</a></li>
                <li class="active"><a href="#reviews" data-toggle="tab">Reviews (5)</a></li>
            </ul>
        </div>
        <div class="tab-content">
            <div class="tab-pane fade" id="details" >
            <p> {{$product_by_details->product_long_description}}</p>
            </div>

                <div class="tab-pane fade" id="companyprofile" >
                <div class="col-sm-3">
                    <div class="product-image-wrapper">
                        <div class="single-products">
                            <div class="productinfo text-center">
                            <img src="{{URL::to($product_by_details->product_image)}}" alt="" />
                                <h2>{{$product_by_details->product_price}}</h2>
                                <p>{{$product_by_details->product_short_description}}</p>
                                <button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
            <div class="tab-pane fade" id="tag" >
                <div class="col-sm-3">
                    <div class="product-image-wrapper">
                        <div class="single-products">
                            <div class="productinfo text-center">
                                <img src="{{URL::to($product_by_details->product_image)}}" alt="" />
                                <h2>{{$product_by_details->product_price}}</h2>
                                <p>{{$product_by_details->product_short_description}}</p>
                                <button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="tab-pane fade active in" id="reviews" >
                <div class="col-sm-12">
                    <ul>
                        <li><a href=""><i class="fa fa-user"></i>Minna</a></li>
                        <li><a href=""><i class="fa fa-clock-o"></i>12:41 PM</a></li>
                        <li><a href=""><i class="fa fa-calendar-o"></i>31 DEC 2020</a></li>
                    </ul>
                    <p>{{$product_by_details->product_long_description}}.</p>
                    <p><b>Write Your Review</b></p>

                    <form action="#">
                        <span>
                            <input type="text" placeholder="Your Name"/>
                            <input type="email" placeholder="Email Address"/>
                        </span>
                        <textarea name="" ></textarea>
                        <b>Rating: </b> <img src="{{URL::to('fontend/images/product-details/rating.png')}}" alt="" />
                        <button type="button" class="btn btn-default pull-right">
                            Submit
                        </button>
                    </form>
                </div>
            </div>

        </div>
    </div><!--/category-tab-->
</div>
</div>
</div>
</div>


@endsection
