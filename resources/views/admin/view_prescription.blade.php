@extends('admin_layout')
@section('admin_content')
<div class="row-fluid sortable">
    <div class="box span12">
        <div class="box-header">
          <h2><i class="halflings-icon align-justify"></i><span class="break"></span>Customers Details</h2>
        </div>
        <p class="alert-success">
            <br>
            <?php
    
            $message=Session::get('message');
            if($message){
                echo $message;
                Session::put('message', null);
            }
            ?>

            <br>
    
            </p>
        <div class="box-content">
           <table class="table">
             <thead>
                 <tr>
                  <th>Item Name</th>
                  <th>Doctor's prescription</th>
                 </tr>
             </thead>
             <tbody>
                <tr>
                    
                    <td style="border-right: 2px rgba(128, 128, 128, 0.5) solid">{{$prescription[0]->product_name}}</td>
                    {{-- <td>{{$prescription[0]->prescription_image}}</td> --}}
                    <td><img src="{{URL::to($prescription[0]->prescription_image)}}" alt="prescription"></td>
                </tr>
             </tbody>
             <tfoot>
                 <tr>
                     <td>
                        <a class="btn btn-success text-center" href="/pharm-confirm-prescription/?prescription={{$req_prescription}}&item_id={{$item_id}}&email={{$email}}">Confirm</a>
                     </td>
                     <td>
                        <a class="btn btn-primary text-center" href="/prescription-list">Back</a>
                     </td>
                 </tr>
             </tfoot>
           </table>
           
        </div>
    </div>

</div>

@endsection