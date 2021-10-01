@extends('layouts.app')

@section('title','Homem')

@section('content')
        <div class="banner">
            <h4>ENTREGA GRÁTIS EM TODAS AS ENCOMENDAS</h4>
        </div>
        <div class="banner1">
            <h4>SALDOS DESCONTOS ATÉ 50% ARTIGOS RELACIONADOS</h4>
        </div>
    <div class="tudo">
        <div class="container-leftt">
            <p style="color: #589bc6; font-size: 13px">Vans <span class="diferent">/ Wild Patchwork</span></p>
            <div>
                <h1>WILD PATCHWORK</h1>
                <p style="font-size: 14px;">Mostrando 13 resultados</p>
            </div>
            <div class="filter-group">
                <h2>Categoria</h2>
                <div class="filter-options">
                    <ul>
                        <a href="roupas"><li>Roupas</li></a>
                        <a href="mochilas"><li>Mochilas</li></a>
                        <a href="category"><li>Calçado</li></a>
                        <a href="accessory"><li>Acessórios</li></a>
                    </ul>
                </div>
            </div>
            <span class="trac">----------------------</span>
            <div class="filter-group">
                <h2>Gender</h2>
                <div class="filter-options">
                    <ul>
                        <a href="woman"><li>Mulher</li></a>
                        <a href="man"><li>Homem</li></a>
                    </ul>
                </div>
            </div>
            <span class="trac">----------------------</span>
            <div class="filter-group">
                <h2>Product type</h2>
                <div class="filter-options">
                    <ul>
                        <a href="t-shirt"><li>T-Shirts</li></a>
                        <a href="meias"><li>Meias</li></a>
                        <a href="camisola"><li>Camisolas</li></a>
                        <a href="camisa"><li>Camisas</li></a>
                        <a href="casaco"><li>Casacos</li></a>
                        <a href="vestido"><li>Vestidos</li></a>
                        <a href="calças"><li>Calças e calções</li></a>
                        <a href="tenis"><li>Ténis</li></a>
                        <a href="chinelos"><li>Chinelos e sandálias</li></a>
                        <a href="mochila"><li>Mochilas</li></a>
                        <a href="malas"><li>Malas e bolsas</li></a>
                        <a href="acessorios"><li>Acessórios</li></a>
                    </ul>
                </div>
            </div>
            <span class="trac">----------------------</span>
            <div class="filter-group">
                <h2>Silhouette</h2>
                <div class="filter-options">
                    <ul>
                        <li>Sk8</li>
                        <li>Sapatilhas baixas</li>
                        <li>Meias</li>
                        <li>Camisolas</li>
                        <li>Camisas</li>
                        <li>Ténis Bota</li>
                        <li>More</li>
                    </ul>
                </div>
            </div>
            <span class="trac">----------------------</span>
            <div class="filter-group">
                <h2>Cor</h2>
                <div class="filter-options">
                    <ul>
                        <li>Preto</li>
                        <li>Castanho</li>
                        <li>Bege</li>
                        <li>Multicor</li>
                        <li>Vermelho</li>
                    </ul>
                </div>
            </div>
            <span class="trac">----------------------</span>
            <div class="filter-group">
                <h2>Tamanho</h2>
                <div class="filter-number">
                    <p> 34.5 | 35 | 36 | 36.5 | 37 <br>38 | 38.5 | 39 | 40 | 40.5
                        <br>41 | 42 | 42.5 | 43 | 44 |
                        <br>44.5 | 45 | 46 | 47
                    </p>
                </div>
            </div>
            <span class="trac">----------------------</span>
        </div>

                <div class="container-fluid" style="width:75%; margin-top:1%;">
                    <div class="page-titles">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Shoes Shop</a></li>
                            <li class="breadcrumb-item active"><a href="javascript:void(0)">Homem</a></li>
                        </ol>
                    </div>
                    <div class="row">
                        @foreach ($products as $product)
                            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="new-arrival-product">
                                            <div class="new-arrivals-img-contnent">
                                                <img class="img-fluid" src="{{ url('storage/'.$product->image) }}" alt="">
                                            </div>
                                            <div class="new-arrival-content text-center mt-3">
                                                <h4><a href="{{ route('detail.show',$product->id) }}">{{$product->title}}</a></h4>
                                                <span class="price">€ {{ number_format($product->price, 2) }}</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
        </div>
        <br><br><br><br>

@endsection
