{{-- Modal tambah santri  --}}
<div class="modal fade" id="editbarangmusyrif{{$row->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLongTitle">Edit Barang</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>

			<form method="POST" action="{{route('musyrif.update', $row->id)}}" role="form" enctype="multipart/form-data">
				@csrf
				@method('PUT')

				<div class="modal-body" style="text-align: left !important;">
					<input type="hidden" class="form-control" name="tanggal_input" value="">

					@livewire('dynamic-select',['kelas' =>$row->kelas->id, 'siswa' =>$row->siswa->id])
					<div class="form-group">
						<label>Nama Barang</label>
						<input type="text" class="form-control" required value="{{$row->nama_barang}}" name="nama_barang">
					</div>
					<div class="container">
						<div class="row">
							<div class="form-group col-md-6">
								<label>Ekspedisi</label>
								<input type="text" class="form-control" required value="{{$row->ekspedisi}}" name="ekspedisi">
							</div>
							<div class="form-group col-md-6">
								<label>Status</label>
								<select class="form-control" required name="status">
									<option value="{{$row->status}}">@if ($row->status == 'satpam' )
														<span>POS SATPAM</span>
														@elseif ($row->status == 'musyrif')
														<span>RUANG MUSYRIF</span>
														@else
														<span>DIAMBIL</span>
														@endif</option>
									<option value="selesai">DIAMBIL</option>
								</select>
							</div>
						</div>
					</div>



					<!-- /.card-body -->

					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
						<button type="submit" class="btn btn-primary">Update</button>
					</div>
				</div>
			</form>

		</div>
	</div>
</div>
{{-- End Modal Edit Barang  --}}