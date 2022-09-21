@extends('admin.layouts.template')

@section('title', 'Route Calender')

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

  <!-- SELECT2 EXAMPLE -->
  <div class="box box-default">
    <div class="box-header with-border">
      <h3 class="box-title">Teritory</h3>

      <div class="box-tools pull-right">
        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
        <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
      </div>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
      <div class="row">
        <div class="col-md-12">
          <div class="form-group">
            <table class="table text-center table-responsive table-striped table-bordered mt-5" style="width:100%;">
                <thead style="font-size: 11px;" class="bg-warning">
                    <tr>
                        <th class="col">Teritory</th>
                        <th class="col">Employee</th>
                        <th class="col">Position</th>
                    </tr>
                </thead>
                <tbody style="font-size: 13px; text-align:center;" >

                    <td>
                        <select class="form-control select2" style="width: 100%;">
                            <option selected="selected">Alabama</option>
                            <option>Alaska</option>
                            <option>California</option>
                            <option>Delaware</option>
                            <option>Tennessee</option>
                            <option>Texas</option>
                            <option>Washington</option>
                          </select>
                    </td>
                    <td>2</td>
                    <td>3</td>
                </tbody>
            </table>

          </div>

  </div>
  <!-- /.box -->


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
