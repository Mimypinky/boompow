@extends('site.layout')
@section('maincontent')


<script type="text/javascript">


if (RegExp('regismultipage', 'gi').test(window.location.search)) {

function registerP2(){
    var intro = introJs();
      intro.setOptions({
        showStepNumbers: false,
        nextLabel: "ต่อไป",
        prevLabel: "กลับ",
        skipLabel: "ข้าม",
        doneLabel: "เสร็จ",

        steps: [
          {
            element: "#register2",
            intro: "This is a dropdown"
          },
          {
            element: '#register3',
            intro: "This is an option within a dropdown.",
            position: 'bottom'
          },
          {
            element: '#register4',
            intro: "This is an option within a dropdown.",
            position: 'bottom'
          },
          {
            element: '#register5',
            intro: "This is an option within a dropdown.",
            position: 'bottom'
          },
          {
            element: '#register6',
            intro: "This is an option within a dropdown.",
            position: 'right'
          },
          {
            element: '#register7',
            intro: "This is an option within a dropdown.",
            position: 'bottom'
          },
          {
            element: '#register8',
            intro: "This is an option within a dropdown.",
            position: 'bottom'
          },
          {
            element: '#register9',
            intro: "This is an option within a dropdown.",
            position: 'bottom'
          },
          {
            element: '#register10',
            intro: "This is an option within a dropdown.",
            position: 'bottom'
          },
          {
            element: '#register11',
            intro: "This is an option within a dropdown.",
            position: 'bottom'
          },


        ]
      });


      intro.start();
  };

  setTimeout( "registerP2()", 1500);
}
</script>


