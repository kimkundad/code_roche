<!DOCTYPE html>
<html lang="en">

<head>
    <title></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="{{url('front/asset/libs/bootstrap4/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{url('front/asset/styles/main.css')}}" rel="stylesheet">

    <meta name="csrf-token" content="{{ csrf_token() }}">
    <style>
        .box-upload-file {
            background-image: url('{{url('front/asset/img/bg-blue-2.png')}}');
            background-repeat: no-repeat;
            background-size: cover;
        }

        .box-upload-file {
            padding: 25px;
            max-width: 410px;
            margin: 0 auto 50px;
        }

        .box-upload-file h4 {
            margin-bottom: 30px;
        }

        .file-upload {
            position: relative;
            overflow: hidden;
            margin: 10px;
            max-width: 150px;
            background: #fff;
            border: 2px solid #000;
            margin-top: 20px;
        }

        .file-upload input.upload {
            position: absolute;
            top: 0;
            right: 0;
            margin: 0;
            padding: 0;
            font-size: 20px;
            cursor: pointer;
            opacity: 0;
            filter: alpha(opacity=0);
        }
        .croppie-container {
    padding: 0px;
}
.croppie-container .cr-vp-circle {
    border-radius: 0%;
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
            <div class="row">



                <div class="box-upload-file">
                        <div class="text-center">
                            <div class="row">
                                <div class="col-md-12">
                                    <h1>
                                        กรุณา Upload File รูปตัวเอง
                                    </h1>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <h5>
                                        เพื่อใช้ทำบัตร "You Personaalities and Styles"
                                    </h5>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <label for="imgAvatar"></label>
                                    <img width="150" id="imgAvatar" name="imgAvatar" src="{{url('front/asset/img/thumb_upload.png')}}" width="250px" alt="">
                                </div>
                            </div>

                            <form action="{{url('image_crop_new')}}" method="post" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="file-upload btn">
                                        <span>เลือกรูปภาพ</span>
                                        <input class="upload" id="fileAvatar" name="image" type="file" accept=".jpg, .png, .jpeg, .gif, .bmp, .tif, .tiff|images/*">
                                        <input type="hidden" class="form-control" name="user_id" value="{{$objs->id}}" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <p class="text-error label hidden">
                                        โปรดแนบรูปภาพ
                                    </p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <input class="btn btn-primary" id="btn_submit" value="ยืนยัน" type="submit">
                                </div>
                            </div>

                            </form>



                        </div>
                    </div>

            </div>
        </div>
    </div>


    <script src="{{url('front/asset/libs/jquery3/jquery-3.2.1.min.js')}}"></script>
    <script src="{{url('front/asset/libs/popper/popper.min.js')}}"></script>
    <script src="{{url('front/asset/libs/bootstrap4/js/bootstrap.min.js')}}"></script>


    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <script>
        $(document).ready(function () {
            $("#fileAvatar").on("change", previewFile);
            $('#btn_submit').click(() => {
                const file = document.querySelector('#fileAvatar').files[0];
                if (file) {
                    window.location = 'step-4.html';
                }
            });
        });

        function previewFile() {
            const file = document.querySelector('#fileAvatar').files[0];
            const preview = document.querySelector('#imgAvatar');
            const reader = new FileReader();

            reader.onloadend = function () {
                preview.src = reader.result;
            }
            if (file) {
                reader.readAsDataURL(file); //reads the data as a URL
            }
        }
    </script>
</body>

</html>