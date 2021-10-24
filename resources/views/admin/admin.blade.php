@extends('layout.dashboard')

@section('content')
<div class="card">
    <div class="card-header">
      <h1 class="card-title">OEI RICKY ADMIN PAGE</h1>
    </div>
    <!-- /.card-header -->
    <!-- /.card-body -->

    
</div>
<script src="../../plugins/datatables/jquery.dataTables.js"></script>
<script src="../../plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>
@push('table-script')
<script src="{{asset('')}}plugins/datatables/jquery.dataTables.js"></script>
<script src="{{asset('')}}plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>
@endpush
@endsection