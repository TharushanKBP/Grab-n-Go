@include('frontend.layouts.head')

<header id="header-ajax">
    @include('frontend.layouts.header')
</header>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            @include('frontend.layouts.notification')
        </div>
    </div>
</div>

@yield('content')


@include('frontend.layouts.footer')

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script>
    $(document).on('click', '.cart_delete', function(e) {
        e.preventDefault();
        var cart_id = $(this).data('id');

        var token = "{{csrf_token()}}";
        var path = "{{route('cart.delete')}}";

        $.ajax({
            url: path,
            type: "POST",
            dataType: "JSON",
            data: {
                cart_id: cart_id,
                _token: token,
            },
            success: function(data) {
                console.log(data);

                if (data['status']) {
                    $('body #header-ajax').html(data['header']);
                    $('body #cart-counter').html(data['cart_count']);
                    swal({
                        title: "Good job!",
                        text: data['message'],
                        icon: "success",
                        button: "OK",
                    });
                }
            },
            error: function(err) {
                console.log(err);
            }
        });
    });
</script>