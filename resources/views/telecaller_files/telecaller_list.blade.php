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
              <h3 class="page-title">Telecaller List</h3>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="{{url('#')}}">Home</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Telecaller List</li>
                </ol>
              </nav>
            </div>
            <div class="row">
            <div class="col-lg-12 stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Telecaller List </h4>  
                    
                    <div class="table-responsive">
                      <table class="table table-bordered table-contextual">
                        <thead>
                          <tr>
                            <th>Id</th>
                            <th> Customer Name </th>
                            <th>Contact </th>
                            <th>Email </th>
                            <th> Address </th>
                             <th> City </th>
                             <th> State </th>
                             <th>Action</th>
                          </tr>
                        </thead>
                      @foreach($result as $key=>$value)

                        <tbody width="80px">
                          <tr  class="table-success">
                            <td>{{ $value->id }}</td>
                            <td>{{ $value->customer_name }}</td>
                            <td>{{ $value->contact }}</td>
                            <td>{{ $value->email }}</td>
                            <td>{{ $value->address }}</td>
                            <td>{{ $value->city }}</td>
                            <td>{{ $value->state }}</td>
                            
                            
                     <td>
                    <button class="btn btn-success btn-sm" style="background:white; border-radius:22px;">
                    <a href="{{ url('/customer_edit') }}/{{ $value->id }}">
                    <i class="mdi mdi-pencil-box-outline"></i>
                    </a>
                    </button>
                    <button class="btn btn-outline-danger btn-sm" style="background:white; border-radius:22px;">
                    <a href="{{ url('/customer-delete') }}/{{ $value->id }}">
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
