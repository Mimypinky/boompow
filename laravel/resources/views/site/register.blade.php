@extends('site.layout')

@section('maincontent')


<div class="container">

    <div class="row" style="">
        <div class="col s12 m12 l10 offset-l1">
            <ul class="collection with-header">
                <form action="#">
                    <li class="collection-header"><h2 class="center" style="text-shadow: 2px 2px #BBB;">สมัครสมาชิก</h2></li>
                    <li class="collection-item">
                        <table border="1 solid">
                          <tr >
                              <th colspan="4"data-field="name"><h4 style="color: #5d4037">ข้อมูลส่วนบุคคล</h4></th>
                          </tr>

                              <tr>

                                <td>
                                <p style=" color: #EE6E74;font-size:1.5em"> <span>  &nbsp&nbsp &nbsp ชื่อ </span></p>
                                  <div class="input-field">
                                    <i class="material-icons prefix">assignment_ind</i>
                                    <input id="first_name" type="text" class="validate" placeholder="เช่น สมร">
                                </div>
                              </td>

                                <td>
                                <p style=" color: #EE6E74;font-size:1.5em"><span> นามสกุล </span></p>
                                  <div class="input-field">

                                    <input id="last_name" type="text" class="validate" placeholder="เช่น มีสมบูรณ์">
                                </div></td>

                            </tr>
                            <tr>

                            <tr>
                                <td ><p style=" color: #EE6E74;font-size:1.5em">
                                    <span><i  class="material-icons prefix" >wc</i>&nbsp&nbspเพศ </span> &nbsp&nbsp

                                    <input name="gender" type="radio" id="male" checked/>
                                    <label for="male" style="color: #424242 ;">ชาย</label>
                                    &nbsp &nbsp &nbsp
                                    <input name="gender" type="radio" id="female" />
                                    <label for="female" style="color: #424242 ;">หญิง</label>
                                </p></td>

                            </tr>
                            <tr><td > <p style=" color: #EE6E74;font-size:1.5em;line-height:2">
                                <span> &nbsp&nbsp&nbsp&nbsp&nbspวันเกิด </span> </p>

                            </td>
                          </tr>
                          <tr>
                            <td >
                              <div><i  style="color: #EE6E74;font-size:1.5em" class="material-icons prefix">cake</i></div>
                              &nbsp&nbsp&nbsp&nbsp&nbsp
                              <div class="input-field col s2" style="margin-top: -6px;margin-left:2em;">
                                <select>
                                  <option value="" disabled selected>เลือกวัน</option>
                                  <option value="1">1</option>
                                  <option value="2">2</option>
                                  <option value="3">3</option>
                                </select>

                              </div>
                              <div class="input-field col s3" style="margin-top: -4px;">
                                <select>
                                  <option value="" disabled selected>เลือกเดือน</option>
                                  <option value="Jan">มกราคม</option>
                                  <option value="Feb">กุมภาพันธ์</option>
                                  <option value="Mar">มีนาคม</option>
                                </select>

                              </div>
                              <div class="input-field col s2" style="margin-top: -4px;">
                                <select>
                                  <option value="" disabled selected>ปีพ.ศ.</option>
                                  <option value="1">Option 1</option>
                                  <option value="2">Option 2</option>
                                  <option value="3">Option 3</option>
                                </select>

                              </div>
                            </div>
                            </td>
                          </tr>
                            <tr>
                              <td colspan="2">
                                <p style=" color: #EE6E74;font-size:1.5em"><span>&nbsp&nbsp&nbsp&nbsp&nbspอีเมล์</span></p>

                                <div class="input-field "><i class="material-icons prefix">contact_mail</i>
                                  <input id="email" type="email" class="validate" placeholder="เช่น  xxxx@gmail.co.th">

                                </div>
                              </td>

                            </tr>
                            <tr><td colspan="2">
                              <p style=" color: #EE6E74;font-size:1.5em"><span>&nbsp&nbsp&nbsp เกี่ยวกับคุณ</span></p>
                              <div class="input-field ">
         <i class="material-icons prefix">mode_edit</i>
         <textarea id="icon_prefix2" class="materialize-textarea "></textarea>

       </div>
                            </td></tr>
                            <tr>
                              <th data-field="name"><h4 style="color: #5d4037;">ข้อมูลเพื่อเข้าสู่ระบบ</h4></th>
                          </tr>
                          <tr>
                            <td>
                              <p style=" color: #EE6E74;font-size:1.5em"> <span>  &nbsp&nbsp &nbsp ชื่อสำหรับเข้าสูระบบ </span></p>
                                <div class="input-field">
                                  <i class="material-icons prefix">assignment_ind</i>
                                  <input id="first_name" type="text" class="validate" placeholder="เช่น สมร">
                              </div>
                            </td>
                            <td>
                              ชื่อนี้สามารถใข้งานได้
                            </td>
                          </tr>
                            <tr>
                                <td colspan="2">
                                    <div class="input-field col s8">
                                        <p style=" color: #EE6E74;font-size:1.5em;margin-bottom:10px;"> <span>  &nbsp&nbsp &nbsp คำถามเพื่อเป็นรหัสผ่าน </span></p>
                                        <br>
                                        <select class="browser-default">
                                            <option value="" disabled selected>โปรดเลือกคำถาม (คำตอบของคุณจะถูกใช้เป็นรหัสผ่านในการลงชื่อเข้าใช้)</option>
                                            <option value="1">คำถามที่ 1</option>
                                            <option value="2">คำถามที่ 2</option>
                                            <option value="3">คำถามที่ 3</option>
                                        </select>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td><div class="input-field">
                                    <p style=" color: #EE6E74;font-size:1.5em"> <span>  &nbsp&nbsp &nbsp กรอกคำตอบของคุณ </span></p>
                                    <i class="material-icons prefix">mode_edit</i>
                                    <input id="answer" type="password" class="validate">
                                </div></td>
                                <td><div class="input-field">

                                    <p style=" color: #EE6E74;font-size:1.5em"> <span> ยืนยันคำตอบของคุณอีกครั้ง</span></p>
                                    <input id="confirm-answer" type="password" class="validate">
                                </div></td>
                            </tr>
                            <tr>
                              <td colspan="5" style="text-align:center">
                                <p>
                                    <label for="filled-in-box" style="font-size: 14px;">อ่านข้อตกลงในการให้บริการ </label>
                                    <a class="modal-trigger" href="#termOfRegister">ที่นี่</a>
                                </p>
                              </td>
                            </tr>

                    </table>




                </li>
                <li class="collection-item" style="padding-bottom: 20px;">
                    <div class="section"></div>
                    <div align="center">
                    <a class="btn waves-effect waves-light modal-trigger" href="#confirm-register">ยืนยัน</a>
                    &nbsp&nbsp&nbsp

                    <a class="btn waves-effect waves-light" name="action">ยกเลิก</a>
                    </div>

            </li>
        </form>
    </ul>
</div>
</div>
<div id="termOfRegister" class="modal" style="width: 480px; height: 360px">
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

            <div class="section"></div>
            <div align="center" style="margin-bottom: 10px;">

                <button style="float: none" class="btn waves-effect waves-light modal-close">ปิด</button>
            </div>
        </div>
    </form>
</div>

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
            ]]
            <div class="section"></div>
            <div align="center" style="margin-bottom: 10px;">
                <button style="float: none" class="btn waves-effect waves-light" type="submit" name="action">ยืนยันการเข้าร่วม</button>
                <button style="float: none" class="btn waves-effect waves-light modal-close">ยกเลิก</button>
            </div>
        </div>
    </form>
</div>

</div>
@endsection
