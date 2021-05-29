  @extends('layout.admin.app')   

@section('internal_css')
  <style type="text/css">
  .submitbtn{
    position: center;
    margin-left: 400px;
  }
    </style>
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
                  <li class="breadcrumb-item"><a href="#">Assing Data</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Create</li>
                </ol>
              </nav>
            </div>
        <div class="row">
              <div class="col-md-12 grid-margin stretch-card">
                
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Assing Data</h4>
                    <form class="form-sample" action="{{ url('assingdata_store') }}" method="post">
                      @csrf
                      
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Start Id</label>
                            <div class="col-sm-3">
                              <input type="text" name="start_id"class="form-control" />
                            </div>
                          
                        
                          
                            <label class="col-sm-3 col-form-label">End Id</label>
                            <div class="col-sm-3">
                              <input type="text" name="end_id" class="form-control" />
                            </div>
                         
                       </div>
                        </div>
                 
                     
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-4 col-form-label">Employee Name</label>
                            <div class="col-sm-8">
                              <input type="text" name="employee_name" class="form-control"  />
                            </div>
                          </div>
                        </div>
                      </div>
                           </div>
                     
                          <div class="submitbtn">
                          <input type="submit" name="submit" value="submit" class="btn btn-inverse-success btn-fw"
                          style="border-radius: 22px; " id="submit_user" >
                        </div>
                       <br>
                      </div>
                    </form>
        
                </div>
              </div>
           </div> 
          
@endsection


@section('footer_script')
 
@endsection
