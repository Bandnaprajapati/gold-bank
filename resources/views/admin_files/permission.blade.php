@extends('layout.admin.app')
@section('content')<!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title">permission</h3>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item active" aria-current="page">permission</li>
                </ol>
              </nav>
            </div>
            <div class="row">
            <div class="col-lg-12 stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">permission </h4>
                    
                    <div class="table-responsive">
                      <table class="table table-bordered table-contextual">
                        <thead>

                      <tr>
                     
                    <th>Name</th>
                    <th>Read</th>
                    <th>Write</th>
                 
                    <th>Update</th>
                    <th>Delete</th>
                    
                  </tr>
                  </thead>
                  <form action="{{ url('permission') }}" method="post">
                    @csrf
                  <tbody>   
                 
                    @php  $i = 0; @endphp
              @foreach($data as$k=>$v)    
                  <tr>
                    <td><div class="form-check">
                    <h1>
                      @if($v->position_id == 1)
                      Admin
                      @elseif($v->position_id == 2)
                      Telecaller
                      @endif

                    </h1>
                    <label class="form-check-label" for="remember">
                   </label>
                 </div>
               </td>
                    <td>
                    <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="read[{{$i}}]" id="remember"  {{ ( $v->read == 1 ) ? 'checked=""' : '' }} >  
                    <label class="form-check-label" for="remember">
                    </label>
                 </div>
               </td>
               <td>
                    <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="write[{{$i}}]" id="remember"  {{ ( $v->write == 1 ) ? 'checked=""' : '' }}>
                    <label class="form-check-label" for="remember">
                    </label>
                 </div>
               </td>
                    <td>
                    <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="update[{{$i}}]" id="remember"  {{ ( $v->update == 1 ) ? 'checked=""' : '' }}>
                    <label class="form-check-label" for="remember">
                    </label>
                 </div>
               </td>
                    <td>
                    <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="delete[{{$i}}]" id="remember"  {{ ( $v->delete == 1 ) ? 'checked=""' : '' }}>
                    <label class="form-check-label" for="remember">
                      </label>
                 </div>
               </td>
                  </tr>
                  @php $i++;  @endphp
            @endforeach      
                  <tr>
                    <td colspan="5">
                  <div class="card-footer">
                  <button type="submit" id="add_user" class="btn btn-block btn-primary ">Submit</button>
                </div>
                </td>
              </tr>
                 
  </tbody>
              </form>
                      </table>
                    </div>
                  </div>
                </div>
              </div>

@endsection



