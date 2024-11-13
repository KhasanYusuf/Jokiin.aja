var optionsPengunjung = {
	annotations: {
		position: 'back'
	},
	dataLabels: {
		enabled:false
	},
	chart: {
		type: 'bar',
		height: 300
	},
	fill: {
		opacity:1
	},
	plotOptions: {
	},
	series: [{
		name: 'pengunjung',
		data: [9,20,30,20,10,20,30,20,10,20,30,20]
	}],
	colors: '#9694ff',
	xaxis: {
		categories: ["Jan","Feb","Mar","Apr","May","Jun","Jul", "Aug","Sep","Oct","Nov","Dec"],
	},
}

var optionsPenjoki = {
	annotations: {
		position: 'back'
	},
	dataLabels: {
		enabled:false
	},
	chart: {
		type: 'bar',
		height: 300
	},
	fill: {
		opacity:1
	},
	plotOptions: {
	},
	series: [{
		name: 'penjoki',
		data: [9,20,30,20,10,20,30,20,10,20,30,20]
	}],
	colors: '#57caeb',
	xaxis: {
		categories: ["Jan","Feb","Mar","Apr","May","Jun","Jul", "Aug","Sep","Oct","Nov","Dec"],
	},
}

var optionsPelanggan = {
	annotations: {
		position: 'back'
	},
	dataLabels: {
		enabled:false
	},
	chart: {
		type: 'bar',
		height: 300
	},
	fill: {
		opacity:1
	},
	plotOptions: {
	},
	series: [{
		name: 'pelanggan',
		data: [9,20,30,20,10,20,30,20,10,20,30,20]
	}],
	colors: '#5ddab4',
	xaxis: {
		categories: ["Jan","Feb","Mar","Apr","May","Jun","Jul", "Aug","Sep","Oct","Nov","Dec"],
	},
}

var optionsPenghasilan = {
	annotations: {
		position: 'back'
	},
	dataLabels: {
		enabled:false
	},
	chart: {
		type: 'bar',
		height: 300
	},
	fill: {
		opacity:1
	},
	plotOptions: {
	},
	series: [{
		name: 'penghasilan',
		data: [9,20,30,20,10,20,30,20,10,20,30,20]
	}],
	colors: '#ff7976',
	xaxis: {
		categories: ["Jan","Feb","Mar","Apr","May","Jun","Jul", "Aug","Sep","Oct","Nov","Dec"],
	},
}

var chartPengunjung = new ApexCharts(document.querySelector("#chart-pengunjung"), optionsPengunjung);
var chartPenjoki = new ApexCharts(document.querySelector("#chart-penjoki"), optionsPenjoki);
var chartPelanggan = new ApexCharts(document.querySelector("#chart-pelanggan"), optionsPelanggan);
var chartPenghasilan = new ApexCharts(document.querySelector("#chart-penghasilan"), optionsPenghasilan);

chartPengunjung.render();
chartPenjoki.render();
chartPelanggan.render();
chartPenghasilan.render();


