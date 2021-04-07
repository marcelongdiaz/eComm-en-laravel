@extends('master')
@section('content')

    <div class="container custom-product">
        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
              <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
              <li data-target="#carousel-example-generic" data-slide-to="1"></li>
              <li data-target="#carousel-example-generic" data-slide-to="2"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
                @foreach ($products as $item)
                    <div class="item product-item {{ $item['id']==1?'active':''}}">
                        <a href="detail/{{$item['id']}}">
                            <img src="{{ $item['gallery'] }}" class="slider-img">
                            <div class="carousel-caption">
                                <h3>
                                    {{ $item['name'] }}
                                </h3>
                                <p>
                                    {{ $item['description'] }}
                                </p>
                            </div>
                        </a>
                  </div>
                @endforeach
            </div>

            <!-- Controls -->
            <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
              <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
              <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
          <div class="trending-wrapper">
              <h4>Trending Products</h4>
                @foreach ($products as $item)
                    <div class="trending-item">
                        <a href="detail/{{$item['id']}}">
                            <img src="{{ $item['gallery'] }}" class="trending-img">
                            <div class="trending-caption">
                                    <h4>
                                        {{ $item['name'] }}
                                    </h4>
                            </div>
                        </a>
                    </div>
                @endforeach
          </div>

    </div>
@endsection
