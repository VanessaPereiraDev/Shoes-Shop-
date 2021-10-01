@extends('layouts.app')

@section('title','Favourites')

@section('content')
        <div class="banner">
            <h4>ENTREGA GRÁTIS EM TODAS AS ENCOMENDAS</h4>
        </div>
        <div class="banner1">
            <h4>SALDOS DESCONTOS ATÉ 50% ARTIGOS RELACIONADOS</h4>
        </div>
    <br><br>
    <div class="container-fluid" style="width: 90%;">
        <div class="page-titles">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">{{ __('Shoes Shop') }}</a></li>
                <li class="breadcrumb-item active"><a href="javascript:void(0)">{{ __('Favourites') }}</a></li>
            </ol>
        </div>

        <div class="row">
            @if (Auth::user()->wishlist->count() )
                @foreach ($wishlists as $wishlist)
                    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="new-arrival-product">
                                    <div class="new-arrivals-img-contnent">
                                        <img class="img-fluid" src="{{ url('storage/'.$wishlist->product->image) }}" alt="">
                                    </div>
                                    <div class="new-arrival-content text-center mt-3">
                                        <h4><a href="{{ route('detail.show',$wishlist->product->id) }}">{{$wishlist->product->title}}</a></h4>
                                        <span class="price">€ {{$wishlist->product->price}}</span>
                                    </div>
                                    <form action="{{ route('wishlist.destroy', $wishlist->id)}}" method="post">
                                        {{ csrf_field() }}
                                        @method('DELETE')
                                        <div class="alin">
                                            <button class="wish" type="submit">
                                                <i class="fa fa-heart"></i>
                                            </button>
                                        </div>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            @endif
        </div>
    </div>
@endsection
