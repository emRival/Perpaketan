{{-- Modal tambah santri  --}}
		<div class="modal fade" id="tambahkelas" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="exampleModalLongTitle">Input Jurusan</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>

					<form method="POST" action="{{route('jurusan.store')}}" role="form" enctype="multipart/form-data">
						@csrf

						<div class="modal-body">
							<div class="form-group">
								<label>Jurusan</label>
                                
								<input type="text" required class="form-control"  name="nama_kelas">
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