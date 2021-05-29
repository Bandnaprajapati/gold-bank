@extends('layout.admin.app')

@section('internal_css')
    
    
@endsection


@section('content')

  <!-- partial -->
   <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title"></h3>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="telecaller_create">C</a></li>
                  <li class="breadcrumb-item active" aria-current="page">create</li>
                </ol>
              </nav>
            </div>
        <div class="row">
              <div class="col-md-12 grid-margin stretch-card">
                
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Add V</h4>
                    <form class="form-sample" action="{{ url('telecaller_data_update') }}" method="post">
                      @csrf
                      <input type="hidden" name="id" value="{{ $result->id }}">
                      <p class="card-description"> Personal info </p>
                      <div class="row">
                        <div class="col-md-12">
                           <div class="form-group">
                        <label for="exampleInputName1">Name</label>
                        <input type="text" name="name" class="form-control" id="exampleInputName1" placeholder="Telecaller name" value="{{ $result->name }}">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail3">Email address</label>
                        <input type="email" name="email" class="form-control" id="exampleInputEmail3" placeholder="Email" value="{{ $result->email }}">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword4">Contact</label>
                        <input type="text" name="contact" class="form-control" id="exampleInputPassword4" placeholder="Contact" value="{{ $result->contact }}">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword4">Address</label>
                        <input type="text" name="address" class="form-control" id="exampleInputPassword4" placeholder="Address" value="{{ $result->address }}">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword4">User ID</label>
                        <input type="text" name="user_id" class="form-control" id="exampleInputPassword4" placeholder="User ID" value="{{ $result->user_id }}">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword4">Passsword</label>
                        <input type="password" name="password" class="form-control" id="exampleInputPassword4" placeholder="password" value="{{ $result->password }}">
                      </div>
                     
                      <div class="form-group">
                        <label>User Image</label>
                        <input type="file" name="user_image" class="file-upload-default">
                        <div class="input-group col-xs-12">
                          <input type="text" class="form-control file-upload-info" disabled placeholder="Choose File" value="{{ $result->user_image }}">
                          <span class="input-group-append">
                            <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                          </span>
                        </div>
                      </div>
                      <div class="form-group">
                        <label>ID Proof</label>
                        <input type="file" name="id_proof" class="file-upload-default">
                        <div class="input-group col-xs-12">
                          <input type="text" class="form-control file-upload-info" disabled placeholder="Choose File" value="{{ $result->id_proof }}">
                          <span class="input-group-append">
                            <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                          </span>
                        </div>
                      </div>
                      <button type="submit" class="btn btn-primary mr-2">Submit</button>
                      <button class="btn btn-dark">Cancel</button>
                   
                     </form>
                      </div>
                    
                  </div>
                </div>
              </div>
           
@endsection