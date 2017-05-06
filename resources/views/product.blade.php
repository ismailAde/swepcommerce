@extends('master')

@section('body')

    <section class="title">
        <span class="title-text">Product</span>
    </section>

    <section class="products-frame">
        <div class="productshow-frame">
            <image class="product-image" src="{{ '/storage/'.$product->picture }}"></image>
                <div class="product-info-frame">
                    <span class="product-title">{{ $product->title }}</span>
                    <span class="product-desc"><b>SELLER:</b> {{ $seller->name }} </span>
                    <span class="product-desc desc"><b>DESCRIPTION:</b> {{ $product->description }}</span>
                    <span class="product-desc"><b>Email:</b> {{ $seller->email }}</span>
                    <span class="product-desc"><b>Phone No:</b> +234{{ $seller->phone_no }} </span>
                    <span class="product-desc"><b>Alternative Phone No:</b> +234{{ $seller->alt_phone_no }} </span>
                    <span class="product-desc"><b>Address:</b> {{ $seller->address }}</span>
                    <span class="product-desc"><b>Product Location:</b> {{ $product->location }}</span>
                    <span class="product-desc product-price red"><b>PRICE: #</b> {{ $product->price }}.00</span>
                    <!--span class="contact-seller"><a href="">Contact Seller</a></span-->
                </div>
        </div>
    </section>


@stop