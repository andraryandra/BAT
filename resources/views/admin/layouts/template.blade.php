<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>
        routeApp
    </title>
    <link rel="icon" type="image/png" href="" />
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    @yield('css')
    @include('admin.layouts.partials.css.style')
</head>
<body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">
        @include('admin.layouts.partials.header.header')
        <aside class="main-sidebar">
            <section class="sidebar">
                <div class="user-panel">
                </div>
                @include('admin.layouts.partials.sidebar.sidebar')
            </section>
        </aside>
        <div class="content-wrapper">
            @yield('breadcrumb')
            <section class="content">
                @yield('content')
            </section>
        </div>
        @include('admin.layouts.partials.footer.footer')
        <div class="control-sidebar-bg"></div>
    </div>
    @include('admin.layouts.partials.js.style')
    @yield('js')
    <script>
        $('.btn-delete').click(function(e) {
            let form = $(this).closest("form");
            e.preventDefault();
            swal({
                    title: "Maaf!",
                    text: "Data anda akan dihapus!",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                    buttons: ['Batal', 'Hapus']
                })
                .then((willDelete) => {
                    if (willDelete) {
                        form.submit();
                    }
                });
        });
    </script>
</body>

</html>