<div class="container" style="width: 90%;">

    <div class="row" style="margin-top: 160px;">
        <div class="col s12 m12 l10 offset-l1">
          <form method="POST" action="{{ url('/register') }}" id="registerForm">
            <ul class="collection with-header">
                {{ csrf_field() }}
                <li class="collection-header"><center><h4>สมัครสมาชิก</h4></center></li>
                <li id="register2" class="collection-item">
                  <br>
                  <i class="left material-icons">verified_user</i><p>ตรวจสอบชื่อผู้ใช้</p>
                <div class="section"></div>
                <center>
                    <div class="row">
                        <div class="col s3" style="margin-top: 19px;"><p style="margin-left: 40%;font-size:16pt">ชื่อผู้ใช้</p></div>
                        <div class="col s6 ">
                            <form class="col s11">
                                    <input style="font-size:18pt;text-align:center" type="text" class="validate" id="username" name="username" placeholder="ใส่ชื่อผู้ใช้ของคุณ" onchange="checkAvailableUsername()" onblur="checkAvailableUsername()" onfocus="checkAvailableUsername()">
                            </form>
                        </div>

                    </div>
                </center>
                <div id="usernameAvailability" align='center'>
                    <span style="font-size:16pt;color: #ffb74d;">กรุณากรอกชื่อผู้ใช้</span>
                </div>

                <div class="section"></div>

                </li>
                <li id="register3" class="collection-item">
                  <br><i class="left material-icons">perm_identity</i>
                <p>ข้อมูลส่วนตัว</p>
                <div class="section"></div>
                    <table>
                        <tbody>
                            <tr>
                                <td class="col s8">

                                  <div class="input-field">

                                    <input style="font-size:18pt;" id="first_name" name="first_name" type="text" class="validate" value="{{ old('first_name' )}}" placeholder="ชื่อ">
                                </div>
                              </td>
                                <td class="col s4">
                                  <br>
                                  @if ($errors->has('first_name'))
                                      <span style='font-size: 16pt;text-align: center;color: red'>{{ $errors->first('first_name') }}</span>
                                  @endif
                              </td>
                                <td class="col s8">
                                  <div class="input-field">
                                    <input style="font-size:18pt;" id="last_name" name="last_name" type="text" class="validate" value="{{ old('last_name' )}}" placeholder="นามสกุล">
                                </div>
                                </td>
                                <td class="col s4">
                                  <br>
                                  @if ($errors->has('last_name'))
                                      <span style='font-size: 16pt;text-align: center;color: red'>{{ $errors->first('last_name') }}</span>
                                  @endif
                                </td>
                            </tr>
                            <tr>
                                <td class="col s8">
                                  <br>
                                  <p>
                                    <span>เพศ: </span> &nbsp&nbsp
                                    <input style="font-size:18pt;" name="gender" type="radio" id="male" value="male" />
                                    <label for="male" style="color: #424242;font-size:16pt">ชาย</label>
                                    &nbsp &nbsp &nbsp
                                    <input style="font-size:18pt;" name="gender" type="radio" id="female" value="female" />
                                    <label for="female" style="color: #424242;font-size:16pt">หญิง</label>
                                </p>
                              </td>
                              <td class="col s4">
                                <br>
                                @if ($errors->has('gender'))
                                    <span style='font-size: 16pt;text-align: center;color: red'>{{ $errors->first('gender') }}</span>
                                @endif
                              </td>
                                <td class="col s8">
                                  <br>
                                  <p>
                                    <span>วันเกิด: </span> &nbsp&nbsp
                                    <input type="date" class="datepicker" name="dob" style="td{font-size:20pt}">
                                    <!--<input type="date" name="dob" value="1941-08-07">-->
                                </p>
                              </td>
                              <td class="col s4">
                                <br><br>
                                @if ($errors->has('dob'))
                                    <span style='font-size: 16pt;text-align: center;color: red;bottom: 0px'>{{ $errors->first('dob') }}</span>
                                @endif
                              </td>
                            </tr>
                        </tbody>
                    </table>

                    <div class="section"></div>

                </li>
                <li id="register4" class="collection-item">
                  <br>
                  <i class="left material-icons">lock</i><p>อีเมล์ และ คำถามสำหรับรหัสผ่าน</p>
                <br>
                <table>
                  <tbody>
                    <tr>
                      <td id="register5" class="col s8">
                        <label for="icon_prefix" class="email-label" >กรอกอีเมล์ของคุณ </label>
                        <input style="font-size:18pt;" class="input-field" placeholder="เช่น this_is_email@mail.com" type="email" name="email">
                      </td>
                      <td class="col s4">
                        <br>
                        @if ($errors->has('email'))
                        <span style='font-size: 16pt;text-align: center;color: red'>{{ $errors->first('email') }}</span>
                        @endif
                      </td>
                    </tr>
                    <tr >
                      <td class="col s8">
                        <div id="register6" class="input-field">
                          <select name="question">
                            <option value="" disabled selected>โปรดเลือกคำถาม (คำตอบของคุณจะถูกใช้เป็นรหัสผ่านในการลงชื่อเข้าใช้)</option>
                            @foreach($questions as $question)
                            <option value="{{$question->id}}">{{$question->question}}?</option>
                            @endforeach
                          </select>
                        </div>
                      </td>
                      <td class="col s4">
                        <br>
                        @if ($errors->has('question'))
                        <span style='font-size: 16pt;text-align: center;color: red'>{{ $errors->first('question') }}</span>
                        @endif
                      </td>
                    </tr>
                    <tr>

                      <td class="col s8">

                        <div id="register7" class="input-field">
                          <label for="icon_prefix email-label">กรอกคำตอบของคุณ </label>
                          <input id="answer" type="password" name="password" class="validate">
                        </div></td>
                        <td class="col s4">
                          <br>
                          @if ($errors->has('password'))
                          <span style='font-size: 16pt;text-align: center;color: red'>{{ $errors->first('password') }}</span>
                          @endif
                        </td>
                      </tr>
                      <tr>
                        <td class="col s8">
                          <div id="register8" class="input-field">
                            <label for="icon_prefix email-label">กรอกคำตอบของคุณอีกครั้ง </label>
                            <input id="confirm-answer" name="password_confirmation" type="password" class="validate">
                          </div></td>
                          <td class="col s4">
                            <br>
                            @if ($errors->has('password_confirmation'))
                            <span style='font-size: 16pt;text-align: center;color: red'>{{ $errors->first('password_confirmation') }}</span>
                            @endif
                          </td>
                        </tr>

                      </tbody>
                    </table>
                  <div class="section"></div>
                <div align="center">


                </div>
                </li>
                <li class="collection-item" style="padding-bottom: 20px;">
                    <div class="section"></div>
                    <div align="center">
                      <span id="register9">
                          <label style="font-size: 18px;">อ่านข้อตกลงในการให้บริการ </label>
                          <a class="modal-trigger" href="#termofuse" style="font-size: 24px;">ที่นี่</a><br>
                      </span>
                    </div>
                    <div class="section"></div>

                    <div id="register10" align="center">
                        <input type="checkbox" class="filled-in checkbox" id="confirmCheck"/>

                        <label for="confirmCheck">ยืนยันการเข้าร่วมเป็นสมาชิก Boompow</label>
                    </div>
                    <div class="section">
                    </div>
                    <div align="center">

                      <button id="register11" class="blue darken-3 btn waves-effect waves-light" id="submit" type="submit" name="button"  >ตกลง</button>



                      <a href="{{url('/')}}" style="float: none" class="btn waves-effect waves-light modal-close">ยกเลิก</a>
                      <script type="text/javascript">
                        var confCheck = document.getElementById('confirmCheck');
                        var confSubmit = document.getElementById('confSubmit');
                        confCheck.onchange= function () {
                          //check if checkbox is checked
                          // if (confCheck.checked) {
                          //   confSubmit.disabled=false; //enable input
                          // } else {
                          //   confSubmit.disabled=true; //disable input
                          // }
                          confSubmit.disabled=!confCheck.checked;
                        };
                      </script>
                    </div>

                </li>
            </ul>
            </form>
            <div id="termofuse" class="modal" >
    <div class="modal-content">
      <h3 class="center" >ข้อตกลงในการใช้บริการ</h3>
      <div class="row">
        <div class="col s12 ">
            <blockquote>
              <h5>คำแถลงสิทธิและความรับผิดชอบ</h5>
              <b>ข้อตกลงการใช้งานนี้มีผลบังคับใช้ ณ วันที่ 19 ตุลาคม พ.ศ. 2559</b>
                <p>เนื่องจาก Boompow ให้บริการด้านต่างๆ มากมาย
                  เราจึงอาจจะขอให้คุณพิจารณาและยอมรับข้อกำหนดเพิ่มเติมซึ่งใช้บังคับต่อปฏิสัมพันธ์ของคุณที่มีกับผลิตภัณฑ์ หรือบริการ
                  ข้อกำหนดเพิ่มเติมที่สัมพันธ์กับแอพ ผลิตภัณฑ์ หรือบริการนี้จะใช้ควบคุมในประเด็นที่เกี่ยวข้องกับการที่คุณใช้ผลิตภัณฑ์
                  หรือบริการดังกล่าวจนถึงระดับที่ข้อกำหนดเพิ่มเติมเหล่านั้นขัดแย้งกับ  นี้</p>
                  <blockquote>
                    <h5>ข้อตกลงพื้นฐาน</h5>
                    <p >
                    1.  คุณต้องมีอายุอย่างน้อย 13 ปีในการใช้บริการ <br>
