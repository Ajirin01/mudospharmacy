
@extends('auth_layout')
@section('content')
    <div class="limiter">
		<div class="container-login100" style="background-color:  rgba(6, 2, 14, 0)">
			<div class="wrap-login100">
				<form class="login100-form validate-form" action="{{url('/customer-registration')}}" method="POST">
                    {{ csrf_field() }}
					<span class="login100-form-title p-b-26">
						Signup
					</span>
					<span class="login100-form-title p-b-48">
						<i class="zmdi zmdi-account"></i>
					</span>
                    <div class="wrap-input100 validate-input" data-validate = "Valid name is: az">
                        <span class="btn-show-pass">
							<i class="zmdi zmdi-account"></i>
						</span>
						<input class="input100" type="text" name="customer_name">
						<span class="focus-input100" data-placeholder="Full Name"></span>
					</div>
					<div class="wrap-input100 validate-input" data-validate = "Valid email is: a@b.c">
                        <span class="btn-show-pass">
							<i class="zmdi zmdi-email"></i>
						</span>
						<input class="input100" type="text" name="customer_email">
						<span class="focus-input100" data-placeholder="Email Address"></span>
					</div>
                    <div class="wrap-input100 validate-input" data-validate = "Valid phone number is: +123-703428289">
                        <span class="btn-show-pass">
							<i class="zmdi zmdi-phone"></i>
						</span>
						<input class="input100" type="text" name="mobile_number">
						<span class="focus-input100" data-placeholder="Mobile Number"></span>
					</div>
					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<span class="btn-show-pass">
							<i class="zmdi zmdi-eye"></i>
						</span>
						<input class="input100" type="password" name="password">
						<span class="focus-input100" data-placeholder="Password"></span>
					</div>

                    <input type="hidden" value="{{$total_price}}" name="total_price">
					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn">
								Signup
							</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
	
	<div id="dropDownSelect1"></div>
</div>
</div>
</div>

@endsection
