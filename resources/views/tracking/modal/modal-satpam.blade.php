{{-- Modal tambah santri  --}}
<div class="modal fade" id="addbarang" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLongTitle">Input Barang</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>

			<form method="POST" action="{{route('satpam.store')}}" role="form" enctype="multipart/form-data">
				@csrf

				<div class="modal-body">
				@livewire('dynamic-select')
					<div class="form-group">
						<label>Nama Barang</label>

						<input type="text" required class="form-control" name="nama_barang">
					</div>
					<div class="container">
					<div class="row">
						<div class="form-group col-md-6">
							<label>Ekspedisi</label>

							<input type="text" required class="form-control" name="ekspedisi">
						</div>
						<div class=" form-group col-md-6">
							<label>Status</label>
							<select class="form-control" required id="status" name="status">
								<option value="">-- Pilih Status --</option>
								<option value="satpam">POS SATPAM</option>
								<option value="musyrif">RUANG MUSYRIF</option>
								<option value="selesai">DIAMBIL</option>
							</select>
						</div>
					</div>	
					</div>
					

				</div>
				<!-- /.card-body -->

				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
					<button type="submit" class="btn btn-primary">Tambah</button>
				</div>
			</form>

		</div>
	</div>
</div>
{{-- End Modal Edit Produk  --}}