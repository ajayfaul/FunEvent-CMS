<div class="row">
  <div class="col-12">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Tambah Event</h4>
            <form class="form-material m-t-40" method="post" action="<?php echo base_url().$action ?>">
	  <div class="form-group">
            <label>nama_event</label>
            <input type="text" name="nama_event" class="form-control" placeholder="">
    </div>
	  <div class="form-group">
            <label>tanggal_mulai</label>
            <input type="text" name="tanggal_mulai" class="form-control" placeholder="">
    </div>
	  <div class="form-group">
            <label>tanggal_selesai</label>
            <input type="text" name="tanggal_selesai" class="form-control" placeholder="">
    </div>
	  <div class="form-group">
            <label>jam_mulai</label>
            <input type="text" name="jam_mulai" class="form-control" placeholder="">
    </div>
	  <div class="form-group">
            <label>jam_selesai</label>
            <input type="text" name="jam_selesai" class="form-control" placeholder="">
    </div>
	  <div class="form-group">
            <label>kota</label>
            <input type="text" name="kota" class="form-control" placeholder="">
    </div>
	  <div class="form-group">
            <label>alamat</label>
            <input type="text" name="alamat" class="form-control" placeholder="">
    </div>
	  <div class="form-group">
            <label>deskripsi</label>
            <input type="text" name="deskripsi" class="form-control" placeholder="">
    </div>
	  <div class="form-group">
            <label>gambar</label>
            <input type="text" name="gambar" class="form-control" placeholder="">
    </div>
	    <input type="hidden" name="id_event" /> 
	
                <div class="form-group">
                  <button type="submit" class="btn btn-success waves-effect waves-light m-r-10">Submit</button>
                </div>
            </form>
        </div>
    </div>
  </div>
</div>
