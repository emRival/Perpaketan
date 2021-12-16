@extends('template')

@section('title')
Pos Satpam
@endsection

@section('head')
Pos Satpam
@endsection

@section('content')

<div class="content">
    <div class="page-inner">
        <div class="page-header">
            <h4 class="page-title">Tracking Barang</h4>
            <ul class="breadcrumbs">
                <li class="nav-home">
                    <a href="{{route('dashboard')}}">
                        <i class="flaticon-home"></i>
                    </a>
                </li>
                <li class="separator">
                    <i class="flaticon-right-arrow"></i>
                </li>
                <li class="nav-item">
                    <a href="#">Pos Satpam</a>
                </li>
            </ul>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="d-flex align-items-center justify-content-between">
                            <h4 class="card-title">@yield('head')</h4>
                            <a href="#">
                                <button type="button" class="btn btn-primary btn-round ml-auto" data-toggle="modal" data-target="#addbarang">
                                    <i class="fa fa-plus"></i> &nbsp;
                                    Barang
                                </button>
                            </a>
                            @include('tracking.modal.modal-satpam')
                        </div>
                    </div>
                    <div class="card-body">

                        <div class="table-responsive">
                            <div id="add-row_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4">
                                <div class="row">
                                    <div class="col-sm-12 col-md-6">

                                    </div>
                                    <div class="col-sm-12 col-md-6">
                                        <form class="form" method="get" action="{{route('cari.satpam')}}">
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
                                                    <th class="sorting" style="width: 167.797px;">Tanggal</th>
                                                    <th class="sorting" style="width: 167.797px;">Jurusan</th>
                                                    <th class="sorting" style="width: 167.797px;">Nama (Kelas)</th>
                                                    <th class="sorting" style="width: 167.797px;">Nama Barang</th>
                                                    <th class="sorting" style="width: 167.797px;">Ekspedisi</th>
                                                    <th class="sorting" style="width: 167.797px;">Status</th>
                                                    <th style="width: 122.344px;" class="sorting">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>

                                                @forelse($barang as $row)

                                                <tr role="row" class="odd text-center">
                                                    <td>{{ $loop->iteration + $barang->perpage() * ($barang->currentPage() -1) }}</td>
                                                    <td>{{$row->tanggal_input}}</td>
                                                    <td class="">{{$row->kelas->nama_kelas}}</td>
                                                    <td class="">{{$row->siswa->nama_siswa}}</td>
                                                    <td class="">{{$row->nama_barang}}</td>
                                                    <td class="">{{$row->ekspedisi}}</td>
                                                    <td class="">
                                                        @if ($row->status == 'satpam' )
                                                        <span class="badge bg-warning" style="color: white;"><i class="fas fa-store-alt"></i> POS SATPAM</span>
                                                        @elseif ($row->status == 'musyrif')
                                                        <span class="badge bg-primary" style="color: white;"><i class="fas fa-boxes"></i> RUANG MUSYRIF</span>
                                                        @else
                                                        <span class="badge bg-success" style="color: white;"><i class="fas fa-box-open"></i> SELESAI</span>
                                                        @endif
                                                    </td>
                                                    <td>
                                                        <div class="form-button-action">
                                                            @if(Auth::user()->role == 'Admin' || Auth::user()->role == 'Satpam')
                                                            <a data-target="#editbarang{{$row->id}}" data-toggle="modal" data-id="row->id" data-nama_kategori="row->nama_kategori" title="Edit" class="btn btn-link btn-primary btn-lg" data-original-title="Edit Task">
                                                                <i class="fa fa-edit"></i>
                                                            </a>
                                                            @include('tracking.modal.modal-edit')
                                                            <button data-target="#delbarang{{$row->id}}" data-toggle="modal" title="Delete" class="btn btn-link btn-danger" data-original-title="Remove">
                                                                <i class="fa fa-times"></i>
                                                            </button>
                                                            @endif
                                                            @include('tracking.modal.delete-barang')
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
                                                {{ $barang->links('pagination::bootstrap-4') }}
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