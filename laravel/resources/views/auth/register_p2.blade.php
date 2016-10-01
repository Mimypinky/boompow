@extends('site.layout')
@section('maincontent')
<div class="container" style="width: 90%;">

    <div class="row" style="margin-top: 160px;">
        <div class="col s12 m12 l10 offset-l1">
            <ul class="collection with-header">
                <li class="collection-header"><center><h4>เพิ่มข้อมูลส่วนตัว</h4></center></li>
            </ul>

            <ul class="collection with-header sp-head">
                <li class="collection-header"><h5>เพิ่มภาพประจำตัว</h5></li>
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
                <li class="collection-header"><h4>เขียนอธิบายเกี่ยวกับตัวคุณ</h4></li>
                <li class="collection-item sp-item">
                    <form class="col s12">
                        <div class="row">
                            <div class="input-field col s12">
                                <textarea id="describe" class="materialize-textarea" placeholder="อยากบอกอะไรเกี่ยวกับตัวคุณ บอกเลย! ">
                                </textarea>
                                <label for="describe">อธิบายเกี่ยวกับตัวคุณ</label>
                            </div>
                        </div>
                    </form>
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
        </div>
    </div>




</div>
@stop
