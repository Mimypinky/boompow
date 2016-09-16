@extends('site.layout')
@section('maincontent')
<div class="container" style="width: 90%;">
    <div class="card-panel yellow darken-4 fav-head">
        <span class="white-text"><h4 style="margin-top: -3px;" class="center-align"><i class="fa fa-star" aria-hidden="true"></i> รายการโปรด</h4>
        </span>
    </div>
    <div class="row">
        <div class="col s12">
          @foreach($myFav as $data)
            <div class="col s4 m4">
                <div class="card">
                    <div class="card-image">
                        <img src="{{url('img/healthy.jpg')}}">
                    </div>
                    <div class="card-content" style="height:200px;background-color:eecc6;">
                        <h5 >{{$data->content_title}}</h5>
                        <div><p class="wordwrap">{{$data->description}}</p></div>
                    </div>
                    <div class="card-action">
                        <a href="{{ url('content/favourite/'.$data->id) }}">เพิ่มเติม</a>
                      </div>
                        <div class="card-action fav-icon-sec">
                            <div class="col s4 link-col">
                                <a class="link-icon-color tooltipped" data-position="bottom" data-delay="50" data-tooltip="คัดลอกลิงค์" href="#"><i class="fa fa-link fa-2x" aria-hidden="true"></i>
                                </a>
                            </div>
                            <div class="col s4 pin-col">
                                <a class="pin-icon-color tooltipped" data-position="bottom" data-delay="50" data-tooltip="ปักหมุด" href="#"><i class="pin-icon fa fa-thumb-tack fa-2x" aria-hidden="true"></i>
                                </a>
                            </div>
                            <div class="col s4">
                                <a class="red-text tooltipped" data-position="bottom" data-delay="50" data-tooltip="นำรายการนี้ออก" href="#"><i class="fa fa-times fa-2x" aria-hidden="true"></i>
                                </a>
                            </div>
                      
                  </div>
                </div>
            </div>
            @endforeach

        </div>
      </div>

</div>

@stop
