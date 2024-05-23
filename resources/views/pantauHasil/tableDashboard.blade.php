@extends('pantauHasil.layouts.mainTable')
{{-- datatable --}}
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.css" />

@section('containTable')
    <div class="container">
        <div class="card my-3">
            <div class="card-header text-bg-light text-center fw-bold">
                <h1>List Logs</h1>
            </div>
        </div>

        <div class="card my-3">
            <div class="card-body">
                @include('pantauHasil.table.tableLogs')
            </div>
        </div>
    </div>

{{-- jquery --}}
<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

{{-- datatable --}}
<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.js"></script>

{{-- js --}}
<script src="{{ asset('resouces/js/tabelLogs.js') }}"></script>
@endsection
