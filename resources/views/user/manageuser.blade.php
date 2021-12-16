@extends('template')

@section('title')
Manage User
@endsection

@section('head')
Manage User
@endsection

@section('content')

<div class="content">
    <div class="page-inner">
        <div class="page-header">
            <h4 class="page-title">Manage User</h4>
            <ul class="breadcrumbs">
                <li class="nav-home">
                    <a href="{{route('dashboard')}}">
                        <i class="flaticon-home"></i>
                    </a>
                </li>
            </ul>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="d-flex align-items-center justify-content-between">
                            <h4 class="card-title">@yield('head')</h4>

                            <button type="button" class="btn btn-primary btn-round ml-auto" data-toggle="modal" data-target="#adduser">
                                <i class="fa fa-plus"></i> &nbsp;
                                User
                            </button>

                            @include('user.modal.create-user')
                        </div>
                    </div>
                    <div class="card-body">

                        <div class="table-responsive">
                            <div id="add-row_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4">
                                <div class="row">
                                    <div class="col-sm-12 col-md-6">

                                    </div>
                                    <div class="col-sm-12 col-md-6">
                                        <form class="form" method="get" action="">
                                            <div id="add-row_filter" class="dataTables_filter">
                                                <label>Search:</label>
                                                <input type="text" required name="cari" class="form-control form-control-sm" placeholder="" aria-controls="add-row">
                                                <button type="submit" class="btn btn-info btn-sm">Cari</button>
                                            </div>
                                        </form>
                                    </div>

                                </div>

                                <div class="row">

                                    <div class="col-sm-12">
                                        <table id="add-row" class="display table table-striped table-hover dataTable" role="grid" aria-describedby="add-row_info">
                                            <thead>
                                                <tr style="text-align: center;" role="row">
                                                    <th class="sorting" style="width: 167.797px;">No</th>
                                                    <th class="sorting" style="width: 167.797px;">Nama Petugas</th>
                                                    <th class="sorting" style="width: 167.797px;">Role</th>
                                                    <th style="width: 122.344px;" class="sorting">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>


                                                @forelse($users as $user)
                                                <tr role="row" class="odd text-center">
                                                    <td>{{ $loop->iteration + $users->perpage() * ($users->currentPage() - 1) }}</td>
                                                    <td>{{$user->name}}</td>
                                                    <td class="">{{$user->role}}</td>
                                                    <td>
                                                        <div class="form-button-action">

                                                            <a data-target="#detailuser{{$user->id}}" data-toggle="modal" data-id="row->id" data-nama_kategori="row->nama_kategori" title="Detail User" class="btn btn-link btn-primary btn-lg" data-original-title="Edit Task">
                                                                <i class="fas fa-eye"></i>
                                                            </a>
                                                            @include('user.modal.detailuser')
                                                            <a data-target="#resetpassword{{$user->id}}" data-toggle="modal" data-id="row->id" data-nama_kategori="row->nama_kategori" title="Reset Password" class="btn btn-link btn-primary btn-lg" data-original-title="Edit Task">
                                                                <i style="color: orange !important;" class="fas fa-lock-open"></i>
                                                            </a>
                                                            @include('user.modal.resetpassword')
                                                            <button data-target="#deluser{{$user->id}}" data-toggle="modal" title="Delete" class="btn btn-link btn-danger" data-original-title="Remove">
                                                                <i class="fa fa-times"></i>
                                                            </button>

                                                            @include('user.modal.del-user')

                                                        </div>
                                                    </td>
                                                </tr>
                                                @empty
                                                <tr>
                                                    <td class="text-center" colspan="8">Tidak Ada Paket Yang Masuk</td>
                                                </tr>

                                                @endforelse

                                                <!--  -->
                                            </tbody>
                                        </table>
                                        <div class="justfy-content-start">
                                            <div class="dataTables_paginate paging_simple_numbers mt-2" id="add-row_paginate">
                                                {{ $users->links('pagination::bootstrap-4') }}
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