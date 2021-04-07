@extends('master')
@section('content')

    <div class="container custom-detail">
        <div class="row">
            <div class="col-sm-6">
                <img class="detail-img" src="{{ $detail['gallery'] }}" alt="{{ $detail['name'] }}">
            </div>
            <div class="col-sm-6">
                <a href="/" class="btn btn-default">Go back</a>
                <h2 class="text-bold">{{ $detail['name'] }}</h2>

                <h3 class='detail-price'>Price : ${{ $detail['price'] }}</h3>
                <h4 class='detail-price'>Details : {{ $detail['description'] }}</h3>
                <h4 class='detail-price'>Category : {{ $detail['category'] }}</h3>
                <br/><br/>
                <form action="/add_to_cart" method="POST">
                    @csrf
                    <input class="hidden" type="text" name="product_id" value="{{ $detail['id'] }}">
                    <button type="submit" class="btn btn-primary">Add to Cart</button>

                </form>
                <button class="btn btn-success">Buy Now</button>
            </div>
        </div>
    </div>
@endsection
