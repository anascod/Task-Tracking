<div id="column-chart-container" style="width: 48%; float: left;"></div>
<div id="donut-chart-container" style="width: 48%; float: right;"></div>

<script src="https://code.highcharts.com/highcharts.js"></script>
<script type="text/javascript">
    // Data for the column chart
    var columnData = [100, 150, 200, 250, 300, 350, 400, 450, 500, 550, 600, 650];

    // Data for the donut chart
    var donutData = [
        { name: 'Category 1', y: 30 },
        { name: 'Category 2', y: 20 },
        { name: 'Category 3', y: 15 },
        { name: 'Category 4', y: 10 },
        { name: 'Category 5', y: 25 }
    ];

    // Create the column chart
    Highcharts.chart('column-chart-container', {
        chart: {
            type: 'column',
            backgroundColor: '#f4f4f4',
        },
        title: {
            text: 'Column Chart Example',
            style: {
                color: 'blue',
                fontSize: '18px',
            }
        },
        xAxis: {
            categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
            labels: {
                style: {
                    color: 'green'
                }
            }
        },
        yAxis: {
            title: {
                text: 'Number of New Users',
                style: {
                    color: 'red'
                }
            },
            labels: {
                style: {
                    color: 'purple'
                }
            }
        },
        series: [{
            name: 'New Users',
            data: columnData,
            color: 'blue'
        }]
    });

    // Create the donut chart
    Highcharts.chart('donut-chart-container', {
        chart: {
            type: 'pie',
            backgroundColor: 'transparent',
        },
        title: {
            text: 'Donut Chart Example',
            style: {
                color: 'navy',
                fontSize: '18px',
            }
        },
        plotOptions: {
            pie: {
                innerSize: '50%',
                dataLabels: {
                    enabled: true,
                    format: '<b>{point.name}</b>: {point.percentage:.1f} %',
                    style: {
                        color: 'white'
                    }
                },
                colors: [
                    'lightblue', 'lightgreen', 'lightcoral', 'lightsalmon', 'lightpink'
                ]
            }
        },
        series: [{
            name: 'Donut Chart Data',
            data: donutData
        }]
    });
</script>
