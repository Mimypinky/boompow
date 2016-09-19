@extends('site.layout')
@section('maincontent')
<div class="container" style="width: 90%; margin-top: 160px;min-height: 600px;">
    <div class="row">
        <ul class="collection with-header pro-upstatus-feed">
            <li class="collection-header myfriend-head">
                <div class="row mf-row">
                    <div class="col s1"><img src="img/proset.png" width="50"></div>
                    <div class="col s5"><h4 class="mf-col">ตั้งค่าข้อมูลส่วนตัว</h4></div>

                </div>
                <div class="row">
                    <div class="col s8 offset-s1">
                        <div class="sp-des-head">
                            <p>คุณสามารถตั้งค่า หรือแก้ไขข้อมูลส่วนตัวของคุณได้ที่หน้านี้</p>
                        </div>
                    </div>
                </div>
            </li>
            <li class="collection-item" style="background-color: #fbfbfb;">
                <div class="row">
                    <div class="col s10 offset-s1">
                        <ul class="collection with-header sp-head">
                            <li class="collection-header"><h4>ข้อมูลส่วนตัว</h4></li>
                            <li class="collection-item sp-item">
                                <form class="col s12">
                                    <div class="row">
                                        <div class="input-field col s6">
                                          <input id="first_name" type="text" class="validate" value="พรทิพย์">
                                          <label for="first_name">ชื่อ</label>
                                        </div>
                                        <div class="input-field col s6">
                                          <input id="last_name" type="text" class="validate" value="มีชัย">
                                          <label for="last_name">นามสกุล</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <textarea id="describe" class="materialize-textarea">อายุ75ปีจะจ้า
                                            </textarea>
                                            <label for="describe">อธิบายเกี่ยวกับตัวคุณ</label>
                                        </div>

                                    </div>
                                </form>
                            </li>
                        </ul>

                        <ul class="collection with-header sp-head">
                            <li class="collection-header"><h5>ภาพประจำตัว</h5></li>
                            <li class="collection-item sp-item">
                                <form class="col s12">
                                    <div class="row">
                                        <div class="input-field col s4 offset-s1">
                                        <span class="sp-caption1">เปลี่ยนภาพ</span>
                                            <div style="text-align: center;">
                                                <img class="sp-pic-edit media-object dp img-circle" src="img/pic.jpg">
                                                <form action="#">
                                                    <div class="file-field input-field">
                                                        <span class="sp-cam-input tooltipped" data-position="right" data-delay="50" data-tooltip="เปลี่ยนภาพประจำตัว">
                                                        <i class="cam-icon fa fa-camera"></i>
                                                        <input type="file">
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                        <div class="input-field col s6">

                                            <span class="sp-caption2">เลือกภาพประจำตัวที่มีให้</span>

                                            <div class="row joiner-pic-rspace">
                                                <div class="col s12 m7 l4 joiner-pic-col">
                                                    <a href="#"><img src="img/pic3.jpg"></a>
                                                </div>

                                                <div class="col s12 m7 l4 joiner-pic-col">
                                                    <a href="#"><img src="img/pic4.jpg"></a>
                                                </div>

                                                <div class="col s12 m7 l4 joiner-pic-col">
                                                    <a href="#"><img src="img/pic2.jpg"></a>
                                                </div>
                                            </div>
                                            <div class="row joiner-pic-rspace">
                                                <div class="col s12 m7 l4 joiner-pic-col">
                                                    <a href="#"><img src="img/pic3.jpg"></a>
                                                </div>

                                                <div class="col s12 m7 l4 joiner-pic-col">
                                                    <a href="#"><img src="img/pic4.jpg"></a>
                                                </div>

                                                <div class="col s12 m7 l4 joiner-pic-col">
                                                    <a href="#"><img src="img/pic2.jpg"></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </li>
                        </ul>

                        <ul class="collection with-header sp-head">
                            <li class="collection-header"><h4>แก้ไขอีเมล์</h4></li>
                            <li class="collection-item sp-item">
                                <form class="col s12">
                                    <div class="row">
                                        <div class="input-field col s6">
                                            <input id="email" type="email" class="validate" placeholder="ตัวอย่าง: kun-s@hotmail.com">
                                            <label for="email" data-error="wrong" data-success="right">กรอกอีเมล์ของคุณ</label>
                                        </div>
                                        <div class="input-field col s6">
                                            <input id="email" type="email" class="validate" placeholder="ตัวอย่าง: kun-s@hotmail.com">
                                            <label for="email" data-error="wrong" data-success="right">กรอกอีเมล์ของคุณอีกครั้ง</label>
                                        </div>
                                    </div>
                                </form>
                            </li>
                        </ul>

                        <ul class="collection with-header sp-head">
                            <li class="collection-item sp-item" style="margin-bottom: 25px;">
                                <div align="center">
                                    <a class="green btn waves-effect waves-light" href="">บันทึก</a>
                                    <a class="btn waves-effect waves-light black-text white" href="">ยกเลิก</a>
                                </div>
                            </li>
                        </ul>
                </div>
            </li>
        </ul>
    </div>
</div>
@stop
