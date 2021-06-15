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
                  <li class="breadcrumb-item"><a href="#">Customer</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Create</li>
                </ol>
              </nav>
            </div>
        <div class="row">
              <div class="col-md-12 grid-margin stretch-card">
                
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Customer</h4>
                    <form class="form-sample" id="form_user">
                      
                      <p class="card-description"> Personal info </p>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Customer Name</label>
                            <div class="col-sm-9">
                              <input type="text" name="name"class="form-control" />
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Contact</label>
                            <div class="col-sm-9">
                              <input type="text" name="contact" class="form-control" />
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Email</label>
                            <div class="col-sm-9">
                             <input type="text" name="email" class="form-control" />
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Address</label>
                            <div class="col-sm-9">
                              <input type="text" name="address" class="form-control"  />
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">City</label>
                            <div class="col-sm-9">
                              <input type="text" name="city" class="form-control"  />
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">State</label>
                             <div class="col-sm-9">
                              <input type="text" name="state" class="form-control"  />
                            </div>
                          </div>
                        </div>
                      </div>
                      
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">password</label>
                            <div class="col-sm-9">
                              <input type="text" name="password" class="form-control" />
                            </div>
                          </div>
                        </div>
                      </div>

                          <div>
                          <input type="submit" name="submit" value="submit" class="btn btn-inverse-success btn-fw"
                          style="border-radius: 22px;" id="submit_user" >
                        </div>
                        </div>
                      </div>
                    </form>
        
                </div>
              </div>
           </div> 
          
@endsection


@section('footer_script')
  <script type="text/javascript">
    $(document).on('click','#submit_user',function(e){
      e.preventDefault();
        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            url: "{{ url('/customer_store') }}",
            type: 'post',
            data: new FormData($('#form_user')[0]),
            success: function (response) {
              console.log(response);
              $('#form_user')[0].reset();
                if (response.status) {
                   alert('added successfully');
                } else {
                    alert('something went wrong...');
                }
            },
            error: function (e) {
                console.log(e);
            },
            processData: false,
            contentType: false
        });

    });
  </script>
@endsection
