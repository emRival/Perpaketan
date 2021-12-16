{{-- Modal tambah santri  --}}

<div class="modal fade" id="editsantri{{$row->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLongTitle">Edit Santri</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>

			<form method="POST" action="{{route('datasantri.update', $row->id)}}" role="form" enctype="multipart/form-data">
				@csrf
				@method('PUT')

				<div class="modal-body" style="text-align: left !important;">
					<div class="form-group">
						<label>Kelas</label>
						<select name="id_kelas" required class="form-control">
							<option value="{{ $row->id_kelas }}">{{ $row->kelas->nama_kelas }}</option>
							@foreach ($kelas as $k)
							<option value="{{ $k->id }}">{{ $k->nama_kelas }}</option>
							@endforeach
						</select>
					</div>
					<div class="form-group">
						<label>Nama</label>
						
						<input type="text" value="{{$row->nama_siswa}}" required  name="nama_siswa"  placeholder="Update" class="form-control">
					
					</div>





				</div>
				<!-- /.card-body -->

				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
					<button type="submit" class="btn btn-primary">Update</button>
				</div>
			</form>

		</div>
	</div>
</div>
{{-- End Modal Edit Produk  --}}