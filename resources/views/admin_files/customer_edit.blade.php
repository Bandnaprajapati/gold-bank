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
                  <li class="breadcrumb-item"><a href="#">user</a></li>
                  <li class="breadcrumb-item active" aria-current="page">update</li>
                </ol>
              </nav>
            </div>
        <div class="row">
              <div class="col-md-12 grid-margin stretch-card">
                
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">User</h4>
                    <form class="form-sample"  action="{{ url('customer_update')}}" method="post">
                      @csrf
                      <input type="hidden" name="id" value="{{ $result->id }}">
                      <p class="card-description"> Personal info </p>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Customer Name</label>
                            <div class="col-sm-9">
                              <input type="text" name="customer_name"class="form-control" value="{{ $result->customer_name }}" />
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Contact</label>
                            <div class="col-sm-9">
                              <input type="text" name="contact" class="form-control" value="{{ $result->contact }}" />
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Email</label>
                            <div class="col-sm-9">
                             <input type="text" name="email" class="form-control" value="{{ $result->email }}" />
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Address</label>
                            <div class="col-sm-9">
                              <input type="text" name="address" class="form-control" value="{{ $result->address }}"  />
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">City</label>
                            <div class="col-sm-9">
                              <input type="text" name="city" class="form-control" value="{{ $result->city }}"  />
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">State</label>
                             <div class="col-sm-9">
                              <input type="text" name="state" class="form-control" value="{{ $result->state }}"  />
                            </div>
                          </div>
                        </div>
                      </div>
                      
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">password</label>
                            <div class="col-sm-9">
                              <input type="text" name="password" class="form-control" value="{{ $result->password }}" />
                            </div>
                          </div>
                        </div>
                      </div>

                          <div>
                          <input type="submit" name="submit" value="Update" class="btn btn-inverse-success btn-fw"
                          style="border-radius: 22px;"  >
                        </div>
                        </div>
                      </div>
                    </form>
        
                </div>
              </div>

          
@endsection



