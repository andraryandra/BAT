@extends('admin.layouts.template')

@section('title', 'dashboard')

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
<div class="row">
              <div class="col-lg-4 col-6">
                <!-- small box -->
                <div class="small-box bg-primary">
                  <div class="inner">
                    <h3>53</h3>
                    <p>Jumlah Route</p>
                  </div>
                  <div class="icon">
                    <i class="ion ion-stats-bars text-white"></i>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-6">
                <div class="small-box bg-primary">
                  <div class="inner">
                    <h3>{{ $users_count ?? "0" }}</h3>
                    <p>Jumlah Users</p>
                  </div>
                  <div class="icon">
                    <i class="ion ion-person-add text-light"></i>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-6">
                <div class="small-box bg-primary">
                  <div class="inner">
                    <h3>65</h3>
                    <p>Jumlah customer</p>
                  </div>
                  <div class="icon">
                    <i class="ion ion-pie-graph text-light"></i>
                  </div>
                </div>
              </div>
            </div>
          <div class="row">
          <div class="col-md-12">
            <div class="card card-primary bg-primary" style="border-radius: 10px;">
              <form>
                <div class="card-body">
                    <div class="form-group">
                     <div class="text-center">
                      <div class="custom-file">
                        <input type="file" class="upload btn btn-warning w-50" id="exampleInputFile">
                      </div>
                      </div>
                      </div>
                     <div class="text-center">
                      <button type="submit" class="btn btn-primary" style="margin-bottom: 5vh">Upload Template</button>
                      </div>
                  </div>
                </div>
              </form>
            </div>
          </div>



@endsection

@section('js')

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
