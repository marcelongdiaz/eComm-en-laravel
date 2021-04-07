@extends('master')
@section('content')

    <div class="container custom-ordernow">
        <div class="row">
            <div class="col-sm-10 col-sm-offset-1">
                @if($total==0)
                    <div class="alert alert-warning" role="alert">No items in your cart</div>
                @else
                    <table class="table table-striped">
                        <tbody>
                        <tr>
                            <td>Amount</td>
                            <td>$ {{ $total }}</td>
                        </tr>
                        <tr>
                            <td>Tax</td>
                            <td>$ 0</td>
                        </tr>
                        <tr>
                            <td>Delivery</td>
                            <td>$ 10</td>
                        </tr>
                        <tr>
                            <td>Total amount</td>
                            <td>$ {{$total+10}}</td>
                        </tr>

                        </tbody>
                    </table>
                    <form action="/orderplace" method="POST">
                        @csrf
                        <div class="form-group">
                        <textarea required name="address" class="form-control" placeholder="Enter your address..."></textarea>
                        </div>
                        <div class="form-group">
                        <label for="exampleInputFile">Payment Method</label>
                        <br>
                        <input type="radio" name="payment" value="cash" id="cod" required> <label for="cod" class="text-normal" > Cash on Delivery </label>
                        <br>
                        <br>
                        <input type="radio" name="payment" value="cash" id="emi" required> <label for="emi" class="text-normal" > EMI payment </label>
                        <br>
                        <br>
                        <input type="radio" name="payment" value="cash" id="op" required> <label for="op" class="text-normal" > Online payment </label>
                        </div>

                        @if($total!=0)
                            <button type="submit" class="btn btn-success">Order Now</button>
                        @endif
                    </form>
                @endif
            </div>
        </div>
    </div>
@endsection
