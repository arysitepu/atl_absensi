<html>

<head>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>

	<script lang="javascript" src="<?= base_url() ?>assets/js/xlsx.full.min.js"></script>
	<script lang="javascript" src="<?= base_url() ?>assets/js/FileSaver.js"></script>
	<title>Laporan Absensi - (<?= $periode ?>)</title>
</head>

<body>
	<div class="row col-12 mx-auto justify-content-md-center mb-5" style="display:none;">
		<table class="table table-striped table-bordered data font12" id="dataTableExport" width="100%">
			<thead>
                <tr>
                    <td colspan="7"><h3>Laporan Absensi - (<?= $periode ?>)</h3></td>
                </tr>
				<tr>
					<th  align="center" width="1%">No</th>
					<th  align="center" width="49%">Nama Pegawai</th>
					<th  align="center" width="10%">Hadir</th>
					<th  align="center" width="10%">Cuti</th>
					<th  align="center" width="10%">Sakit</th>
					<th  align="center" width="10%">Absen</th>
					<th  align="center" width="10%">Total</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach($res as $key => $row): ?>
                <tr>
                    <td align="center"><?= $key + 1 ?></td>
                    <td><?= $row['nama_lengkap'] ?></td>
                    <td align="center"><?= $row['hadir'] ?></td>
                    <td align="center"><?= $row['cuti'] ?></td>
                    <td align="center"><?= $row['sakit'] ?></td>
                    <td align="center"><?= $row['absen'] ?></td>
                    <td align="center"><?= $row['all'] ?></td>
                </tr>
				<?php endforeach; ?>
			</tbody>
		</table>
	</div>

	<script>
        $(document).ready(function() {
            var wb = XLSX.utils.table_to_book(document.getElementById('dataTableExport'), {
                sheet: "Sheet Utama"
            });
            var wbout = XLSX.write(wb, {
                bookType: 'xls',
                bookSST: true,
                type: 'binary'
            });
                function s2ab(s) {
                var buf = new ArrayBuffer(s.length);
                var view = new Uint8Array(buf);
                for (var i = 0; i < s.length; i++) view[i] = s.charCodeAt(i) & 0xFF;
                return buf;
            }
            saveAs(new Blob([s2ab(wbout)], {
                type: "application/octet-stream"
            }), 'Laporan Absensi - <?= $res[0]['nama_lengkap'] ?> (<?= $periode ?>).xls');
        });
    </script>
</body>

</html>
