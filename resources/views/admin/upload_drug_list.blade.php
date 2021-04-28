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
          <a href="#">Upload List of Drugs</a>
      </li>
  </ul>
  <div class="row-fluid sortable">
    <div class="box span12">       
        <div class="box-content">
          <div class="col-lg-8 offset-lg-2">
            <div class="box-header" data-original-title>
              <h2><i class="halflings-icon edit"></i><span class="break"></span>Upload List of Drugs</h2>

            </div>
              <h4 class="page-title text-center text-success">
                  @if(session('message'))
                  {{session('message')}}
                  @endif
              </h4>
              <h4 class="page-title text-center text-danger" style="color: red">
                  @if(session('error'))
                  {{session('error')}} <br>
                  {{-- {{session('errors')->first('links_code[]')}} --}}
                  @endif
              </h4>
              <br>
          </div>
        
          <form class="form-horizontal" action="{{ url('/upload-drug-list') }}" method="POST" enctype="multipart/form-data">
              @csrf
              <fieldset>
                <div class="control-group">
                    <label class="control-label" for="date01">Choose CSV file</label>
                    <div class="controls">
                        <input class="input-xlarge" type="file" name="drug_list" id="list" accept=".csv">
                    </div>
                </div>
                <div class="text-center form-actions sm-6">
                    <button class="btn btn-primary submit-btn">Upload</button>
                </div>
              </fieldset>
          </form>
        </div>
    </div>
  </div>

  <div class="sidebar-overlay" data-reff=""></div>
  </div>
  @php
      Session::remove('error');
      Session::remove('message');
  @endphp
@endsection
