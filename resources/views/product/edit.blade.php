@extends('layouts.app')

@section('title','Edit Product')

@section('content')

            <div class="container-fluid" style="width: 85%;">
                <div class="page-titles">
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="javascript:void(0)">Editar</a></li>
						<li class="breadcrumb-item active"><a href="javascript:void(0)"><p style="color: #1EA7C5;">Produto</p></a></li>
					</ol>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                            <form method="POST" action="{{ route('products.update', $product->id )}}" enctype="multipart/form-data">
                                @csrf

                                @method('patch')

                                <div class="row">
                                    <div class="col-xl-3 col-lg-6  col-md-6 col-xxl-5 ">
                                        <div class="tab-content">
                                            <div role="tabpanel" class="tab-pane fade show active" id="first">
                                                <img class="img-fluid" src="{{asset('storage/'. $product->image)}}" alt="">
                                            </div>
                                        </div><br>
                                        <div class="tab-slide-content new-arrival-product mb-4 mb-xl-0">
											<div class="input-group">
												<div class="custom-file">
                                                    <label class="custom-file-label">Choose file</label>
                                                    <input type="file" class="custom-file-input form-control @error('image') is-invalid @enderror" name="image">

                                                        @error('image')

                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
												</div>
											</div>
                                        </div>
                                    </div>
                                    <div class="col-xl-9 col-lg-6  col-md-6 col-xxl-7 col-sm-12">
                                        <div class="product-detail-content">
                                            <div class="new-arrival-content pr">
                                                <h4>{{ __('Title') }}</h4>
												<div class="col-10 px-0">
													<input type="text" class="form-control input-btn @error('title') is-invalid @enderror" name="title" value="{{ old('title', $product->title) }}" required autocomplete="title">

                                                    @error('title')

                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror

                                                </div>
												<br>
												<h4>{{ __('Description') }}</h4>
												<div class="col-10 px-0">
													<input type="text" class="form-control input-btn @error('description') is-invalid @enderror" name="description" value="{{ old('description', $product->description) }}" required autocomplete="description">

                                                    @error('description')

                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror

                                                </div>
												<br>
												<h4>{{ __('Price') }}</h4>
												<div class="col-10 px-0">
													<input type="number" class="form-control input-btn input-number @error('price') is-invalid @enderror" name="price" value="{{ old('price', $product->price) }}" required autocomplete="price">

                                                    @error('price')

                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror

                                                </div><br><br>
                                                <div class="shopping-cart mt-3">
                                                    <button type="submit" class="btn edita">
                                                        {{ __('Update') }}
                                                    </button>
													<a class="btn cancela" href="{{ url('products') }}">Back to List</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

@endsection
