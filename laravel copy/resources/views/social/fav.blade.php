@extends('site.layout')
@section('maincontent')
<div class="container" style="width: 90%; margin-top: 132px;min-height: 600px;">
    <div class="row">
    <ul class="collection with-header pro-upstatus-feed">
        <li class="collection-header myfriend-head">
            <div class="row mf-row">
                <div class="col s1"><img src="img/fav.png" width="50"></div>
                <div class="col s5"><h4 class="mf-col">รายการโปรด</h4></div>
            </div> 
        </li>
        <li class="collection-item" style="background-color: #fbfbfb;">
            <div class="row">
                <div class="col s12">
                    <div class="row">
                        @foreach($myFav as $data)
                        <div class="col s12 m4">
                            <div class="card">
                                <div class="card-image">
                                    <img src="{{url('img/healthy.jpg')}}">
                                </div>
                                <div class="card-content" style="height:200px;background-color:eecc6;">
                                    <h5 >{{$data->content_title}}</h5>
                                    <div><p class="wordwrap">{{$data->description}}</p></div>
                                </div>
                                
                                <div class="card-action fav-icon-sec">
                                    <div class="col s4 link-col">
                                        <a class="link-icon-color tooltipped" data-position="bottom" data-delay="50" data-tooltip="คัดลอกลิงค์" href="#"><i style="margin-top: 13px;" class="fa fa-link fa-lg" aria-hidden="true"></i>
                                        </a>
                                    </div>
                                    <div class="col s4 pin-col">
                                        <a class="link-icon-color tooltipped" data-position="bottom" data-delay="50" data-tooltip="ปักหมุด" href="#"><i style="margin-top: 13px;" class="pin-icon fa fa-thumb-tack fa-lg" aria-hidden="true"></i>
                                        </a>
                                    </div>
                                    <div class="col s4">
                                        <a class="link-icon-color tooltipped" data-position="bottom" data-delay="50" data-tooltip="นำรายการนี้ออก" href="#"><i style="margin-top: 13px;" class="fa fa-times fa-lg" aria-hidden="true"></i>
                                        </a>
                                    </div>
                                    
                                </div>
                                <div class="card-action" style="background-color: #ee6e73;">
                                        <center><a href="{{ url('content/favourite/'.$data->id) }}" style="color: white;">อ่านเนื้อหาเพิ่มเติม</a></center>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    </div>
                </div>
            </div>
        </li>
    </ul>
    </div>
</div>

@stop
