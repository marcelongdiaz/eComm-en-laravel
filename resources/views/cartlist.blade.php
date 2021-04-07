@extends('master')
@section('content')

    <div class="container custom-cartlist">

                <div class="">
                    <h4>Result of Products</h4>
                    <br/>
                    @if(count($products)!=0)
                    <a href="/ordernow" class="btn btn-success">Make Order</a><br/><br/>
                    @endif
                      @foreach ($products as $item)
                      <div class="row cartlist-divider">
                          <div class="col-sm-3">
                              <div class="image-container-small">
                                  <img src="{{ $item->gallery }}" class="trending-img">
                              </div>
                          </div>
                          <div class="col-sm-6">
                            <div class="">
                                <h3>{{ $item->name }}</h3>
                                <h5>{{ $item->description }}</h5>
                            </div>
                          </div>
                          <div class="col-sm-3 cartlist-action">
                            <a href="/cartremove/{{ $item->cart_id }}" class="btn btn-warning">Remove to Cart</a>
                          </div>
                      </div>
                      @endforeach
                      @if(count($products)==0)
                        <div class="alert alert-warning" role="alert">No items in your cart</div>
                      @endif
                </div>
    </div>
@endsection
