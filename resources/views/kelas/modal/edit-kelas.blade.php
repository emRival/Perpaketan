{{-- Modal tambah santri  --}}
		<div class="modal fade" id="editkelas{{$row->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="exampleModalLongTitle">Edit Jurusan</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>

					<form method="POST" action="{{route('jurusan.update', $row->id)}}" role="form" enctype="multipart/form-data">
						@csrf
						@method('PUT')

						<div class="modal-body" style="text-align: left !important;">
							<div class="form-group">
								<label>Jurusan</label>
								<!-- <input type="hidden" class="form-control" id="id" name="id" value=""> -->
								<input type="text" required class="form-control" value="{{$row->nama_kelas}}" name="nama_kelas">
							</div>
						</div>
						<!-- /.card-body -->

						<div class="modal-footer">
							<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
							<button type="submit" class="btn btn-primary">Edit</button>
						</div>
					</form>

				</div>
			</div>
		</div>
		{{-- End Modal Edit Produk  --}}