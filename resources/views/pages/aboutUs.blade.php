@extends('blue_layout')

@section('content')

    
    {{-- <div class="container"> --}}
        <div class="row">
            <div class="col-md-12">
                <h1 class="text text-center">About Us</h1>
                <div>
                    
                    <img style="
                    width: 300px; height:300px;
                    border-radius: 50%;
                    float: left;
                    shape-outside: circle();
                    margin-right: 70px;
                    "  
                    src="{{URL::to('fontend/images/home/mudos_big_logo.jpg')}}" alt="banner" srcset="">
                    <div style="line-height: 2; font-size: 2.3rem; margin-right: 20px">
                        <p>Mudos Pharmacy LTD was incorporated over 30 years ago and began operations in Minna. Because of our core values such as qualitative customer service and product availability, Mudos has attracted clientele from the public and private sectors</p>
                        <p>Mudos always seeks to create strategic partnerships to grow our reach to all parts of Nigeria and beyond</p>
                        <p>This online offering-mudospharmacy.com is one of such avenues to make qualitative drugs, suppliments, devices and other health products available to old and prospective customers</p>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>
</div>

@endsection
