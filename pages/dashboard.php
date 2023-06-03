<?php if( ! defined( 'ACCESS' ) ) die( 'DIRECT ACCESS NOT ALLOWED' ); ?>

<?= element( 'header' ); ?>

<!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1><i class="fa fa-grip-horizontal"></i> Dashboard</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="./">Dashboard</a></li>
                            </ol>
                        </div>
                    </div>
                </div>
            </section>
            

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <?= show_message(); ?>

                    <div class="row">
                        <div class="col-lg-4 col-6">
                            <div class="small-box bg-info">
                                <div class="inner" id="responseCountContainer">
                                    <h3></h3>
                                    <p>Total Responses</p>
                                </div>
                                <div class="icon">
                                    <i class="fa fa-reply"></i>
                                </div>
                                <a href="./responses" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>

                        <div class="col-lg-4 col-6">
                            <div class="small-box bg-success">
                                <div class="inner" id="pursueStudyCountContainer">
                                    <h3></h3>
                                    <p>Pursue Study</p>
                                </div>
                                <div class="icon">
                                    <i class="fa fa-users"></i>
                                </div>
                                <a href="./responses" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>

                        <div class="col-lg-4 col-6">
                            <div class="small-box bg-secondary">
                                <div class="inner" id="pursueJobCountContainer">
                                    <h3></h3>
                                    <p>Pursue Working</p>
                                </div>
                                <div class="icon">
                                    <i class="fa fa-users"></i>
                                </div>
                                <a href="./responses" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="card card-secondary">
                        <div class="card-header">
                            <h3 class="card-title">Bar Chart</h3>
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                                <button type="button" class="btn btn-tool" data-card-widget="remove">
                                    <i class="fas fa-times"></i>
                                </button>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="chart">
                                <div id="chartContainer" style="min-height: 370px; max-width: 920px; max-height: 250px; margin: 0px auto;"></div>
                            </div>
                        </div>
                      <!-- /.card-body -->
                    </div>
                </div>
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
<script>
    window.onload = function () {
        // Fetch response data from the server
        fetch('pages/script/graphAjax.php')
            .then(response => response.json())
            .then(data => {
                var chartData = data.map(response => {
                    return { y: response.count, label: response.pursue_study };
                });

                var chart = new CanvasJS.Chart("chartContainer", {
                    animationEnabled: true,
                    theme: "light2",
                    title: {
                        text: "Responses of Pursue Study and Not Pursue"
                    },
                    axisY: {
                        title: "Count"
                    },
                    data: [{
                        type: "column",
                        showInLegend: true,
                        legendMarkerColor: "grey",
                        legendText: "Count",
                        dataPoints: chartData
                    }]
                });

                chart.render();
            })
            .catch(error => {
                console.log(error);
            });
    }
</script>

<script>
    function updatePursueStudyCount() {
        $.ajax({
            url: 'pages/script/countAjax.php',
            method: 'GET',
            dataType: 'json',
            success: function (data) {
                $('#responseCountContainer h3').text(data.res_count_total);
                $('#pursueStudyCountContainer h3').text(data.res_count_yes); // Update the count for "Yes"
                $('#pursueJobCountContainer h3').text(data.res_count_no); // Update the count for "No"
            },
        error: function (xhr, status, error) {
            console.error(error);
        },
    });
}
setInterval(updatePursueStudyCount, 2000);
</script>

<script>
    $(function() {
        var barChartCanvas = $('#barChart').get(0).getContext('2d')
        var barChartData = $.extend(true, {}, areaChartData)
        var temp0 = areaChartData.datasets[0]
        var temp1 = areaChartData.datasets[1]
        barChartData.datasets[0] = temp1
        barChartData.datasets[1] = temp0

        var barChartOptions = {
          responsive              : true,
          maintainAspectRatio     : true,
          datasetFill             : false
        }

        new Chart(barChartCanvas, {
          type: 'bar',
          data: barChartData,
          options: barChartOptions
        })
    });
</script>

<?= element( 'footer' ); ?>