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
                  <li class="breadcrumb-item"><a href="{{url('admin')}}">Home</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Telecaller List</li>
                </ol>
              </nav>
            </div>
            <div class="row">
            <div class="col-lg-12 stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Telecaller List </h4>  
                    <a href="{{url('telecaller_create')}}"><button class="btn btn-inverse-success btn-fw float-sm-right" style="border-radius: 22px;"><i class="mdi mdi-plus-circle-outline"></i>Add Telecaller</button></a>
                    <div class="table-responsive">
                      <table class="table table-bordered table-contextual">
                        <thead>
                          <tr>
                            <th>Id</th>
                            <th>  Name </th>
                            <th>Contact </th>
                            <th>Email </th>
                            <th> Address </th>
                             <th> User ID </th>
                             <th> User Image </th>
                             <th>ID Proof</th>
                             <th>Action</th>
                          </tr>
                        </thead>
                      @foreach($result as $key=>$value)

                        <tbody width="80px">
                          <tr  class="table-success">
                            <td>{{ $value->id }}</td>
                            <td>{{ $value->name }}</td>
                            <td>{{ $value->contact }}</td>
                            <td>{{ $value->email }}</td>
                            <td>{{ $value->address }}</td>
                            <td>{{ $value->user_id }}</td>
                            <td><img src="{{ asset('images/user/'.$value->user_image) }}"></td>
                            <td>{{ $value->id_proof }}</td>

                            
                            
                     <td>
                     <button class="btn btn-success btn-sm" style="background:white; border-radius:22px;">
                    <a href="{{ url('/telecaller_edit') }}/{{ $value->id }}">
                    <i class="mdi mdi-pencil-box-outline"></i>
                    </a>
                    </button>
                    <button class="btn btn-outline-danger btn-sm" style="background:white; border-radius:22px;">
                    <a href="{{ url('/telecaller_data-delete') }}/{{ $value->id }}">
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
