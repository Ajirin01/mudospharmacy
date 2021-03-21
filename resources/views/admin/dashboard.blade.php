@extends('admin_layout')
@section('admin_content')

<ul class="breadcrumb">
    <li>
        <i class="icon-home"></i>
        <a href="index.html">Home</a>
        <i class="icon-angle-right"></i>
    </li>
    <li><a href="#">Dashboard</a></li>
</ul>

<?php
$v=DB::table('tbl_admin');
$vorder=DB::table('tbl_order_details');
$vp=DB::table('tbl_products');
?>

<div class="row-fluid ">

    <a class="quick-button metro yellow span3">
        <i class="icon-group"></i>
        <p>Users</p>
    <span class="badge">{{$v->count()}}</span>
    </a>
    <!-- <a class="quick-button metro red span2">
        <i class="icon-comments-alt"></i>
        <p>Meet With Pharmacy</p>
        <span class="badge">46</span>
    </a> -->
    <a class="quick-button metro blue span3" href="/manage-order">
        <i class="icon-shopping-cart"></i>
        <p>Orders</p>
    <span class="badge">{{$vorder->count()}}</span>
    </a>
    <a class="quick-button metro green span3" href="/all-product">
        <i class="icon-barcode"></i>
        <p>Products</p>
        <span class="badge">{{$vp->count()}}</span>
    </a>
    <a href="/order_summary" class="quick-button metro pink span3">
        <i class="icon-bar-chart"></i>
        <p>Orders Summary</p>
        <span class="badge"></span>
    </a>
    <!-- <a class="quick-button metro black span2">
        <i class="icon-calendar"></i>
        <p>Calendar</p>
    </a> -->

    <div class="clearfix"></div>

</div><!--/row-->

@endsection
