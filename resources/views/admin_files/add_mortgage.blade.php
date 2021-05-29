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
                  <li class="breadcrumb-item"><a href="add_purchase_data">Mortgage Deatail</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Create</li>
                </ol>
              </nav>
            </div>
        <div class="row">
              <div class="col-md-12 grid-margin stretch-card">                     
                
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Add Mortgage Deatail</h4>
                    <form class="form-sample" action="{{ url('mortgage_store') }}" method="post">
                      @csrf
                      <input type="hidden" name="id" value="">
                      <p class="card-description"> Personal info </p>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Customer Type</label>
                            <div class="col-sm-9">
                               <select class="form-control" name="customer_type">
                                <option>Select</option>
                                <option>Direct</option>
                                <option>Through Bank</option>
                              </select>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Metal Type</label>
                            <div class="col-sm-9">
                               <select class="form-control" name="metal_type">
                                <option>Select</option>
                                <option>Gold</option>
                                <option>Silver</option>
                              </select>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Product condition</label>
                            <div class="col-sm-9">
                              <select class="form-control" name="product_condition">
                                <option>Select</option>
                                <option>Old</option>
                                <option>New</option>
                              </select>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Customer Name</label>
                            <div class="col-sm-9">
                              <input type="text" name="customer_name"Customer class="form-control" value="" />
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                          <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Customer Contact No</label>
                            <div class="col-sm-9">
                              <input type="text" name="customer_contact" class="form-control" value="" />
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Customer Address</label>
                             <div class="col-sm-9">
                              <input type="text" name="customer_address" class="form-control" value="" />
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Qty</label>
                            <div class="col-sm-9">
                              <input type="text" name="qty"class="form-control" value="" />
                            </div>
                          </div>
                        </div> 
                         <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Rate(10g)</label>
                            <div class="col-sm-9">
                              <input type="text" name="rate" class="form-control" value="" />
                            </div>
                          </div>
                        </div>
                      </div>
                       <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Given Amount</label>
                            <div class="col-sm-9">
                              <input type="text" name="given_amount"class="form-control" value="" />
                            </div>
                          </div>
                        </div>
                         <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Rate Of Interest</label>
                            <div class="col-sm-9">
                              <input type="text" name="rate_of_interest" class="form-control" value="" />
                            </div>
                          </div>
                        </div>
                      </div> 
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Total EMI</label>
                            <div class="col-sm-9">
                              <input type="text" name="tolal_emi"class="form-control" value="" />
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Monthly EMI</label>
                            <div class="col-sm-9">
                              <input type="text" name="monthly_emi" class="form-control" value="" />
                            </div>
                          </div>
                        </div>
                      </div> 
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Received Amount</label>
                            <div class="col-sm-9">
                              <input type="text" name="received_amount"class="form-control" value="" />
                            </div>
                          </div>
                        </div>
                      <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Remaining Amount</label>
                            <div class="col-sm-9">
                              <input type="text" name="remaining_amount" class="form-control" value="" />
                            </div>
                          </div>
                        </div>
                      </div> 
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Date</label>
                            <div class="col-sm-9">
                              <input type="date" name="date" class="form-control" value="" />
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Remark</label>
                            <div class="col-sm-9">
                              <input type="text" name="remark" class="form-control" value="" />
                            </div>
                          </div>
                          <div><center>
                          <input type="submit" name="submit" value="submit" class="btn btn-inverse-success btn-fw"
                          style="border-radius: 22px;">
                          </center>
                      </div>
                     </form>
                      </div>
                    
                  </div>
                </div>
              </div>
           
@endsection