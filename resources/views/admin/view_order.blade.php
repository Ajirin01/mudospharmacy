@extends('admin_layout')
@section('admin_content')
<div class="row-fluid sortable">
    <div class="box span6">
        <div class="box-header">
          <h2><i class="halflings-icon align-justify"></i><span class="break"></span>Customers Details</h2>
        </div>
        <div class="box-content">
           <table class="table">
             <thead>
                 <tr>
                  <th>Username</th>
                  <th>Mobile</th>
                 </tr>
             </thead>
             <tbody>
                <tr>
                    
                <td>{{$order_by_id[0]->name}}</td>
                 <td>{{$order_by_id[0]->phone}}</td>
                </tr>
             </tbody>

           </table>

        </div>
    </div>


    <div class="box span6">

        <div class="box-header">
            <h2><i class="halflings-icon align-justify"></i><span class="break"></span>Shipping Details</h2>
        </div>
        <div class="box-content">
           <table class="table table-striped">
                <thead>
                   <tr>
                     <th>Username</th>
                     <th>Address</th>
                     <th>Mobile</th>
                     <th>Email</th>
                    </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>{{$order_by_id[0]->name}}</td>
                    <td>{{$order_by_id[0]->address}}</td>
                    <td>{{$order_by_id[0]->phone}}</td>
                    <td>{{$order_by_id[0]->email}}</td>

                  </tr>
                </tbody>

           </table>

        </div>

    </div>

</div>

<div class="row-fluid sortable">

      <div class="box span12">
          <div class="box-header">
              <h2><i class="halflings-icon user"></i><span class="break"></span>Order Details</h2>
          </div>

          <div class="box-content">
             <table class="table table-striped">
               <thead>
                   <tr>
                       <th>ID</th>
                       <th>Product name</th>
                       <th>Product Price</th>
                       <th>Product sales quantity</th>
                       <th>Product sub total</th>
                   </tr>
               </thead>
               <tbody>
                 @if (json_decode($order_by_id[0]->order_details) !== null)
                    @foreach (json_decode($order_by_id[0]->order_details) as $order_detail)
                    <tr>
                      <td>
                          {{$order_detail->id}}
                      </td>
                      <td>
                        {{$order_detail->name}}
                      </td>
                      <td>
                        {{$order_detail->price}}
                      </td>
                      <td>
                          {{$order_detail->quantity}}
                      </td>
                      <td>
                        {{$order_detail->price*$order_detail->quantity}}
                      </td>
                    </tr>
                    @endforeach
                 @endif
                  
                
                <tr>
                  <td colspan="4">Gift inclusion:</td>
                  
                  @if ($order_by_id[0]->order_total >= 1000)
                    <td><strong style="color: blue">#Gift included </strong></td>
                  @else
                    <td><strong style="color: red"> #Gift not included</strong></td>
                  @endif
                </tr>
               </tbody>
               <tfoot>
                   <tr>

                       <td colspan="4">Total with vat:</td>
                       <td><strong>= # {{$order_by_id[0]->order_total}} </strong></td>
                   </tr>
               </tfoot>
             </table>
          </div>
      </div>



 </div>





@endsection
