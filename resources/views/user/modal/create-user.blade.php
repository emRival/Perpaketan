{{-- Modal tambah santri  --}}
<div class="modal fade" id="adduser" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Input Barang</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <form method="POST" action="{{route('createuser')}}" role="form" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <div class="form-group">
                        <label>Nama :</label>
                        <input type="text" required class="form-control" name="name">
                    </div>
                    <div class="form-group">
                        <label>Email :</label>
                        <input type="email" required class="form-control" name="email">
                    </div>
                    <div class="form-group">
                        <label>Role</label>
                        <select class="form-control" required name="role">
                            <option value="">-- Pilih Status --</option>
                            <option value="Admin">ADMIN</option>
                            <option value="Satpam">SATPAM</option>
                            <option value="Musyrif">MUSYRIF</option>
                        </select>
                    </div>
                    <div class="form-grup container">
                         <label style="color: red !important;">Default Password : 1234 </label>
                    </div>
                   
                </div>




                

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Tambah</button>
                </div>
            </form>

        </div>
    </div>
</div>

{{-- End Modal Edit Produk  --}}