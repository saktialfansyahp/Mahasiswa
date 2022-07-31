@extends('mahasiswa.view')
@section('title', 'Dashboard')

@section('content')
    <div id="chart"></div>
@endsection
@section('footer')
<script src="https://code.highcharts.com/highcharts.js"></script>
<script>
    Highcharts.chart('chart', {
        chart: {
            type: 'column'
        },
        title: {
            text: 'Jumlah Mahasiswa Berdasarkan Jenis Kelamin'
        },
        xAxis: {
            categories: ['Laki Laki', 'Perempuan'],
            crosshair: true
        },
        yAxis: {
            min: 0,
            title: {
                text: 'Jumlah'
            }
        },
        tooltip: {
            headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
            pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                '<td style="padding:0"><b>{point.y:1f}</b></td></tr>',
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
            name: 'Jenis Kelamin',
            data: [4, 2]

        }]
    });
</script>
@endsection
