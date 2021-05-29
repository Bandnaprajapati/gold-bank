  @extends('layout.admin.app')   

@section('internal_css')
    <style type="text/css">
      
      #disabled{
        background-color: transparent;
        
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
                  <li class="breadcrumb-item"><a href="#">Customer Call History</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Create</li>
                </ol>
              </nav>
            </div>
        <div class="row">
              <div class="col-md-12 grid-margin stretch-card">
                
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Customer Call History</h4>
                    <form class="form-sample" action="{{ url('history_store') }}" method="post">
                      @csrf
                       <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-4 col-form-label">Date</label>
                            <div class="col-sm-8">
                             <input type="date" name="date" class="form-control" />
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-4 col-form-label">Call History</label>
                            <div class="col-sm-8">
                              <input type="time" name="time" class="form-control"  />
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-4 col-form-label">Telecaller Name</label>
                            <div class="col-sm-8">
                              <input type="text" name="telecaller_name" id="disabled" class="form-control" value="{{ Auth::user()->name}}" disabled/>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-4 col-form-label">Contact Name</label>
                            <div class="col-sm-8">
                              <input type="text" name="contact_name" class="form-control" />
                            </div>
                          </div>
                        </div>
                      </div>
                     
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-4 col-form-label">Customer Contact No</label>
                            <div class="col-sm-8">
                              <input type="text" name="contact" class="form-control"  />
                            </div>
                          </div>
                        </div>
                          <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-4 col-form-label">Customer Email ID</label>
                            <div class="col-sm-8">
                              <input type="email" name="email" class="form-control"  />
                            </div>
                          </div>
                        </div> </div>
                       <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-4 col-form-label">Remark</label>
                            <div class="col-sm-8">
                              <input type="text" name="remark" class="form-control"  />
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
