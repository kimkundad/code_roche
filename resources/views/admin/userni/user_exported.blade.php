<?php
header("Content-Type: application/xls");
header("Content-Disposition: attachment; filename=registration.xls");
header("Pragma: no-cache");
header("Expires: 0");


echo '<table border="1">';
//make the column headers what you want in whatever order you want
echo '<tr>
	<th> Status </th>
	<th> CHRIS No. </th>
	<th> Emp.No. </th>
	<th> Title </th>
	<th> Name </th>

	<th> Surname </th>
	<th> Position </th>
	<th> Department </th>

	<th> Birthday </th>
	<th> Age </th>


	<th> 1. งานในอุดมคติควรเป็นแบบไหน? </th>
	<th> 2. เทคโนโลยีมีส่วนในการทำงานของคุณอย่างไร? </th>
	<th> 3. ทัศนคติความก้าวหน้าในการทำงานของคุณคืออะไร?</th>
	<th> 4. คุณรับข่าวสารจากช่องทางไหนมากที่สุด?</th>
	<th> 5. ช่องทางการสื่อสารที่คุณชอบที่สุดคืออะไร?</th>
	<th> 6. หากคุณต้องคุยงาน วิธีการไหนที่คุณถนัดที่สุด?</th>
	<th> 7. คุณชอบทำธุรกรรมทางการเงินแบบไหน?</th>
	<th> 8. การทำงานของคุณคือเป็นแบบไหน?</th>
	<th> 9. คุณคาดหวังผลตอบแทนหรือรางวัลในการทำงานแบบไหน?</th>
	<th> 10. คำพูดลักษณะใดที่สามารถสร้างแรงจูงใจให้คุณ ?</th>
	<th> 11. คุณอยากเป็นผู้นำแบบไหน?</th>
	<th> 12. ข้อไหนบ่งบอกถึงพฤติกรรมการทำงานของคุณ?</th>
	<th> 13. คุณมี Personality แบบไหน จากการทำแบบทดสอบ DISC?</th>

	<th> 14.1 กรุณาบอก Top 5 Strength ในตัวคุณ?</th>
	<th> 14.2</th>
	<th> 14.3</th>
	<th> 14.4</th>
	<th> 14.5</th>

	<th> Gen_B</th>
	<th> Gen_X</th>
	<th> Gen_Y</th>
	<th>check status</th>


	    </tr>';
//loop the query data to the table in same order as the headers


?>

