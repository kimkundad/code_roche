<!DOCTYPE html>
<html lang="en">

<head>
    <title></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="{{url('front/asset/libs/bootstrap4/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{url('front/asset/styles/main.css')}}" rel="stylesheet">
    <link href="{{url('assets/croppie/croppie.css')}}" rel="stylesheet" type="text/css">
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
                <div class="col-md-12 ">
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
                                <div class="col-md-12 text-center" style="padding-right: 0px; padding-left: 0px;">
                                    
                                    <div class="fileinput fileinput-new" data-provides="fileinput">
                                                          <div id="upload-demo" ></div>
                                                         
                                                      </div>


                                </div>
                                
                                        
                                                  
                                            
                                                 
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="file-upload btn">
                                        <form enctype="multipart/form-data">
                                                          <div>
                                                              <span class=" default btn-file">
                                                                  <span class="fileinput-new"> เลือกรูปภาพ </span>
                                                                 
                                                                  
                            <input type="file" class="upload" id="upload" name="image" accept="image/*" > </span>
                                                             
                                                          </div>
                                                           </form>
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
                                    <input class="btn btn-primary upload-result" id="btn_submit" value="ยืนยัน" type="submit">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>


    <script src="{{url('front/asset/libs/jquery3/jquery-3.2.1.min.js')}}"></script>
    <script src="{{url('front/asset/libs/popper/popper.min.js')}}"></script>
    <script src="{{url('front/asset/libs/bootstrap4/js/bootstrap.min.js')}}"></script>

    <script src="{{url('assets/croppie/croppie.js')}}" type="text/javascript"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<script type="text/javascript">


$.ajaxSetup({
headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
}
});

$uploadCrop = $('#upload-demo').croppie({
    enableExif: true,
    viewport: {
        width: 250,
        height: 250,
        type: 'square'
    },
    boundary: {
        width: 280,
        height: 280
    }
});

$('#upload').on('change', function () {

    var reader = new FileReader();
    reader.onload = function (e) {
        $uploadCrop.croppie('bind', {
            url: e.target.result
        }).then(function(){
            console.log('jQuery bind complete');
        });
    }
    reader.readAsDataURL(this.files[0]);
});




$('.upload-result').on('click', function (ev) {

    $uploadCrop.croppie('result', {
        type: 'canvas',
        size: 'viewport'
    }).then(function (resp) {
        $.ajax({
            url: "{{url('image-crop')}}",
            type: "POST",
            data: {"image":resp,"user_id":{{$objs->id}}},
            success: function (data) {

                if(data.success == 'done'){

        swal("Success!", "อัพโหลดภาพเสร็จโดยสมบูรณ์!", "success");
        var delayMillis = 3000;
        setTimeout(function() {
          window.location = "{{url('step-4/'.$objs->id)}}";
        }, delayMillis);

                }else{

                    swal ( "Oops" ,  "กรุณาอัพโหลดรูปภาพ!" ,  "error" );

                }
                
            }
        });
    });
});

</script>
</body>

</html>