<div>
    
<div class="form-group">

    <label>Jurusan</label>
    <select class="form-control" wire:model="kelas" name="id_kelas">
        <option selected>-- Pilih Jurusan --</option>
        @foreach($kelass as $row)
        <option value="{{$row->id}}">{{$row->nama_kelas}}</option>

        @endforeach
    </select>
</div>

<div class="form-group">
    <label>Nama (Kelas)</label>
    <select class="form-control" wire:model="siswa" name="id_siswa">
        <option selected >-- Nama (Kelas) --</option>
        @foreach($siswas as $siswa)
        <option value="{{$siswa->id}}">{{$siswa->nama_siswa}}</option>

        @endforeach
    </select>
</div>

</div>