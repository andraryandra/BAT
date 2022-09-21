@extends('admin.layouts.template')

@section('title', 'Customer to Route' )

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
<table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>No</th>
                <th>Trade Approach</th>
                <th>Teritory</th>
                <th>Customer ID</th>
                <th>Customer Name</th>
                <th>Order</th>
                <th>Customer Name</th>
                <th>Route</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td><a href="{{ url('teritory') }}" style="text-decoration: none">MDN_DSS022</a></td>
                <td><a href="{{ url('teritory') }}" style="text-decoration: none">MDN_DSS022</a></td>
                <td><a href="{{ url('teritory') }}" style="text-decoration: none">2910</a></td>
                <td><a href="{{ url('teritory') }}" style="text-decoration: none">1281102</a></td>
                <td><a href="{{ url('teritory') }}" style="text-decoration: none">1281102</a></td>
                <td><a href="{{ url('teritory') }}" style="text-decoration: none">1281102</a></td>
                <td><a href="{{ url('teritory') }}" style="text-decoration: none">1281102</a></td>
                <td>
                    <button class="btn-sm btn-warning">Edit</button>
                    <button class="btn-sm btn-danger">Delete</button>
                </td>
            </tr>
        </tbody>
    </table>
    <input type="file" class="upload btn btn-primary mb-2" name="" id="">
    <br>
    <button type="submit" class="btn-sm btn-success mt-2">submit</button>
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
