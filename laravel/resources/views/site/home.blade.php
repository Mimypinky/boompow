@extends('site.layout')
@section('maincontent')
<script>
$(window).load(function() { // makes sure the whole site is loaded
  $('#status').fadeOut(); // will first fade out the loading animation
  $('#preloader').delay(350).fadeOut('slow'); // will fade out the white DIV that covers the website.
  $('body').delay(350).css({
    'overflow': 'visible'
  });
})
</script>
<div id="wrapperHeader">
    <div class="img-cover">
        <img src="{{url('img/health3.jpg')}}">
    </div>

    <div id="header">
        <span>สาระน่ารู้</span>
        <p>ติดตามข่าวสารใหม่ๆได้ที่ BOOMPOW</p>
    </div>
</div>
<div class="container" style="width: 90%;">

  <div class="row">
      <div class="col s12">
        <div class="center">
          {!! (new Landish\Pagination\Materialize($content))->render() !!}
        </div>

        @foreach($content as $data)
          <div class="col s4 m4">
              <div class="card">
                  <div class="card-image">
                      <img src="{{url('img/healthy.jpg')}}">
                  </div>
                  <div class="card-content" style="background-color:eecc6;">
                      <h5 >{{$data->content_title}}</h5>
                      <div><p class="wordwrap">{{$data->description}}</p></div>
                  </div>
                  <div class="card-action" style="background-color: #ee6e73;">
                      <center><a href="{{ url('content/'.$data->category->category_title.'/'.$data->id) }}" style="color: white;">อ่านเนื้อหาเพิ่มเติม</a></center>
                  </div>

              </div>
          </div>
          @endforeach
          <div class="center">
            {!! (new Landish\Pagination\Materialize($content))->render() !!}
          </div>

      </div>

  </div>

</div>
@stop
