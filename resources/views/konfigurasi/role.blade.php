@extends('layouts.master')
@section('title','Role')
@push('css')
<link rel="stylesheet" href="{{ asset('') }}assets/datatables/dataTables.bootstrap.css">
@endpush
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        @yield('title')
      </h1>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">
                            <a href="" class="btn btn-primary">
                                <i class="fa fa-plus"></i>&nbsp;
                                Tambah Akses Pengguna
                            </a>
                        </h3>
                    </div>
                    <div class="box-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Rendering engine</th>
                                    <th>Browser</th>
                                    <th>Platform(s)</th>
                                    <th>Engine version</th>
                                    <th>CSS grade</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Trident</td>
                                    <td>Internet
                                        Explorer 4.0
                                    </td>
                                    <td>Win 95+</td>
                                    <td> 4</td>
                                    <td>X</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
@push('js')
<script src="{{ asset('') }}assets/datatables/jquery.dataTables.min.js"></script>
<script src="{{ asset('') }}assets/datatables/dataTables.bootstrap.min.js"></script>
<script>
    $(function () {
        $('#example1').DataTable();
    });
  </script>
@endpush