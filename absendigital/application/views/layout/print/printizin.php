<div class="container">
    <div class="jumbotron shadow-lg">
        <div class="text-center">
            <img src="<?= (empty($dataapp['logo_instansi'])) ? FCPATH . 'assets/img/clock-image.png' : (($dataapp['logo_instansi'] == 'default-logo.png') ? FCPATH . 'assets/img/clock-image.png' : FCPATH . 'storage/setting/' . $dataapp['logo_instansi']); ?>" style="width:20%;">
            <h3>
                <?= (empty($dataapp['nama_instansi'])) ? '[Nama Instansi Belum Disetting]' : $dataapp['nama_instansi']; ?>
            </h3>
        </div>
    </div>
    <p class="my-2">Dibawah Ini Merupakan Data Izin Yang Telah Terdata:</p>
    <div class="row detail">
        <div class="col-md-10 col-sm-8 col-6">
            <dl class="row">
                <dt class="col-sm-5">Nama Pegawai:</dt>
                <dd class="col-sm-7"><?= $dataizin['nama_lengkap'] ?></dd>
                <!-- <dt class="col-sm-5">NIP:</dt> -->
                <!-- <dd class="col-sm-7"><?= $dataizin['kode_pegawai'] ?></dd> -->
                <dt class="col-sm-5">Divisi:</dt>
                <dd class="col-sm-7"><?= $dataizin['divisi'] ?></dd>
                <dt class="col-sm-5">Jenis Izin:</dt>
                <dd class="col-sm-7"><?= $dataizin['jenis_izin'] ?></dd>
                <dt class="col-sm-5">Tanggal Izin:</dt>
                <dd class="col-sm-7"><?= $dataizin['tanggal_izin'] ?></dd>
                <dt class="col-sm-5">Tanggal Masuk:</dt>
                <dd class="col-sm-7"><?= $dataizin['tanggal_masuk'] ?></dd>
            </dl>
        </div>
    </div>
    <div>
        <table width="100%" class="text-center">
            <tr>
                <td width="100px">Atas Nama</td>
                <td width="150px" height="150px">&nbsp;</td>
                <td width="100px">Menyetujui</td>
            </tr>
            <tr>
                <td><?= $dataizin['nama_lengkap'] ?></td>
                <td>&nbsp;</td>
                <td>Ary Sitepu</td>
            </tr>
        </table>
    </div>
    <!-- <div class="small text-right" style="margin-top: 30px;">
        PDF was generated on <?= date("Y-m-d H:i:s"); ?>
    </div> -->
</div>