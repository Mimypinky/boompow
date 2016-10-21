@extends('site.layout')
@section('maincontent')
<script type="text/javascript">
    function friend() {
    var intro = introJs();
    intro.setOptions({
      showStepNumbers: false,
      nextLabel: "ต่อไป",
      prevLabel: "กลับ",
      skipLabel: "ข้าม",
      doneLabel: "เสร็จ",
        steps: [
        {
            element: '#f1',
            intro: "This is a <b>bold</b> tooltip.",
            position: 'bottom'
        },
        {
            element: '#f2',
            intro: "This is a <b>bold</b> tooltip.",
            position: 'bottom'
        },
        {
            element: '#f3',
            intro: "This is a <b>bold</b> tooltip.",
            position: 'bottom'
        },
        ]
    });

    intro.start()
  }
</script>
<div class="container" style="width: 90%; margin-top: 160px;min-height: 600px;">
    <div class="row">
        <ul class="collection with-header pro-upstatus-feed">
            <li class="collection-header myfriend-head">
                <div class="row mf-row">

                    <div class="col s5"><h4 class="mf-col">เพื่อนของฉัน</h4></div>
                </div>
            </li>
            <li class="collection-item" style="background-color: #fbfbfb;">
                <div class="row">
                  <div class="col s12">
                    @foreach($account as $person)
                    @if(in_array($person->id,$myfriend))
                    <div class="col s6">
                        <ul class="collection">
                            <li class="collection-item avatar f-left">
                                <a href="{{url('/friend/'.$person->username)}}">
                                  <img src="{{url('img/uploads/avatars/'.$person->avatar)}}" alt="" class="circle myfriend-img">
                              <span class="title f-title">{{$person->first_name.' '.$person->last_name}}</span></a><br>
                                <span class="mf-des">เพื่อนของคุณ</span><br>
                                <a href="{{url('/chatHistory/'.$person->id)}}"class="mf-send-msg cyan darken-1 noshadow waves-effect waves-light btn" target="_blank">
                                    <i class="material-icons left">question_answer</i>
                                    <span class="msg-hide">ส่งข้อความ<span></a>
                                <a href="{{url('/unfriend/'.$person->username)}}"class="mf-send-msg red darken-1 noshadow waves-effect waves-light btn">

                                    <i class="material-icons left">close</i>
                                    <span class="msg-hide">เลิกเป็นเพื่อน<span></a>
                            </li>

                        </ul>
                    </div>
                    @endif
                    @endforeach




                  </div>
                </div>
            </li>
        </ul>
    </div>
</div>




@stop
