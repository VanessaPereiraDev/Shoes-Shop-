@extends('layouts.app')

@section('title','Product Detail')

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
                <li class="breadcrumb-item active"><a href="javascript:void(0)">{{ __('Product Detail') }}</a></li>
            </ol>
        </div>
        <div class="row">
            @csrf
            @method('patch')
		        <div class="col-lg-12">
					<div class="card">
						<div class="card-body">
                            <div class="row">
								<div class="col-xl-3 col-lg-6 col-md-6 col-xxl-10">
									<div class="tab-content">
										<div role="tabpanel" class="tab-pane fade show active" id="first">
											<img class="img-fluid" src="{{ url('storage/'.$product->image) }}" alt="" height="200px">
                                        </div>
                                        <!-- FAVOURITES -->
                                        <form action="{{route('wishlist.store')}}" id="contact_form" method="post">
                                            {{csrf_field()}}
                                            <input class="esconder" name="user_id" type="text" value="{{Auth::user()->id}}" />
                                            <input class="esconder" name="product_id" type="text" value="{{$product->id}}" />
                                            <button type="submit" class="add-to-cart">
                                                <i class="fa fa-heart"></i> ADD TO FAVOURITES
                                            </button>
                                        </form>
									</div>
								</div>
                                <div class="col-xl-9 col-lg-6  col-md-6 col-xxl-7 col-sm-12">
									<div class="product-detail-content">
										<div class="new-arrival-content pr">
											<h4>{{$product->title}}</h4>
											<p class="price text-info">€ {{ number_format($product->price, 2) }}</p>
											<p>Availability: <span class="item"> In stock <i class="fa fa-shopping-basket"></i></span></p>
											<p>ID: <span class="item">{{$product->code}}</span> </p>
											<p>Product tags:&nbsp;&nbsp;
												<span class="badge badge-success light">old school</span>
												<span class="badge badge-success light">vans</span>
												<span class="badge badge-success light">shoes</span>
											</p>
											<p class="text-content">{{$product->description}}</p>
												<div class="filtaring-area my-3">
													<div class="size-filter">
														<h4 class="m-b-15">Select size</h4>
														<div class="btn-group" data-toggle="buttons">
															<label class="btn-outline-info light btn-sm"><input type="radio" class="position-absolute invisible" name="options" id="option5"> XS</label>
															<label class="btn-outline-info light btn-sm"><input type="radio" class="position-absolute invisible" name="options" id="option1" checked>SM</label>
															<label class="btn-outline-info light btn-sm"><input type="radio" class="position-absolute invisible" name="options" id="option2"> MD</label>
															<label class="btn-outline-info light btn-sm"><input type="radio" class="position-absolute invisible" name="options" id="option3"> LG</label>
															<label class="btn-outline-info light btn-sm"><input type="radio" class="position-absolute invisible" name="options" id="option4"> XL</label>
														</div>
													</div>
												</div>
												<div class="col-2 px-0">
													<input type="number" name="num" class="form-control input-btn input-number" value="1">
												</div>
                                                 <!-- SHOPCART -->
												<div class="btn-group" style="margin-top:10px;">
                                                    <input type="number" value="1" min="1" max="100">
                                                    <button class="add-to-cart" type="submit" class="btn btn-sm btn-outline-secondary"
                                                            data-id="{{$product->id}}" data-name="{{$product->title}}" data-price="{{$product->price}}">
                                                            ADD TO CART
                                                    </button>
                                                </div><br><br>

                                                <br>
                                            </div>
										</div>
									</div>
                                </div>
						    </div>
						</div>
					</div>
				</div>
			</div>
        </div>
    </div>
    </div>
    </div>
    </div>
@endsection