@if($objs)
	@foreach($objs as $u)

    <tr>
			<td>
				@if($u->status == 0)
					ไม่กรอกแบบสอบถาม
				@else
				กรอกแบบสอบถาม
				@endif
			</td>
			<td> {{$u->chris}}</td>
			<td>{{$u->emp_no}}</td>
			<td>{{$u->title}}</td>
			<td>{{$u->name}}</td>
			<td>{{$u->surname}}</td>
			<td>{{$u->position}}</td>


			<td>{{$u->department}}</td>
			<td>{{$u->birthday}}</td>
			<td>{{$u->age}}</td>



			<td>
				@if($u->q1 == 1)
                            งานที่มีความมั่นคงในชีวิต
                          @elseif($u->q1 == 2)
                            งานที่มีความสมดุลทั้งงานและชีวิตส่วนตัว
                          @elseif($u->q1 == 3)
                            งานที่มีความอิสระและยืดหยุ่น
                          @else

                          @endif
			</td>

			<td>
				@if($u->q2 == 1)
                            ต้องปรับตัวใช้เทคโนโลยีในการทำงาน
                          @elseif($u->q2 == 2)
                            เทคโนโลยีเข้ามามีบทบาทสำคัญในการทำงาน
                          @elseif($u->q2 == 3)
                            การทำงานทุกอย่างต้องใช้เทคโนโลยี
                          @else

                          @endif
			</td>
			<td>
				@if($u->q3 == 1)
                            ความก้าวหน้าในการทำงานขึ้นอยู่กับองค์กร
                          @elseif($u->q3 == 2)
                            การทำงานช่วงแรกอาจต้องลองผิดลองถูกไปก่อน เพื่อค้นหาความก้าวหน้าที่แท้จริง
                          @elseif($u->q3 == 3)
                            ยุคนี้แล้วคงต้องลอง Startup ดิจิตอลเองแทนที่จะทำงานเพื่อคนอื่น
                          @else

                          @endif
			</td>
			<td>
				@if($u->q4 == 1)
                            ดูโทรทัศน์
                          @elseif($u->q4 == 2)
                            ใช้คอมพิวเตอร์ในการค้นหาข้อมูล รับข่าวสาร
                          @elseif($u->q4 == 3)
                            อ่านจากแท็บเล็ทและโทรศัพท์มือถือ
                          @else

                          @endif
			</td>
			<td>
				@if($u->q5 == 1)
                            พูดคุยทางโทรศัพท์
                          @elseif($u->q5 == 2)
                            ติดต่อทางอีเมล์หรือส่งข้อความ
                          @elseif($u->q5 == 3)
                            สื่อสารทางออนไลน์ เช่น Line / Facebook message
                          @else

                          @endif
			</td>
			<td>
				@if($u->q6 == 1)
                            นั่งประชุมแลกเปลี่ยนความคิดเห็น
                          @elseif($u->q6 == 2)
                            ส่งข้อความโต้ตอบทางโทรศัพท์หรืออีเมล์
                          @elseif($u->q6 == 3)
                            ส่งข้อความพูดคุยโต้ตอบทางออนไลน์ เช่น Line/ Facebook message
                          @else

                          @endif
			</td>
			<td>
				@if($u->q7 == 1)
                            ไปที่ธนาคาร พูดคุยแบบตัวต่อตัว
                          @elseif($u->q7 == 2)
                            หาข้อมูลทางออนไลน์ แล้วนัดพบเพื่อพูดคุย
                          @elseif($u->q7 == 3)
                            ใช้ Internet Banking
                          @else

                          @endif
			</td>
			<td>
				@if($u->q8 == 1)
                            มุ่งมั่นทุ่มเทในขอบเขตที่ได้รับมอบหมายเพื่อการทำงานที่มีคุณภาพและประสิทธิภาพ
                          @elseif($u->q8 == 2)
                            ต้องการความชัดเจนในหน้าที่และความรับผิดชอบ รวมทั้งโครงสร้างและทิศทางขององค์กร
                          @elseif($u->q8 == 3)
                            การพยายามมองหาช่องทางที่หลากหลายรูปแบบในการทำงาน และมีความรู้สึกอยากมีธุรกิจของตัวเอง
                          @else

                          @endif
			</td>
			<td>
				@if($u->q9 == 1)
                            เพียงได้รับการยอมรับ และชื่นชมจากองค์กร
                          @elseif($u->q9 == 2)
                            ต้องการอิสระในความคิด และการทำงาน
                          @elseif($u->q9 == 3)
                            ต้องการงานที่มีคุณค่า และมีความหมายต่อตนเอง
                          @else

                          @endif
			</td>
			<td>
				@if($u->q10 == 1)
                            คุณคือคนที่มีคุณค่า เราต้องการคุณ
                          @elseif($u->q10 == 2)
                            คุณทำได้ดีอยู่แล้ว ฉันเชื่อมั่นในตัวคุณ
                          @elseif($u->q10 == 3)
                            งานคุณ “เจ๋งมาก” ดีใจที่ได้ร่วมงานด้วย
                          @else

                          @endif
			</td>
			<td>
				@if($u->q11 == 1)
                            ได้รับการยอมรับและความร่วมมือจากเพื่อนร่วมงาน
                          @elseif($u->q11 == 2)
                            สร้างความท้าทายและแรงบันดาลใจให้กับผู้ร่วมงาน
                          @elseif($u->q11 == 3)
                            สามารถเติมเต็มความสำเร็จให้กับทีมงาน
                          @else

                          @endif
			</td>
			<td>
				 @if($u->q12 == 1)
                            หนักเอา เบาสู้
                          @elseif($u->q12 == 2)
                            ขอให้บอก ถ้าให้ lead
                          @elseif($u->q12 == 3)
                            งานที่ใช่ คืองานที่ชอบ
                          @else

                          @endif
			</td>
			<td>
				 @if($u->q13 == 1)
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
			</td>

			<td>{{$u->q14_1}}</td>
			<td>{{$u->q14_2}}</td>
			<td>{{$u->q14_3}}</td>
			<td>{{$u->q14_4}}</td>
			<td>{{$u->q14_5}}</td>


			<td>{{$u->gen_b}}</td>
			<td>{{$u->gen_x}}</td>
			<td>{{$u->gen_y}}</td>
			<td>{{$u->ch_status}}</td>



		</tr>
	@endforeach
@endif
<?php
echo '</table>';
?>
