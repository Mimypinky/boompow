@extends('site.layout')
@section('maincontent')
<link rel="stylesheet" type="text/css" href="{{URL::asset('image-picker/image-picker.css')}}">

<script src="{{URL::asset('image-picker/image-picker.js')}}" type="text/javascript"></script>
<div class="container" style="width: 90%;">

    <div class="row" style="margin-top: 160px;">
        <div class="col s12 m12 l10 offset-l1">
            <ul class="collection with-header">
                <li class="collection-header"><center><h4>เพิ่มข้อมูลส่วนตัว</h4></center></li>
            </ul>

            <ul class="collection with-header sp-head">
                <li class="collection-header"><i class="regis-i-hright left material-icons">account_box</i><h5>เพิ่มภาพประจำตัว</h5></li>
                <li class="collection-item sp-item">
                    <form class="col s12" action="" method="POST" enctype="multipart/form-data">
                        <div class="row">
                            <div class="input-field col s4 offset-s1">
                                <span class="sp-caption1">เปลี่ยนภาพ</span>
                                <div style="text-align: center;">
                                    <img class="media-object dp img-circle sp-pic-edit" style="max-width:210px;"src="{{url('img/uploads/avatars/default.jpg')}}" id="show_pic">
                                    <form action="#">
                                        <div class="file-field input-field">
                                            <span class="sp-cam-input tooltipped" data-position="right" data-delay="50" data-tooltip="เปลี่ยนภาพประจำตัว">
                                            <i class="cam-icon fa fa-camera"></i>
                                            <input type="file" id="uploadImage">
                                            <p id="demo"></p>
                                        </div>

                                </div>
                            </div>
                            <div class="input-field col s6">
                                <span class="sp-caption2">เลือกภาพประจำตัวที่มีให้</span>
                                <div class="row joiner-pic-rspace  image_picker_selector"style="margin-bottom:40px">
                                  <div class="row" style="margin-bottom:20px;">
                                    <div class="col s12 m7 l4 joiner-pic-col ">
                                        <a href="#"><img src="{{url('img/pic3.jpg')}}" alt="pic1"></a>
                                        <input name="avatar" type="radio" id="test1" value="img/pic3.jpg" />
                                        <label for="test1">ป้าแมรี่</label>
                                    </div>
                                    <div class="col s12 m7 l4 joiner-pic-col ">
                                        <a href="#"><img src="{{url('img/pic4.jpg')}}" alt="pic2"></a>
                                        <input name="avatar" type="radio" id="test2"  value="img/pic4.jpg"/>
                                        <label for="test2">ป้าสมศรี</label>
                                    </div>
                                    <div class="col s12 m7 l4 joiner-pic-col " >
                                        <a href="#"><img src="{{url('img/pic2.jpg')}}" alt="pic3"></a>
                                        <input name="avatar" type="radio" id="test3"  value="img/pic2.jpg"/>
                                        <label for="test3">ลุงเจียม</label>
                                    </div>
                                  </div>
                                    <div class="col s12 m7 l4 joiner-pic-col ">
                                        <a href="#"><img src="{{url('img/pic3.jpg')}}" alt="pic1"></a>
                                        <input name="avatar" type="radio" id="test4"  value="img/pic3.jpg"/>
                                        <label for="test4">ป้าแมรี่2</label>
                                    </div>
                                    <div class="col s12 m7 l4 joiner-pic-col ">
                                        <a href="#"><img src="{{url('img/pic4.jpg')}}" alt="pic1" ></a>
                                        <input name="avatar" type="radio" id="test5"  value="img/pic4.jpg" />
                                        <label for="test5">ป้าสมศรี2</label>
                                    </div>
                                    <div class="col s12 m7 l4 joiner-pic-col ">
                                        <a href="#"><img src="{{url('img/pic2.jpg')}}" alt="pic1"></a>
                                        <input name="avatar" type="radio" id="test6"  value="img/pic2.jpg" />
                                        <label for="test6">ลุงเจียม2</label>
                                    </div>

                                    <button style="margin-top: 37px;" class="btn" onclick="myFunction();">Try it</button>
                                    <script type="text/javascript">

                                    document.getElementById("uploadImage").onchange = function () {
                                        var reader = new FileReader();

                                        reader.onload = function (e) {
                                            // get loaded data and render thumbnail.
                                            var pic= document.getElementById('show_pic');
                                            pic.src = e.target.result;
                                            // pic.width='60%';

                                        };

                                        // read the image file as a data URL.
                                        reader.readAsDataURL(this.files[0]);
                                    };
                                    </script>

                            </div>
                        </div>
                    </form>
                </li>
            </ul>

            <ul class="collection with-header sp-head">
                <li class="collection-header"><i class="regis-i-hright left material-icons">create</i><h4>เขียนอธิบายเกี่ยวกับตัวคุณ</h4></li>
                <li class="collection-item sp-item">

                        <div class="row">
                            <div class="input-field col s12">
                                <textarea id="describe" class="materialize-textarea" placeholder="อยากบอกอะไรเกี่ยวกับตัวคุณ บอกเลย! ">
                                </textarea>
                                <label for="describe">อธิบายเกี่ยวกับตัวคุณ</label>
                            </div>
                        </div>

                </li>
            </ul>

            <ul class="collection with-header sp-head">
                <li class="collection-item sp-item" style="margin-bottom: 25px;">
                    <div align="center">
                        <a class="green btn waves-effect waves-light" href="">บันทึก</a>
                        <a class="btn waves-effect waves-light black-text white" href="">ข้ามไปก่อน</a>
                    </div>
                </li>
            </ul>
              </form>
        </div>
    </div>




</div>
@stop
