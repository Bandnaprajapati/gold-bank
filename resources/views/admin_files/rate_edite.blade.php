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
                  <li class="breadcrumb-item"><a href="#">Update RepotToday</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Create</li>
                </ol>
              </nav>
            </div>
        <div class="row">
              <div class="col-md-12 grid-margin stretch-card">
                
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Update Repot Today </h4>
                    <form class="form-sample" action="{{ url('rate_update') }}" method="post">
                      @csrf
                      <input type="hidden" name="id" value="{{ $result->id }}">
                      <p class="card-description"> Personal info </p>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-4 col-form-label">Product</label>
                            <div class="col-sm-8">
                              <select class="form-control" name="item" value="{{ $result->item }}" />
                                <option></option>
                                <option>Gold</option>
                                <option>Silver</option>
                              </select>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-4 col-form-label">Amount</label>
                            <div class="col-sm-8">
                               <input type="text" name="amount" class="form-control" value="{{ $result->amount }}"/>
                              
                            </div>
                          </div>
                        </div>
                      </div>
                      
                        </div>

                          <div>
                          <input type="submit" name="submit" value="submit" class="btn btn-inverse-success btn-fw"
                          style="border-radius: 22px;" id="submit_user" >
                        </div>
                       
                      </div>
                    </form>
        
                </div>
              </div>
           </div> 
          
@endsection


@section('footer_script')
 
@endsection
