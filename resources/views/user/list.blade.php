<link href="{{ asset('css/style.css') }}" rel="stylesheet">

@extends('layouts.app')

@section('title','Users List')

@section('content')
        <div class="banner">
            <h4>ENTREGA GRÁTIS EM TODAS AS ENCOMENDAS</h4>
        </div>
        <div class="banner1">
            <h4>SALDOS DESCONTOS ATÉ 50% ARTIGOS RELACIONADOS</h4>
        </div>
        <br>
            <div class="container-fluid" style="width:85%;">
                <div class="page-titles">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Shop</a></li>
                        <li class="breadcrumb-item active"><a href="javascript:void(0)">Customers</a></li>
                    </ol>
                </div>
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
                    <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-sm mb-0 table-striped">
                                        <thead>
                                            <tr>
                                                <th class=" pr-3">
													<div class="custom-control custom-checkbox mx-2">
														<input type="checkbox" class="custom-control-input" id="checkAll">
														<label class="custom-control-label" for="checkAll"></label>
													</div>
                                                </th>
                                                <th>Id</th>
                                                <th>Name</th>
                                                <th>E-mail Address</th>
                                                <th>Nif</th>
                                                <th>Joined</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($users as $user)
                                            <tr>
                                                <td class="py-2">
                                                    <div class="custom-control custom-checkbox mx-2">
														<input type="checkbox" class="custom-control-input" id="checkbox1">
														<label class="custom-control-label" for="checkbox1"></label>
													</div>
                                                </td>
                                                <td class="py-2">{{ $user->id }}</td>
                                                <td class="py-2">{{ $user->name }}</td>
                                                <td class="py-2">{{ $user->email }}</td>
                                                <td class="py-2">{{ $user->nif }}</td>
                                                <td class="py-2">{{ $user->created_at }}</td>
                                                <td class="py-2">
                                                    <div class="dropdown"><button class="tp-btn-light sharp" style="border: none;" type="button" data-toggle="dropdown"><span class="fs--1"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><circle fill="#000000" cx="5" cy="12" r="2"></circle><circle fill="#000000" cx="12" cy="12" r="2"></circle><circle fill="#000000" cx="19" cy="12" r="2"></circle></g></svg></span></button>
                                                        <div class="dropdown-menu dropdown-menu-right border py-0">
                                                            <div class="py-2" style="height:75px;">
                                                                <form action="{{ route('user.destroy', $user->id)}}" method="post">
                                                                    {{ csrf_field() }}
                                                                    @method('DELETE')
                                                                    <div class="alin">
                                                                        <button class="btn btn-danger" type="submit">Delete</button>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                    <br><br>
                                    <div class="row justify-content-center">
                                        {{ $users->links()}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br><br><br>
@endsection
