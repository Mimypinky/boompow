@extends('site.layout')

@section('maincontent')

  <div class="container" style="width: 90%;">

      <div class="row" style="margin-top: 160px;">
          <div class="col s12 m12 l10 offset-l1">
              <ul class="collection with-header">
                  <li class="collection-header"><center><h4>สมัครสมาชิก</h4></center></li>
                  <li class="collection-item"><i class="left material-icons">verified_user</i><p>ตรวจสอบชื่อผู้ใช้</p>
                  <div class="section"></div>
                  <center>
                      <div class="row">
                          <div class="col s3" style="margin-top: 19px;"><p style="margin-left: 40%;">ชื่อผู้ใช้</p></div>
                          <div class="col s6 ">
                              <form class="col s11" >
                                      <input name="username" type="text" class="validate" placeholder="ใส่ชื่อผู้ใช้ของคุณ">
                              </form>
                          </div>
                          <div class="col s3" style="margin-top: 19px;">
                            <a style="margin-left: -30%;" class="blue darken-3 waves-effect waves-light btn">ตรวจสอบ</a>
                          </div>
                      </div>
                  </center>

                  <div class="section"></div>
                  <div id="alertAvailable" class="card green darken-1" style="box-shadow: none;">
                      <div class="card-content white-text">
                          <i class="left material-icons">verified_user</i>ชื่อผู้ใช้: <span>ยายละม้าย คล้ายจะเป็นลม</span> สามารถใช้ได้
                      </div>
                  </div>

                  <div id="alertUnavailable" class="card red darken-2" style="box-shadow: none;">
                      <div class="card-content white-text">
                          <i class="left material-icons">cancel</i>ชื่อผู้ใช้: <span>ยายละม้าย คล้ายจะเป็นลม</span> ไม่สามารถใช้ได้
                      </div>
                  </div>
                  </li>
                  <li class="collection-item"><i class="left material-icons">perm_identity</i>
                  <p>ข้อมูลส่วนตัว</p>
                  <div class="section"></div>
                      <table>
                          <tbody>
                              <tr>
                                  <td><p>
                                    <span>ชื่อ: </span> &nbsp&nbsp
                                    <input name="first_name" type="text" id="first_name" />

                                  </p></td>
                                  <td><p>
                                    <span>นามสกุล: </span> &nbsp&nbsp
                                    <input name="last_name" type="text" id="last_name" />

                                  </p></td>
                              </tr>
                              <tr>
                                  <td><p>
                                      <span>เพศ: </span> &nbsp&nbsp
                                      <input name="gender" type="radio" id="male" />
                                      <label for="male" style="color: #424242 ;">ชาย</label>
                                      &nbsp &nbsp &nbsp
                                      <input name="gender" type="radio" id="female"  />
                                      <label for="female" style="color: #424242 ;">หญิง</label>
                                  </p></td>
                                  <td><p>
                                      <span>วันเกิด: </span> &nbsp&nbsp
                                      <input type="date" class="datepicker" name="dob">
                                  </p></td>
                              </tr>
                          </tbody>
                      </table>

                      <div class="section"></div>
                      <div id="alert" class="card green darken-1" style="box-shadow: none;">
                          <div class="card-content white-text">
                              <i class="left material-icons">verified_user</i> กรอกข้อมูลเรียบร้อย
                          </div>
                      </div>

                      <div id="alert" class="card red darken-2" style="box-shadow: none;">
                          <div class="card-content white-text">
                              <i class="left material-icons">cancel</i> กรุณากรอก <span>วันเกิด</span> ให้เรียบร้อย
                          </div>
                      </div>

                  </li>
                  <li class="collection-item"><i class="left material-icons">lock</i><p>อีเมล์ และ คำถามสำหรับรหัสผ่าน</p>
                  <div class="section"></div>
                  <table>
                      <tbody>
                              <tr >
                                  <td colspan="2">
                                      <div class="input-field">
                                        <select class="browser-default" style="font-size:1.3em" name="question">
                                          @foreach ($questions as $data)
                                            <option value="{{$data->id}}" selected>{{$data->question}}</option>
                                              @endforeach
                                        </select>
                                      </div>
                                  </td>
                              </tr>
                              <tr>
                                <td>
                                  <label for="icon-prefix" style="color: #424242 ;">กรอกคำตอบของคุณ อีกครั้ง</label>
                                  <input class="input-field" placeholder="เช่น กรุงเทพมหานคร" name="password"type="password">
                                </td>
                                  <td>
                                    <label for="icon-prefix" style="color: #424242 ;">กรอกคำตอบของคุณ อีกครั้ง</label>
                                    <input class="input-field" placeholder="เช่น กรุงเทพมหานคร" name="passwordconfirmed" type="password">
                                  </td>
                              </tr>
                              <tr>
                                  <td>
                                    <label for="icon_prefix" style="color: #424242 ;" >กรอกอีเมล์ของคุณ </label>
                                    <input class="input-field" placeholder="เช่น this_is_email@mail.com" type="email" name="email">
                                  </td>
                                  <td>
                                    <label for="icon-prefix" style="color: #424242 ;">กรอกอีเมล์ของคุณ อีกครั้ง</label>
                                    <input class="input-field" placeholder="เช่น this_is_email@mail.com" type="email" name="emailconfirmed">
                                  </td>
                              </tr>
                          </tbody>
                  </table>

                  <div class="section"></div>
                      <div id="alert" class="card green darken-1" style="box-shadow: none;">
                          <div class="card-content white-text">
                              <i class="left material-icons">verified_user</i> กรอกข้อมูลเรียบร้อย
                          </div>
                      </div>

                      <div id="alert" class="card red darken-2" style="box-shadow: none;">
                          <div class="card-content white-text">
                              <i class="left material-icons">cancel</i> กรุณากรอก <span>อีเมล์</span> ให้ตรงกัน
                          </div>
                      </div>
                  </li>

                  <li class="collection-item" style="padding-bottom: 20px;">
                      <div class="section"></div>
                      <div align="center">
                      <a class="blue darken-3 btn waves-effect waves-light modal-trigger" href="#confirm-register">เข้าร่วม</a>
                      <a class="btn waves-effect waves-light" href="">ยกเลิก</a>
                      </div>
                  </li>



              </ul>

          </div>

      </div>




  <!-- Login Modal Structure -->
  <div id="modal1" class="modal" style="width: 480px;">
      <div class="modal-content" >
          <form action="check-login.php" method="post" id="loginform" name="loginform">
              <div class="modal-close" align="right" ><a href="#!" style="font-size: 20px">ปิด</a></div>
              <h4 class="center">เข้าสู่ระบบ</h4>
              <div class="row">
                  <div class="input-field col s8 offset-s2">
                      <i class="material-icons prefix">account_circle</i>
                      <input id="icon_prefix" type="text" class="validate">
                      <label for="icon_prefix">ชื่อผู้ใช้</label>
                  </div>
                  <div class="input-field col s8 offset-s2">
                      <i class="material-icons prefix">https</i>
                      <input id="icon_prefix" type="password" class="validate">
                      <label for="icon_prefix">รหัสผ่าน</label>
                  </div>
              </div>


              <div class="modal-footer" align="center">
                  <span>
                      <input type="checkbox" class="filled-in" id="filled-in-box" checked="checked" />
                      <label for="filled-in-box">ให้ฉันอยู่ในระบบต่อไป</label>
                      หรือ <a href="ForgotPassword.html">ลืมรหัสผ่าน</a></span>
                  </div>
                  <div align="center" style="margin-bottom: 10px">
                      <button class="btn waves-effect waves-light" type="submit" name="action">ลงชื่อเข้าใช้</button>
                  </div>
              </form>
          </div>
      </div>


      <!-- Register Modal Structure -->
      <div id="register" class="modal" style="width: 480px; height: 360px">
          <div class="modal-content">
            <form action="#" method="post" id="registerform" name="registerform">
              <div class="modal-close" align="right" ><a href="#!" style="font-size: 20px">ปิด</a></div>
              <h4 class="center">เข้าร่วมกับเรา</h4>
              <div class="row">
                  <div class="input-field col s8 offset-s2">
                      <i class="material-icons prefix">account_circle</i>
                      <input id="icon_prefix" type="text" class="validate">
                      <label for="icon_prefix">ชื่อผู้ใช้</label>
                  </div>
              </div>
              <div class="modal-footer" align="center">
                  <span>
                      <label for="filled-in-box" style="font-size: 16px;">เป็นสมาชิกอยู่แล้วหรือเปล่านะ? </label>
                      <a class="modal-trigger red-text text-darken-3" href="#modal1">เข้าสู่ระบบ</a>
                  </span>
                  <div class="section"></div>
                  <div align="center" style="margin-bottom: 10px;">
                      <a style="float: none" class="btn waves-effect waves-light" name="action" href="Register.html">ตรวจสอบชื่อผู้ใช้</a>

                  </div>
              </div>
          </form>
      </div>

  </div>

      <!-- Confirm Register Modal Structure -->
      <div id="confirm-register" class="modal" style="width: 480px; height: 360px">
          <div class="modal-content">
            <form action="#" method="post" id="confirm-register-form" name="confirm-register-form">
              <div class="modal-close" align="right" ><a href="#!" style="font-size: 20px">ปิด</a></div>
              <h4 class="center">ยืนยันการเข้าร่วม</h4>
              <div class="row">
                  <div class="input-field col s8 offset-s2">
                      <span>คุณกำลังเข้าร่วมเป็นสมาชิกของ <a href="">Boompow </a> คุณแน่ใจหรือไม่?</span>
                  </div>
              </div>
              <div class="modal-footer" align="center">
                  <span>
                      <label for="filled-in-box" style="font-size: 14px;">อ่านข้อตกลงในการให้บริการ </label>
                      <a class="modal-trigger" href="#termofuse">ที่นี่</a><br>

                  </span>
                  <div class="section"></div>
                  <div align="center" style="margin-bottom: 10px;">
                      <button style="float: none" class="blue darken-3 btn waves-effect waves-light" type="submit" name="action">ยืนยันการเข้าร่วม</button>
                      <button style="float: none" class="btn waves-effect waves-light modal-close">ยกเลิก</button>


                  </div>

              </div>
          </form>
      </div>

  </div>
  <div id="termofuse" class="modal" style="width: 480px; height: 600px">
    <div class="modal-content">
      <form action="#" method="post" id="confirm-register-form" name="confirm-register-form">
        <div class="modal-close" align="right" ><a href="#!" style="font-size: 20px">ปิด</a></div>
        <h4 class="center">ข้อตกลงในการใช้งาน</h4>
        <textarea  style="height:250px;width:100%;" disabled>
          1. คุณต้องมีอายุอย่างน้อย 13 ปีในการใช้บริการ
          2. คุณจะต้องไม่โพสต์รูปภาพหรือเนื้อหาอื่นๆ ที่รุนแรง โป๊เปลือย เปลือยบางส่วน เลือกปฏิบัติ ผิดกฎหมาย ล่วงละเมิด มีเจตนาร้าย ลามกอนาจารหรือชี้นำทางเพศผ่านบริการนี้
          3. คุณต้องรับผิดชอบต่อการกระทำใดๆ ที่เกิดขึ้นผ่านบัญชีผู้ใช้ของคุณ และคุณตกลงว่าคุณจะไม่ขาย ถ่ายโอน ให้สิทธิ์หรือโอนสิทธิ์บัญชีผู้ใช้ ผู้ติดตาม ชื่อผู้ใช้ หรือสิทธิของบัญชีผู้ใช้ใดๆ ของคุณ ยกเว้นบุคคลหรือธุรกิจที่ได้รับอนุมัติอย่างชัดแจ้งให้สร้างบัญชีผู้ใช้ในนามของพนักงานหรือลูกค้าของตน Instagram ห้ามการสร้างดังกล่าว และคุณตกลงว่าคุณจะไม่สร้างบัญชีผู้ใช้สำหรับบุคคลใดนอกจากตัวคุณเอง คุณสำแดงด้วยว่าข้อมูลทั้งหมดที่คุณให้มาหรือให้แก่ Instagram เมื่อลงทะเบียนและครั้งอื่นๆ ทั้งหมด จะเป็นความจริง ถูกต้อง ทันสมัยและสมบูรณ์ และคุณตกลงที่จะปรับปรุงข้อมูลของคุณตามความจำเป็น เพื่อรักษาให้ตรงความเป็นจริงและแม่นยำ
          4. คุณตกลงว่าคุณจะไม่เรียกร้อง รวบรวมหรือใช้ข้อมูลการเข้าสู่ระบบของผู้ใช้ Instagram รายอื่น
          5. คุณมีความรับผิดชอบในการรักษารหัสผ่านของคุณให้เป็นความลับและปลอดภัย
          6. คุณต้องไม่ใส่ร้ายป้ายสี ข่มเหง ดูหมิ่น คุกคาม ข่มขู่ ปลอมแปลงหรือขู่กรรโชกบุคคลหรือนิติบุคคล และคุณจะไม่โพสต์ข้อมูลส่วนตัวหรือเป็นความลับผ่านบริการนี้ ซึ่งรวมถึงแต่ไม่จำกัดเพียงข้อมูลบัตรเครดิต หมายเลขประกันสังคมหรือหมายเลขอื่นๆ ที่ระบุตัวตน หมายเลขโทรศัพท์ที่ไม่สาธารณะหรือที่อยู่อีเมลที่ไม่สาธารณะของคุณหรือบุคคลอื่นใด
          7. คุณจะต้องไม่ใช้บริการเพื่อวัตถุประสงค์ใดๆ ที่ผิดกฎหมายหรือไม่อนุญาต คุณตกลงที่จะปฏิบัติตามกฎหมาย กฎเกณฑ์และระเบียบทั้งหมด (เช่น ของรัฐบาลกลาง รัฐ ท้องถิ่นและมณฑล) ที่บังคับใช้กับการใช้บริการและเนื้อหาของคุณ (กำหนดไว้ด้านล่างนี้) ซึ่งรวมถึงแต่ไม่จำกัดเฉพาะกฎหมายลิขสิทธิ์
          8. คุณเป็นผู้รับผิดชอบแต่เพียงผู้เดียวสำหรับพฤติกรรมของคุณ ตลอดจนข้อมูล ไฟล์ข้อความ ข้อมูล ชื่อผู้ใช้ ภาพ กราฟิก รูปถ่าย ข้อมูลส่วนตัว คลิปเสียงและวิดีโอ เสียง งานเพลง งานเขียน แอพพลิเคชั่น ลิงก์ และเนื้อหาหรือสื่ออื่นๆ (รวมเรียกว่า "เนื้อหา") ที่คุณส่ง โพสต์หรือแสดงบนหรือผ่านบริการ
          9. คุณต้องไม่เปลี่ยนแปลง แก้ไข ดัดแปลงหรือปรับเปลี่ยนบริการ หรือเปลี่ยนแปลง แก้ไข ดัดแปลงหรือปรับเปลี่ยนเว็บไซต์อื่น เพื่อให้ส่อเป็นเท็จว่าเกี่ยวข้องกับบริการหรือ Instagram
          10. คุณต้องไม่เข้าถึง API ส่วนตัวของ Instagram นอกเหนือจากที่ Instagram อนุญาต การใช้ API ของ Instagram เป็นไปตามข้อตกลงต่างหาก ซึ่งมีอยู่ที่นี่: http://instagram.com/about/legal/terms/api/ ("ข้อตกลง API")
          11. คุณต้องไม่สร้างหรือส่งอีเมล ความคิดเห็น ความถูกใจ หรือรูปแบบอื่นๆ ของการโฆษณาหรือการสื่อสารในลักษณะคุกคามที่ไม่เป็นที่ต้องการ (หรือ "สแปม") ให้กับผู้ใช้ Instagram ใดๆ
          12. คุณต้องไม่ใช้ชื่อโดเมนหรือ URL เว็บในชื่อผู้ใช้ของคุณ โดยปราศจากการยินยอมเป็นลายลักษณ์อักษรจาก Instagram
          13. คุณต้องไม่รบกวนหรือขัดขวางการทำงานของบริการหรือเซิร์ฟเวอร์หรือเครือข่ายที่เชื่อมต่อกับบริการ รวมทั้งการส่งผ่านเวิร์ม ไวรัส สปายแวร์ มัลแวร์ หรือโค้ดอื่นใดในลักษณะที่ทำลายหรือขัดขวางการทำงาน คุณจะต้องไม่ป้อนเนื้อหาหรือโค้ด หรือปรับเปลี่ยนหรือรบกวนในทางอื่นๆ ต่อวิธีการถ่ายทอดหรือแสดงหน้า Instagram ใดๆ ในเบราว์เซอร์หรืออุปกรณ์ของผู้ใช้
          14. คุณต้องปฏิบัติตามแนวทางชุมชนของ Instagram ซึ่งมีอยู่ที่นี่: http://instagram.com/about/legal/terms/api/ ("ข้อตกลง API")
          15. คุณต้องไม่สร้างบัญชีผู้ใช้กับบริการผ่านวิธีการที่ไม่อนุญาต ซึ่งรวมถึงแต่ไม่จำกัดเฉพาะการใช้อุปกรณ์อัตโนมัติ สคริปต์ บอท สไปเดอร์ ครอว์เลอร์หรือสเครเปอร์
          16. คุณต้องไม่พยายามจำกัดผู้ใช้รายอื่นจากการใช้หรือการเพลิดเพลินกับบริการ และคุณต้องไม่สนับสนุนหรือเอื้ออำนวยให้เกิดการละเมิดข้อตกลงการใช้งานนี้หรือข้อตกลงของ Instagram อื่นใด
          17. การฝ่าฝืนข้อตกลงการใช้งานนี้อาจส่งผลให้สิ้นสุดบัญชีผู้ใช้ Instagram ของคุณ ทั้งนี้อยู่ภายใต้ดุลพินิจของ Instagram แต่เพียงผู้เดียว คุณเข้าใจและตกลงว่า Instagram ไม่สามารถและจะไม่รับผิดชอบต่อเนื้อหาที่โพสต์ลงบนบริการ และคุณใช้บริการภายใต้ความเสี่ยงของคุณเอง หากคุณฝ่าฝืนตัวบทและเจตนารมณ์ของข้อตกลงการใช้งานนี้ หรือทำให้เกิดความเสี่ยงอื่นใด หรือทำให้ Instagram ตกอยู่ในความเสี่ยงต่อกฎหมายที่เป็นไปได้ เราสามารถยุติการให้บริการทั้งหมดหรือบางส่วนแก่คุณได้
</textarea>
        <div class="modal-footer" align="center">

            <div class="section"></div>
            <div align="center" style="margin-bottom: 10px;">
                <button style="float: none" class="blue darken-3 btn waves-effect waves-light" type="submit" name="action">ยอมรับ</button>
                <button style="float: none" class="btn waves-effect waves-light modal-close">ไม่ยอมรับ</button>


            </div>

        </div>
    </form>
    </div>
  </div>



  </div>



@endsection
