@extends('admin_layout')

@section('admin_content')

  <ul class="breadcrumb">
      <li>
          <i class="icon-home"></i>
      <a href="{{URL::to('/dashboard')}}">Home</a>
          <i class="icon-angle-right"></i>
      </li>
      <li>
          <i class="icon-edit"></i>
          <a href="#">Add Manufacture</a>
      </li>
  </ul>
  <div class="row-fluid sortable">
    <div class="box span12">       
        <div class="box-content">
          <div class="col-lg-8 offset-lg-2">
            <div class="box-header" data-original-title>
              <h2><i class="halflings-icon edit"></i><span class="break"></span>Add Manufacture</h2>

            </div>
              <h4 class="page-title text-center text-success">
                  @if(session('msg'))
                  {{session('msg')}}
                  @endif
              </h4>
              <h4 class="page-title text-center text-danger">
                  @if(session('errors'))
                  {{session('errors')}} <br>
                  {{-- {{session('errors')->first('links_code[]')}} --}}
                  @endif
              </h4>
              <br>
              <span>Please select the number of Manufacturer(s) to create</span>
              <select id="num">
                  @for ($i = 0; $i < 7; $i++)
                      <option value="{{$i}}">{{$i}}</option>
                  @endfor
              </select>
          </div>
        
          <form class="form-horizontal" action="{{ url('/save-manufacture') }}" method="POST" enctype="multipart/form-data">
              @csrf
              <fieldset>
                  <div id="form">
                      
                  </div>
                  <div class="text-center form-actions sm-6">
                      <button class="btn btn-primary submit-btn">Add Manufacturer(s)</button>
                  </div>
              </fieldset>
          </form>
        </div>
    </div>
  </div>
  <script>
      var num = document.getElementById('num')
      var form = document.getElementById('form')

      num.onchange = () => {
          console.log(num.value)
          var i = 0
          
              var chd = '<div id="form" class="col-lg-8 offset-lg-5" style="border-bottom: 2px purple dotted; margin-top: 10px">'
                  chd +=    '<div class="control-group">'
                  chd +=        '<label class="control-label" for="date01">Manufacture Name</label>'
                  chd +=      '<div class="controls">'
                  chd +=          '<input class="input-xlarge" type="text" name="manufacture_name[]">'
                  chd +=      '</div>'
                  chd +=    '</div>'
                  chd +=    '<div class="control-group">'
                  chd +=      ' <label class="control-label" for="textarea2">Manufacture Description</label>'
                  chd +=      '<div class="controls">'
                  chd +=          '<textarea rows="3" class=""  name="manufacture_description[]"></textarea>'
                  chd +=      '</div>'
                  chd +=    '</div>'
                  chd +=    '<div class="control-group sm-6">'
                  chd +=    '  <label class="control-label" for="textarea2">Publication status</label>'
                  chd +=    '  <div class="controls">'
                  chd +=    '    <input type="checkbox" name="publication_status[]" value="1">'
                  chd +=    '  </div>'
                  chd +=    '</div>'
                  chd += '</div>'
                  var form_inner = ""
                  for(i; i< num.value; i++){
                      form_inner += chd;
                      
                  }
                  form.innerHTML=form_inner
      }
  </script>

  <div class="sidebar-overlay" data-reff=""></div>
  </div>

@endsection
