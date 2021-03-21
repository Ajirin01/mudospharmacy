@extends('admin_layout')
@section('admin_content')

<ul class="breadcrumb">
    <li>
        <i class="icon-home"></i>
        <a href="index.html">Prescriptions</a>
        <i class="icon-angle-right"></i>
    </li>
    <li><a href="#">Manage Prescriptions</a></li>
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
            <h2><i class="halflings-icon user"></i><span class="break"></span>All Prescriptions</h2>

        </div>
        <div class="box-content">
            <table class="table table-striped table-bordered bootstrap-datatable datatable">
              <thead>
                  <tr>
                      <th>Item name</th>
                      {{-- <th>Prescription Image</th> --}}
                      <th>Status</th>
                      <th>Actions</th>
                  </tr>
              </thead>
              @foreach ( $prescriptions as $v_prescription )
              <tbody>
                <tr>
                    <!-- <td>{{$v_prescription->prescription_id}}</td> -->
                    <td class="center">{{$v_prescription->product_name}}</td>
                    {{-- <td class="center">{{$v_prescription->prescription_image}}</td> --}}
                    <td class="center">{{$v_prescription->status}}</td>
                   {{--<td class="center">
                        @if($v_prescription->publication_status==1)
                    <span class="label label-success">Active</span>
                    @else
                    <span class="label label-danger">Unactive</span>
                    @endif
                    </td>--}}
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
                                      <li style="width: 155px"><a href="{{URL::to('/update-status/'.$v_prescription->prescription_id.'/pending/?type=prescription')}} ">pending</a></li>
                                      <li style="width: 155px"><a href="{{URL::to('/update-status/'.$v_prescription->prescription_id.'/confirmed/?type=prescription')}} ">confirmed</a></li>
                                      
                                    </li>
                                  </ul>
                                </ul>
                              <!-- </form> -->
                            </div>
                            

                        <a class="btn btn-info" href="{{URL::to('/view-prescription/'.$v_prescription->prescription_id)}}">
                            <i class="halflings-icon white edit"></i>
                        </a>
                        <a class="btn btn-danger" href="{{URL::to('/delete-prescription/'.$v_prescription->prescription_id)}}">
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
