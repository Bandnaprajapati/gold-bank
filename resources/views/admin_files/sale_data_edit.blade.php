@extends('layout.admin.app')

@section('internal_css')
<style type="text/css">
.hidden{
  display:none;
} 
.margin{
  margin-left: 200px;
  padding: 20px;
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
                  <li class="breadcrumb-item"><a href="add_purchase_data">Sale Detail</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Create</li>
                </ol>
              </nav>
            </div>
        <div class="row">
              <div class="col-md-12 grid-margin stretch-card">
                
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Add sale</h4>
                    <form class="form-sample" action="{{ url('sale_data_update') }}" method="post">
                      @csrf
                      <input type="hidden" name="id" value="{{$result->id}}">
                      <p class="card-description"> Personal info </p>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Buyer Type</label>
                            <div class="col-sm-9">
                               <select class="form-control" name="buyer_type"value="{{ $result->buyer_type }}">
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
                               <select class="form-control" name="metal_type"value="{{ $result->metal_type }}">
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
                              <select class="form-control" name="product_condition"value="{{ $result->product_condition }}">
                                <option>Select</option>
                                <option>Old</option>
                                <option>New</option>
                              </select>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Buyer Name</label>
                            <div class="col-sm-9">
                              <input type="text" name="buyer_name" class="form-control" value="{{ $result->buyer_name }}" />
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                          <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Buyer Contact No</label>
                            <div class="col-sm-9">
                   <input type="text" name="buyer_contact" class="form-control" value="{{ $result->buyer_contact }}" />
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Buyer Address</label>
                             <div class="col-sm-9">
                   <input type="text" name="buyer_address" class="form-control" value="{{ $result->buyer_address }}" />
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Qty</label>
                            <div class="col-sm-9">
                              <input type="text" name="qty"class="form-control" value="{{ $result->qty }}" />
                            </div>
                          </div>
                        </div> 
                         <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Rate(10g)</label>
                            <div class="col-sm-9">
                              <input type="text" name="rate" class="form-control"value="{{ $result->rate }}" />
                            </div>
                          </div>
                        </div>
                      </div>
                       <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Total Cost</label>
                            <div class="col-sm-9">
                      <input type="text" name="total_amount"class="form-control" value="{{ $result->total_amount }}" />
                            </div>
                          </div>
                        </div>
                       </div>

                      <div class="row margin">
                        <div class="form-group mb-3 col-lg-12">
                        <label> Select Payment Type </label>
                        
                        <label for=""><input type="radio"   name="payment_type" value="Cash" class="paymentoption" checked=""> Cash </label>
                        <label for=""><input type="radio"  name="payment_type" value="EMI" class="paymentoption"> EMI </label>
                           </div>
                        </div>
                        </div>
                         
                        <div class="row  hidden"  id="amount_div">
                        <div class="form-group mb-3 col-sm-3">
                        <label>Booking Amount</label>
                        <input type="text" name="book_amount" class="form-control" id="book_amt" placeholder="Booking amount" value="{{ $result->book_amount }}">

                        </div>
                        <div class="form-group mb-3 col-sm-3">
                        <label >Total EMI</label>
                        <input type="text" name="emi_count" class="form-control" id="emi_count" placeholder="Total EMI" value="{{ $result->emi_count }}">

                        </div>
                        <div class="form-group mb-3 col-sm-3">
                        <label>Rate of Interest</label>
                        <input type="text" name="rate_of_interest" class="form-control" id="roi" placeholder="Rate of interest" value="{{ $result->rate_of_interest }}">

                        </div>
                        <div class="form-group mb-3 col-sm-3">
                        <label>EMI Amount</label>
                        <input type="text" name="emi_amount" class="form-control" id="emi_amt" placeholder="EMI amount" value="{{ $result->emi_amount }}">

                        </div>
                        </div>

                        <div class="row">
                          <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Received Amount</label>
                            <div class="col-sm-9">
                              <input type="text" name="received_amount" class="form-control" value="{{ $result->received_amount }}" />
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Remaining Amount</label>
                            <div class="col-sm-9">
             <input type="text" name="remaining_amount" class="form-control"value="{{ $result->remaining_amount }}" />
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                          <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Date</label>
                            <div class="col-sm-9">
                              <input type="date" name="date" class="form-control" value="{{ $result->date }}" />
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Remark</label>
                            <div class="col-sm-9">
                              <input type="text" name="remark" class="form-control" value="{{ $result->remark }}" />
                            </div>
                          </div>
                        </div>
                      </div>
                      <center>
                      <div style="border-radius: 22px;">
                          <input type="submit" name="submit" value="submit" class="btn btn-inverse-success btn-fw"
                          style="border-radius: 22px;" id="submit_user" >
                        </div>
                       </center>

</div>



</form>
</div>
</div>
</div>
</div>
</div>
</div>

     
@endsection

@section('footer_script')

      <script type="text/javascript">
        $('.paymentoption').on('click',function(){
          var val =  $("input[name='payment_type']:checked").val();
          if(val == 'EMI'){
            $('#amount_div').removeClass('hidden');

          }else{
            $('#amount_div').addClass('hidden');
          }
        });
      </script>
@endsection
