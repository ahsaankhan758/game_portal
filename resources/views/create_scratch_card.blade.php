 <!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Scratch Card | Basic Form</title>

    <link href="{{asset('Inspinia')}}/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{asset('Inspinia')}}/font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="{{asset('Inspinia')}}/css/plugins/iCheck/custom.css" rel="stylesheet">
    <link href="{{asset('Inspinia')}}/css/animate.css" rel="stylesheet">
    <link href="{{asset('Inspinia')}}/css/style.css" rel="stylesheet">

    <link href="{{asset('Inspinia')}}/css/plugins/awesome-bootstrap-checkbox/awesome-bootstrap-checkbox.css" rel="stylesheet">

</head>
<body>
    <?php echo $child; ?>
 <div class="row">
                <div class="col-lg-12">
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                             @if (Session::get('save'))
                            <div class="alert alert-success">
                                {{Session::get('save')}}
                            </div>
                             @endif
                            <h5>CREATE<small> Scratch Card Form</small></h5>
                            <div class="ibox-tools">
                                <a class="collapse-link">
                                    <i class="fa fa-chevron-up"></i>
                                </a>
                               
                               
                               
                            </div>
                        </div>
                        <div class="ibox-content">
                            <form method="post" action="{{URL::to('create_scratch_card')}}" enctype="multipart/form-data" class="form-horizontal">
                                @csrf
                                <div class="form-group has-success"><label class="col-sm-2 control-label">Title</label>
                                    <div class="col-sm-10"><input type="text" name="title" class="form-control" required=""></div>
                                </div>
                               
                                
                                <div class="hr-line-dashed"></div>
                                <div class="form-group has-success"><label class="col-sm-2 control-label">Descrition</label>

                                    <div class="col-sm-10"><textarea class="form-control" rows="5" name="description" ></textarea></div>
                                </div>

                                <div class="hr-line-dashed"></div>
                                <div class="form-group has-success"><label class="col-sm-2 control-label">Prize</label>
                                    <div class="col-sm-10"><input type="text" name="prize" class="form-control" required=""></div>
                                </div>
                                <div class="hr-line-dashed"></div>
                                <div class="form-group has-success"><label class="col-sm-2 control-label">Thumbnail Image</label>

                                    <div class="col-sm-10"><input type="file" name="thumbnail_img[]" class="form-control" required=""></div>
                                </div>
                                 <div class="hr-line-dashed"></div>
                                <div class="form-group has-success"><label class="col-sm-2 control-label">Background Image</label>

                                    <div class="col-sm-10"><input type="file" name="background_img[]" class="form-control" required=""></div>
                                </div>
                                 <div class="hr-line-dashed"></div>
                                <div class="form-group has-success"><label class="col-sm-2 control-label">Scratch Icon Image 1</label>

                                    <div class="col-sm-10"><input type="file" name="icon_img_1[]" class="form-control" required=""></div>
                                </div>
                                 <div class="hr-line-dashed"></div>
                                <div class="form-group has-success"><label class="col-sm-2 control-label">Scratch Icon Image 2</label>

                                    <div class="col-sm-10"><input type="file" name="icon_img_2[]" class="form-control" required=""></div>
                                </div>
                                 <div class="hr-line-dashed"></div>
                                <div class="form-group has-success"><label class="col-sm-2 control-label">Scratch Icon Image 3</label>

                                    <div class="col-sm-10"><input type="file" name="icon_img_3[]" class="form-control" required=""></div>
                                </div>
                                 <div class="hr-line-dashed"></div>
                                <div class="form-group has-success"><label class="col-sm-2 control-label">Winning Image </label>

                                    <div class="col-sm-10"><input type="file" name="winning_img[]" class="form-control" required=""></div>
                                </div>
                                <div class="hr-line-dashed"></div>
                                <div class="form-group has-success"><label class="col-sm-2 control-label">Select type</label>

                                    <div class="col-sm-10">
                                        <select class="form-control m-b" name="type" required="">
                                            <option selected="" disabled="">Select</option>
                                            <option value="0">2 x 3</option>
                                            <option value="1">3 x 3</option>
                                         </select> 
                                    </div>
                                </div>
                               
                              
                                <div class="hr-line-dashed"></div>
                                <div class="form-group">
                                    <div class="col-sm-4 col-sm-offset-2">
                                        
                                        <button class="btn btn-primary" type="submit">Submit</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
             <!-- Mainly scripts -->
    <script src="{{asset('Inspinia')}}/js/jquery-2.1.1.js"></script>
    <script src="{{asset('Inspinia')}}/js/bootstrap.min.js"></script>
    <script src="{{asset('Inspinia')}}/js/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="{{asset('Inspinia')}}/js/plugins/slimscroll/jquery.slimscroll.min.js"></script>

    <!-- Flot -->
    <script src="{{asset('Inspinia')}}/js/plugins/flot/jquery.flot.js"></script>
    <script src="{{asset('Inspinia')}}/js/plugins/flot/jquery.flot.tooltip.min.js"></script>
    <script src="{{asset('Inspinia')}}/js/plugins/flot/jquery.flot.spline.js"></script>
    <script src="{{asset('Inspinia')}}/js/plugins/flot/jquery.flot.resize.js"></script>
    <script src="{{asset('Inspinia')}}/js/plugins/flot/jquery.flot.pie.js"></script>
    <script src="{{asset('Inspinia')}}/js/plugins/flot/jquery.flot.symbol.js"></script>
    <script src="{{asset('Inspinia')}}/js/plugins/flot/jquery.flot.time.js"></script>

    <!-- Peity -->
    <script src="{{asset('Inspinia')}}/js/plugins/peity/jquery.peity.min.js"></script>
    <script src="{{asset('Inspinia')}}/js/demo/peity-demo.js"></script>

    <!-- Custom and plugin javascript -->
    <script src="{{asset('Inspinia')}}/js/inspinia.js"></script>
    <script src="{{asset('Inspinia')}}/js/plugins/pace/pace.min.js"></script>

    <!-- jQuery UI -->
    <script src="{{asset('Inspinia')}}/js/plugins/jquery-ui/jquery-ui.min.js"></script>

    <!-- Jvectormap -->
    <script src="{{asset('Inspinia')}}/js/plugins/jvectormap/jquery-jvectormap-2.0.2.min.js"></script>
    <script src="{{asset('Inspinia')}}/js/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>

    <!-- EayPIE -->
    <script src="{{asset('Inspinia')}}/js/plugins/easypiechart/jquery.easypiechart.js"></script>

    <!-- Sparkline -->
    <script src="{{asset('Inspinia')}}/js/plugins/sparkline/jquery.sparkline.min.js"></script>

    <!-- Sparkline demo data  -->
    <script src="{{asset('Inspinia')}}/js/demo/sparkline-demo.js"></script>

    <script>
        $(document).ready(function() {
            $('.chart').easyPieChart({
                barColor: '#f8ac59',
//                scaleColor: false,
                scaleLength: 5,
                lineWidth: 4,
                size: 80
            });

            $('.chart2').easyPieChart({
                barColor: '#1c84c6',
//                scaleColor: false,
                scaleLength: 5,
                lineWidth: 4,
                size: 80
            });

            var data2 = [
                [gd(2012, 1, 1), 7], [gd(2012, 1, 2), 6], [gd(2012, 1, 3), 4], [gd(2012, 1, 4), 8],
                [gd(2012, 1, 5), 9], [gd(2012, 1, 6), 7], [gd(2012, 1, 7), 5], [gd(2012, 1, 8), 4],
                [gd(2012, 1, 9), 7], [gd(2012, 1, 10), 8], [gd(2012, 1, 11), 9], [gd(2012, 1, 12), 6],
                [gd(2012, 1, 13), 4], [gd(2012, 1, 14), 5], [gd(2012, 1, 15), 11], [gd(2012, 1, 16), 8],
                [gd(2012, 1, 17), 8], [gd(2012, 1, 18), 11], [gd(2012, 1, 19), 11], [gd(2012, 1, 20), 6],
                [gd(2012, 1, 21), 6], [gd(2012, 1, 22), 8], [gd(2012, 1, 23), 11], [gd(2012, 1, 24), 13],
                [gd(2012, 1, 25), 7], [gd(2012, 1, 26), 9], [gd(2012, 1, 27), 9], [gd(2012, 1, 28), 8],
                [gd(2012, 1, 29), 5], [gd(2012, 1, 30), 8], [gd(2012, 1, 31), 25]
            ];

            var data3 = [
                [gd(2012, 1, 1), 800], [gd(2012, 1, 2), 500], [gd(2012, 1, 3), 600], [gd(2012, 1, 4), 700],
                [gd(2012, 1, 5), 500], [gd(2012, 1, 6), 456], [gd(2012, 1, 7), 800], [gd(2012, 1, 8), 589],
                [gd(2012, 1, 9), 467], [gd(2012, 1, 10), 876], [gd(2012, 1, 11), 689], [gd(2012, 1, 12), 700],
                [gd(2012, 1, 13), 500], [gd(2012, 1, 14), 600], [gd(2012, 1, 15), 700], [gd(2012, 1, 16), 786],
                [gd(2012, 1, 17), 345], [gd(2012, 1, 18), 888], [gd(2012, 1, 19), 888], [gd(2012, 1, 20), 888],
                [gd(2012, 1, 21), 987], [gd(2012, 1, 22), 444], [gd(2012, 1, 23), 999], [gd(2012, 1, 24), 567],
                [gd(2012, 1, 25), 786], [gd(2012, 1, 26), 666], [gd(2012, 1, 27), 888], [gd(2012, 1, 28), 900],
                [gd(2012, 1, 29), 178], [gd(2012, 1, 30), 555], [gd(2012, 1, 31), 993]
            ];


            var dataset = [
                {
                    label: "Number of orders",
                    data: data3,
                    color: "#1ab394",
                    bars: {
                        show: true,
                        align: "center",
                        barWidth: 24 * 60 * 60 * 600,
                        lineWidth:0
                    }

                }, {
                    label: "Payments",
                    data: data2,
                    yaxis: 2,
                    color: "#1C84C6",
                    lines: {
                        lineWidth:1,
                            show: true,
                            fill: true,
                        fillColor: {
                            colors: [{
                                opacity: 0.2
                            }, {
                                opacity: 0.4
                            }]
                        }
                    },
                    splines: {
                        show: false,
                        tension: 0.6,
                        lineWidth: 1,
                        fill: 0.1
                    },
                }
            ];


            var options = {
                xaxis: {
                    mode: "time",
                    tickSize: [3, "day"],
                    tickLength: 0,
                    axisLabel: "Date",
                    axisLabelUseCanvas: true,
                    axisLabelFontSizePixels: 12,
                    axisLabelFontFamily: 'Arial',
                    axisLabelPadding: 10,
                    color: "#d5d5d5"
                },
                yaxes: [{
                    position: "left",
                    max: 1070,
                    color: "#d5d5d5",
                    axisLabelUseCanvas: true,
                    axisLabelFontSizePixels: 12,
                    axisLabelFontFamily: 'Arial',
                    axisLabelPadding: 3
                }, {
                    position: "right",
                    clolor: "#d5d5d5",
                    axisLabelUseCanvas: true,
                    axisLabelFontSizePixels: 12,
                    axisLabelFontFamily: ' Arial',
                    axisLabelPadding: 67
                }
                ],
                legend: {
                    noColumns: 1,
                    labelBoxBorderColor: "#000000",
                    position: "nw"
                },
                grid: {
                    hoverable: false,
                    borderWidth: 0
                }
            };

            function gd(year, month, day) {
                return new Date(year, month - 1, day).getTime();
            }

            var previousPoint = null, previousLabel = null;

            $.plot($("#flot-dashboard-chart"), dataset, options);

            var mapData = {
                "US": 298,
                "SA": 200,
                "DE": 220,
                "FR": 540,
                "CN": 120,
                "AU": 760,
                "BR": 550,
                "IN": 200,
                "GB": 120,
            };

            $('#world-map').vectorMap({
                map: 'world_mill_en',
                backgroundColor: "transparent",
                regionStyle: {
                    initial: {
                        fill: '#e4e4e4',
                        "fill-opacity": 0.9,
                        stroke: 'none',
                        "stroke-width": 0,
                        "stroke-opacity": 0
                    }
                },

                series: {
                    regions: [{
                        values: mapData,
                        scale: ["#1ab394", "#22d6b1"],
                        normalizeFunction: 'polynomial'
                    }]
                },
            });
        });
    </script>
            </body>