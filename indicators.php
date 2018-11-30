<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Collapsible sidebar using Bootstrap 4</title>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<!    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="additional_styles.css">

    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script src="https://code.highcharts.com/modules/data.js"></script>
    <script src="https://code.highcharts.com/modules/drilldown.js"></script>    
</head>
<body>
    <div id="wrapper">
        <div class="overlay"></div>  
        <?php include "include/_side_nav.php" ?>
        <!-- Page Content -->
        <div id="page-content-wrapper">
            <button type="button" class="hamburger is-closed" data-toggle="offcanvas">
                <span class="hamb-top"></span>
                <span class="hamb-middle"></span>
                <span class="hamb-bottom"></span>
            </button>
            <h1 class="page_title">NC Dashboard</h1>
            <div class="container">
                <div id="carousel-example-generic" class="carousel slide" data-ride="carousel" data-interval="false">
    <!-- Indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="3"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="4"></li>
                    </ol>

    <!-- Wrapper for slides -->
                    <div class="carousel-inner" role="listbox">
              <div class="item">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-11 col-md-offset-1">
                                <h3 style="font-size: 30px;">13%</h3>
                                <p>3rd graders reading and doing math at grade level</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div id="container2"></div>
                            </div>
                        </div>
                    </div>
              </div>
              <div class="item active">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-11 col-md-offset-1">
                                <h3 style="font-size: 30px;">11%</h3>
                                <p>8th graders reading and doing math at grade level</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div id="container3"></div>
                            </div>
                        </div>
                    </div>
              </div>
              <div class="item">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-11 col-md-offset-1">
                                <h3 style="font-size: 30px;">58%</h3>
                                <p>9th graders who are "on-track" in high school</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div id="container4"></div>
                            </div>
                        </div>
                    </div>
              </div>
              <div class="item">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-11 col-md-offset-1">
                                <h3 style="font-size: 30px;">60%</h3>
                                <p>Enrollees who persist into 2nd year of college</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div id="container5" style="min-width: 310px; max-width: 800px; height: 400px; margin: 0 auto"></div>
                            </div>
                        </div>
                    </div>
              </div>

            </div>

    <!-- Controls -->
                    <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>

                </div>
            </div>
        </div>
        <!-- /#page-content-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery CDN - Slim version (=without AJAX) -->

    <script type="text/javascript">
$(document).ready(function () {
  var trigger = $('.hamburger'),
      overlay = $('.overlay'),
     isClosed = false;

    trigger.click(function () {
      hamburger_cross();      
    });

    function hamburger_cross() {

      if (isClosed == true) {          
        overlay.hide();
        trigger.removeClass('is-open');
        trigger.addClass('is-closed');
        isClosed = false;
      } else {   
        overlay.show();
        trigger.removeClass('is-closed');
        trigger.addClass('is-open');
        isClosed = true;
      }
  }
  
  $('[data-toggle="offcanvas"]').click(function () {
        $('#wrapper').toggleClass('toggled');
  });
  $(".carousel").swipe({

  swipe: function(event, direction, distance, duration, fingerCount, fingerData) {

    if (direction == 'left') $(this).carousel('next');
    if (direction == 'right') $(this).carousel('prev');

  },
  allowPageScroll:"vertical"

});  
});    
</script>
<script>  

        Highcharts.chart('container2', {
    chart: {
        type: 'column'
    },
    title: {
        text: ''
    },
    xAxis: {
        categories: [''
        ],
        crosshair: true
    },
    yAxis: {
        min: 0,
        max: 100,
        tickInterval: 20,
        title: {
            text: 'Percent'
        }
    },
    tooltip: {
        headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
        pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
            '<td style="padding:0"><b>{point.y:.1f} %</b></td></tr>',
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
        name: 'Baseline<br>(2017)',
        data: [60]

    }, {
        name: 'Current<br>(2018)',
        data: [62]

    }, {
        name: 'Goal<br>(2028)',
        data: [90]
    }]
});
</script>
    <script>

        Highcharts.chart('container3', {
    chart: {
        type: 'column'
    },
    title: {
        text: ''
    },
    xAxis: {
        categories: [''
        ],
        crosshair: true
    },
    yAxis: {
        min: 0,
        max: 100,
        tickInterval: 20,
        title: {
            text: 'Percent'
        }
    },
    tooltip: {
        headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
        pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
            '<td style="padding:0"><b>{point.y:.1f} %</b></td></tr>',
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
        name: 'Baseline<br>(2017)',
        data: [13]

    }, {
        name: 'Current<br>(2018)',
        data: [15]

    }, {
        name: 'Goal<br>(2028)',
        data: [60]
    }]
});
</script>
    <script>

        Highcharts.chart('container4', {
    chart: {
        type: 'column'
    },
    title: {
        text: ''
    },
    xAxis: {
        categories: [''
        ],
        crosshair: true
    },
    yAxis: {
        min: 0,
        max: 100,
        tickInterval: 20,
        title: {
            text: 'Percent'
        }
    },
    tooltip: {
        headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
        pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
            '<td style="padding:0"><b>{point.y:.1f} %</b></td></tr>',
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
        name: 'Baseline<br>(2017)',
        data: [11]

    }, {
        name: 'Current<br>(2018)',
        data: [13]

    }, {
        name: 'Goal<br>(2028)',
        data: [60]
    }]
});
</script>
    <script>

        Highcharts.chart('container5', {
    chart: {
        type: 'column'
    },
    title: {
        text: ''
    },
    xAxis: {
        categories: [''
        ],
        crosshair: true
    },
    yAxis: {
        min: 0,
        max: 100,
        tickInterval: 20,
        title: {
            text: 'Percent'
        }
    },
    tooltip: {
        headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
        pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
            '<td style="padding:0"><b>{point.y:.1f} %</b></td></tr>',
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
        name: 'Baseline<br>(2017)',
        data: [58]

    }, {
        name: 'Current<br>(2018)',
        data: [61]

    }, {
        name: 'Goal<br>(2028)',
        data: [90]
    }]
});
</script>

</body>

</html>