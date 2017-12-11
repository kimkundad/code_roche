@extends('admin.layouts.template')
@section('admin.stylesheet')
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.13/css/jquery.dataTables.min.css" />
<link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.2.4/css/buttons.dataTables.min.css" />

<style>
.dataTables_wrapper .dataTables_filter input {
  margin-right: 10px;
  min-width: 120px;
  width: 100%;
  height: 34px;
  padding: 6px 12px;
  font-size: 14px;
  line-height: 1.42857143;
  color: #555;
  background-color: #fff;
  background-image: none;
  border: 1px solid #ccc;
  border-radius: 4px;
  -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075);
  box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075);
  -webkit-transition: border-color ease-in-out .15s, -webkit-box-shadow ease-in-out .15s;
  -o-transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s;
  transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s;
}
.dataTables_wrapper .dataTables_filter {
        float: none;
        margin-right: 10px;
    text-align: right;
}
.ap-questions-featured {
    margin-left: -10px;
    border: medium none;
    color: #ff951e;
    display: inline;
    font-size: 16px;
    height: auto;
    margin-right: 5px;
    padding: 0;
    position: static;
    vertical-align: baseline;
    width: auto;
}
</style>
@stop('admin.stylesheet')
@section('admin.content')






        <section role="main" class="content-body">

          <header class="page-header">
            <h2>{{$datahead}}</h2>

            <div class="right-wrapper pull-right">
              <ol class="breadcrumbs">
                <li>
                  <a href="dashboard.html">
                    <i class="fa fa-home"></i>
                  </a>
                </li>

                <li><span>{{$datahead}}</span></li>
              </ol>

              <a class="sidebar-right-toggle" data-open="sidebar-right" ><i class="fa fa-chevron-left"></i></a>
            </div>
          </header>


          <!-- start: page -->



<div class="row">
              <div class="row">
              <div class="col-xs-12">

            <section class="panel">
              <header class="panel-heading">
                <div class="panel-actions">
                  <a href="#"  class="panel-action panel-action-toggle" data-panel-toggle></a>

                </div>

                <h2 class="panel-title">{{$datahead}}</h2>
              </header>
              <div class="panel-body">


                <div class="row">
                   <div class="col-md-4">


                     

                   </div>

                   <div class="col-md-8 pull-right">

                     <div class="form-group ">
                       <label class="col-md-4 control-label"></label>
                       <div class="col-md-8">
                         <form class="form-horizontal" action="{{url('admin/user_regis_search_admin')}}" method="GET" enctype="multipart/form-data">
                           {{ csrf_field() }}
                         <div class="input-group input-search">
                           <input type="text" class="form-control" name="q" placeholder="Search..." required>
                           <span class="input-group-btn">
                             <button class="btn btn-default" type="submit"><i class="fa fa-search"></i></button>
                           </span>
                         </div>
                       </form>
                       </div>
                     </div>
                   </div>

                 </div>


