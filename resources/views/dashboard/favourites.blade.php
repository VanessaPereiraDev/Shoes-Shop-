@extends('layouts.app')

@section('title','My Favourites')

@section('content')
        <div class="banner2">
            <h4>SIGN UP TO OUR NEWSLETTER</h4>
        </div>
        <div class="tudo">
                <div class="container-fluid" style="margin-top:8px;">
                    <div class="fav">
                        <h1>FAVORITOS</h1>
                        <p>A mostrar: 1 resultado</p>
                    </div>
                    <div class="but-fav">
                        <button><h1>INICIAR SESSÃO PARA GUARDAR</h1></button>
                    </div>
                   <br><br>
                    <div class="row" style="margin-left: 120px;">
                        @foreach($products as $product)
                            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
                                <div class="card">
                                    <div class="card-body">
                                        <!-- Icon Favourites -->
                                        <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" class="hide">
                                            <defs>
                                                <symbol id="eye" viewBox="0 0 16 16">
                                                    <path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z"/>
                                                </symbol>

                                                <symbol id="eye-slash" viewBox="0 0 16 16">
                                                    <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z"/>
                                                </symbol>
                                            </defs>
                                        </svg>
                                        <div id="icon">
                                            <svg width="20" height="20" fill="currentColor" style="margin-left:290px">
                                                <use href="#eye"></use>
                                            </svg>
                                        </div>

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

    <!-- Required vendors -->
    <script src="./vendor/global/global.min.js"></script>
	<script src="./vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
    <script src="./js/custom.min.js"></script>
	<script src="./js/deznav-init.js"></script>

    <script src="./vendor/highlightjs/highlight.pack.min.js"></script>
    <!-- Circle progress -->

@endsection
