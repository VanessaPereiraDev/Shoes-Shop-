@extends('layouts.app')

@section('title','Product Detail')

@section('content')

        <div class="container-fluid" style="width: 85%;">
                <div class="page-titles">
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="javascript:void(0)">Product</a></li>
						<li class="breadcrumb-item active"><a href="javascript:void(0)">Detail</a></li>
					</ol>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
								<div class="row">
									<div class="col-lg-12">
										<div class="card">
											<div class="card-body">
												<div class="row">
													<div class="col-xl-3 col-lg-6  col-md-6 col-xxl-5">
														<!-- Tab panes -->
														<div class="tab-content">
															<div role="tabpanel" class="tab-pane fade show active" id="first">
																<img class="img-fluid" src="images" alt="" height="200px">
															</div>
															<div role="tabpanel" class="tab-pane fade" id="second">
																<img class="img-fluid" src="images" alt="" height="200px">
															</div>
															<div role="tabpanel" class="tab-pane fade" id="third">
																<img class="img-fluid" src="images" alt="" height="200px">
															</div>
															<div role="tabpanel" class="tab-pane fade" id="for">
																<img class="img-fluid" src="img/7.jpg" alt="" height="200px">
															</div>
														</div>
														<div class="tab-slide-content new-arrival-product mb-4 mb-xl-0">
															<!-- Nav tabs -->
															<ul class="nav slide-item-list mt-3" role="tablist">
																<li role="presentation" class="show">
																	<a href="#first" role="tab" data-toggle="tab">
																		<img src="{{ url('storage/'.$product->image) }}" style="width: 240px;" alt="">
																	</a>
																</li>
																<ul>
																	<li role="presentation">
																		<a href="#second" role="tab" data-toggle="tab"><img class="img-fluid" src="images/VN0A4BUUR1Q-HERO.jpg" alt="" width="50"></a>
																	</li>
																	<li role="presentation">
																		<a href="#third" role="tab" data-toggle="tab"><img class="img-fluid" src="images/2d4ad98358fe166b8db37708cf477188.jpg" alt="" width="50"></a>
																	</li>
																	<li role="presentation">
																		<a href="#for" role="tab" data-toggle="tab"><img class="img-fluid" src="images/img01.jpg" alt="" width="50"></a>
																	</li>
																</ul>
															</ul>
														</div>
													</div>
													<!--Tab slider End-->
													<div class="col-xl-9 col-lg-6  col-md-6 col-xxl-7 col-sm-12">
														<div class="product-detail-content">
															<!--Product details-->
															<div class="new-arrival-content pr">
																<h4>{{$product->title}}</h4>
																<p class="price" style="color: #1ea7c5;" >€{{ number_format($product->price, 2) }}</p>
																<p>Availability: <span class="item"> In stock <i
																			class="fa fa-shopping-basket"></i></span>
																</p>
																<p>Code: <span class="item">{{$product->code}}</span> </p>
																<p>Product tags:&nbsp;&nbsp;
																	<span class="badge badge-success light">old school</span>
																	<span class="badge badge-success light">vans</span>
																	<span class="badge badge-success light">shoes</span>
																</p>
																<p class="text-content">Description: {{$product->description}}</p>
																<div class="filtaring-area my-3">
																	<div class="size-filter">
																		<h4 class="m-b-15">Select size</h4><br>
																		<div class="btn-group" data-toggle="buttons">
																			<label class="btn-outline-info light btn-sm"><input type="radio" class="position-absolute invisible" name="options" id="option5"> XS</label>
																			<label class="btn-outline-info light btn-sm"><input type="radio" class="position-absolute invisible" name="options" id="option1" checked>SM</label>
																			<label class="btn-outline-info light btn-sm"><input type="radio" class="position-absolute invisible" name="options" id="option2"> MD</label>
																			<label class="btn-outline-info light btn-sm"><input type="radio" class="position-absolute invisible" name="options" id="option3"> LG</label>
																			<label class="btn-outline-info light btn-sm"><input type="radio" class="position-absolute invisible" name="options" id="option4"> XL</label>
																		</div>
																	</div>
																</div>
																<!--Quantity start-->
																<div class="col-2 px-0">
																	<input type="number" name="num" class="form-control input-btn input-number" value="1">
																</div><br>
																<!--Quanatity End-->
																<div class="shopping-cart mt-3">
																	<a class="btn btn-lg btn-info" style="background-color: #1ea7c5;" href="#"><i class="fa fa-shopping-basket mr-2"></i>Add to cart</a>
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
            </div>

@endsection
