@extends('auth_layout')
@section('content')
<div class="limiter">
    <div class="container-login100" style="background-color:  rgba(6, 2, 14, 0)">
        <div class="wrap-login100">
            <form class="login100-form validate-form" action="{{url('/save-shipping-details')}}" method="POST">
                {{ csrf_field() }}
                <span class="login100-form-title p-b-26">
                    Shipping Details
                </span>
                <span class="login100-form-title p-b-48">
                    {{-- <i class="zmdi zmdi-account"></i> --}}
                    <i class=""><img src="{{asset('fontend/images/home/deliver.png')}}" alt="delivery"></i>
                </span>
                <div class="wrap-input100 validate-input" data-validate = "Valid email is: a@b.c">
                    <span class="btn-show-pass">
                        <i class="zmdi zmdi-email"></i>
                    </span>
                    <input class="input100" type="text" value="{{Session::get('email')}}" name="shipping_email" readonly>
                    <span class="focus-input100"></span>
                </div>
                <div class="wrap-input100 validate-input" data-validate = "Valid name is: az">
                    <span class="btn-show-pass">
                        <i class="zmdi zmdi-account"></i>
                    </span>
                    <input class="input100" type="text" name="shipping_first_name">
                    <span class="focus-input100" data-placeholder="First Name *"></span>
                </div>
                <div class="wrap-input100 validate-input" data-validate = "Valid name is: az">
                    <span class="btn-show-pass">
                        <i class="zmdi zmdi-account"></i>
                    </span>
                    <input class="input100" type="text" name="shipping_last_name">
                    <span class="focus-input100" data-placeholder="Last Name *"></span>
                </div>

                <div class="wrap-input100 validate-input" data-validate = "Valid name is: az">
                    <span class="btn-show-pass">
                        <i class="zmdi zmdi-home"></i>
                    </span>
                    <input class="input100" type="text" name="shipping_address">
                    <span class="focus-input100" data-placeholder="Address *"></span>
                </div>
                
                <div class="wrap-input100 validate-input" data-validate = "Valid phone number is: +123-703428289">
                    <span class="btn-show-pass">
                        <i class="zmdi zmdi-phone"></i>
                    </span>
                    <input class="input100" type="text" name="shipping_mobile_number">
                    <span class="focus-input100" data-placeholder="Mobile Number"></span>
                </div>

                <div class="wrap-input100 validate-input" data-validate = "Valid name is: az">
                    <span class="btn-show-pass">
                        <i class="zmdi zmdi-my-location"></i>
                    </span>
                    <input class="input100" type="text" name="shipping_city">
                    <span class="focus-input100" data-placeholder="City Name *"></span>
                </div>

                {{-- <input type="hidden" value="{{$total_price}}" name="total_price"> --}}
                <div class="container-login100-form-btn">
                    <div class="wrap-login100-form-btn">
                        <div class="login100-form-bgbtn"></div>
                        <button class="login100-form-btn">
                            Done
                        </button>
                    </div>
                </div>

                <div class=" validate-input" data-validate = "Valid name is: az">
                    <input class="input100" type="checkbox" name="pay_on_delivery" id="">
                    {{-- <input class="input100" type="text" name="shipping_city"> --}}
                    <span class="" data-placeholder="Pay On Delivery?">Pay On Delivery?</span>
                </div>
                
            </form>
        </div>
    </div>
</div>


<div id="dropDownSelect1"></div>

</section><!--/form-->
</div>
</div>
</div>
@endsection
