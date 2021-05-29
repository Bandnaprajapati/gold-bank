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
              <h3 class="page-title">Telecaller Call History List</h3>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="{{url('admin')}}">Home</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Telecaller Call History List</li>
                </ol>
              </nav>
            </div>
            <div class="row">
            <div class="col-lg-12 stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Telecaller Call List </h4>
                    <a href="{{url('callhistory_create')}}"><button class="btn btn-inverse-success btn-fw float-sm-right" style="border-radius: 22px;"><i class="mdi mdi-plus-circle-outline"></i>Add Call History</button></a>
                    
                   
                      
                    
                    <div class="table-responsive">
                      <table class="table table-bordered table-contextual">
                        <thead>
                          <tr>
                            <th>Id</th>
                            <th> Date </th>
                            <th>Call History</th>
                            <th> Telecaller Name </th>
                            <th> Contact Name </th>
                             <th>Customer Contact No</th> 
                             <th>Customer Email ID</th>
                             <th> Remark </th>
                             @if(isPermission('delete'))
                             <th>Action</th>
                             @endif
                          </tr>
                        </thead>
                      @foreach($result as $key=>$value)

                        <tbody>
                          <tr  class="table-success">
                            <td>{{ $value->id }}</td> 
                            <td>{{ $value->date }}</td>
                            <td>{{ $value->time }}</td>
                            <td>{{ $value->telecaller_name   }}</td>
                            <td>{{ $value-> contact_name}}</td>
                            <td>{{ $value-> contact}}</td>
                            <td>{{ $value-> email}}</td>
                            <td>{{ $value->remark }}</td>
                            
                      @if(isPermission('delete')) 
                     <td>
                    <button class="btn btn-success btn-sm" style="background:white; border-radius:22px;">
                    <a href="{{ url('/customer_edit') }}/{{ $value->id }}">
                    <i class="mdi mdi-pencil-box-outline"></i>
                    </a>
                    </button>
                    <button class="btn btn-outline-danger btn-sm" style="background:white; border-radius:22px;">
                    <a href="{{ url('/history-delete') }}/{{ $value->id }}">
                    <i class="mdi mdi-delete-forever"></i>
                    </a>
                    </button>

                    </td>
                    @endif
                          </tr>
                          
                        </tbody>
                        @endforeach
                      </table>
                    </div>
                  </div>
                </div>
              </div>
              @endsection




