@extends('master')

@section('body')
    @if(!is_integer($SellerId) && $SellerId=='pic')
        <section class="notification grey-bg">
            <span class="title-text">Product Image Not Selected</span>
        </section>
    @endif
    <div class="product-form-frame">
        {{ Form::open(['route'=>'create_product_path', 'method'=>'POST', 'files'=>true]) }}
            {{ Form::hidden('sellerId', $SellerId) }}
            <span class="create-product-header">Create Product</span>


            {{ Form::text('title', null, ['class' => 'product-form product-form-title', 'placeholder'=>'Product Title']) }}
            {!! $errors->first('title', '<span class="error">* :message</span>') !!}

            {{ Form::text('price', null, ['class' => 'product-form product-form-title', 'placeholder'=>'Price']) }}
            {!! $errors->first('price', '<span class="error">* :message</span>') !!}

            {{ Form::text('location', null, ['class' => 'product-form product-form-title', 'placeholder'=>'Product location']) }}
            {!! $errors->first('location', '<span class="error">* :message</span>') !!}

            {{ Form::file('picture', ['class' => 'product-form product-form-picture']) }}
            {!! $errors->first('picture', '<span class="error">* :message</span>') !!}

            {{ Form::text('tags', null, ['class' => 'product-form product-form-tags', 'placeholder'=>'Tags separated by space']) }}
            {!! $errors->first('tags', '<span class="error">* :message</span>') !!}

            {{ Form::select('status', ['in stock'=>'In Stock', 'out of stock'=>'Out of Stock'], ['class' => 'product-form product-form-title']) }}

            {{ Form::textarea('description', null, ['class' => 'product-form product-form-desc', 'placeholder'=>'Product Description']) }}
            {!! $errors->first('description', '<span class="error">* :message</span>') !!}

            {{ Form::submit('Create Product', ['class' => 'product-form product-form-submit']) }}
        {{ Form::close() }}
    </div>
@stop
