@extends('site.layout')
@section('maincontent')

<script type="text/javascript">
    function profilesetting() {
    var intro = introJs();
    intro.setOptions({
      showStepNumbers: false,
      nextLabel: "ต่อไป",
      prevLabel: "กลับ",
      skipLabel: "ข้าม",
      doneLabel: "เสร็จ",
        steps: [
        {
            element: '#ps1',
            intro: "This is a <b>bold</b> tooltip.",
            position: 'bottom'
        },
        {
            element: '#ps2',
            intro: "This is a <b>bold</b> tooltip.",
            position: 'bottom'
        },
        {
            element: '#ps3',
            intro: "This is a <b>bold</b> tooltip.",
            position: 'bottom'
        },
        {
            element: '#ps4',
            intro: "This is a <b>bold</b> tooltip.",
            position: 'bottom'
        },
        {
            element: '#ps5',
            intro: "This is a <b>bold</b> tooltip.",
            position: 'bottom'
        },
        {
            element: '#ps6',
            intro: "This is a <b>bold</b> tooltip.",
            position: 'bottom'
        },
        ]
    });

    intro.onafterchange(function(targetElement) {
      console.log(targetElement.id);
      switch (targetElement.id){

        case "ps3":
            $('.introjs-helperLayer').css({left:'435px'})
            break;

      }
    });
    intro.start()
}
</script>

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
                        <ul id="ps1" class="collection with-header sp-head">
                            <li class="collection-header"><h4>ข้อมูลส่วนตัว</h4></li>

                            <li id="register2" class="collection-item sp-item">
                                <form method="post"class="col s12" action="{{url('/updateInfo')}}" enctype="multipart/form-data">

                                    <div class="row">
                                        <div class="input-field col s6">
                                          <input name="first_name" id="first_name" type="text" class="validate" value="{{$info->first_name}}">
                                          <label for="first_name">ชื่อ</label>
                                        </div>
                                        <div class="input-field col s6">
                                          <input name="last_name"id="last_name" type="text" class="validate" value="{{$info->last_name}}">
                                          <label for="last_name">นามสกุล</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <textarea  name="bio"id="describe" class="materialize-textarea">{{$info->bio}}
                                            </textarea>
                                            <label for="describe">อธิบายเกี่ยวกับตัวคุณ</label>
                                        </div>

                                    </div>

                            </li>
                        </ul>

                        <ul id="ps2" class="collection with-header sp-head">
                            <li class="collection-header"><h5>ภาพประจำตัว</h5></li>
                            <li class="collection-item sp-item">

                                    <div class="row">
                                        <div class="input-field col s4 offset-s1">
                                        <span class="sp-caption1">เปลี่ยนภาพ</span>
                                            <div style="text-align: center;" >
                                                <img id="avatar"class="sp-pic-edit media-object dp img-circle" src="{{url('img/uploads/avatars/'.$info->avatar)}}">

                                                    <div class="file-field input-field">
                                                        <span id="ps3" class="sp-cam-input tooltipped" data-position="right" data-delay="50" data-tooltip="เปลี่ยนภาพประจำตัว">
                                                        <i class="cam-icon fa fa-camera"></i>
                                                        <input type="file" name="uploadImage" id="uploadImage"></span>
                                                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                                                    </div>

                                            </div>
                                            <script>
                                            document.getElementById("uploadImage").onchange = function () {
                                                var reader = new FileReader();

                                                reader.onload = function (e) {
                                                    // get loaded data and render thumbnail.
                                                    document.getElementById("avatar").src = e.target.result;
                                                };

                                                // read the image file as a data URL.
                                                reader.readAsDataURL(this.files[0]);
                                            };


                                            </script>
                                        </div>
                                        <div class="input-field col s6">

                                            <span class="sp-caption2">เลือกภาพประจำตัวที่มีให้</span>

                                            <div class="row joiner-pic-rspace">
                                                <div class="col s12 m7 l4 joiner-pic-col">
                                                    <a href="#"><img id="ps4" src="img/pic3.jpg"></a>
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


                            </li>
                        </ul>


                        <ul  id="ps5"  class="collection with-header sp-head">
                            <li class="collection-header">
                              <h4>แก้ไขอีเมล์</h4>
                            </li>

                            <li class="collection-item sp-item">
                                    <div class="row">
                                        <div class="input-field col s6">
                                            <input id="email" name="new_email" type="email" class="validate" placeholder="ตัวอย่าง: kun-s@hotmail.com">
                                            <label for="email" data-error="wrong" data-success="right">กรอกอีเมล์ของคุณ</label>
                                        </div>
                                        <div class="input-field col s6">
                                            <input id="email" name="confirm_email" type="email" class="validate" placeholder="ตัวอย่าง: kun-s@hotmail.com">
                                            <label for="email"  data-error="wrong" data-success="right">กรอกอีเมล์ของคุณอีกครั้ง</label>
                                        </div>
                                    </div>
                            </li>
                        </ul>


                        <ul id="ps6" class="collection with-header sp-head">

                            <li class="collection-item sp-item" style="margin-bottom: 25px;">
                                <div align="center">
                                    <button name="action" type="submit" class="green btn waves-effect waves-light" >บันทึก</button>
                                    <a class="btn waves-effect waves-light black-text white" href="">ยกเลิก</a>
                                </div>
                                  </form>
                            </li>
                        </ul>
                      </div>

                </div>
            </li>
        </ul>
    </div>
</div>
@stop
