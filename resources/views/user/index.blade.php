@extends('template')

@section('title')
Dashboard
@endsection

@section('content')

<div class="content">
	<div class="panel-header bg-primary-gradient">
		<div class="page-inner py-5">
			<div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
				<div>
					<h2 class="text-white pb-2 fw-bold">Dashboard</h2>
					<h5 class="text-white op-7 mb-2">Selamat Datang Kembali, {{ Auth::user()->name }}</h5>
				</div>
			</div>
		</div>
	</div>
	<div class="page-inner mt--5">

		<div class="row">
			<div class="col-sm-6 col-lg-3">
				<div class="card p-3">
					<div class="d-flex align-items-center">
						<span class="stamp stamp-md bg-secondary mr-3">
							<i class="fas fa-store-alt"></i>
						</span>
						<div>
							<h5 class="mb-1"><b>Pos Satpam</b></h5>
							<small class="text-muted">{{$paketsatpam}} perlu dipindahkan</small>
						</div>
					</div>
				</div>
			</div>
			<div class="col-sm-6 col-lg-3">
				<div class="card p-3">
					<div class="d-flex align-items-center">
						<span class="stamp stamp-md bg-success mr-3">
							<i class="fas fa-boxes"></i>
						</span>
						<div>
							<h5 class="mb-1"><b>Ruang Musyrif</b></h5>
							<small class="text-muted">{{$paketmusyrif}} perlu diambil</small>
						</div>
					</div>
				</div>
			</div>

			<div class="col-sm-6 col-lg-3">
				<div class="card p-3">
					<div class="d-flex align-items-center">
						<span class="stamp stamp-md bg-warning mr-3">
							<i class="fas fa-box-open"></i>
						</span>
						<div>
							<h5 class="mb-1"><b>Total Paket Diterima</b></h5>
							<small class="text-muted">{{$paketditerima}} Diterima</small>
						</div>
					</div>
				</div>
			</div>
			<div class="col-sm-6 col-lg-3">
				<div class="card p-3">
					<div class="d-flex align-items-center">
						<span class="stamp stamp-md bg-danger mr-3">
							<i class="fas fa-box"></i>
						</span>
						<div>
							<h5 class="mb-1"><b>Total Paket Hari ini</b></h5>
							<small class="text-muted">{{$pakettanggal}} paket masuk</small>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="container">
			<div id="dataWisata">

			</div>
		</div>
	</div>

</div>



<script src="https://code.highcharts.com/highcharts.js"></script>
<script>
	const dataKelas = <?php echo json_encode($total); ?>;
	Highcharts.chart('dataWisata', {
		chart: {
			type: 'line'
		},
		title: {
			text: 'Grafik Paket IDN'
		},

		xAxis: {
			categories: <?php echo json_encode($kelas); ?>,
			crosshair: true
		},
		yAxis: {
			min: 0,
			title: {
				text: 'Jumlah Paket'
			}
		},
		tooltip: {
			headerFormat: '<span style="font-size:10px">{point.key}</span><table>',

			footerFormat: '</table>',
			shared: true,
			useHTML: true
		},
		plotOptions: {
			column: {
				pointPadding: 0.2,
				borderWidth: 0
			}
		},
		series: [{
			name: 'Barang Masuk',
			data: dataKelas,

		}]
	});
</script>

@endsection