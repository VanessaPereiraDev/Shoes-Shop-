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
    <div class="container-fluid" style="width: 90%;">
        <div class="page-titles">
            <div class="float-right cart-hover">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart" viewBox="0 0 16 16">
                    <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                </svg>
                <a href="{{url('cart')}}"><span id="items-in-cart">0</span> items in cart</a>
            </div>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">{{ __('Shoes Shop') }}</a></li>
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
            @if ($products->count() == 0)
            <tr>
                <td colspan="5">No products to display.</td>
            </tr>
            @endif
            <?php $count = 0; ?>
            @foreach ($products as $product)
                @if ($count % 4 == 0)
                    <div class="row">
                @endif
                    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="new-arrival-product">
                                    <div class="new-arrivals-img-contnent">
                                        <img src="{{url('storage/'.$product->image)}}" alt="Bad">
                                    </div>
                                    <div class="new-arrival-content text-center mt-3">
                                        <h4><a href="{{ route('products.show',$product->id) }}" class="text-black">{{ $product->title }}</a></h4>
                                        <p class="price" style="font-size:16px; margin-bottom:0px">€ {{ number_format($product->price, 2) }}</p>
                                        <a href=""><p><u>Mais cores</u></p></a>
                                        <!--<button class="add-to-cart" type="button" data-id="{{$product->id}}" style="margin-top:20px;" data-name="{{$product->name}}" data-price="{{$product->price}}">ADICIONAR AO CARRINHO</button>-->
                                        <div class="btn-group" style="margin-top:10px;">
                                            <input type="number" value="1" min="1" max="100">
                                            <button class="add-to-cart" type="submit" class="btn btn-sm btn-outline-secondary"
                                                    data-id="{{$product->id}}" data-name="{{$product->title}}" data-price="{{$product->price}}">
                                                    Add to Cart
                                            </button>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @if ($count % 4 == 3)
                    </div>
                @endif
                <?php $count++; ?>
            @endforeach

            <div style="margin-top: 40px; margin-left: 600px; margin-bottom: 70px;">
                {{ $products->links()}}
            </div>
            <br><br><br>
        </div>

    @endsection

    @section('footer-scripts')
    <script>
        $(document).ready(function() {
            window.cart = <?php echo json_encode($cart) ?>;

            updateCartButton();

            $('.add-to-cart').on('click', function(event){

                var cart = window.cart || [];
                cart.push({'id':$(this).data('id'), 'name':$(this).data('name'), 'price':$(this).data('price'), 'qty':$(this).prev('input').val()});
                window.cart = cart;

                $.ajax('/shopcart/add-to-cart', {
                    type: 'POST',
                    data: {"_token": "{{ csrf_token() }}", "cart":cart},
                    success: function (data, status, xhr) {

                    }
                });

                updateCartButton();
            });
        })

        function updateCartButton() {

            var count = 0;
            window.cart.forEach(function (item, i) {

                count += Number(item.qty);
            });

            $('#items-in-cart').html(count);
        }
    </script>

    <script>document.getElementById("demo").innerHTML = "My First JavaScript";</script>

    @endsection
