<div class="row">
  <div class="col-12">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Tambah Event</h4>
            <form class="form-material m-t-40" method="post" action="<?php echo base_url().$action ?>">
	  <div class="form-group">
                    <label>id_event</label>
                    <input type="text" name="id_event" class="form-control" placeholder="" value="<?php echo $dataedit->id_event?>" readonly>
            </div>
	  <div class="form-group">
            <label>nama_event</label>
            <input type="text" name="nama_event" class="form-control" value="<?php echo $dataedit->nama_event?>">
    </div>
	  <div class="form-group">
            <label>tanggal_mulai</label>
            <input type="text" name="tanggal_mulai" class="form-control" value="<?php echo $dataedit->tanggal_mulai?>">
    </div>
	  <div class="form-group">
            <label>tanggal_selesai</label>
            <input type="text" name="tanggal_selesai" class="form-control" value="<?php echo $dataedit->tanggal_selesai?>">
    </div>
	  <div class="form-group">
            <label>jam_mulai</label>
            <input type="text" name="jam_mulai" class="form-control" value="<?php echo $dataedit->jam_mulai?>">
    </div>
	  <div class="form-group">
            <label>jam_selesai</label>
            <input type="text" name="jam_selesai" class="form-control" value="<?php echo $dataedit->jam_selesai?>">
    </div>
	  <div class="form-group">
            <label>kota</label>
            <input type="text" name="kota" class="form-control" value="<?php echo $dataedit->kota?>">
    </div>
	  <div class="form-group">
            <label>alamat</label>
            <input type="text" name="alamat" class="form-control" value="<?php echo $dataedit->alamat?>">
    </div>
	  <div class="form-group">
            <label>deskripsi</label>
            <input type="text" name="deskripsi" class="form-control" value="<?php echo $dataedit->deskripsi?>">
    </div>
	  <div class="form-group">
            <label>gambar</label>
            <input type="text" name="gambar" class="form-control" value="<?php echo $dataedit->gambar?>">
    </div>
	
                <div class="form-group">
                  <button type="submit" class="btn btn-success waves-effect waves-light m-r-10">Submit</button>
                </div>
            </form>
        </div>
    </div>
  </div>
</div>
