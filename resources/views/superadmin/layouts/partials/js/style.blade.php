<script type="text/javascript" src="{{ url('/dist') }}/lib/js/jquery.min.js"></script>
<script type="text/javascript" src="{{ url('/dist') }}/lib/js/tether.min.js"></script>
<script type="text/javascript" src="{{ url('/dist') }}/lib/js/bootstrap.min.js"></script>

<script type="text/javascript" src="{{ url('/dist') }}/lib/js/chartist.min.js"></script>
<script type="text/javascript" src="{{ url('/dist') }}/assets/js/app.min.js"></script>
<script type="text/javascript">
    $(function() {
        // Dashboard Sales Chart
        // ------------------------------------------------------------------

        var dataMain = {
            labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
            series: [
            [5, 4, 3, 7, 5, 10, 3, 4, 8, 10, 6, 8],
            [3, 2, 9, 5, 4, 6, 4, 6, 7, 8, 7, 4]
            ]
        };

        var optionsMain = {
            seriesBarDistance: 10
        };

        var responsiveOptionsMain = [
        ['screen and (max-width: 640px)', {
            seriesBarDistance: 5,
            axisX: {
                labelInterpolationFnc: function (value) {
                    return value[0];
                }
            }
        }]
        ];
        var chart = new Chartist.Bar('.ct-chart-dashboard', dataMain, optionsMain, responsiveOptionsMain);
    });
</script>