<br>



                <div class="table-responsive">
                <table id="example" class="table table-striped " cellspacing="0" width="100%">
                  <thead>
                    <tr>
                      <th>CHRIS No.</th>
                      <th>Emp.No.</th>
                      <th>ชื่อ-นามสกุล</th>
                      
                      <th>Position</th>
                      <th>Department</th>
                      <th>Age</th>
                      <th>Birthday</th>
                      <th>จัดการ</th>
                    </tr>
                  </thead>
                  <tbody>
                    @if($objs)
                @foreach($objs as $u)
                    <tr>
                      
                      <td>{{$u->chris}}</td>
                      <td>{{$u->emp_no}}</td>
                      <td>{{$u->title}} {{$u->name}} {{$u->surname}}</td>
                      <td>{{$u->position}}</td>
                      <td>{{$u->department}}</td>
                      <td>{{$u->age}}</td>
                      <td>{{$u->birthday}}</td>
                      
                      @if($u->status == 1)
                      <td>

                        @if($u->status)
                        <a style="float:left; margin: 3px; margin-top:2px; font-size: 16px; " class=" ap-questions-featured"
                          role="button"><i class="fa fa-star"></i></a>
                        @endif  

                        
                        <a style="float:left; margin: 3px; font-size: 10px; padding: 1px 3px;" class="btn btn-primary btn-xs modal-sizes"
                         href="#modalSM-{{$u->id}}" role="button"><i class="fa fa-graduation-cap"></i> </a>
                        
                         <a style="float:left; margin: 3px; font-size: 10px; padding: 1px 3px;" target="_blank" class="btn btn-danger btn-xs"
                         href="{{url('/admin/load_img/'.$u->id)}}" role="button"><i class="fa fa-download"></i> </a>



                          <!-- popup -->
                           <div id="modalSM-{{$u->id}}" class="modal-block modal-block-mm mfp-hide">
                    <section class="panel">
                    <!--  <form  action="{{url('admin/user_2/post_update')}}" method="post"  > -->
                     <form id="cutproduct1">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <input type="hidden" name="user_id" value="{{$u->id}}">
                      <header class="panel-heading">
                        <h2 class="panel-title">ข้อมูล {{$u->title}} {{$u->name}} {{$u->surname}}</h2>
                      </header>
                      <div class="panel-body">
                        <div class="modal-wrapper" style="padding-top:10px;">
                          <div class="modal-text">


                        <div class="form-group" style="margin-bottom: 5px;">
                          <label for="inputPassword3" class=" control-label"><b> Gen_B :</b> {{number_format(($u->gen_b/12)*100, 2)}}%</label>
                       </div>
                       <div class="form-group" style="margin-bottom: 5px;">
                          <label for="inputPassword3" class=" control-label"><b> Gen_X :</b> {{number_format(($u->gen_x/12)*100, 2)}}%</label>
                       </div>
                       <div class="form-group" style="margin-bottom: 5px;">
                          <label for="inputPassword3" class=" control-label"><b> Gen_Y :</b> {{number_format(($u->gen_y/12)*100, 2)}}%</label>
                       </div>
                       <br>
                       <h5 style="color:#000">โดนๆ 12 คำถาม</h5>
                       <hr>

                      <div class="form-group" style="margin-bottom: 5px;">
                        <label for="inputPassword3" class=" control-label"><b>1. งานในอุดมคติควรเป็นแบบไหน? :</b><br>
                          @if($u->q1 == 1)
                            งานที่มีความมั่นคงในชีวิต
                          @elseif($u->q1 == 2)
                            งานที่มีความสมดุลทั้งงานและชีวิตส่วนตัว
                          @elseif($u->q1 == 3)
                            งานที่มีความอิสระและยืดหยุ่น
                          @else
                            
                          @endif
                          </label>
                     </div>

                     <div class="form-group" style="margin-bottom: 5px;">
                        <label for="inputPassword3" class=" control-label"><b>2. เทคโนโลยีมีส่วนในการทำงานของคุณอย่างไร? :</b><br>
                          @if($u->q2 == 1)
                            ต้องปรับตัวใช้เทคโนโลยีในการทำงาน
                          @elseif($u->q2 == 2)
                            เทคโนโลยีเข้ามามีบทบาทสำคัญในการทำงาน
                          @elseif($u->q2 == 3)
                            การทำงานทุกอย่างต้องใช้เทคโนโลยี
                          @else
                            
                          @endif
                          </label>
                     </div>

                     <div class="form-group" style="margin-bottom: 5px;">
                        <label for="inputPassword3" class=" control-label"><b>3. ทัศนคติความก้าวหน้าในการทำงานของคุณคืออะไร? :</b><br>
                          @if($u->q3 == 1)
                            ความก้าวหน้าในการทำงานขึ้นอยู่กับองค์กร
                          @elseif($u->q3 == 2)
                            การทำงานช่วงแรกอาจต้องลองผิดลองถูกไปก่อน เพื่อค้นหาความก้าวหน้าที่แท้จริง
                          @elseif($u->q3 == 3)  
                            ยุคนี้แล้วคงต้องลอง Startup ดิจิตอลเองแทนที่จะทำงานเพื่อคนอื่น
                          @else
                            
                          @endif
                          </label>
                     </div>


                     <div class="form-group" style="margin-bottom: 5px;">
                        <label for="inputPassword3" class=" control-label"><b>4. คุณรับข่าวสารจากช่องทางไหนมากที่สุด? :</b><br>
                          @if($u->q4 == 1)
                            ดูโทรทัศน์
                          @elseif($u->q4 == 2)
                            ใช้คอมพิวเตอร์ในการค้นหาข้อมูล รับข่าวสาร
                          @elseif($u->q4 == 3)  
                            อ่านจากแท็บเล็ทและโทรศัพท์มือถือ
                          @else
                            
                          @endif
                          </label>
                     </div>

                     <div class="form-group" style="margin-bottom: 5px;">
                        <label for="inputPassword3" class=" control-label"><b>5. ช่องทางการสื่อสารที่คุณชอบที่สุดคืออะไร? :</b><br>
                          @if($u->q5 == 1)
                            พูดคุยทางโทรศัพท์
                          @elseif($u->q5 == 2)
                            ติดต่อทางอีเมล์หรือส่งข้อความ
                          @elseif($u->q5 == 3)  
                            สื่อสารทางออนไลน์ เช่น Line / Facebook message
                          @else
                            
                          @endif
                          </label>
                     </div>

                     <div class="form-group" style="margin-bottom: 5px;">
                        <label for="inputPassword3" class=" control-label"><b>6. หากคุณต้องคุยงาน วิธีการไหนที่คุณถนัดที่สุด? :</b><br>
                          @if($u->q6 == 1)
                            นั่งประชุมแลกเปลี่ยนความคิดเห็น
                          @elseif($u->q6 == 2)
                            ส่งข้อความโต้ตอบทางโทรศัพท์หรืออีเมล์
                          @elseif($u->q6 == 3) 
                            ส่งข้อความพูดคุยโต้ตอบทางออนไลน์ เช่น Line/ Facebook message
                          @else
                            
                          @endif
                          </label>
                     </div>



                     <div class="form-group" style="margin-bottom: 5px;">
                        <label for="inputPassword3" class=" control-label"><b>7. คุณชอบทำธุรกรรมทางการเงินแบบไหน? :</b><br>
                          @if($u->q7 == 1)
                            ไปที่ธนาคาร พูดคุยแบบตัวต่อตัว
                          @elseif($u->q7 == 2)
                            หาข้อมูลทางออนไลน์ แล้วนัดพบเพื่อพูดคุย
                          @elseif($u->q7 == 3) 
                            ใช้ Internet Banking
                          @else
                            
                          @endif
                          </label>
                     </div>

                      <div class="form-group" style="margin-bottom: 5px;">
                        <label for="inputPassword3" class=" control-label"><b>8. การทำงานของคุณคือเป็นแบบไหน? :</b><br>
                          @if($u->q8 == 1)
                            มุ่งมั่นทุ่มเทในขอบเขตที่ได้รับมอบหมายเพื่อการทำงานที่มีคุณภาพและประสิทธิภาพ
                          @elseif($u->q8 == 2)
                            ต้องการความชัดเจนในหน้าที่และความรับผิดชอบ รวมทั้งโครงสร้างและทิศทางขององค์กร
                          @elseif($u->q8 == 3) 
                            การพยายามมองหาช่องทางที่หลากหลายรูปแบบในการทำงาน และมีความรู้สึกอยากมีธุรกิจของตัวเอง
                          @else
                            
                          @endif
                          </label>
                     </div>


                     <div class="form-group" style="margin-bottom: 5px;">
                        <label for="inputPassword3" class=" control-label"><b>9. คุณคาดหวังผลตอบแทนหรือรางวัลในการทำงานแบบไหน? :</b><br>
                          @if($u->q9 == 1)
                            เพียงได้รับการยอมรับ และชื่นชมจากองค์กร
                          @elseif($u->q9 == 2)
                            ต้องการอิสระในความคิด และการทำงาน
                          @elseif($u->q9 == 3)   
                            ต้องการงานที่มีคุณค่า และมีความหมายต่อตนเอง
                          @else
                            
                          @endif
                          </label>
                     </div>


                     <div class="form-group" style="margin-bottom: 5px;">
                        <label for="inputPassword3" class=" control-label"><b>10. คำพูดลักษณะใดที่สามารถสร้างแรงจูงใจให้คุณ ? :</b><br>
                          @if($u->q10 == 1)
                            คุณคือคนที่มีคุณค่า เราต้องการคุณ
                          @elseif($u->q10 == 2)
                            คุณทำได้ดีอยู่แล้ว ฉันเชื่อมั่นในตัวคุณ
                          @elseif($u->q10 == 3) 
                            งานคุณ “เจ๋งมาก” ดีใจที่ได้ร่วมงานด้วย
                          @else
                            
                          @endif
                          </label>
                     </div>

                     <div class="form-group" style="margin-bottom: 5px;">
                        <label for="inputPassword3" class=" control-label"><b>11. คุณอยากเป็นผู้นำแบบไหน? :</b><br>
                          @if($u->q11 == 1)
                            ได้รับการยอมรับและความร่วมมือจากเพื่อนร่วมงาน
                          @elseif($u->q11 == 2)
                            สร้างความท้าทายและแรงบันดาลใจให้กับผู้ร่วมงาน
                          @elseif($u->q11 == 3)
                            สามารถเติมเต็มความสำเร็จให้กับทีมงาน
                          @else
                            
                          @endif
                          </label>
                     </div>

                     <div class="form-group" style="margin-bottom: 5px;">
                        <label for="inputPassword3" class=" control-label"><b>12. ข้อไหนบ่งบอกถึงพฤติกรรมการทำงานของคุณ? :</b><br>
                          @if($u->q12 == 1)
                            หนักเอา เบาสู้
                          @elseif($u->q12 == 2)
                            ขอให้บอก ถ้าให้ lead
                          @elseif($u->q12 == 3)
                            งานที่ใช่ คืองานที่ชอบ
                          @else
                            
                          @endif
                          </label>
                     </div>


                     <div class="form-group" style="margin-bottom: 5px;">
                        <label for="inputPassword3" class=" control-label"><b>13. คุณมี Personality แบบไหน จากการทำแบบทดสอบ DISC? :</b><br>
                          @if($u->q2 == 1)
                            D (Dominance)
                          @elseif($u->q13 == 2)
                            I (Influence)
                            @elseif($u->q13 == 3)
                            S (Steadiness)ขอให้บอก ถ้าให้ lead
                            @elseif($u->q13 == 4)
                            C (Compliance)
                            @elseif($u->q13 == 4)
                            ยังไม่เคยทำ
                          @else
                            
                          @endif
                          </label>
                     </div>



                     <div class="form-group" style="margin-bottom: 5px;">
                        <label for="inputPassword3" class=" control-label"><b>14. กรุณาบอก Top 5 Strength ในตัวคุณ? :</b><br>
                          1.{{$u->q14_1}}<br>
                          2.{{$u->q14_2}}<br>
                          3.{{$u->q14_3}}<br>
                          4.{{$u->q14_4}}<br>
                          5.{{$u->q14_5}}<br>
                          </label>
                     </div>


                          </div>
                        </div>
                      </div>
                      <footer class="panel-footer">
                        <div class="row">
              <div class="col-md-12 text-right">


                <button class="btn btn-default modal-dismiss">ยกเลิก</button>
              </div>
            </div>
                      </footer>
                      </form>
                    </section>
                  </div>




            





                      </td>

                      @endif 


                      
                    </tr>
                       @endforeach
              @endif

                  </tbody>
                </table>
                </div>
<div class="pagination"> {{ $objs->links() }} </div>
              </div>
            </section>

              </div>
            </div>
        </div>
</section>
@stop



@section('scripts')



@if ($message = Session::get('add_success'))
<script type="text/javascript">
PNotify.prototype.options.styling = "fontawesome";
new PNotify({
      title: 'ยินดีด้วยค่ะ',
      text: '{{$message}}',
      type: 'success'
    });
</script>
@endif

@if ($message = Session::get('delete'))
<script type="text/javascript">
PNotify.prototype.options.styling = "fontawesome";
new PNotify({
      title: 'ยินดีด้วยค่ะ',
      text: '{{$message}}',
      type: 'success'
    });
</script>
@endif





@stop('scripts')
