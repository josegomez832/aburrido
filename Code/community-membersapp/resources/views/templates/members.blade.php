@extends('app')

@section('content')
<div class="container-fluid">
  <div class="row">
	
	<main role="main" class="col-md-8 offset-2">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Fourth Community</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
          <div class="btn-group mr-2">
            <button type="button" class="btn btn-sm btn-outline-secondary"><i class="fas fa-th"></i></button>
            <button type="button" class="btn btn-sm btn-outline-secondary"><i class="fas fa-table"></i></button>
            <button type="button" class="btn btn-sm btn-outline-secondary"><i class="fas fa-birthday-cake"></i></button>
          </div><!--btngroup-->
        </div><!--btntoolbar-->
      </div><!--dflex-->
      <div id="table-view" data-id="fa-table">
        <member></member>
        
      </div>
    </main>
  </div>
</div>
@endsection