2. คุณจะต้องไม่โพสต์รูปภาพหรือเนื้อหาอื่นๆ ที่รุนแรง โป๊เปลือย เปลือยบางส่วน เลือกปฏิบัติ ผิดกฎหมาย ล่วงละเมิด มีเจตนาร้าย ลามกอนาจารหรือชี้นำทางเพศผ่านบริการนี้ <br>
3. คุณต้องรับผิดชอบต่อการกระทำใดๆ ที่เกิดขึ้นผ่านบัญชีผู้ใช้ของคุณ และคุณตกลงว่าคุณจะไม่ขาย ถ่ายโอน ให้สิทธิ์หรือโอนสิทธิ์บัญชีผู้ใช้ ผู้ติดตาม ชื่อผู้ใช้ หรือสิทธิของบัญชีผู้ใช้ใดๆ ของคุณ ยกเว้นบุคคลหรือธุรกิจที่ได้รับอนุมัติอย่างชัดแจ้งให้สร้างบัญชีผู้ใช้ในนามของพนักงานหรือลูกค้าของตน Instagram ห้ามการสร้างดังกล่าว และคุณตกลงว่าคุณจะไม่สร้างบัญชีผู้ใช้สำหรับบุคคลใดนอกจากตัวคุณเอง คุณสำแดงด้วยว่าข้อมูลทั้งหมดที่คุณให้มาหรือให้แก่ Boompow เมื่อลงทะเบียนและครั้งอื่นๆ ทั้งหมด จะเป็นความจริง ถูกต้อง ทันสมัยและสมบูรณ์ และคุณตกลงที่จะปรับปรุงข้อมูลของคุณตามความจำเป็น เพื่อรักษาให้ตรงความเป็นจริงและแม่นยำ <br>
4. คุณตกลงว่าคุณจะไม่เรียกร้อง รวบรวมหรือใช้ข้อมูลการเข้าสู่ระบบของผู้ใช้ Boompow รายอื่น<br>
5. คุณมีความรับผิดชอบในการรักษารหัสผ่านของคุณให้เป็นความลับและปลอดภัย <br>
6. คุณต้องไม่ใส่ร้ายป้ายสี ข่มเหง ดูหมิ่น คุกคาม ข่มขู่ ปลอมแปลงหรือขู่กรรโชกบุคคลหรือนิติบุคคล และคุณจะไม่โพสต์ข้อมูลส่วนตัวหรือเป็นความลับผ่านบริการนี้ ซึ่งรวมถึงแต่ไม่จำกัดเพียงข้อมูลบัตรเครดิต หมายเลขประกันสังคมหรือหมายเลขอื่นๆ ที่ระบุตัวตน หมายเลขโทรศัพท์ที่ไม่สาธารณะหรือที่อยู่อีเมลที่ไม่สาธารณะของคุณหรือบุคคลอื่นใด <br>
7. คุณจะต้องไม่ใช้บริการเพื่อวัตถุประสงค์ใดๆ ที่ผิดกฎหมายหรือไม่อนุญาต คุณตกลงที่จะปฏิบัติตามกฎหมาย กฎเกณฑ์และระเบียบทั้งหมด (เช่น ของรัฐบาลกลาง รัฐ ท้องถิ่นและมณฑล) ที่บังคับใช้กับการใช้บริการและเนื้อหาของคุณ (กำหนดไว้ด้านล่างนี้) ซึ่งรวมถึงแต่ไม่จำกัดเฉพาะกฎหมายลิขสิทธิ์<br>
8. คุณเป็นผู้รับผิดชอบแต่เพียงผู้เดียวสำหรับพฤติกรรมของคุณ ตลอดจนข้อมูล ไฟล์ข้อความ ข้อมูล ชื่อผู้ใช้ ภาพ กราฟิก รูปถ่าย ข้อมูลส่วนตัว คลิปเสียงและวิดีโอ เสียง งานเพลง งานเขียน แอพพลิเคชั่น ลิงก์ และเนื้อหาหรือสื่ออื่นๆ (รวมเรียกว่า "เนื้อหา") ที่คุณส่ง โพสต์หรือแสดงบนหรือผ่านบริการ <br>
9. คุณต้องไม่เปลี่ยนแปลง แก้ไข ดัดแปลงหรือปรับเปลี่ยนบริการ หรือเปลี่ยนแปลง แก้ไข ดัดแปลงหรือปรับเปลี่ยนเว็บไซต์อื่น เพื่อให้ส่อเป็นเท็จว่าเกี่ยวข้องกับบริการหรือ Boompow<br>
10. คุณต้องพิจารณาอย่างละเอียดรอบคอบ ก่อนเข้าร่วมกิจกรรมต่างๆ เพื่อความปลอดภัยของคุณ <br>
11. คุณต้องไม่สร้างหรือส่งอีเมล ความคิดเห็น ความถูกใจ หรือรูปแบบอื่นๆ ของการโฆษณาหรือการสื่อสารในลักษณะคุกคามที่ไม่เป็นที่ต้องการ (หรือ "สแปม") ให้กับผู้ใช้ Boompow ใดๆ <br>
12. คุณต้องไม่ใช้ชื่อโดเมนหรือ URL เว็บในชื่อผู้ใช้ของคุณ โดยปราศจากการยินยอมเป็นลายลักษณ์อักษรจาก Boompow<br>
13. คุณต้องไม่รบกวนหรือขัดขวางการทำงานของบริการหรือเซิร์ฟเวอร์หรือเครือข่ายที่เชื่อมต่อกับบริการ รวมทั้งการส่งผ่านเวิร์ม ไวรัส สปายแวร์ มัลแวร์ หรือโค้ดอื่นใดในลักษณะที่ทำลายหรือขัดขวางการทำงาน คุณจะต้องไม่ป้อนเนื้อหาหรือโค้ด หรือปรับเปลี่ยนหรือรบกวนในทางอื่นๆ ต่อวิธีการถ่ายทอดหรือแสดงหน้า Boompow ใดๆ ในเบราว์เซอร์หรืออุปกรณ์ของผู้ใช้<br>
14. คุณต้องปฏิบัติตามแนวทางชุมชนของ Instagram ซึ่งมีอยู่ที่นี่: http://instagram.com/about/legal/terms/api/ ("ข้อตกลง API") <br>
15.คุณต้องไม่สร้างบัญชีผู้ใช้กับบริการผ่านวิธีการที่ไม่อนุญาต ซึ่งรวมถึงแต่ไม่จำกัดเฉพาะการใช้อุปกรณ์อัตโนมัติ สคริปต์ บอท สไปเดอร์ ครอว์เลอร์หรือสเครเปอร์<br>
16. คุณต้องไม่พยายามจำกัดผู้ใช้รายอื่นจากการใช้หรือการเพลิดเพลินกับบริการ และคุณต้องไม่สนับสนุนหรือเอื้ออำนวยให้เกิดการละเมิดข้อตกลงการใช้งานนี้หรือข้อตกลงของ Instagram อื่นใด<br>
17. การฝ่าฝืนข้อตกลงการใช้งานนี้อาจส่งผลให้สิ้นสุดบัญชีผู้ใช้ Instagram ของคุณ ทั้งนี้อยู่ภายใต้ดุลพินิจของ Instagram แต่เพียงผู้เดียว คุณเข้าใจและตกลงว่า Instagram ไม่สามารถและจะไม่รับผิดชอบต่อเนื้อหาที่โพสต์ลงบนบริการ และคุณใช้บริการภายใต้ความเสี่ยงของคุณเอง หากคุณฝ่าฝืนตัวบทและเจตนารมณ์ของข้อตกลงการใช้งานนี้ หรือทำให้เกิดความเสี่ยงอื่นใด หรือทำให้ Instagram ตกอยู่ในความเสี่ยงต่อกฎหมายที่เป็นไปได้ เราสามารถยุติการให้บริการทั้งหมดหรือบางส่วนแก่คุณได้ <br>
                    </p>
                  </blockquote>
            </blockquote>
        </div>
      </div>
    </div>
    <div class="modal-footer">
      <a class=" modal-action modal-close waves-effect waves-green btn-flat center">ปิด</a>
    </div>
  </div>
        </div>
    </div>
</div>
<script>

  function checkAvailableUsername(){
    $.ajaxSetup({
      headers: {
        'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
      }
    });

    $(document).ready(function(){
      var username = $('#username').val();
      $.ajax({
        type: 'GET',
        // url: 'checkAvailableUsername',
        url: "{{url('/checkAvailableUsername')}}",
        data: {username: username},
        success: function(data){
          if (data==1) {
            $("div#usernameAvailability").html("<div style='color: red;'><span style='font-size: 16pt'>"+"ชื่อผู้ใช้นี้ซ้ำ กรุณากรอกชื่อผู้ใช้อื่น</span></div>");
          }
          else if(data==0){
            $("div#usernameAvailability").html("<div style='color: green;'><span style='font-size: 16pt'>"+"ชื่อผู้ใช้นี้สามารถใช้ได้</span></div>");
          }
          else if(data==2){
            $("div#usernameAvailability").html("<div style='color: #ffb74d;'><span style='font-size: 16pt'>"+"กรุณากรอกชื่อผู้ใช้</span></div>");
          }
        }
      });
    });
  }
</script>

</div>
