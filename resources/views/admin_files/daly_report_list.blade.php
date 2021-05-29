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
<div class="content-page">
<div class="content">
<div class="container-fluid">
<div class="row">
<div class="col-12">
<div class="card-box">
<div class="responsive-table-plugin">
<div class="">
<div class="table-responsive" data-pattern="priority-columns">
<h3 id="demo-delete-row"> Daily Report </h3>
<table class="table table-bordered table-contextual">
<thead>
<tr>
<th data-sortable="true">#</th>
<th data-sortable="true">Date</th>
<th data-sortable="true" colspan="2" class="text-center">Sale
<span class="text-danger"> Amt in Rs.</span></th>
<th data-sortable="true" colspan="2" class="text-center">Purchase <span class="text-danger" class=""> Amt in Rs.</th>
<th data-sortable="true" colspan="2" class="text-center">Mortgage <span class="text-danger" class=""> Amt in Rs.</th>

</tr>
<tr>
<th></th>
<th></th>
<th>Gold</th>
<th>Silver</th>
<th>Gold</th>
<th>Silver</th>
<th>Gold</th>
<th>Silver</th>
</tr>
</thead>
<tr>
<td>1</td>
<td></td>
<td>{{ $result}}</td>
<td>{{ $result}}</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
</span>
</th>
</span>
</th>
</tr>
</thead>
</table>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
@endsection





