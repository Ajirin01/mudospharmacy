
@extends('auth_layout')
@section('content')

    <div class="limiter">
		<div class="container-login100" style="background-color:  rgba(6, 2, 14, 0)">
			<div class="wrap-login100">
				<form class="login100-form validate-form" action="{{url('/customer_login')}}" method="POST">
                    {{ csrf_field() }}
					<span class="login100-form-title p-b-26">
						Login
					</span>
					<span class="login100-form-title p-b-48">
						<i class="zmdi zmdi-account"></i>
					</span>
					<div class="wrap-input100 validate-input" data-validate = "Valid email is: a@b.c">
                        <span class="btn-show-pass">
							<i class="zmdi zmdi-email"></i>
						</span>
						<input class="input100" type="text" name="customer_email">
						<span class="focus-input100" data-placeholder="Email Address"></span>
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
								Login
							</button>
						</div>
                    </div>
                    
                    <div class="text-center p-t-115">
						<span class="txt1">
							Don’t have an account?
						</span>

						<a class="txt2" href="{{URL::to('/register-check?total_price='.$total_price)}}">
							Sign Up
						</a>
						
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
</div>
</div>

@endsection
