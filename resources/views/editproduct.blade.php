@extends('master')

@section('body')

    <div class="product-form-frame">
        {{ Form::open(['route'=>'update_product_path', 'method'=>'POST', 'file'=>'true']) }}
            {{ Form::hidden('id', $product->id, null) }}
            {{ Form::hidden('seller_id', $product->seller_id, null) }}
            <span class="create-product-header">Edit Product</span>

            {{ Form::text('title', $product->title, ['class' => 'product-form product-form-title']) }}
            {!! $errors->first('title', '<span class="error">* :message</span>') !!}

            {{ Form::text('price', $product->price.'.00', ['class' => 'product-form product-form-title']) }}
            {!! $errors->first('price','<span class="error">* :message</span>') !!}

            {{ Form::file('picture', ['class' => 'product-form product-form-picture']) }}
            {!! $errors->first('picture', '<span class="error">* :message</span>') !!}

            {{ Form::text('location', $product->location, ['class' => 'product-form product-form-title']) }}
            {!! $errors->first('location', '<span class="error">* :message</span>') !!}

            {{ Form::text('tags', $product->tags, ['class' => 'product-form product-form-tags']) }}
            {!! $errors->first('tags', '<span class="error">* :message</span>') !!}

            {{ Form::select('status', ['in stock'=>'In Stock', 'out of stock'=>'Out of Stock'], ['class' => 'product-form product-form-title']) }}

            {{ Form::textarea('description', $product->description, ['class' => 'product-form product-form-desc']) }}
            {!! $errors->first('description', '<span class="error">* :message</span>') !!}

            {{ Form::submit('Done', ['class' => 'product-form product-form-submit']) }}
        {{ Form::close() }}
    </div>
@stop
