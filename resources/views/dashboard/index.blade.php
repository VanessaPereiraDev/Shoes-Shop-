{{-- Extends layout --}}
@extends('layouts.app')

@section('title',"Men's & Women's Shoes | Clothes & Backpacks")

{{-- Content --}}
@section('content')

        <div class="banner">
            <h4>ENTREGA GRÁTIS EM TODAS AS ENCOMENDAS</h4>
        </div>
        <div class="banner1">
            <h4>SALDOS DESCONTOS ATÉ 50% ARTIGOS RELACIONADOS</h4>
        </div>
        <div>
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active">
                    </li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1" class=""></li>
                        </ol>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img class="d-block w-100" src="../images/Capturar.PNG" alt="First slide">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="../images/Capturar2.PNG" alt="Second slide">
                                </div>
                            </div>
                            <a class="carousel-control-prev" href="#carouselExampleIndicators" data-slide="prev">
                                <span class="carousel-control-prev-icon"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleIndicators" data-slide="next">
                                <span class="carousel-control-next-icon"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </ol>
                    </li>
                </ol>
                <img href="#" id="img_des" src="../images/Capturar1.PNG">
            </div>
        </div>
    </div>
    <br><br><hr><br><br>
    <div class="dest">
        <div>
            <h5>ENTRA NAS TENDÊNCIAS</h5>
            <h3>DESTAQUES VANS</h3>
        </div><br>
        <div class="geral">
            <div class="dest-img">
                <div class="teste">
                    <img src="./images/FA21_66Champs_HPSecondary.jpg" alt="" class="image">
                    <div class="overlay">
                        <div class="text">
                            <p>ROUPAS</p>
                            <p style="font-family: Arial, Helvetica, sans-serif; font-size: 16px;">Das universidades americanas para o teu guarda-roupa</p>
                            <div class="category">
                                <button><a href="roupas">COMPRA AGORA</a></button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="teste">
                    <img src="./images/FA21_Backpacks_HPSecondary_4.jpg" alt="" class="image">
                    <div class="overlay">
                        <div class="text">
                            <p>MOCHILAS</p>
                            <p style="font-family: Arial, Helvetica, sans-serif; font-size: 16px;">Novos estampados, padrões e cores</p>
                            <div class="category">
                                <button><a href="mochilas">COMPRA AGORA</a></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="dest-img">
                <div class="teste">
                    <img src="./images/FA21_UltrarangeExo_HPSecondary.jpg" alt="" class="image">
                    <div class="overlay">
                        <div class="text">
                            <p>TÉNIS</p>
                            <p style="font-family: Arial, Helvetica, sans-serif; font-size: 16px;">Sempre pronto para o inesperado</p>
                            <div class="category">
                                <button><a href="category">COMPRA AGORA</a></button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="teste">
                    <img src="./images/210630-secondary-projectCat.gif" alt="" class="image">
                    <div class="overlay">
                        <div class="text">
                            <p>ACESSÓRIOS</p>
                            <p style="font-family: Arial, Helvetica, sans-serif; font-size: 16px;">Descobre as últimas novidades</p>
                            <div class="category">
                                <button><a href="accessory">COMPRA AGORA</a></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br><br><hr><br><br>
    <div class="dest">
        <div>
            <h3>OUR FAVOURITES</h3>
        </div>
        <div class="contain mt-2">
        <span>
            <a href="shopcart" class="float-right">View all</a><br><br>
        </span>
        <div id="carouselExampleFade" class="carousel slide" data-ride="carousel" >
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="row">
                        @foreach($products as $product)
                            @if($product-> category == 5)
                                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="new-arrival-product">
                                                <div class="new-arrivals-img-contnent">
                                                    <img src="{{ url('storage/'.$product->image) }}" alt="Bad"/>
                                                </div>
                                                <div class="new-arrival-content text-center mt-3">
                                                    <h3 class="text-center"><a href="{{ route('detail.show',$product->id) }}" class="text-black" style="font-family: Helvetica, sans-serif; font-size: 28px; letter-spacing: 0.3px;">{{$product->title}}</a></h3>
                                                    <p class="price text-info text-center">€ {{ number_format($product->price, 2) }}</p>
                                                    <p class="text-center">Availability: <span class="item"> In stock <i class="fa fa-check-circle text-success"></i></span></p>
                                                    <p class="text-center"> <span class="item">Id: {{$product->code}}</span> </p>
                                                    <br>
                                                    <p class="text-content text-center">Estilo sportswear.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    </div>
                </div>
            <div class="carousel-item">
                    <div class="row">
                    @foreach($products as $product)
                        @if($product-> category == 6)
                            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="new-arrival-product">
                                            <div class="new-arrivals-img-contnent">
                                                <img src="{{ url('storage/'.$product->image) }}" alt="Bad"/>
                                            </div>
                                            <div class="new-arrival-content text-center mt-3">
                                                <h3 class="text-center"><a href="{{ route('detail.show',$product->id) }}" class="text-black" style="font-family: Helvetica, sans-serif; font-size: 28px; letter-spacing: 0.3px;">{{$product->title}}</a></h3>
                                                <p class="price text-info text-center">€ {{ number_format($product->price, 2) }}</p>
                                                <p class="text-center">Availability: <span class="item"> In stock <i class="fa fa-check-circle text-success"></i></span></p>
                                                <p class="text-center"> <span class="item">Id: {{$product->code}}</span> </p>
                                                <br>
                                                <p class="text-content text-center">Estilo sportswear.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif
                    @endforeach
                    </div>
                </div>
            </div>

            <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>

        </div>
    </div>
    <br><br><br><br><br>
@endsection


