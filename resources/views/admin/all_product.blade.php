@extends('admin_layout')
@section('admin_content')

<ul class="breadcrumb">
    <li>
        <i class="icon-home"></i>
        <a href="/">Home</a>
        <i class="icon-angle-right"></i>
    </li>
    <li><a href="#">Products</a></li>
</ul>

<p class="alert-success">
    <?php

    $messagee=Session::get('message');
    if($messagee){
        echo $messagee;
        Session::put('message', null);
    }
    ?>

<div class="row-fluid sortable">
    <div class="box span12">
        <div class="box-header" data-original-title>
            <h2><i class="halflings-icon user"></i><span class="break"></span>All Products</h2>

        </div>
        <div class="box-content">
            <table id="products-list" class="table table-striped table-bordered datatable">
              <thead>
                  <tr>
                      <th>Product ID</th>
                      <th>Product Name</th>
                      <th>Product Expiry <span style="padding: 10px; border-radius: 50px; color:white" id="expire"></span></th>
                      {{-- <th>Product Image</th> --}}
                      <th>Product Price</th>
                      {{-- <th>Category Name</th>
                      <th>Manufacture Name</th> --}}
                      <th>Status</th>
                      <th>Actions</th>
                  </tr>
              </thead>
              <tbody>
                  @php
                      $expire_counter = 0;
                  @endphp
                @foreach ($all_product_info as $v_product)
                    <tr>
                        <td>{{$v_product->product_id}}</td>
                        <td class="center">{{$v_product->product_name}}</td>
                        @if (\Carbon\Carbon::parse($v_product->expiry_date) <= \Carbon\Carbon::parse('3 months'))
                            <td class="center"><span class="btn btn-danger">expires(ed) {{\Carbon\Carbon::parse($v_product->expiry_date)->diffForHumans()}}</span></td>
                            @php
                                $expire_counter++;
                                echo '<script>
                                    document.getElementById("expire").style.backgroundColor= "red";  
                                    document.getElementById("expire").innerText = '.$expire_counter.' </script>';
                            @endphp
                        @else
                            <td class="center"><span class="btn btn-success">{{ \Carbon\Carbon::parse($v_product->expiry_date)->diffForHumans() }}</span></td>
                        @endif
                        {{-- <td class="center">{{\Carbon\Carbon::parse('3 months')}}</td> --}}
                        {{-- <td class="center"><img src="{{URL::to('/'.$v_product->product_image)}}" style="height: 80px; width:80px;"></td> --}}
                        <td class="center">{{$v_product->product_price}}</td>
                        {{-- <td class="center">{{$v_product->category_name}}</td>
                        <td class="center">{{$v_product->manufacture_name}}</td> --}}
                        <td class="center">
                            @if($v_product->publication_status==1)
                        <span class="label label-success">Active</span>
                        @else
                        <span class="label label-danger">Unactive</span>
                        @endif
                        </td>
                        <td class="center">

                            @if($v_product->publication_status==0)
                        <a class="btn btn-danger" href="{{URL::to('/unactive-product/'.$v_product->product_id)}}">
                                <i class="halflings-icon white thumbs-down"></i>
                            </a>
                                @else
                                <a class="btn btn-success" href="{{URL::to('/active-product/'.$v_product->product_id)}}">
                                <i class="halflings-icon white thumbs-up"></i>

                            </a>
                            @endif
                            <a class="btn btn-info" href="{{URL::to('/edit-product/'.$v_product->product_id)}}">
                                <i class="halflings-icon white edit"></i>
                            </a>
                            <a class="btn btn-danger" href="{{URL::to('/delete-product/'.$v_product->product_id)}}">
                                <i class="halflings-icon white trash"></i>
                            </a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div><!--/span-->

</div><!--/row-->
@endsection
