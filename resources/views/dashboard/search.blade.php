@extends('layouts.app')

@section('title','Resultados da Pesquisa')

@section('content')
    <br><br>
    <div class="search-table">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h3>Resultados da pesquisa...</h3>
                </div>
            </div>
        </div><br><br>

        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif

        <table class="table table-bordered table-responsive-lg">
            <tr>
                <th>Image</th>
                <th>Title</th>
                <th>Code</th>
                <th>Description</th>
                <th>Price</th>
                <th>Id</th>
                <th>Date Created</th>
            </tr>
            @foreach ($products as $product)
                <tr>
                    <td><img src="{{ url('storage/'.$product->image) }}" alt="" style="width: 200px;"></td>
                    <td><a href="{{ route('detail.show',$product->id) }}">{{ $product->title }}</a></td>
                    <td>{{ $product->code }}</td>
                    <td>{{ $product->description }}</td>
                    <td>{{ number_format($product->price, 2) }}</td>
                    <td>{{ $product->id }}</td>
                    <td>{{ date_format($product->created_at, 'jS M Y') }}</td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection
