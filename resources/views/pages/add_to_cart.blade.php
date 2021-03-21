@extends('blue_layout')
@section('content')
<section id="cart_items">
    <div class="container">
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
                                value="{{$v_contents->quantity}}" autocomplete="off" size="2" id="qty">
                            <input type="hidden" name="id" value="{{$v_contents->id}}">
                            <input type="submit" name="submit" value="update" class="btn btn-sm btn-default">
                            </form>
                            </div>
                        </td>
                        <td class="cart_total">
                        <p class="cart_total_price">{{Cart::get($v_contents->id)->getPriceSum()}}</p>
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
</section> <!--/#cart_items-->

<section id="do_action">
    <div class="container">
        <div class="heading">
            <h3>What would you like to do next?</h3>
            <p>Choose if you have a discount code or reward points you want to use or would like to estimate your delivery cost.</p>
        </div>
        <div class="row">

            <div class="col-sm-8">
                <div class="total_area">
                    <ul>
                    <li>Cart Sub Total <span id="sub-total">{{Cart::getSubTotal()}}</span></li>
                    <li>Select State <select id="loc">
                        @if (Cart::getSubTotal() < 1000)
                            <option id="minna" value="200">Within Minna</option>
                        @else
                            <option id="minna" value="0">Within Minna</option>
                        @endif
                        <option id="niger" value="700">Niger state other LGA</option>
                        <option id="others" value="2500">Other locations</option>



                    </select>
                    <a style="display: none" href="#" data-toggle="modal" class="dropdown-item" data-target="#add_to_cart_price_1" id="add_to_cart_price_id_1" onclick="event.preventDefault();"></a>
                    <a style="display: none" href="#" data-toggle="modal" class="dropdown-item" data-target="#add_to_cart_price_2" id="add_to_cart_price_id_2" onclick="event.preventDefault();"></a>
                    </li>
                        <li>Shipping Cost <span id="shipping-cost">Free</span></li>
                    <li>Total <span id="total">{{Cart::getSubTotal()}}</span></li>
                    {{-- {{Cart::getContent()}} --}}
                     
                    </ul>
                        <?php
                        $customer_id=Session::get('customer_id');?>
                        <?php if($customer_id  != null){?>
                            <li style="list-style: none">
                                <a class="btn btn-default update" id="check-btn" href="{{URL::to('/checkout')}}" onclick="event.preventDefault();
                            document.getElementById('total-fee-form').submit()
                            ">Checkout
                                </a>
                            <form id="total-fee-form" action="{{URL::to('/checkout')}}" method="GET"  style="display:none">
                                 @csrf
                                <input name="total_price" type="hidden" id="total-money-to-pay">
                                
                            </form>
                            </li>
                            
                        <?php }else {?>
                            <li style="list-style: none">
                                <a id="check-btn" href="{{URL::to('/login-check')}}" class="btn btn-default check_out"
                            onclick="event.preventDefault();
                            document.getElementById('total-fee-form').submit()
                            "
                            > Checkout
                                </a>
                            <form id="total-fee-form" action="{{URL::to('/login-check')}}" method="GET" style="display:none">
                                 @csrf
                                <input name="total_price" type="hidden" id="total-money-to-pay">
                                
                            </form>
                            </li>
                             <?php }?>
                             
                </div>
            </div>
        </div>
        <div id="add_to_cart_price_1" class="modal fade delete-modal" role="dialog">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                        <div class="modal-body text-center">
                            <div ><i class="fa fa-shipping-fast text-center"></i></div>
                            <h3>Please Note: your order will be delivered to your loccation between 60 minutes to 120 minutes</h3>
                            <div class="m-t-20"> <a href="#" class="btn btn-primary" data-dismiss="modal">Continue</a>
                            </div>
                        </div>
                </div>
            </div>
        </div>
        <div id="add_to_cart_price_2" class="modal fade delete-modal" role="dialog">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                        <div class="modal-body text-center">
                            <div class="fa fa-shipping-fast text-center"></div>
                            <h3>Please Note: your order will be delivered to your loccation between 36 to 48 hours</h3>
                            <div class="m-t-20"> <a href="#" class="btn btn-primary" data-dismiss="modal">Continue</a>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
</section>
<script>
        var sub = document.getElementById('sub-total').innerText
        console.log(sub)
        // var minna_not_free = document.getElementById('minna-not-free').value
        var minna = document.getElementById('minna').value
        var niger = document.getElementById('niger').value
        var others = document.getElementById('others').value
        var sub_total = document.getElementById('sub-total')
        var total = document.getElementById('total')
        var shipping_cost = document.getElementById('shipping-cost')
        var loc = document.getElementById('loc')
        var total_money_to_pay = document.getElementById('total-money-to-pay')
        var quantity = document.getElementById('qty')
        var checkout_btn = document.getElementById('check-btn')

        // var total_fee_form = document.getElementById('total-fee-form')
        var grand_total = parseFloat(sub_total.innerHTML)+parseFloat(minna)
        if(parseFloat(grand_total) == parseFloat(200)){
                checkout_btn.style.display = 'none'
            }
        
        total.innerHTML = grand_total;
        total_money_to_pay.value = grand_total
        if(loc.value == "0"){
            shipping_cost.innerHTML = 'Free'
            document.getElementById('add_to_cart_price_id_1').click()
        }else if(loc.value == "700"){
            shipping_cost.innerHTML = '700'
            document.getElementById('add_to_cart_price_id_1').click()
        }else if(loc.value == "200"){
            shipping_cost.innerHTML = '200'
            document.getElementById('add_to_cart_price_id_1').click()
        }else if(loc.value == "2500"){
            shipping_cost.innerHTML = '2500'
            document.getElementById('add_to_cart_price_id_2').click()
        }
        

        loc.onchange = () =>{
            console.log(loc.value);
            total.innerText = sub_total
            grand_total = parseFloat(loc.value)+parseFloat(sub_total.innerHTML);
            total_money_to_pay.value = grand_total
            console.log(total_money_to_pay.value)
            if(loc.value == "0"){
                shipping_cost.innerHTML = 'Free'
                document.getElementById('add_to_cart_price_id_1').click()
            }else if(loc.value == "700"){
                shipping_cost.innerHTML = '700'
                document.getElementById('add_to_cart_price_id_1').click()
            }else if(loc.value == "200"){
                shipping_cost.innerHTML = '200'
                document.getElementById('add_to_cart_price_id_1').click()
            }else if(loc.value == "2500"){
                shipping_cost.innerHTML = '2500'
                document.getElementById('add_to_cart_price_id_2').click()
            }

            total.innerHTML = grand_total;

            if(parseFloat(grand_total) == parseFloat(200)){
                checkout_btn.style.display = 'none'
            }
        }
    </script>
@endsection
