@extends('master')

@section('body')

    <section class="title">
        <span class="title-text">{{ $user->username }}</span>
    </section>

    <section class="profile-frame">
        <div class="profile-col-1">
            <div class="profile-image">

            </div>
        </div>
        <div class="profile-col-2">
            <span class="profile-data name"><span class="profile-tag">Name </span>{{ $user->name }}</span>
            <span class="profile-data contact"><span class="profile-tag">Contact No </span> +234{{ $user->phone_no }}</span>
            <span class="profile-data alt-contact"><span class="profile-tag">Alternative Contact No </span> +234{{ $user->alt_phone_no }}</span>
            <span class="profile-data address"><span class="profile-tag">Address </span> {{$user->address}} </span>
            <span class="profile-data email"><span class="profile-tag">E-mail </span> {{ $user->email }} </span>
        </div>
    </section>



    <!-- User Products -->
    <section class="title grey-bg">
        <span class="title-text">My Products</span>
    </section>
    <section class="products-frame">
        @foreach($products as $product)
            <div class="productlist-frame">
                <image class="product-image" src="{{ '/storage/'.$product->picture }}"></image>
                    <div class="product-info-frame">
                        <span class="product-title">{{ $product->title }}</span>
                        <span class="product-desc"><b>SELLER:</b> {{ $user->name }}</span>
                        <span class="product-desc desc"><b>DESCRIPTION:</b>{{ $product->description }}</span>
                        <span class="product-desc product-price red"><b>PRICE:</b> #{{ $product->price }}.00</span>
                        {{ link_to_route('delete_product_path', 'Delete Product', ['productId'=>$product->id, 'userId'=>$user->id], ['class'=>'contact-seller delete-button']) }}
                        {{ link_to_route('edit_product_path', 'Edit Product', $product->id, ['class'=>'contact-seller']) }}
                    </div>
            </div>
        @endforeach
                <div class="productlist-frame-empty">
                    <div class="product-info-frame-empty">
                        @if(count($products) == 0)
                            <span class="product-title">No Products Yet</span>
                        @endif
                        <span class="add-product">{{ link_to_route('add_product_path', 'Add Product', ['id'=>$user->id], null) }}</span>
                    </div>
                </div>
    </section>


@stop