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
              <h3 class="page-title">Purchase List</h3>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="{{url('admin')}}">Home</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Purchage  List</li>
                </ol>
              </nav>
            </div>
            <div class="row">
            <div class="col-lg-12 stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Purchase List </h4>
                    <a href="{{url('purchase_create')}}"><button class="btn btn-inverse-success btn-fw float-sm-right" style="border-radius: 22px;"><i class="mdi mdi-plus-circle-outline"></i>Add Purchase</button></a>
                    
                   
                      
                    
                    <div class="table-responsive">
                      <table class="table table-bordered table-contextual" width="100%">
                        <thead>
                          <tr>
                            <th>Id</th>
                            <th> Seller Type </th>
                            <th> Metal Type </th>
                            <th> Gold Condition </th>
                            <th> Seller Name </th>
                             <th> Seller contacte No </th>
                             <th> Seller Address </th>
                              <th> Qty </th>
                              <th>Rate</th>
                              <th>Given Amount</th>
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
                            <td>{{ $value->seller_type }}</td>
                            <td>{{ $value->metal_type }}</td>
                            <td>{{ $value->gold_condition }}</td>
                            <td>{{ $value->seller_name }}</td>
                            <td>{{ $value->seller_contact }}</td>
                            <td>{{ $value->seller_address }}</td>
                            <td>{{ $value->qty }}</td>
                            <td>{{ $value->rate }}</td>
                            <td>{{ $value->given_amount }}</td>
                            <td>{{ $value->remaining_amount }}</td>
                            <td>{{ $value->date }}</td>
                            <td>{{ $value->remark }}</td>

                            
                     <td>
                    <button class="btn btn-success btn-sm" style="background:white; border-radius:22px;">
                    <a href="{{ url('/purchase_data_edit') }}/{{ $value->id }}">
                    <i class="mdi mdi-pencil-box-outline"></i>
                    </a>
                    </button>
                    <button class="btn btn-outline-danger btn-sm" style="background:white; border-radius:22px;">
                    <a href="{{ url('/purchase_data-delete') }}/{{ $value->id }}">
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





