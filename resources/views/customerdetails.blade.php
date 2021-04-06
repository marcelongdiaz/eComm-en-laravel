@extends('master')
@section('content')

    <div class="container custom-product">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Address</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($customer as $item)
                    <tr>
                        <td>{{ $item['name'] }}</td>
                        <td>{{ $item['email'] }}</td>
                        <td>{{ $item['address'] }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
