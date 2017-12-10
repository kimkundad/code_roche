<!DOCTYPE html>
<html lang="en">

<head>
    <title></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="{{url('front/asset/libs/bootstrap4/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{url('front/asset/styles/main.css')}}" rel="stylesheet">
    <style>
        .hidden {
            display: none;
        }

        .txt-confirm-selft {
            margin-bottom: 1rem;
        }

        .content-main {
            margin: auto auto 30px;
            background-image: url('{{url('front/asset/img/bg-blue-3-1.png')}}');
            background-repeat: no-repeat;
            background-size: 100% 100%;
        }

        .text-center {
            text-align: center;
        }

        .form-control {
            margin: 10px 0;
            border-radius: 0;
        }

        input[type='radio'] {
            width: 20px;
            height: 20px;
            /* border-radius: 15px; */
            /* top: -2px;
            left: -1px;
            position: relative;
            background-color: #ffffff;
            content: '';
            display: inline-block;
            visibility: visible;
            border: 1px solid #000; */
        }

        legend {
            font-weight: bold;
            font-size: 30px;
            line-height: 1em;
        }

        .form-check-label {
            font-size: 25px
        }

        .padding {
            padding: 20px;
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
                                <div class="circleBase active">2</div>
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
            <div class="row">
                <div class="col-md-9 content-main">





            <form class="form-horizontal" action="{{url('user_regis_update')}}" method="POST" enctype="multipart/form-data">
                                    {{ csrf_field() }}


                    <div class='padding'>
                        <div class="row">

                            <div class="col-md-12">
                                <h1>โดนๆ 12 คำถาม</h1>
                                <label class="label">{{$objs->title}} {{$objs->name}} {{$objs->surname}}</label>
                                <input type="hidden" class="custom-control-input" name="user_id" value="{{$objs->id}}">
                                <fieldset class="form-group">
                                    <legend>1. งานในอุดมคติควรเป็นแบบไหน?</legend>
                                    <div class="form-check">
                                        <label class="custom-control custom-radio">
                                            <input type="radio" class="custom-control-input" name="group1" value="1" 
                                            @if(old('group1') == 1) checked @endif>
                                            <span class="custom-control-indicator"></span>
                                            <span class="custom-control-description">งานที่มีความมั่นคงในชีวิต</span>
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <label class="custom-control custom-radio">
                                            <input type="radio" class="custom-control-input" name="group1" value="2"
                                            @if(old('group1') == 2) checked @endif >
                                            <span class="custom-control-indicator"></span>
                                            <span class="custom-control-description">งานที่มีความสมดุลทั้งงานและชีวิตส่วนตัว</span>
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <label class="custom-control custom-radio">
                                            <input type="radio" class="custom-control-input" name="group1" value="3"
                                            @if(old('group1') == 3) checked @endif >
                                            <span class="custom-control-indicator"></span>
                                            <span class="custom-control-description">งานที่มีความอิสระและยืดหยุ่น</span>
                                        </label>
                                    </div>
                                </fieldset>
                                <fieldset class="form-group">
                                    <legend>2. เทคโนโลยีมีส่วนในการทำงานของคุณอย่างไร?</legend>
                                    <div class="form-check">
                                        <label class="custom-control custom-radio">
                                            <input type="radio" class="custom-control-input" name="group2" value="1"
                                            @if(old('group2') == 1) checked @endif>
                                            <span class="custom-control-indicator"></span>
                                            <span class="custom-control-description">ต้องปรับตัวใช้เทคโนโลยีในการทำงาน</span>
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <label class="custom-control custom-radio">
                                            <input type="radio" class="custom-control-input" name="group2" value="2"
                                            @if(old('group2') == 2) checked @endif>
                                            <span class="custom-control-indicator"></span>
                                            <span class="custom-control-description">เทคโนโลยีเข้ามามีบทบาทสำคัญในการทำงาน</span>
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <label class="custom-control custom-radio">
                                            <input type="radio" class="custom-control-input" name="group2" value="3"
                                            @if(old('group2') == 3) checked @endif>
                                            <span class="custom-control-indicator"></span>
                                            <span class="custom-control-description">การทำงานทุกอย่างต้องใช้เทคโนโลยี</span>
                                        </label>
                                    </div>
                                </fieldset>
                                <fieldset class="form-group">
                                    <legend>3. ทัศนคติความก้าวหน้าในการทำงานของคุณคืออะไร?</legend>
                                    <div class="form-check">
                                        <label class="custom-control custom-radio">
                                            <input type="radio" class="custom-control-input" name="group3" value="1"
                                            @if(old('group3') == 1) checked @endif>
                                            <span class="custom-control-indicator"></span>
                                            <span class="custom-control-description">ความก้าวหน้าในการทำงานขึ้นอยู่กับองค์กร</span>
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <label class="custom-control custom-radio">
                                            <input type="radio" class="custom-control-input" name="group3" value="2"
                                            @if(old('group3') == 2) checked @endif>
                                            <span class="custom-control-indicator"></span>
                                            <span class="custom-control-description">การทำงานช่วงแรกอาจต้องลองผิดลองถูกไปก่อน เพื่อค้นหาความก้าวหน้าที่แท้จริง</span>
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <label class="custom-control custom-radio">
                                            <input type="radio" class="custom-control-input" name="group3" value="3"
                                            @if(old('group3') == 3) checked @endif>
                                            <span class="custom-control-indicator"></span>
                                            <span class="custom-control-description">ยุคนี้แล้วคงต้องลอง Startup ดิจิตอลเองแทนที่จะทำงานเพื่อคนอื่น</span>
                                        </label>
                                    </div>
                                </fieldset>
                                <fieldset class="form-group">
                                    <legend>4. คุณรับข่าวสารจากช่องทางไหนมากที่สุด?</legend>
                                    <div class="form-check">
                                        <label class="custom-control custom-radio">
                                            <input type="radio" class="custom-control-input" name="group4" value="1"
                                            @if(old('group4') == 1) checked @endif>
                                            <span class="custom-control-indicator"></span>
                                            <span class="custom-control-description">ดูโทรทัศน์</span>
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <label class="custom-control custom-radio">
                                            <input type="radio" class="custom-control-input" name="group4" value="2"
                                            @if(old('group4') == 2) checked @endif>
                                            <span class="custom-control-indicator"></span>
                                            <span class="custom-control-description">ใช้คอมพิวเตอร์ในการค้นหาข้อมูล รับข่าวสาร</span>
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <label class="custom-control custom-radio">
                                            <input type="radio" class="custom-control-input" name="group4" value="3"
                                            @if(old('group4') == 3) checked @endif>
                                            <span class="custom-control-indicator"></span>
                                            <span class="custom-control-description">อ่านจากแท็บเล็ทและโทรศัพท์มือถือ</span>
                                        </label>
                                    </div>
                                </fieldset>
                                <fieldset class="form-group">
                                    <legend>5. ช่องทางการสื่อสารที่คุณชอบที่สุดคืออะไร?</legend>
                                    <div class="form-check">
                                        <label class="custom-control custom-radio">
                                            <input type="radio" class="custom-control-input" name="group5" value="1"
                                            @if(old('group5') == 1) checked @endif>
                                            <span class="custom-control-indicator"></span>
                                            <span class="custom-control-description">พูดคุยทางโทรศัพท์</span>
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <label class="custom-control custom-radio">
                                            <input type="radio" class="custom-control-input" name="group5" value="2"
                                            @if(old('group5') == 2) checked @endif>
                                            <span class="custom-control-indicator"></span>
                                            <span class="custom-control-description">ติดต่อทางอีเมล์หรือส่งข้อความ</span>
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <label class="custom-control custom-radio">
                                            <input type="radio" class="custom-control-input" name="group5" value="3"
                                            @if(old('group5') == 3) checked @endif>
                                            <span class="custom-control-indicator"></span>
                                            <span class="custom-control-description">สื่อสารทางออนไลน์ เช่น Line / Facebook message</span>
                                        </label>
                                    </div>
                                </fieldset>
                                <fieldset class="form-group">
                                    <legend>6. หากคุณต้องคุยงาน วิธีการไหนที่คุณถนัดที่สุด?</legend>
                                    <div class="form-check">
                                        <label class="custom-control custom-radio">
                                            <input type="radio" class="custom-control-input" name="group6" value="1"
                                            @if(old('group6') == 1) checked @endif>
                                            <span class="custom-control-indicator"></span>
                                            <span class="custom-control-description">นั่งประชุมแลกเปลี่ยนความคิดเห็น</span>
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <label class="custom-control custom-radio">
                                            <input type="radio" class="custom-control-input" name="group6" value="2"
                                            @if(old('group6') == 2) checked @endif>
                                            <span class="custom-control-indicator"></span>
                                            <span class="custom-control-description">ส่งข้อความโต้ตอบทางโทรศัพท์หรืออีเมล์</span>
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <label class="custom-control custom-radio">
                                            <input type="radio" class="custom-control-input" name="group6" value="3"
                                            @if(old('group6') == 3) checked @endif>
                                            <span class="custom-control-indicator"></span>
                                            <span class="custom-control-description">ส่งข้อความพูดคุยโต้ตอบทางออนไลน์ เช่น Line/ Facebook message</span>
                                        </label>
                                    </div>
                                </fieldset>
                                <fieldset class="form-group">
                                    <legend>7. คุณชอบทำธุรกรรมทางการเงินแบบไหน?</legend>
                                    <div class="form-check">
                                        <label class="custom-control custom-radio">
                                            <input type="radio" class="custom-control-input" name="group7" value="1"
                                            @if(old('group7') == 1) checked @endif>
                                            <span class="custom-control-indicator"></span>
                                            <span class="custom-control-description">ไปที่ธนาคาร พูดคุยแบบตัวต่อตัว</span>
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <label class="custom-control custom-radio">
                                            <input type="radio" class="custom-control-input" name="group7" value="2"
                                            @if(old('group7') == 2) checked @endif>
                                            <span class="custom-control-indicator"></span>
                                            <span class="custom-control-description">หาข้อมูลทางออนไลน์ แล้วนัดพบเพื่อพูดคุย</span>
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <label class="custom-control custom-radio">
                                            <input type="radio" class="custom-control-input" name="group7" value="3"
                                            @if(old('group7') == 3) checked @endif>
                                            <span class="custom-control-indicator"></span>
                                            <span class="custom-control-description">ใช้ Internet Banking</span>
                                        </label>
                                    </div>
                                </fieldset>
                                <fieldset class="form-group">
                                    <legend>8. การทำงานของคุณคือเป็นแบบไหน?</legend>
                                    <div class="form-check">
                                        <label class="custom-control custom-radio">
                                            <input type="radio" class="custom-control-input" name="group8" value="1"
                                            @if(old('group8') == 1) checked @endif>
                                            <span class="custom-control-indicator"></span>
                                            <span class="custom-control-description">มุ่งมั่นทุ่มเทในขอบเขตที่ได้รับมอบหมายเพื่อการทำงานที่มีคุณภาพและประสิทธิภาพ</span>
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <label class="custom-control custom-radio">
                                            <input type="radio" class="custom-control-input" name="group8" value="2"
                                            @if(old('group8') == 2) checked @endif>
                                            <span class="custom-control-indicator"></span>
                                            <span class="custom-control-description">ต้องการความชัดเจนในหน้าที่และความรับผิดชอบ รวมทั้งโครงสร้างและทิศทางขององค์กร</span>
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <label class="custom-control custom-radio">
                                            <input type="radio" class="custom-control-input" name="group8" value="3"
                                            @if(old('group8') == 3) checked @endif>
                                            <span class="custom-control-indicator"></span>
                                            <span class="custom-control-description">การพยายามมองหาช่องทางที่หลากหลายรูปแบบในการทำงาน และมีความรู้สึกอยากมีธุรกิจของตัวเอง</span>
                                        </label>
                                    </div>
                                </fieldset>
                                <fieldset class="form-group">
                                    <legend>9. คุณคาดหวังผลตอบแทนหรือรางวัลในการทำงานแบบไหน?</legend>
                                    <div class="form-check">
                                        <label class="custom-control custom-radio">
                                            <input type="radio" class="custom-control-input" name="group9" value="1"
                                            @if(old('group9') == 1) checked @endif>
                                            <span class="custom-control-indicator"></span>
                                            <span class="custom-control-description">เพียงได้รับการยอมรับ และชื่นชมจากองค์กร</span>
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <label class="custom-control custom-radio">
                                            <input type="radio" class="custom-control-input" name="group9" value="2"
                                            @if(old('group9') == 2) checked @endif>
                                            <span class="custom-control-indicator"></span>
                                            <span class="custom-control-description">ต้องการอิสระในความคิด และการทำงาน</span>
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <label class="custom-control custom-radio">
                                            <input type="radio" class="custom-control-input" name="group9" value="3"
                                            @if(old('group9') == 3) checked @endif>
                                            <span class="custom-control-indicator"></span>
                                            <span class="custom-control-description">ต้องการงานที่มีคุณค่า และมีความหมายต่อตนเอง</span>
                                        </label>
                                    </div>
                                </fieldset>
                                <fieldset class="form-group">
                                    <legend>10. คำพูดลักษณะใดที่สามารถสร้างแรงจูงใจให้คุณ ?</legend>
                                    <div class="form-check">
                                        <label class="custom-control custom-radio">
                                            <input type="radio" class="custom-control-input" name="group10" value="1"
                                            @if(old('group10') == 1) checked @endif>
                                            <span class="custom-control-indicator"></span>
                                            <span class="custom-control-description">คุณคือคนที่มีคุณค่า เราต้องการคุณ</span>
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <label class="custom-control custom-radio">
                                            <input type="radio" class="custom-control-input" name="group10" value="2"
                                            @if(old('group10') == 2) checked @endif>
                                            <span class="custom-control-indicator"></span>
                                            <span class="custom-control-description">คุณทำได้ดีอยู่แล้ว ฉันเชื่อมั่นในตัวคุณ</span>
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <label class="custom-control custom-radio">
                                            <input type="radio" class="custom-control-input" name="group10" value="3"
                                            @if(old('group10') == 3) checked @endif>
                                            <span class="custom-control-indicator"></span>
                                            <span class="custom-control-description">งานคุณ “เจ๋งมาก” ดีใจที่ได้ร่วมงานด้วย</span>
                                        </label>
                                    </div>
                                </fieldset>
                                <fieldset class="form-group">
                                    <legend>11. คุณอยากเป็นผู้นำแบบไหน?</legend>
                                    <div class="form-check">
                                        <label class="custom-control custom-radio">
                                            <input type="radio" class="custom-control-input" name="group11" value="1"
                                            @if(old('group11') == 1) checked @endif>
                                            <span class="custom-control-indicator"></span>
                                            <span class="custom-control-description">ได้รับการยอมรับและความร่วมมือจากเพื่อนร่วมงาน</span>
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <label class="custom-control custom-radio">
                                            <input type="radio" class="custom-control-input" name="group11" value="2"
                                            @if(old('group11') == 2) checked @endif>
                                            <span class="custom-control-indicator"></span>
                                            <span class="custom-control-description">สร้างความท้าทายและแรงบันดาลใจให้กับผู้ร่วมงาน</span>
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <label class="custom-control custom-radio">
                                            <input type="radio" class="custom-control-input" name="group11" value="3"
                                            @if(old('group11') == 3) checked @endif>
                                            <span class="custom-control-indicator"></span>
                                            <span class="custom-control-description">สามารถเติมเต็มความสำเร็จให้กับทีมงาน</span>
                                        </label>
                                    </div>
                                </fieldset>
                                <fieldset class="form-group">
                                    <legend>12. ข้อไหนบ่งบอกถึงพฤติกรรมการทำงานของคุณ?</legend>
                                    <div class="form-check">
                                        <label class="custom-control custom-radio">
                                            <input type="radio" class="custom-control-input" name="group12" value="1"
                                            @if(old('group12') == 1) checked @endif>
                                            <span class="custom-control-indicator"></span>
                                            <span class="custom-control-description">หนักเอา เบาสู้</span>
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <label class="custom-control custom-radio">
                                            <input type="radio" class="custom-control-input" name="group12" value="2"
                                            @if(old('group12') == 2) checked @endif>
                                            <span class="custom-control-indicator"></span>
                                            <span class="custom-control-description">ขอให้บอก ถ้าให้ lead</span>
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <label class="custom-control custom-radio">
                                            <input type="radio" class="custom-control-input" name="group12" value="3"
                                            @if(old('group12') == 3) checked @endif>
                                            <span class="custom-control-indicator"></span>
                                            <span class="custom-control-description">งานที่ใช่ คืองานที่ชอบ</span>
                                        </label>
                                    </div>
                                </fieldset>
                                <fieldset class="form-group">
                                    <legend>13. คุณมี Personality แบบไหน จากการทำแบบทดสอบ DISC?</legend>
                                    <div class="form-check">
                                        <label class="custom-control custom-radio">
                                            <input type="radio" class="custom-control-input" name="group13" value="1"
                                            @if(old('group13') == 1) checked @endif>
                                            <span class="custom-control-indicator"></span>
                                            <span class="custom-control-description">D (Dominance)</span>
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <label class="custom-control custom-radio">
                                            <input type="radio" class="custom-control-input" name="group13" value="2"
                                            @if(old('group13') == 2) checked @endif>
                                            <span class="custom-control-indicator"></span>
                                            <span class="custom-control-description">I (Influence)</span>
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <label class="custom-control custom-radio">
                                            <input type="radio" class="custom-control-input" name="group13" value="3"
                                            @if(old('group13') == 3) checked @endif>
                                            <span class="custom-control-indicator"></span>
                                            <span class="custom-control-description">S (Steadiness)</span>
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <label class="custom-control custom-radio">
                                            <input type="radio" class="custom-control-input" name="group13" value="4"
                                            @if(old('group13') == 4) checked @endif>
                                            <span class="custom-control-indicator"></span>
                                            <span class="custom-control-description">C (Compliance)</span>
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <label class="custom-control custom-radio">
                                            <input type="radio" class="custom-control-input" name="group13" value="5"
                                            @if(old('group13') == 5) checked @endif>
                                            <span class="custom-control-indicator"></span>
                                            <span class="custom-control-description">ยังไม่เคยทำ</span>
                                        </label>
                                    </div>
                                </fieldset>
                                <div class="form-group">
                                    <legend>14. กรุณาบอก Top 5 Strength ในตัวคุณ?</legend>
                                    <input type="text" class="form-control" placeholder="คำตอบข้อ 1..." name="group14_1" id="inputStrength1" data-keeper-lock-id="k-3ce73zbkdyo" value="{{ old('group14_1') }}">
                                    <input type="text" class="form-control" placeholder="คำตอบข้อ 2..." name="group14_2" id="inputStrength2" data-keeper-lock-id="k-3ce73zbkdyo" value="{{ old('group14_2') }}">
                                    <input type="text" class="form-control" placeholder="คำตอบข้อ 3..." name="group14_3" id="inputStrength3" data-keeper-lock-id="k-3ce73zbkdyo" value="{{ old('group14_3') }}">
                                    <input type="text" class="form-control" placeholder="คำตอบข้อ 4..." name="group14_4" id="inputStrength4" data-keeper-lock-id="k-3ce73zbkdyo" value="{{ old('group14_4') }}">
                                    <input type="text" class="form-control" placeholder="คำตอบข้อ 5..." name="group14_5" id="inputStrength5" data-keeper-lock-id="k-3ce73zbkdyo" value="{{ old('group14_5') }}">
                                </div>
                            </div>
                        </div>

                        <div class="row" id="btn_confirm_error">
                            <div class="col-md-12 text-center">
                                @if ($errors->all())
                                <p class="text-error label">โปรดตอบคำถามให้ครบทุกข้อ</p>
                                @endif
                                
                                <button style="width:150px;" type="submit" id="btn_confirm" class="btn btn-primary">ยืนยัน</button>
                            </div>
                        </div>
                    </div>



                    </form>




                </div>
            </div>
        </div>
    </div>


    <script src="{{url('front/asset/libs/jquery3/jquery-3.2.1.min.js')}}"></script>
    <script src="{{url('front/asset/libs/popper/popper.min.js')}}"></script>
    <script src="{{url('front/asset/libs/bootstrap4/js/bootstrap.min.js')}}"></script>

    <script>
        $(document).ready(function () {
            const userName = localStorage.getItem('username');
            $('#lbl_fullname').html(userName);
            $('#btn_confirm').click(() => {
                const boxError = $('.text-error');
                boxError.addClass('hidden');
                const groupHasChecked = [];
                for (let index = 1; index <= 13; index++) {
                    const groupChecked = $(`input[name=group${index}]:checked`);
                    groupHasChecked.push(groupChecked.val());
                }
                const isCheckedAll = groupHasChecked.every((x) => { 
                    if (!x) {
                        return false;
                    }
                    return true;
                });

                const inputValueList = [];
                for (let index = 1; index <= 5; index++) {
                    const inputBox = $(`#inputStrength${index}`);
                    inputValueList.push(inputBox.val());
                }
                const isFillAll = inputValueList.every((x) => { 
                    if (!x) {
                        return false;
                    }
                    return true;
                });
                
                if (isCheckedAll && isFillAll) {
                    window.location = 'step-3.html';
                } else {
                    boxError.removeClass('hidden');
                    setTimeout(() => {
                        boxError.addClass('hidden');
                    }, 10000);
                }
            });


            @if ($errors->all())
            window.scrollTo(0, document.body.scrollHeight);
            @endif
        });
    </script>
</body>

</html>