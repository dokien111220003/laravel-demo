<div class="row total-header-section">
    <div class="col-lg-6 col-sm-6 col-6">
        <i class="fa fa-shopping-cart" aria-hidden="true"></i> <span class="badge badge-pill badge-danger">{{ count((array) $cart) }}</span>
    </div>

    <?php $total = 0 ?>
    @foreach((array) $cart as $id => $details)
        <?php $total += $details['price'] * $details['quantity'] ?>
    @endforeach

    <div class="col-lg-6 col-sm-6 col-6 total-section text-right">
        <p>Total: <span class="text-info">$ {{ $total }}</span></p>
    </div>
</div>

@if($cart)
    @foreach($cart as $id => $details)
        <div class="row cart-detail">
            <div class="col-lg-4 col-sm-4 col-4 cart-detail-img">
                <img src="{{ asset('images/'.$details['image']) }}" />
            </div>
            <div class="col-lg-8 col-sm-8 col-8 cart-detail-product">
                <p>{{ $details['name'] }}</p>
                <span class="price text-info"> ${{ $details['price'] }}</span> <span class="count"> Quantity:{{ $details['quantity'] }}</span>
            </div>
        </div>
    @endforeach
@endif
<div class="row">
    <div class="col-lg-12 col-sm-12 col-12 text-center checkout">
        <a href="{{ url('product/cart') }}" class="btn btn-primary btn-block">View all</a>
    </div>
</div>