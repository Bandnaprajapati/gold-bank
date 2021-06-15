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
              <h3 class="page-title">Rate List</h3>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="{{url('admin')}}">Home</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Rate List</li>
                </ol>
              </nav>
            </div>
            <div class="row">
            <div class="col-lg-12 stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Rate List </h4>
                    <a href="{{url('rate_create')}}"><button class="btn btn-inverse-success btn-fw float-sm-right" style="border-radius: 22px;"><i class="mdi mdi-plus-circle-outline"></i>Add Rate</button></a>
                    
                   
                      
                    
                    <div class="table-responsive">
                      <table class="table table-bordered table-contextual">
                        <thead>
                          <tr>
                            <th> Id </th>
                            <th> product Name </th>
                            <th> Amount </th>
                             <th>Action</th>

                          </tr>
                        </thead>
                      @foreach($result as $key=>$value)

                        <tbody>
                          <tr  class="table-success">
                            <td>{{ $value->id }}</td>
                            <td>{{ $value->item }}</td>
                            <td>{{ $value->amount }}</td>
                            <td>{{ $value->status }}</td>

                           
                            
                     <td>
                    <button class="btn btn-success btn-sm" style="background:white; border-radius:22px;">
                    <a href="{{ url('/rate_edite') }}/{{ $value->id }}">
                    <i class="mdi mdi-pencil-box-outline"></i>
                    </a>
                    </button>
                    <button class="btn btn-outline-danger btn-sm" style="background:white; border-radius:22px;">
                    <a href="{{ url('/rate_delete') }}/{{ $value->id }}">
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





