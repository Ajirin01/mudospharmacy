@extends('admin_layout')
@section('admin_content')

<ul class="breadcrumb">
    <li>
        <i class="icon-home"></i>
        <a href="index.html">Order</a>
        <i class="icon-angle-right"></i>
    </li>
    <li><a href="#">Manage Order</a></li>
</ul>

<p class="alert-success">
    <?php

    $message=Session::get('message');
    if($message){
        echo $message;
        Session::put('message', null);
    }
    ?>

<div class="row-fluid sortable">
    <div class="box span12">
        <div class="box-header" data-original-title>
            <h2><i class="halflings-icon user"></i><span class="break"></span>All Order</h2>

        </div>
        <div class="box-content">
            <table class="table table-striped table-bordered bootstrap-datatable datatable">
              <thead>
                  <tr>
                      <th>Customer Name</th>
                      <th>Address</th>
                      <th>Phone</th>
                      <th>Email</th>
                      <th>Transaction ID</th>
                      <th>Order Total</th>
                      <th>Status</th>
                      <th>Actions</th>
                  </tr>
              </thead>
              @foreach ( $all_order as $v_order )
              <tbody>
                <tr>
                    <!-- <td>{{$v_order->order_id}}</td> -->
                    <td class="center">{{$v_order->name}}</td>
                    <td class="center">{{$v_order->address}}</td>
                    <td class="center">{{$v_order->phone}}</td>
                    <td class="center">{{$v_order->email}}</td>
                    <td class="center">{{$v_order->order_id}}</td>
                    <td class="center">{{$v_order->order_total}}</td>
                    {{-- <td class="center">{{$v_order->order_details}}</td> --}}
                    <td class="center">{{$v_order->status}}</td>
                   <td class="center">


                            <div style="width: 150px; border: none"  class="btn btn-success"> 
                              <!-- <form id="update-status" action="{{URL::to('/update-status')}}" method="get"> 
                                @csrf  -->
                                <ul name="status" id="status" style="list-style: none; text-align: center;  width: 30px; background: transparent;border: none"
                                  onchange=" document.getElementById('update-status').submit()" 
                                >
                                    <li class="dropdown hassubmenu">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" style="text-decoration: none; color: white; font-weight: 600"><i class="halflings-icon white check"></i>Update status<span class="fa fa-angle-down"></span></a>
                                    <ul class="dropdown-menu" role="menu">
                                      <li style="width: 155px"><a href="{{URL::to('/update-status/'.$v_order->order_details_id.'/pending')}} ">pending</a></li>
                                      <li style="width: 155px"><a href="{{URL::to('/update-status/'.$v_order->order_details_id.'/confirm')}} ">confirm</a></li>
                                      <li style="width: 155px"><a href="{{URL::to('/update-status/'.$v_order->order_details_id.'/awaiting-shipping')}} ">awaiting shipping</a></li>
                                      <li style="width: 155px"><a href="{{URL::to('/update-status/'.$v_order->order_details_id.'/shipped')}} ">shipped</a></li>
                                      <li style="width: 155px"><a href="{{URL::to('/update-status/'.$v_order->order_details_id.'/completed')}} ">complete</a></li>
                                    </li>
                                  </ul>
                                </ul>
                              <!-- </form> -->
                            </div>
                            

                        <a class="btn btn-info" href="{{URL::to('/view-order/'.$v_order->order_details_id)}}">
                            <i class="halflings-icon white edit"></i>
                        </a>
                        <a class="btn btn-danger" href="{{URL::to('/delete-order/'.$v_order->order_details_id)}}">
                            <i class="halflings-icon white trash"></i>
                        </a>
                    </td>

                </tr>

              </tbody>
              @endforeach
          </table>
        </div>
    </div><!--/span-->

</div><!--/row-->

@endsection
