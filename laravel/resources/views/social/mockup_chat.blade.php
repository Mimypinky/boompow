@extends('site.layout')
@section('maincontent')

<div class="container">
  <div style="margin-top: 200px;" class="col m8 l9">
    <div class="chat">
      <div class="chat-header clearfix white">
        <div class="chat-about">
          <div class="chat-with">
              <span><i class="fa fa-comment left i-color" aria-hidden="true"></i>สุนิสา ปานหิบ</span>
          </div>
        </div>
      </div> <!-- end chat-header -->

      <div class="chat-history">
        <ul>
          <li class="clearfix">
            <div class="message-data align-right">
              <span class="message-data-time" >วันนี้ 10:10น.</span> &nbsp; &nbsp;
              <span class="message-data-name" >พรทิพย์</span> <i class="fa fa-circle me"></i>

            </div>
            <div class="message other-message float-right">
              <p>สุนิสา ไปกินซูชิกันมั้ย? ช่วงนี้ซื้อ 1 ฟรี 1 นะ ฉันกะจะกินเพิ่มน้ำหนักซะหน่อย ไปด้วยกันนะ</p>
            </div>
          </li>

          <li>
            <div class="message-data">
              <span class="message-data-name"><i class="fa fa-circle online"></i> สุนิสา</span>
              <span class="message-data-time">วันนี้ 10:12น.</span>
            </div>
            <div class="message my-message">
              <p>โปรดรักษากำหนดนี้เป็นความลับ</p>
            </div>
          </li>

          <li class="clearfix">
            <div class="message-data align-right">
              <span class="message-data-time" >วันนี้ 10:14น.</span> &nbsp; &nbsp;
              <span class="message-data-name" >พรทิพย์</span> <i class="fa fa-circle me"></i>

            </div>
            <div class="message other-message float-right">
              <p>สังคมหรือประเทศที่มีประชากรอายุ60ปีขึ้นไป มากกว่าร้อยละ20 ของประชากรทั้งประเทศหรือมีประชากรอายุตั้งแต่ 65 ปี</p>
            </div>
          </li>

          <li>
            <div class="message-data">
              <span class="message-data-name"><i class="fa fa-circle online"></i> สุนิสา</span>
              <span class="message-data-time">วันนี้ 10:20น.</span>
            </div>
            <div class="message my-message">
              <p>แต่ละประเทศจะเข้าสู่สังคมผู้สูงอายุแตกต่างกันไปตามสภาพแวดล้อมของแต่ละประเทศ เช่น ความเจริญเติบโตทางเศรษฐกิจ การพัฒนาทางด้านการแพทย์ การโภชนาอาหาร</p>
            </div>
          </li>


        </ul>

      </div> <!-- end chat-history -->

      <div class="chat-message clearfix" style="">
        <div class="input-field col s12">

          <textarea id="textarea1" class="materialize-textarea"></textarea>
          <label for="textarea1">เขียนข้อความของคุณที่นี่</label>
        </div>

        <a id="btn1" class="waves-effect waves-light btn sendmsg-btn"><i class="material-icons right">send</i> ส่งข้อความ</a></div></div>
      </div>
</div>
<script type="text/javascript" src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
<script type="text/javascript" src="{{ URL::asset('js/firebase.js')}}"></script>

<script>
            $(function () {
                var input = $('#textarea1');
                var btn = $('#btn1');
                console.log(btn);


                var firebaseUrl = 'https://boompow-8ed97.firebaseio.com/';
                var Connection = new Firebase(firebaseUrl).child('comments');
                console.log(Connection);
                btn.click(function () {
                    var text = input.val();
                    console.log(text);
                    //input.val('');
                    Connection.push(text);
                    //addToList(text);
                });
                /*
                var btn = $('a');
                var ul = $('ul');
                var firebaseUrl = 'https://int202-2a8e2.firebaseio.com/';
                var Connection = new Firebase(firebaseUrl).child('comments');
                addtoFireBase();
                btn.click(function () {
                    var text = input.val();
                    input.val('');
                    Connection.push(text);
                    //addToList(text);
                });
                function addtoFireBase() {
                    Connection.on('value', function (snapshot) {
                        var comment = snapshot.val();
                        ul.empty();
                        $.each(comment, function (index, c) {
                            addToList(c);
                        });
                    });
                }
                function addToList(text) {
                    var li = '<li class="list-group-item">' + text + '</li>';
                    ul.append(li);
                }
                */
            });
</script>
