@extends('layouts.app')

@section('title','Products List')

@section('content')
        <div class="banner">
            <h4>ENTREGA GRÁTIS EM TODAS AS ENCOMENDAS</h4>
        </div>
        <div class="banner1">
            <h4>SALDOS DESCONTOS ATÉ 50% ARTIGOS RELACIONADOS</h4>
        </div>
            <br><br>
            <div class="container-fluid" style="width:90%;">
                <div class="page-titles">

                    <div class="float-right">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart" viewBox="0 0 16 16">
                            <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                        </svg>
                            <span id="items-in-cart">0</span> items in cart
                    </div>

					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="javascript:void(0)">{{ __('Layout') }}</a></li>
						<li class="breadcrumb-item active"><a href="javascript:void(0)">{{ __('Products List') }}</a></li>
					</ol>

                    @if(session()->has('success'))
                    <div class="alert alert-success">
                        {{ session()->get('success') }}
                    </div>
                    @endif
                    @if(session()->has('error'))
                        <div class="alert alert-danger">
                            {{ session()->get('error') }}
                        </div>
                    @endif

                </div>
                <div class="row">
                    @foreach($products as $product)
                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
                            <div class="card">
                                <div class="card-body">
                                    <div class="new-arrival-product">
                                        <div class="dropdown"><button class="btn btn-primary tp-btn-light sharp" type="button" data-toggle="dropdown"><span class="fs--1"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><circle fill="#000000" cx="5" cy="12" r="2"></circle><circle fill="#000000" cx="12" cy="12" r="2"></circle><circle fill="#000000" cx="19" cy="12" r="2"></circle></g></svg></span></button>
                                            <div class="dropdown-menu dropdown-menu-right border bg-light py-2 px-2">
                                                <div class="py-4">
                                                    <a class="btn edita"  href="{{ route('products.edit',$product->id) }}">Edit</a>
                                                    <form action="{{ route('products.destroy', $product->id)}}" method="post">
                                                        {{ csrf_field() }}
                                                        @method('DELETE')
                                                        <button class="btn apaga" type="submit">Delete</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="new-arrivals-img-contnent">
                                            <img src="{{url('storage/'.$product->image)}}" alt="Bad">
                                        </div>
                                        <div class="new-arrival-content text-center mt-3">
                                            <h4><a href="{{ route('products.show',$product->id) }}" class="text-black">{{ $product->title }}</a></h4>
                                            <span class="price" style="font-size:16px;">€ {{ number_format($product->price, 2) }}</span>
                                            <a href=""><p><u>Mais cores</u></p></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <br><br>
            <div class="row justify-content-center">
                {{ $products->links()}}
            </div>
            <br><br>
@endsection
