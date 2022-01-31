<div class="container-fluid">
    <h1 class="my-4"><span class="fas fa-user-tie mr-2"></span>Data Izin Pegawai</h1>
    <div class="card mb-4">
        <div class="card-header">
            <div class="float-right">
                <button class="btn btn-success" data-toggle="modal" data-target="#addIzinPegawai" id="pgwadduser"><span class="fas fa-plus mr-1"></span>Buat Form Izin</button>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-striped table-hover" id="dataizinpegawai" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Pegawai</th>
                            <!-- <th>Nip</th>  -->
                            <th>Divisi</th>
                            <th>Jenis Izin</th>
                            <th>Tanggal Izin</th>
                            <th>Tanggal Masuk</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td></td>
                        </tr>
                    </tbody>
                </table>

            </div>
        </div>
    </div>
</div>

<!-- Modal Add Pegawai -->
<div class="modal fade" id="addIzinPegawai" tabindex="-1" role="dialog" aria-labelledby="addIzinPegawai" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-center" id="addIzinPegawailabel"><span class="fas fa-user-plus mr-1"></span>Form Izin</h5>
            </div>
            <div class="modal-body">
                <?= form_open_multipart('#', ['id' => 'addizin']) ?>
                <div class="form-group row">
					<label for="nama" class="col-sm-4 col-form-label">Pegawai <span class="text-danger">***</span></label>
					<div class="col-sm-8">
                        <select class="form-control select2 required" name="nama" id="nama" style="width: 100%;">
                            <option value="">- Pilih Pegawai -</option>
                            <?php foreach ($pegawai as $k => $val): ?>
                            <option value="<?= $val['id_pegawai'] ?>">
                                <?= $val['nama_lengkap'] ?></option>
                            <?php endforeach; ?>
                        </select>       

                        <!-- yang sebelumnya -->
                            
						<!-- <select class="form-control select2 required" name="nama" id="nama" style="width: 100%;">
							<option value="">- Pilih Pegawai -</option>
							<?php foreach ($pegawai as $k => $val): ?>
							<option value="<?= $val['id_pegawai'] ?>">
								<?= $val['kode_pegawai']. ' - ' .$val['nama_lengkap'] ?></option>
							<?php endforeach; ?>
						</select>		 -->
                        
                        <!-- batas yang sebelumnya -->

                    </div>
				</div>

                <!-- <div class="form-group row">
                    <label for="username_pegawai" class="col-sm-4 col-form-label">NIP</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="username_pegawai" name="nip" readonly>
                    </div>
                </div> -->
                 <div class="form-group row">
                    <label for="username_pegawai" class="col-sm-4 col-form-label">Divisi</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="username_pegawai" name="divisi">
                    </div>
                </div>
                  <div class="form-group row">
                    <label for="jenis_izin" class="col-sm-4 col-form-label">Jenis Izin</label>
                    <div class="col-sm-8">
                        <?= form_dropdown('jenis_izin', ['' => 'Pilih Jenis Izin', 'Sakit' => 'sakit', 'Cuti' => 'cuti'], set_value('jenis_izin'), 'class="form-control" id="jenis_izin"'); ?>
                    </div>
                </div>
                
                 <div class="form-group row">
                    <label for="jabatan_pegawai" class="col-sm-4 col-form-label">Tanggal Izin</label>
                    <div class="col-sm-8">
                        <input type="date" class="form-control" id="jabatan_pegawai" name="tanggal_izin">
                    </div>
                </div> 
                  <div class="form-group row">
                    <label for="jabatan_pegawai" class="col-sm-4 col-form-label">Tanggal Masuk</label>
                    <div class="col-sm-8">
                        <input type="date" class="form-control" id="jabatan_pegawai" name="tanggal_masuk">
                    </div>
                </div> 
                
                
                <div class="my-2" id="info-data"></div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal"><span class="fas fa-times mr-1"></span>Batal</button>
                <button type="submit" class="btn btn-primary" id="addpgw-btn"><span class="fas fa-plus mr-1"></span>Simpan</button>
            </div>
            </form>
        </div>
    </div>
</div>

<!-- Modal Print  Absen -->
<div class="modal fade" id="printizinmodal" tabindex="-1" role="dialog" aria-labelledby="printizinmodal" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-center" id="printizinmodallabel"><span class="fas fa-print mr-1"></span>Print izin</h5>
            </div>
            <div class="modal-body">
                <div id="printdataizin"></div>
            </div>
            <div class="modal-footer">
                <a class="btn btn-primary btn-print-direct" title="Cetak Izin" target="_blank"><span class="fas fa-window-maximize mr-1"></span>Open In New tab</a>
                <button type="button" class="btn btn-danger" data-dismiss="modal"><span class="fas fa-times mr-1"></span>Tutup</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal Edit Pegawai -->
<div class="modal fade" id="editizinmodal" tabindex="-1" role="dialog" aria-labelledby="editizinmodal" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-center" id="editizinmodallabel"><span class="fas fa-user-edit mr-1"></span>Edit Izin</h5>
            </div>
            <div class="modal-body">
                <div id="editdataizin"></div>
            </div>
        </div>
    </div>
</div>

