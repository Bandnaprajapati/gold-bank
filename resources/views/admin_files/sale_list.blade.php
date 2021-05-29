  @extends('layout.admin.app')

@section('internal_css')
    .color{
    font-color:white;
  }
    
@endsection


@section('content')
<!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title">sale List</h3>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="{{url('admin')}}">Home</a></li>
                  <li class="breadcrumb-item active" aria-current="page">sale  List</li>
                </ol>
              </nav>
            </div>
            <div class="row">
            <div class="col-lg-12 stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">sale List </h4>
                    <a href="{{url('add_sale_data')}}"><button class="btn btn-inverse-success btn-fw float-sm-right" style="border-radius: 22px;"><i class="mdi mdi-plus-circle-outline"></i>Add sale</button></a>
                    
                   
                      
                    
                    <div class="table-responsive">
                      <table class="table table-bordered table-contextual" width="100%">
                        <thead>
                          <tr>
                            <th>Id</th>
                            <th> Buyer Type </th>
                            <th> Metal Type </th>
                            <th> product Condition </th>
                            <th> Buyer Name </th>
                             <th> Buyer contacte No </th>
                             <th> Buyer Address </th>
                              <th> Qty </th>
                              <th>Rate</th>
                              <th>Total Cost</th>
                              <th>Select Payment Type</th>
                              <th>Booking Amount</th>
                              <th>Total EMI</th>
                              <th>Rate of Interest</th>
                              <th>EMI Amount</th>
                              <th>Received Amount</th>
                              <th>Remaining Amount</th>
                              <th>date</th>
                              <th>Remark</th>
                              <th>Action</th>

                          </tr>
                        </thead>
                      @foreach($result as $key=>$value)

                        <tbody>
                          <tr  class="table-success">
                            <td>{{ $value->id }}</td>
                            <td>{{ $value->buyer_type }}</td>
                            <td>{{ $value->metal_type }}</td>
                            <td>{{ $value->product_condition }}</td>
                            <td>{{ $value->buyer_name }}</td>
                            <td>{{ $value->buyer_contact }}</td>
                            <td>{{ $value->buyer_address }}</td>
                            <td>{{ $value->qty }}</td>
                            <td>{{ $value->rate }}</td>
                            <td>{{ $value->total_amount }}</td>
                            <td>{{ $value->payment_type }}</td>
                            <td>{{ $value->book_amount }}</td>
                            <td>{{ $value->emi_count }}</td>
                            <td>{{ $value->rate_of_interest }}</td>
                            <td>{{ $value->emi_amount }}</td>
                            <td>{{ $value->received_amount }}</td>
                            <td>{{ $value->remaining_amount }}</td>
                            <td>{{ $value->date }}</td>
                            <td>{{ $value->remark }}</td>

                            
                     <td>
                    <button class="btn btn-success btn-sm" style="background:white; border-radius:22px;">
                    <a href="{{ url('/sale_data_edit') }}/{{ $value->id }}">
                    <i class="mdi mdi-pencil-box-outline"></i>
                    </a>
                    </button>
                    <button class="btn btn-outline-danger btn-sm" style="background:white; border-radius:22px;">
                    <a href="{{ url('/sale_data-delete') }}/{{ $value->id }}">
                    <i class="mdi mdi-delete-forever"></i>
                    </a>
                    </button>

                    </td>

                          </tr>
                          
                        </tbody>
                        @endforeach
                      </table>
                    </div>
                  </div>
                </div>
              </div>
              @endsection





