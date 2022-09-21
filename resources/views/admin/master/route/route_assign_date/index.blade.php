@extends('admin.layouts.template')

@section('title', 'Route Assign Date')

@section('css')
    <link rel="stylesheet" href="{{ url('/template') }}/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
@endsection
@section('breadcrumb')
    <section class="content-header">
        <h1>
            @yield('title')
        </h1>
        <ol class="breadcrumb">
            <li>
                <a href="{{ url('/admin/dashboard') }}">
                    <i class="fa fa-dashboard"></i> Dashboard
                </a>
            </li>
            <li class="active">
                @yield('title')
            </li>
        </ol>
    </section>
@endsection
@section('content')
<div class="mb-5">
    <button type="button" class="btn btn-success shadow" data-toggle="modal" data-target="#modal-default">
        Import Route Assign Date
    </button>
    </div>
    <div class="modal fade" id="modal-default">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title btn btn-success">Import Route Assign Date</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form id="upload_form" action="{{ route('route.importRouteAssignDate') }}" method="POST" enctype="multipart/form-data">
                @csrf
                        <input type="file" name="file" id="file" class="form-control btn btn-primary" onchange="uploadFile()" required>
                        <progress id="progressBar" value="0" max="100" class="col-md-12"></progress>
                        <p id="loaded_n_total"></p>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button class="btn btn-success">Import File</button>
            </div>
        </form>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div><br>
    <table id="example"  class="table text-center table-responsive table-striped table-bordered mt-5" style="width:100%;">
            <thead style="font-size: 11px;" class="bg-warning">
                <tr>
                    {{-- <th class="col">No</th> --}}
                    <th class="" width="20"></th>
                    <th class="" width="20"></th>
                    <th class="col">Day</th>
                    <th class="col">Date</th>
                </tr>
            </thead>
            <tbody style="font-size: 13px;">
                @php
                    $no = 1;
                @endphp
                @foreach ($route_assign_date as $routeAssignDate)
                <tr>
                    {{-- <td>{{ $no++ }}</td> --}}
                    <td>
                        <img src="{{ asset('asset/gambar/action/pencil.png') }}" class="m-3" width="20" alt="edit">
                    </td>
                    <td>
                        <img src="{{ asset('asset/gambar/action/remove.png') }}" class="m-3" width="20" alt="remove">
                    </td>
                    <td>{{ $routeAssignDate->route_assign_date_day }}</td>
                    <td>{{ $routeAssignDate->route_assign_date_date }}</td>
                    {{-- <td><a href="{{ url('teritory') }}" style="text-decoration: none">MDN_DSS022</a></td> --}}
                            {{-- <img src="{{ asset('asset/gambar/action/remove.png') }}" class="mt-3" width="20" alt="remove"> --}}
                            {{-- <img src="{{ asset('asset/gambar/action/pencil.png') }}" class="mt-3" width="20" alt="edit"> --}}
                </tr>
                @endforeach
            </tbody>
        </table>
@endsection
@section('js')
    <script>
    $(document).ready(function () {
    $('#example').DataTable();
    });
    </script>
    <script src="{{ url('/template') }}/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="{{ url('/template') }}/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <script>
        function editKategori(id) {
            $.ajax({
                url: "{{ url('/admin/master/kategori/edit') }}",
                type: "GET",
                data: {
                    id: id
                },
                success: function(data) {
                    $("#modal-content-edit").html(data);
                    return true;
                }
            })
        }
        $(function() {
            $('#example1').DataTable()
        });
        ! function(a, i, r) {
            var e = {};
            e.UTIL = {
                setupFormValidation: function() {
                    a("#tambahKategori").validate({
                            ignore: "",
                            rules: {
                                nama_kategori: {
                                    required: !0
                                }
                            },
                            messages: {
                                nama_kategori: {
                                    required: "Nama Kategori harap di isi!"
                                }
                            },
                            submitHandler: function(a) {
                                a.submit()
                            }
                        }),
                        a("#editKategori").validate({
                            ignore: "",
                            rules: {
                                nama_kategori: {
                                    required: !0
                                }
                            },
                            messages: {
                                nama_kategori: {
                                    required: "Nama Kategori harap di isi!"
                                }
                            },
                            submitHandler: function(a) {
                                a.submit()
                            }
                        })
                }
            }, a(r).ready(function(a) {
                e.UTIL.setupFormValidation()
            })
        }(jQuery, window, document);
    </script>
@endsection
