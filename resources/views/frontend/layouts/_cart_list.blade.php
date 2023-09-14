<table class="table table-bordered mb-30">
    <thead>
        <tr>
            <th scope="col"><i class="icofont-ui-delete"></i></th>
            <th scope="col">Image</th>
            <th scope="col">Product</th>
            <th scope="col">Unit Price</th>
            <th scope="col">Quantity</th>
            <th scope="col">Total</th>
        </tr>
    </thead>
    <tbody>
        @foreach(\Gloudemans\Shoppingcart\Facades\Cart::instance('shopping')->content() as $product)
        <tr>
            <th scope="row">
                <i class="icofont-close cart_delete" data-id="{{$product->rowId}}"></i>
            </th>
            <td>
                <!-- add photo -->
                <img src="{{$product->model->phot}}" alt="Product">
            </td>
            <td>
                <a href="{{route('SingleProduct',$product->model->slug)}}">{{$product->name}}</a>
            </td>
            <td>LKR{{$product->price}}</td>
            <td>
                <div class="quantity">
                    <input type="number" data-id="{{$product->rowId}}" class="qty-text" id="qty-input-{{$product->rowId}}" step="1" min="1" max="99" name="quantity" value="{{$product->qty}}">
                    <input type="hidden" data-id="{{$product->rowId}}" data-product-quantity="{{$product->model->stock}}" id="update-cart-{{$product->rowId}}">
                </div>
            </td>
            <td>{{$product->subtotal()}}</td>
        </tr>

        @endforeach

    </tbody>
</table>