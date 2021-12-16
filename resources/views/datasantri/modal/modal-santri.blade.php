{{-- Modal tambah santri  --}}
		<div class="modal fade" id="tambahsantri" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="exampleModalLongTitle">Input Santri</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>

					<form method="POST" action="{{route('datasantri.store')}}" role="form" enctype="multipart/form-data">
						@csrf
						<div class="modal-body">
							<div class="form-group">
								<label>Jurusan</label>
                                
								<select name="id_kelas" required class="form-control">
                                <option value="">-- PILIH Jurusan --</option>
                                @foreach($kelas as $row)
                                <option value="{{$row->id}}">{{$row->nama_kelas}}</option>
                                @endforeach
                            </select>
							</div>
                            <div class="form-group">
								<label>Nama (Kelas)</label>
								<input type="text" class="form-control" required value="{{old('nama_siswa')}}" name="nama_siswa">
							</div>
							<div class="form-grup container">
                         <label style="color: red !important;">Format = <span style="color: green !important;" >
						 NAMA (Kelas)
						 </span> </label>
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