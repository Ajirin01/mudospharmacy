@extends('blue_layout')
    @section('content')
        <!-- ========================================== SECTION – HERO ========================================= -->
        
        <div id="hero">
          <div id="owl-main" class="owl-carousel owl-inner-nav owl-ui-sm">
            <div class="item" style="background-image: url({{('fontend/images/home/slider2.jpg')}}";>
              <div class="container-fluid">
                <div class="caption bg-color vertical-center text-left">
                  <div class="slider-header fadeInDown-1">Top Brands</div>
                  <div class="big-text fadeInDown-1"> Best Selling Drugs </div>
                  <div class="excerpt fadeInDown-2 hidden-xs"> <span>Home of wide varieties of top brands</span> </div>
                  <div class="button-holder fadeInDown-3"> <a href="{{URL::to('/all_products')}}" class="btn-lg btn btn-uppercase btn-primary shop-now-button">Shop Now</a> </div>
                </div>
                <!-- /.caption --> 
              </div>
              <!-- /.container-fluid --> 
            </div>
            <!-- /.item -->

            <div class="item" style="background-image: url({{('fontend/images/home/slider3.jpg')}}";>
              <div class="container-fluid">
                <div class="caption bg-color vertical-center text-left">
                  <div class="slider-header fadeInDown-1">Online Store</div>
                  <div class="big-text fadeInDown-1"> Mudospharmacy </div>
                  <div class="excerpt fadeInDown-2 hidden-xs"> <span>Nigeria's largest online Drugstore and medical equipments</span> </div>
                  <div class="button-holder fadeInDown-3"> <a href="{{URL::to('/all_products')}}" class="btn-lg btn btn-uppercase btn-primary shop-now-button">Shop Now</a> </div>
                </div>
                <!-- /.caption --> 
              </div>
              <!-- /.container-fluid --> 
            </div>
            <!-- /.item -->

            <div class="item" style="background-image: url({{('fontend/images/home/payment-card.jpeg')}}";>
              <div class="container-fluid">
                <div class="caption bg-color vertical-center text-left">
                  <div class="slider-header fadeInDown-1">Fast & Safe</div>
                  <div class="big-text fadeInDown-1"> Pay With Your Card </div>
                  <div class="excerpt fadeInDown-2 hidden-xs"> <span>You can securely pay for your items on our platform because we have got you covered</span> </div>
                  {{-- <div class="button-holder fadeInDown-3"> <a href="{{URL::to('/all_products')}}" class="btn-lg btn btn-uppercase btn-primary shop-now-button">Shop Now</a> </div> --}}
                </div>
                <!-- /.caption --> 
              </div>
              <!-- /.container-fluid --> 
            </div>
            <!-- /.item -->  

            <div class="item" style="background-image: url({{('fontend/images/home/slider1.jpg')}}";>
              <div class="container-fluid">
                <div class="caption bg-color vertical-center text-left">
                  <div class="slider-header fadeInDown-1">ARE YOU IN MINNA?</div>
                  <div class="big-text fadeInDown-1"> ORDER DRUGS ONLINE </div>
                  <div class="excerpt fadeInDown-2 hidden-xs"> <span>PAY FOR THE DRUGS ONLINE</span> </div>
                  <div class="excerpt fadeInDown-2 hidden-xs"> <span>GET YOUR DRUGS DELIVERED RIGHT AT YOUR DOOR STEP WITHIN 20 - 40 MINUTES AROUND THE MINNA METROPOLIS</span> </div>
                  <div class="button-holder fadeInDown-3"> <a href="{{URL::to('/all_products')}}" class="btn-lg btn btn-uppercase btn-primary shop-now-button">Shop Now</a> </div>
                </div>
                <!-- /.caption --> 
              </div>
              <!-- /.container-fluid --> 
            </div>
            <!-- /.item -->
            <div class="item" style="background-image: url({{('fontend/images/home/mask.jpg')}}";>
              <div class="container-fluid">
                <div class="caption bg-color vertical-center text-left">
                  <div class="slider-header fadeInDown-1">Want Free Face Sheild?</div>
                  <div class="big-text fadeInDown-1"> Promo Deals </div>
                  <div class="excerpt fadeInDown-2 hidden-xs"> <span>Buy drug above N1000 and get a free ALIBERT face shield</span> </div>
                  <div class="button-holder fadeInDown-3"> <a href="{{URL::to('/all_products')}}" class="btn-lg btn btn-uppercase btn-primary shop-now-button">Shop Now</a> </div>
                </div>
                <!-- /.caption --> 
              </div>
              <!-- /.container-fluid --> 
            </div>
            <!-- /.item -->
            
          </div>
          <!-- /.owl-carousel --> 
        </div>
        
        <!-- ========================================= SECTION – HERO : END ========================================= --> 
        
    
        <!-- ============================================== SCROLL TABS ============================================== -->
        <div id="product-tabs-slider" class="scroll-tabs outer-top-vs">
          <div class="more-info-tab clearfix ">
            <h3 class="new-product-title pull-left">New Products</h3>
            <!-- /.nav-tabs --> 
          </div>
          <div class="tab-content outer-top-xs">
            <div class="tab-pane in active" id="all">
              <div class="product-slider">
                <div class="owl-carousel home-owl-carousel custom-carousel owl-theme">
                  <!-- /.item -->

                  @foreach ($all_published_product as $product)
                  <div class="item item-carousel">
                    <div class="products">
                      <div class="product">
                        <div class="product-image">
                          <div class="image"> 
                          <a href="{{URL::to('/view_product/'.$product->product_id)}}">
                          <img src="{{$product->product_image}}"alt=""> 
                            <img src="{{$product->product_image}}"alt=""  class="hover-image">
                          </a> 
                       </div>
                          <!-- /.image -->
                        </div>
                        <!-- /.product-image -->
                        
                        <div class="product-info text-left">
                          <h3 class="name"><a href="{{URL::to('/view_product/'.$product->product_id)}}">{{$product->product_name}} </a></h3>
                          <div class="rating rateit-small"></div>
                          <div class="description"></div>
                          <div class="product-price"> <span class="price">#{{$product->product_price}} </span></div>
                          <!-- /.product-price --> 
                          
                        </div>
                        <!-- /.product-info -->
                        <div class="cart clearfix animate-effect">
                          <div class="action">
                            <ul class="list-unstyled">
                              <li class="add-cart-button btn-group">
                                <button data-toggle="tooltip" class="btn btn-primary icon" type="button" title="Add Cart"> <i class="fa fa-shopping-cart"></i> </button>
                                <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                              </li>
                              
                            </ul>
                          </div>
                          <!-- /.action --> 
                        </div>
                        <!-- /.cart --> 
                      </div>
                      <!-- /.product --> 
                      
                    </div>
                    <!-- /.products --> 
                  </div>
                  @endforeach
                  
                </div>
                <!-- /.home-owl-carousel --> 
              </div>
              <!-- /.product-slider --> 
            </div>
            
          </div>
          <!-- /.tab-content --> 
        </div>
        <!-- /.scroll-tabs --> 
        <!-- ============================================== SCROLL TABS : END ============================================== --> 
        <!-- ============================================== WIDE PRODUCTS ============================================== -->
        <div class="wide-banners outer-bottom-xs">
          <div class="row">
            <div class="col-md-4 col-sm-4">
              <div class="wide-banner cnt-strip">
                <div class="image"> <img class="img-responsive" src="{{('fontend/images/banners/home-banner1.jpg')}}"alt=""> </div>
              </div>
              <!-- /.wide-banner --> 
            </div>
            
            <div class="col-md-4 col-sm-4">
              <div class="wide-banner cnt-strip">
                <div class="image"> <img class="img-responsive" src="{{('fontend/images/banners/home-banner3.jpg')}}"alt=""> </div>
              </div>
              <!-- /.wide-banner --> 
            </div>
            
            <!-- /.col -->
            <div class="col-md-4 col-sm-4">
              <div class="wide-banner cnt-strip">
                <div class="image"> <img class="img-responsive" src="{{('fontend/images/banners/home-banner2.jpg')}}"alt=""> </div>
              </div>
              <!-- /.wide-banner --> 
            </div>
            <!-- /.col --> 
          </div>
          <!-- /.row --> 
        </div>
        <!-- /.wide-banners --> 
        
        <!-- ============================================== WIDE PRODUCTS : END ============================================== --> 
        <!-- ============================================== FEATURED PRODUCTS ============================================== -->
        <section class="section featured-product">
        <div class="row">
        <div class="col-lg-3">
          <h3 class="section-title"> Older Products</h3>
          <ul class="sub-cat" style="height: 300px; background-image: url({{('fontend/images/home/mask.jpg')}}); background-size: cover; background-position: center">

            {{-- <li><a href="#">Computers</a></li>
            <li><a href="#">Air Condtion</a></li>
            <li><a href="#">Mobile Phones</a></li>
            <li><a href="#">Camera</a></li>
            <li><a href="#">Television</a></li>
            <li><a href="#">Sound & Speakers</a></li>
            <li><a href="#">Games & Audio Music</a></li>
            <li><a href="#">Digital Watches</a></li>
            <li><a href="#">Washing Machines</a></li>
            <li><a href="#">Office Electronics</a></li> --}}
          </ul>
          </div>
          <div class="col-lg-9">
          <div class="owl-carousel homepage-owl-carousel custom-carousel owl-theme outer-top-xs">
            @foreach ($older_products as $older)
            <div class="item item-carousel">
              <div class="products">
                <div class="product">
                  <div class="product-image">
                    <div class="image"> 
                          <a href="{{URL::to('/view_product/'.$older->product_id)}}">
                             <img src="{{$older->product_image}}"alt=""> 
                              <img src="{{$older->product_image}}"alt="" class="hover-image">
                          </a>
                          
                          </div>
                    <!-- /.image -->
                  </div>
                  <!-- /.product-image -->
                  
                  <div class="product-info text-left">
                    <h3 class="name"><a href="{{URL::to('/view_product/'.$older->product_id)}}">{{$older->product_name}}</a></h3>
                    <div class="rating rateit-small"></div>
                    <div class="description"></div>
                    <div class="product-price"> <span class="price">#{{$older->product_price}}</span></div>
                    <!-- /.product-price --> 
                    
                  </div>
                  <!-- /.product-info -->
                  <div class="cart clearfix animate-effect">
                    <div class="action">
                      <ul class="list-unstyled">
                        <li class="add-cart-button btn-group">
                          <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i class="fa fa-shopping-cart"></i> </button>
                          <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                        </li>
                      </ul>
                    </div>
                    <!-- /.action --> 
                  </div>
                  <!-- /.cart --> 
                </div>
                <!-- /.product --> 
                
              </div>
              <!-- /.products --> 
            </div>
            @endforeach
            
            <!-- /.item -->
          </div>
          </div>
          </div>
          <!-- /.home-owl-carousel --> 
        </section>
        <!-- /.section --> 
        <!-- ============================================== FEATURED PRODUCTS : END ============================================== --> 
        <!-- ============================================== WIDE PRODUCTS ============================================== -->
        <div class="wide-banners outer-bottom-xs">
          <div class="row">
            <div class="col-md-8">
              <div class="wide-banner1 cnt-strip">
                <div class="image"> <img class="img-responsive" src="{{('fontend/images/banners/mudos_banner1.jpg')}}"alt=""> </div>
                {{-- <div class="strip strip-text">
                  <div class="strip-inner">
                    <h2 class="text-right">Amazing Sunglasses<br>
                      <span class="shopping-needs">Get 40% off on selected items</span></h2>
                  </div>
                </div> --}}
                <!-- /.new-label --> 
              </div>
              <!-- /.wide-banner --> 
            </div>
            <!-- /.col --> 
            <div class="col-md-4">
              <div class="wide-banner cnt-strip">
                <div class="image"> <img style="height: 225px" class="img-responsive" src="{{('fontend/images/banners/mudos_banner2.jpg')}}"alt=""> </div>
                
                
                <!-- /.new-label --> 
              </div>
              <!-- /.wide-banner --> 
            </div>
            
          </div>
          <!-- /.row --> 
        </div>
        <!-- /.wide-banners --> 
        <!-- ============================================== WIDE PRODUCTS : END ============================================== --> 
        
        
        
        <!-- /.sidebar-widget --> 
        <!-- ============================================== BEST SELLER : END ============================================== --> 

        <!-- ============================================== FEATURED PRODUCTS ============================================== -->
        <section class="section new-arriavls">
          <h3 class="section-title">Featured Products</h3>
          <div class="owl-carousel home-owl-carousel custom-carousel owl-theme outer-top-xs">
            @foreach ($random_products as $featured)
            <div class="item item-carousel">
              <div class="products">
                <div class="product">
                  <div class="product-image">
                    <div class="image"> 
                          <a href="{{URL::to('/view_product/'.$featured->product_id)}}">
                             <img src="{{$featured->product_image}}"alt=""> 
                            <img src="{{$featured->product_image}}"alt=""  class="hover-image">
                          </a>
                          
                          </div>
                  </div>
                  <!-- /.product-image -->
                  
                  <div class="product-info text-left">
                    <h3 class="name"><a href="{{URL::to('/view_product/'.$featured->product_id)}}">{{$featured->product_name}}</a></h3>
                    <div class="rating rateit-small"></div>
                    <div class="description"></div>
                    <div class="product-price"> <span class="price"> #{{$featured->product_price}} </span></div>
                    <!-- /.product-price --> 
                    
                  </div>
                  <!-- /.product-info -->
                  <div class="cart clearfix animate-effect">
                    <div class="action">
                      <ul class="list-unstyled">
                        <li class="add-cart-button btn-group">
                          <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i class="fa fa-shopping-cart"></i> </button>
                          <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                        </li>
                      </ul>
                    </div>
                    <!-- /.action --> 
                  </div>
                  <!-- /.cart --> 
                </div>
                <!-- /.product --> 
                
              </div>
              <!-- /.products --> 
            </div>
            @endforeach
            
            <!-- /.item -->
          </div>
          <!-- /.home-owl-carousel --> 
        </section>
        <!-- /.section --> 
        <!-- ============================================== FEATURED PRODUCTS : END ============================================== --> 
        
      </div>
      <!-- /.homebanner-holder --> 
      <!-- ============================================== CONTENT : END ============================================== --> 
    </div>
    <!-- /.row --> 
    <!-- ============================================== BRANDS CAROUSEL : END ============================================== --> 
    </div>
    <!-- /.container --> 
    </div>
    <!-- /#top-banner-and-menu --> 
    
        
    @endsection
