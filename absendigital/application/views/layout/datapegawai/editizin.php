<?= form_open_multipart('#', ['id' => 'editizin']) ?>
<input type="hidden" name="id_edit" id="id_edit" value="<?= $dataizin['id'] ?>">
<div class="form-group row">
    <label for="nama_edit" class="col-sm-4 col-form-label">Pegawai <span class="text-danger">***</span></label>
    <div class="col-sm-8">
        <select class="form-control required" name="nama_edit" id="nama_edit" style="width: 100%;">
            <option value="">- Pilih Pegawai -</option>
            
            <?php 

            foreach ($pegawai as $k => $val): 
                    if ( $dataizin['nama'] == $val['id_pegawai']) {
                        echo '<option value="'.$val['id_pegawai'].'" selected>'.'  '.$val['nama_lengkap'].'</option>';
                    }else{
                        echo '<option value="'.$val['id_pegawai'].'" >'.'  '.$val['nama_lengkap'].'</option>';
                    }
                endforeach;
                // foreach ($pegawai as $k => $val): 
                //     if ( $dataizin['nama'] == $val['id_pegawai']) {
                //         echo '<option value="'.$val['id_pegawai'].'" selected>'.$val['kode_pegawai'].' - '.$val['nama_lengkap'].'</option>';
                //     }else{
                //         echo '<option value="'.$val['id_pegawai'].'" >'.$val['kode_pegawai'].' - '.$val['nama_lengkap'].'</option>';
                //     }
                // endforeach;

            ?>
        </select>
    </div>
</div>

<div class="form-group row">
    <label for="divisi_edit" class="col-sm-4 col-form-label">Divisi</label>
    <div class="col-sm-8">
        <input type="text" class="form-control" id="divisi_edit" name="divisi_edit" value="<?= $dataizin['divisi'] ?>">
    </div>
</div>

<div class="form-group row">
    <label for="jenis_izin_edit" class="col-sm-4 col-form-label">Jenis Izin</label>
    <div class="col-sm-8">
        <?= form_dropdown('jenis_izin_edit', ['' => 'Pilih Jenis Izin', 'Sakit' => 'sakit', 'Cuti' => 'cuti'], set_value('jenis_izin_edit', $dataizin['jenis_izin']), 'class="form-control" id="jenis_izin_edit"'); ?>
    </div>
</div>

<div class="form-group row">
    <label for="tanggal_izin_edit" class="col-sm-4 col-form-label">Tanggal Izin</label>
    <div class="col-sm-8">
        <input type="date" class="form-control" id="tanggal_izin_edit" name="tanggal_izin_edit" value="<?= $dataizin['tanggal_izin'] ?>">
    </div>
</div>
<div class="form-group row">
    <label for="tanggal_masuk_edit" class="col-sm-4 col-form-label">Tanggal Masuk</label>
    <div class="col-sm-8">
        <input type="date" class="form-control" id="tanggal_masuk_edit" name="tanggal_masuk_edit" value="<?= $dataizin['tanggal_masuk'] ?>">
    </div>  
</div>
<div class="my-2" id="info-edit"></div>
<div class="modal-footer">
    <button type="button" class="btn btn-danger" data-dismiss="modal"><span class="fas fa-times mr-1"></span>Batal</button>
    <button type="submit" class="btn btn-primary" id="editizin-btn"><span class="fas fa-pen mr-1"></span>Edit</button>
</div>
</form>
<script>
     $(".select2").select2();
</script>