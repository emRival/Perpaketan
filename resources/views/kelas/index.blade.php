@extends('template')

@section('title')
Halaman Input Jurusan
@endsection

@section('head')
Data Jurusan
@endsection

@section('content')

<div class="content">
	<div class="page-inner">
		<div class="page-header">
			<h4 class="page-title">@yield('title')</h4>
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
					<a href="#">@yield('title')</a>
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
								<button type="button" class="btn btn-primary btn-round ml-auto" data-toggle="modal" data-target="#tambahkelas">
									<i class="fa fa-plus"></i> &nbsp;
									Jurusan
								</button>
							</a>
							@include('kelas.modal.modal-index')
						</div>
					</div>
					<div class="card-body">

						<div class="table-responsive">
							<div id="add-row_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4">
								<div class="row">
									<div class="col-sm-12 col-md-6">

									</div>
									<div class="col-sm-12 col-md-6">
										<form class="form" method="get" action="#">
											<div id="add-row_filter" class="dataTables_filter">
												<label>Search:</label>
												<input type="text" name="cari" class="form-control form-control-sm" placeholder="" aria-controls="add-row">
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
													<th class="sorting" style="width: 167.797px;">Jurusan</th>
													<th style="width: 122.344px;" class="sorting">Action</th>
												</tr>
											</thead>
											<tbody>
												@forelse ($kelas as $row)
												<tr role="row" class="odd text-center">
													<td>{{ $loop->iteration + $kelas->perpage() * ($kelas->currentPage() - 1) }}</td>
													<td>{{$row->nama_kelas}}</td>
													<td>
														<div class="form-button-action">

															<a data-target="#editkelas{{$row->id}}" data-toggle="modal" class="btn btn-link btn-primary btn-lg" data-original-title="Edit Task">
																<i class="fa fa-edit"></i>
															</a>
															@include('kelas.modal.edit-kelas')
															<form action="{{route('jurusan.destroy', $row->id)}}" method="post">
																@csrf
																@method('DELETE')
																<button type="submit" title="Delete"  class="btn btn-link btn-danger" data-original-title="Remove" onclick="return confirm('Hapus Data  {{$row->nama_kelas}}?')">
																	<i class="fa fa-times"></i>
																</button>
															</form>
														</div>
													</td>
												</tr>
												@empty
												<tr>
													<td colspan="3" class="text-center">Data Kosong</td>
												</tr>
												@endforelse
												<!--  -->
											</tbody>
										</table>
										<div class="justfy-content-start">
											<div class="dataTables_paginate paging_simple_numbers mt-2" id="add-row_paginate">
												{{ $kelas->links('pagination::bootstrap-4') }}
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