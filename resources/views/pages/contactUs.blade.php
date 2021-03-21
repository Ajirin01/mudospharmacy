@extends('layout')

@section('content')
<section class="section gb nopadtop">
    <div class="container">
        <div class="boxed boxedp4">

            {{-- <div id="map" class="wow slideInUp"></div> --}}

            <div class="row contactv2 text-center">
                <div class="col-md-3">
                    <div class="small-box">
                        <i class="flaticon-email wow fadeIn"></i>
                        <h4>Contact us today</h4>
                        <small>Phone: +2348069153379</small>
                    </div><!-- end small-box -->
                </div><!-- end col -->

                <div class="col-md-3">
                    <div class="small-box">
                        <i class="flaticon-map-with-position-marker wow fadeIn"></i>
                        <h4>Visit Our Office</h4>
                        <small>J.S 37 Railway Qtrs, Opp General </small>
                        <small>hospital, Minna, Niger state.</small>
                        <h4>------------------------</h4>
                        <small>Beside Nice Needs Supermaket,</small>
                        <small>Opp. Tunga Central Mosque, Minna</small>
                        <small>Niger State</small>
                    </div><!-- end small-box -->
                </div><!-- end col -->

                <div class="col-md-3">
                    <div class="small-box">
                        <i class="flaticon-share wow fadeIn"></i>
                        <h4>Be Social</h4>
                        <small>Twitter: <a href="https://www.twittr.com/musdospharmacy"> @mudospharmacy</a></small> <br>
                        <small>Instagram: <a href="https://www.instagram.com/mudospharmacy"> @mudospharmacy</a></small> <br>
                        <small>FaceBook: <a href="https://www.facebook.com/Mudospharmacy-112481543864047"> Mudospharmacy</a></small> <br><br>
                    </div><!-- end small-box -->
                </div><!-- end col -->
            </div><!-- end contactv2 -->
        </div><!-- end container -->
    </div>
</section>
    <h1 class="text text-center">Contact us</h1>
    <h4 class="page-title text-center text-success">
        @if(session('msg'))
        {{session('msg')}}
        @endif
    </h4>
    <h4 class="page-title text-center text-danger">
        @if(session('error'))
        {{session('error')}}
        @endif
    </h4>
    <div class="container">
        <div class="row">
            
            <form action="{{url('/contactUs')}}" method="POST">
                @csrf
                <div class="col-md-9">
                    <div class="form-group">
                        @if ($errors->has('email'))
                        <span class="text-danger" role="alert">
                            <strong>{{ $errors->first('full_name') }}*</strong>
                        </span>
                        @else
                        <label for="full-name">full name</label>
                        @endif
                        <input class="form-control" type="text" name="full_name" id="full-name">
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="form-group">
                        @if ($errors->has('email'))
                        <span class="text-danger" role="alert">
                            <strong>{{ $errors->first('email') }}*</strong>
                        </span>
                        @else
                        <label for="email">email</label>
                        @endif
                        <input class="form-control" type="email" name="email" id="email">
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="form-group">
                        @if ($errors->has('email'))
                        <span class="text-danger" role="alert">
                            <strong>{{ $errors->first('message') }}*</strong>
                        </span>
                        @else
                        <label for="email">message</label>
                        @endif
                        <textarea class="form-control" name="message" id="message" cols="30" rows="10"></textarea>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="form-group">
                        <input class="form-control btn btn-primary" type="submit" value="Submit" name="contact">
                    </div>
                </div>
            </form>
        </div>
    </div>

@endsection
