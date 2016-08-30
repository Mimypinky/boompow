@extends('site.layout')

@section('maincontent')
<div class="row">
    <div class="recipe-cover">
        <center><h1 style="font-size: 36pt; text-shadow: 2px 2px #3A3737;" class="hello-content">ตำรับอาหาร</h1></center>
    </div>
</div>
<div class="container" style="width: 90%;">

  <div class="row">
      <div class="col s12">
        <nav class="mybc" style="background-color: #EE6E74">
            <div class="nav-wrapper">
                <div class="col s12">
                    <a href="#!" class="breadcrumb">ตำรับอาหาร</a>

                </div>
            </div>
        </nav>
        @foreach($content as $data)

          <div class="col s4 m4">
              <div class="card">
                  <div class="card-image">
                      <img src="img/healthy.jpg">
                  </div>
                  <div class="card-content" style="height:200px;background-color:eecc6;">
                      <h5 >{{$data->content_title}}</h5>
                      <div><p class="wordwrap">{{$data->description}}</p></div>
                  </div>
                  <div class="card-action">

                      <a href="content/{{ $data->category->category_title }}/{{ $data->id }}">เพิ่มเติม</a>



                  </div>
              </div>
          </div>
          @endforeach
      </div>

  </div>





                      <!--Resize Button-->
                      <div class="fixed-action-btn" data-step="4" data-intro="Ok, wasn't that fun?" data-position='left' style="position: fixed;">
                          <a class="btn-floating btn-large red tooltipped" data-position="left" data-delay="50" data-tooltip="ปรับขนาดตัวอักษร" ><i class="large material-icons" >mode_edit</i></a>
                          <ul class="resizer">
                              <li id="large"><a class="large btn-floating red tooltipped " data-position="left" data-delay="50" data-tooltip="ตัวอักษรขนาดใหญ่">
                                  <img src="img/ismall.png" style="margin: 6px"></a></li>
                                  <li id="medium"><a class="medium btn-floating blue tooltipped " data-position="left" data-delay="50" data-tooltip="ตัวอักษรขนาดกลาง"> <img src="img/ismall.png" style="margin: 10px; width: 15px"></a></li>
                                  <li id="small"><a class="large btn-floating green tooltipped" data-position="left" data-delay="50" data-tooltip="ตัวอักษรขนาดเล็ก"><img src="img/ismall.png" style="margin: 12px; width: 11px"></a></li>
                              </ul>
                          </div>
</div>


@stop
