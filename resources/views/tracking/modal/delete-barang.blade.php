			 <!-- Modal Add Kategori-->
             <form action="{{route('satpam.destroy', $row->id)}}" method="post">
			@csrf
			@method('DELETE')
             <div class="modal fade" id="delbarang{{$row->id}}" tabindex="-1" role="dialog" aria-hidden="true">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header no-bd">
							<h5 class="modal-title">
								<span class="fw-mediumbold">Konfirmasi Hapus Barang</span> 
							</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
							</button>
						</div>
                            <div class="modal-body">	
								<div class="row">
									<div class="col-sm-12">
										<p>Hapus Data {{$row->nama_barang}} ?</p>										
									</div>
								</div>
						    </div>
                            <div class="modal-footer no-bd">
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
                                <button type="submit"  class="btn btn-primary">Hapus</button>                                
                            </div>
					</div>
				</div>
		    </div>	
             </form>