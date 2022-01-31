<style>
	@media print {
		body * {
			visibility: hidden;
		}

		#section-to-print,
		#section-to-print * {
			visibility: visible;
		}

		#section-to-print {
			position: absolute;
			left: 0;
			top: -170px;
			width:100%;
		}
	}

</style>
<div class="container-fluid">
	<h1 class="my-4"><span class="fas fa-user-tie mr-2"></span><?= $title ?></h1>
	<div class="card mb-4">
		<div class="card-header">
			<div class="form-inline">
				<div class="form-group mx-sm-3 mb-2">
					<input type="month" class="form-control" id="first" name="first" value="<?= date('Y-m') ?>">
				</div>
				<!-- <div class="form-group mx-sm-3 mb-2">
					<input type="month" class="form-control" id="last" name="last" value="2021-11-30">
				</div> -->
				<button type="button" class="btn btn-info mb-2" id="btnProses">Proses</button>
				<button type="button" class="btn btn-info float-right mb-2 ml-3" id="btnCetakExcel"> <i
						class="fa fa-file-excel"></i></button>
				<button type="button" class="btn btn-info float-right mb-2 ml-3" id="btnCetakPrint"> <i
						class="fa fa-print"></i></button>
			</div>
		</div>
		<div class="card-body" id="section-to-print">
			<div class="textLap py-3">
				<h3 class="text-center">Laporan Absensi - </h3>
			</div>
			<div class="table-responsive">
				<table class="table table-striped table-hover" id="tblLapAbsensi" width="100%" cellspacing="0">
					<thead>
						<tr>
							<th>No</th>
							<th>Nama Pegawai</th>
							<th>Hadir</th>
							<th>Cuti</th>
							<th>Sakit</th>
							<th>Absen</th>
							<th>Total</th>
						</tr>
					</thead>
					<tbody></tbody>
				</table>

			</div>
		</div>
	</div>
</div>

<script>
	$("#btnCetakExcel").hide();
	$(".textLap").hide();
	$("#btnCetakPrint").hide();
	$(document).ready(function () {
		$("#tblLapAbsensi").dataTable()
		$("#btnProses").click(function () {
			let first = $("#first").val();
			let last = $("#last").val();
			getDataAbsen(first, last);
		})

		$("#btnCetakExcel").click(function () {
			let first = $("#first").val();
			let url = '<?= base_url(); ?>laporan/export_excel/'+first;
			window.open(url, url);
		})
		$("#btnCetakPrint").click(function () {
			$('#tblLapAbsensi').DataTable().destroy();

			var date = new Date($('#first').val());
			// var month = date.getMonth() + 1;
			var year = date.getFullYear();
			let textTanggal = date.toLocaleString('default', {
				month: 'long'
			});
			textTanggal += ' ' + year;
			$(".textLap h3").append(textTanggal);

			// printDiv('cardPrint');
			$(".textLap").show();
			window.print();
			$(".textLap").hide();
			$('#tblLapAbsensi').dataTable();
		})
	})

	function printDiv(divID) {
		//Get the HTML of div
		var divElements = document.getElementById(divID).innerHTML;
		//Get the HTML of whole page
		var oldPage = document.body.innerHTML;
		//Reset the page's HTML with div's HTML only
		temp =
			"<html><head><title></title></head><body>" +
			divElements + "</body>";
		//Print Page
		$(".textLap").show();
		var x = window.open();
		x.document.open();
		x.document.write(temp);
		window.print(divElements);
		x.document.close();
		// //Restore orignal HTML
		// // document.body.innerHTML = oldPage;
		// $(".textLap").hide();
		// $('body').html(oldPage)
	}

	function getDataAbsen(first, last) {
		$.ajax({
			url: '<?= base_url("laporan/getDataAbsen") ?>',
			data: {
				first: first,
				last: last
			},
			method: "POST",
			dataType: "json",
			success: function (res) {
				// console.log(res);
				if (res) {
					console.log(res);
					let html = '';
					let r = 1;

					for (let i = 0; i < res.length; i++) {
						html += `
                        <tr>
							<td>` + r++ + `</td>
							<td>` + res[i].nama_lengkap + `</td>
							<td>` + res[i].hadir + `</td>
							<td>` + res[i].cuti + `</td>
							<td>` + res[i].sakit + `</td>
							<td>` + res[i].absen + `</td>
							<td>` + res[i].all + `</td>
						</tr>
                        `;
					}
					$('#tblLapAbsensi').DataTable().clear().destroy();
					$("#tblLapAbsensi tbody").html(html);
					$('#tblLapAbsensi').dataTable();
					$("#btnCetakExcel").show();
					$("#btnCetakPrint").show();
				} else {
					// a_error('Gagal!', 'Menghapus data');
				}
			}
		});
	}

</script>
