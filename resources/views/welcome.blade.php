<!DOCTYPE html>
<html lang="en">

<head>
    <title></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="{{url('front/asset/libs/bootstrap4/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{url('front/asset/styles/main.css')}}" rel="stylesheet">
    <style>

        .box-confirm-self {
            max-width: 410px;
            padding: 25px;
            margin-left: auto;
        }

        .box-confirm-self input {
            font-size: 25px;
        }


        .txt-confirm-selft {
            margin-bottom: 1rem;
            padding: 0 10px;
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
            <div class="header-a">
                <div class="row py-3">
                    <div class="col-md-12 text-center">
                        <img src="{{url('front/asset/img/headline_2_retina.png')}}" class="image-headline2" alt="">
                    </div>
                </div>
                <div class="row py-3">
                    <div class="col-md-12 text-center">
                        <div class="row row-step">
                            <div class="col-md-4 col-4">
                                <div class="circleBase active">1</div>
                            </div>
                            <div class="col-md-4 col-4">
                                <div class="circleBase">2</div>
                            </div>
                            <div class="col-md-4 col-4">
                                <div class="circleBase">3</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-b hidden">
                <div class="row py-2">
                    <div class="col-md-12 text-center">
                        <img src="{{url('front/asset/img/headline_1_retina.png')}}" class="image-headline1" alt="">
                    </div>
                </div>
            </div>
                </div>
            </div>
            </div>
            <!-- <div class="row py-4">
                <div class="col-md text-center">
                    <img src="asset/img/logo_roche_retina.png" width="150px" alt="">
                </div>
            </div>
            <div class="row py-3">
                <div class="col-md text-center">
                    <img src="asset/img/headline_2_retina.png" width="250px" alt="">
                </div>
            </div>
            <div class="row py-3">
                <div class="col-md text-center">
                    <div class="row row-step">
                        <div class="col-md-4 col-4">
                            <div class="circleBase active">1</div>
                        </div>
                        <div class="col-md-4 col-4">
                            <div class="circleBase">2</div>
                        </div>
                        <div class="col-md-4 col-4">
                            <div class="circleBase">3</div>
                        </div>
                    </div>
                </div>
            </div> -->
            <div class="row py-3">
                <div class="col-md-6 text-center">
                    <div class="box-confirm-self bg-blue">
                        <div class="row">
                            <div class="col-md-12">
                                <h1>
                                    ยืนยันตัวตนของคุณ
                                </h1>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <h5>
                                    กรอกรหัสพนักงานเพื่อระบบตัวตนในการทำแบบทดสอบดูได้จากบัตรพนักงาน
                                </h5>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <input type="text" class="txt-confirm-selft w-100" name="user_id" id="txt_confirm_selft" >
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <p class="text-error label hidden" >
                                    ไม่พบรหัสพนักงาน
                                </p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <a href="#" id="btn_start" class="btn btn-primary btn-start">เริ่มทำแบบทดสอบ</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <img src="{{url('front/asset/img/card_example_retina.png')}}" class="image-card img-fluid" alt="">
                </div>
            </div>
        </div>
    </div>


    <script src="{{url('front/asset/libs/jquery3/jquery-3.2.1.min.js')}}"></script>
    <script src="{{url('front/asset/libs/popper/popper.min.js')}}"></script>
    <script src="{{url('front/asset/libs/bootstrap4/js/bootstrap.min.js')}}"></script>

    <script>
        $(document).ready(function () {
            $('#btn_start').click(() => {
                const boxError = $('.text-error');
                boxError.addClass('hidden');
                const txt_confirm_selft = $('#txt_confirm_selft');
                if (txt_confirm_selft.val() !== 'Nattapon Chaovanasilp') {
                    boxError.removeClass('hidden');
                    setTimeout(() => {
                        boxError.addClass('hidden');
                    }, 10000);

                } else {
                    localStorage.setItem('username', txt_confirm_selft.val());
                    window.location = 'step-2.html';
                }
            });
        });
    </script>
</body>

</html>