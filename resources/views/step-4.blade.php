<!DOCTYPE html>
<html lang="en">

<head>
    <title></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="{{url('front/asset/libs/bootstrap4/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{url('front/asset/styles/main.css')}}" rel="stylesheet">

    <style>
        .box-my-generations {
            background-image: url('{{url('front/asset/img/bg-blue-2.png')}}');
            background-repeat: no-repeat;
            background-size: cover;
        }

        .box-my-generations {
            padding: 25px;
            max-width: 550px;
            margin: 0 auto 50px;
        }

        .box-my-name {
            max-width: 550px;
            margin: 0 auto 30px;
        }

        .box-my-name img {
           /* border-radius: 100%; */
        }

        .box-my-name h2 {
            margin-top: -20px;
        }

        .box-my-generations h4 {
            margin-bottom: 30px;
        }

        .box-fulname {
            margin: auto 0;
        }

        embed {
            min-height: 230px;
        }

        .chart {
    width: 100%;
}

.chart.chart-xs {
    height: 150px;
}

.chart.chart-sm {
    height: 184px;
}

.chart.chart-md {
    height: 350px;
}

.chart.chart-lg {
    height: 500px;
}

.pieLabel{
    font-size: 14px!important;
}

#flotTip {
    padding: 4px 8px;
    background-color: #000;
    z-index: 100;
    color: #FFF;
    opacity: .7;
    font-size: 11px;
    -webkit-border-radius: 5px;
    -moz-border-radius: 5px;
    border-radius: 5px;
}

    </style>
</head>

<body>
    <div class="h-100 d-flex">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="container" style="max-width: 960px;">
                    <div class="row py-4">
                <div class="col-md-12 text-center">
                    <img src="{{url('front/asset/img/logo_roche_retina.png')}}" class="image-logo" alt="">
                </div>
            </div>
            <div class="header-a hidden">
                <div class="row py-3">
                    <div class="col-md-12 text-center">
                        <img src="{{url('front/asset/img/headline_2_retina.png')}}" class="image-headline2" alt="">
                    </div>
                </div>
                <div class="row py-3">
                    <div class="col-md-12 text-center">
                        <div class="row row-step">
                            <div class="col-md-4 col-4">
                                <div class="circleBase">1</div>
                            </div>
                            <div class="col-md-4 col-4">
                                <div class="circleBase ">2</div>
                            </div>
                            <div class="col-md-4 col-4">
                                <div class="circleBase active">3</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-b ">
                <div class="row py-2">
                    <div class="col-md-12 text-center">
                        <img src="{{url('front/asset/img/headline_1_retina.png')}}" class="image-headline1" alt="">

                    </div>
                </div>
            </div>
                </div>
            </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-12 ">
                    <div class="box-my-generations">
                        <div class="text-center">
                            <div class="row">
                                <div class="col-md-12">
                                    <h1>
                                        My Generations :
                                    </h1>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 pie-sheet">
                                    <div class="chart chart-md" id="flotPie"></div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <input class="btn btn-primary" data-toggle="modal" data-target="#myModal" value="รายละเอียด" type="submit">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="box-my-name">
                        <div class="row">
                            <div class="col-md-4">
                                <img src="{{url('assets/images/avatar/'.$objs->avatar)}}" width="100%" alt="">
                            </div>
                            <div class="col-md-8 d-flex">
                                <div class="box-fulname">
                                    <h1>{{$objs->title}}{{$objs->name}}</h1>
                                    <h2>{{$objs->surname}}</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade swal-overlay" id="myModal" data-backdrop="static" data-keyboard="false">
        <div class="modal-dialog" role="document">
            
            <div class="modal-content">
                <img src="{{url('front/asset/img/final_popup.jpg')}}" width="100%" alt="">
            </div>
        </div>
    </div>


    <script src="{{url('front/asset/libs/jquery3/jquery-3.2.1.min.js')}}"></script>
    <script src="{{url('front/asset/libs/popper/popper.min.js')}}"></script>
    <script src="{{url('front/asset/libs/bootstrap4/js/bootstrap.min.js')}}"></script>


    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="{{url('assets/vendor/flot/jquery.flot.js')}}"></script>
    <script src="{{url('assets/vendor/flot/jquery.flot.pie.js')}}"></script>
    <script>
    $(document).ready(function(){
        $.ajax({
            url: '{{url('api/get_chart')}}', // getchart.php
            dataType: 'JSON',
            type: 'POST',
           // dataType: 'jsonp',
            data: {
                id: {{$objs->id}},
                  },
            success: function(response) {



            var plot = $.plot('#flotPie', response, {
                series: {
                    pie: {
                        show: true,
                        combine: {
                            color: '#999',
                            threshold: 0.1,
                        }
                    }
                },
                legend: {
                    show: false
                },
                grid: {
                    hoverable: true,
                    clickable: true
                }
            });


    }
        });

    });


</script>

    <script>
        $(document).ready(function () {
            setTimeout(() => {
                const divPopup = $('#myModal');
                divPopup.modal('show');
            }, 8000); 
        });
    </script>
</body>

</html>