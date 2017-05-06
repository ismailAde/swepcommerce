@extends('master')

@section('body')
    <section class="title">
        <span class="title-text">Products</span>
    </section>

    <section class="products-frame">
        @foreach($products as $product)
            @foreach($users as $user)
                @if($product->seller_id == $user->id)
                    <div class="productlist-frame">
                        <image class="product-image" src="{{ '/storage/'.$product->picture }}"></image>
                        <div class="product-info-frame">
                            <span class="product-title"> {{ $product->title }}</span>
                            <span class="product-desc"><b>SELLER:</b> {{ $user->name }}</span>
                            <span class="product-desc desc"><b>DESCRIPTION:</b> {{ $product->description }}
                        </span>
                            <span class="product-desc product-price red"><b>PRICE:</b> #{{ $product->price }}</span>
                            <span class="contact-seller">{{ link_to_route('product_path', 'Contact Seller', $product->id, null) }}</span>
                        </div>
                    </div>
                @endif
            @endforeach
        @endforeach
        @if(sizeOf($products) == 0)
            <div class="productlist-frame-empty">
                <div class="product-info-frame-empty">
                    <span class="product-title">Product Not Found</span>
                </div>
            </div>
        @endif




    </section>

@stop