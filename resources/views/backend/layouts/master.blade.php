<!doctype html>
<html lang="en">

<head>
    @include('backend.layouts.head');

</head>

<body class="theme-blue">

    <!-- Page Loader -->
    <div class="page-loader-wrapper">
        <div class="loader">
            <div class="m-t-30"><img src="{{asset('backend/assets/images/loading.gif')}}" width="48" height="48" alt="Lucid"></div>
            <p>Please wait...</p>
        </div>
    </div>
    <!-- Overlay For Sidebars -->

    <div id="wrapper">

        @include('backend.layouts.nav');

        @include('backend.layouts.sidebar');


        @yield('content')


    </div>

    @include('backend.layouts.footer')

    <script>
        $(document).ready(function() {
            var path = "{{route('autosearch')}}";
            $('#search_text').autocomplete({
                source: function(request, response) {
                    $.ajax({
                        url: path,
                        dataType: "JSON",
                        data: {
                            term: request.term
                        },
                        success: function(data) {
                            response(data);
                        }
                    });
                },
                minLength: 1,
            });
        });
    </script>

</body>

</html>