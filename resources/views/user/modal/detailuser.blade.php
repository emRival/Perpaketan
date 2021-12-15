{{-- Modal tambah santri  --}}
<div class="modal fade" id="detailuser{{$user->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle" style="font-weight: 900;">Detail User</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>



            <div class="modal-body" style="text-align: left !important;">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6" style="font-weight: 700;">
                            <h5>Nama :</h5>
                        </div>
                        <div class="col-md-6">
                            <h5>{{$user->name}}</h5>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6" style="font-weight: 700;">
                            <h5>Email :</h5>
                        </div>
                        <div class="col-6">
                            <h5>{{$user->email}}</h5>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6" style="font-weight: 700;">
                            <h5>Role :</h5>
                        </div>
                        <div class="col-6">
                            <h5 style="color: white;">
                                @if ($user->role == 'Admin' )
                                <span class="badge bg-primary" style="color: white;">ADMIN</span>
                                @elseif ($user->role == 'Musyrif')
                                <span class="badge bg-warning" style="color: white;">MUSYRIF</span>
                                @else
                                <span class="badge bg-success" style="color: white;">SATPAM</span>
                                @endif

                            </h5>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>


        </div>
    </div>
</div>
{{-- End Modal Edit Barang  --}}