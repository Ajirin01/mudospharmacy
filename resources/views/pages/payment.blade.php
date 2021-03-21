@extends('layout')

@section('content')
<section id="cart_items">
<div class="container col-sm-12">
    <div class="breadcrumbs">
        <ol class="breadcrumb">
          <li><a href="#">Home</a></li>
          <li class="active">Shopping Cart</li>
        </ol>
    </div>
    <div class="table-responsive cart_info">

        <?php
                $contents=Cart::getContent();


        ?>
        <table class="table table-condensed">
            <thead>
                <tr class="cart_menu">

                    <td class="image">Image</td>
                    <td class="description">Name</td>
                    <td class="price">Price</td>
                    <td class="quantity">Quantity</td>
                    <td class="total">Total</td>
                    <td> Action</td>
                 </tr>
                 </thead>
                 <tbody>

                 @foreach($contents as $v_contents)
                  <tr>
                  <td class="cart_product">
                   <a href=""><img src="{{URL::to($v_contents->associatedModel->product_image)}}" style="height:90px; width:90px;" alt=""></a>
                    </td>
                    <td class="cart_description">
                    <h4><a href="">{{$v_contents->name}}</a></h4>

                    </td>
                    <td class="cart_price">
                        <span>
                       <h4> <p>{{$v_contents->price}}</p></h4>
                        </span>
                    </td>
                    <td class="cart_quantity">
                        <div class="cart_quantity_button">
                        <form action="{{url('/update-cart')}}" method="post">
                            {{csrf_field()}}
                            <input class="cart_quantity_input" type="text" name="qty"
                            value="{{$v_contents->quantity}}" autocomplete="off" size="2">
                        <input type="hidden" name="id" value="{{$v_contents->id}}">
                        <input type="submit" name="submit" value="update" class="btn btn-sm btn-default">
                        </form>
                        </div>
                    </td>
                    <td class="cart_total">
                    <p class="cart_total_price">{{Session::get('total_price')}}</p>
                    </td>
                    <td class="cart_delete">
                    <a class="cart_quantity_delete" href="{{URL::to('/delete-to-cart/'.$v_contents->id)}}"><i class="fa fa-times"></i></a>
                    </td>
                </tr>
                  @endforeach

            </tbody>
        </table>
    </div>
</div>
</section>
<section id ="do_action">
 	 <div class="container">
 	 	 
 	 	 <div   class="paymentCont col-sm-8">
 	 	 	 	 	 <div   class="headingWrap">
 	 	 	 	 	 	 	 <h3 class ="headingTop text-center">Select Your Payment Method</h3>
 	 	 	 	 	 	 	 <p class="text-center">  </p>
                          </div>
                          <div>
                            <form action="{{url('/order-place')}}" method="post">
                                {{csrf_field()}}
                                
                                <input  type="radio" name="payment_method" value="paypal">Debit Card<br/>
                                <input type="radio" name="payment_method" value="transfer">Mobile Transfer <br/>
                               
                                <input type="submit" name="" value="Done" class="btn btn-success">
                        </form>
 	 	 	 	                 </div>
                                </div>
      

 	 </div>



 </section>

@endsection
