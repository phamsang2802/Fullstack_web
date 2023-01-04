@extends('admin_lte.shares.master_lte')
@section('content')
<div>
    <canvas id="myChart"></canvas>
</div>
@endsection
@section('js')
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    var label = {!! json_encode($label) !!}
    var list_data = {!! json_encode($list_data) !!}
    const labels = label;

    const data = {
      labels: labels,
      datasets: [{
        label: 'My First dataset',
        backgroundColor: 'rgb(255, 99, 132)',
        borderColor: 'rgb(255, 99, 132)',
        data: list_data,
      }]
    };

    const config = {
      type: 'bar',
      data: data,
      options: {}
    };
</script>
<script>
    const myChart = new Chart(
        document.getElementById('myChart'),
        config
    );
</script>
@endsection
