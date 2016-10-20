@extends('site.layout')
@section('maincontent')
<style >
  .collection .collection-item.active{
    background-color: #e57373;
    font-weight: bold;
  }
  a{

  }
</style>
<div class="container" style="width: 90%; margin-top: 160px;min-height: 600px;">
    <div class="row">


      @if(Auth::guest())

      <ul class="collection with-header">
           <li class="collection-header"><h2 >บทความ</h2>
            <p >ค้นหาคำว่า "<i>{{$value}}</i>"  {{$count}} บทความ</p>

           </li>
           @if($count==0)
           <div class="collection-item" style="padding:20px;font-size:1.5em;text-align:center">- ไม่พบข้อมูล -</div>
           @else
           @foreach($contents as $content)
           <a href="{{url('/content/'.$content->category_title.'/'.$content->id)}}" class="collection-item"><p>{{$content->content_title}} </p></a>
           @endforeach
           @endif

           </li>


         </ul>
        @else
        <!--content-->

        <ul class="collection with-header">
             <li class="collection-header"><h2 >บทความ</h2>
                 <p>ค้นหาคำว่า "<i>{{$value}}</i>"  {{$count_c}} บทความ</p>
             </li>
             @if($count_c==0)
             <div class="collection-item" style="padding:20px;font-size:1.5em;text-align:center">- ไม่พบข้อมูล -</div>
             @else
             @foreach($contents as $content)
             <a href="{{url('/content/'.$content->category_title.'/'.$content->id)}}" class="collection-item">
               <p>{{$content->content_title}} </p></a>
             @endforeach
             @endif
       </li>
     </ul>


               <!--event-->
         <ul class="collection with-header">
              <li class="collection-header"><h2 class="">กิจกรรม</h2>
                   <p >ค้นหาคำว่า "<i>{{$value}}</i>"  {{$count_e}} คน</p>
              </li>

              @if($count_e==0)
              <div class="collection-item" style="padding:20px;font-size:1.5em;text-align:center">- ไม่พบข้อมูล -</div>
              @else
              @foreach($events as $event)
              <div class="red-text text-lighten-2 collection-item"><p>{{$event->title}} </p></div>
              @endforeach
              @endif
            </ul>


            <!--friend-->
            <ul class="collection with-header">
                 <li class="collection-header"><h2>เพื่อน</h2>
                    <p >ค้นหาคำว่า "<i>{{$value}}</i>"  {{$count_f}} กิจกรรม</p>
                 </li>
                 @if($count_f==0)
                 <div class="collection-item" style="padding:20px;font-size:1.5em;text-align:center">- ไม่พบข้อมูล -</div>
                 @else
                 @foreach($friends as $friend)
                 <a href="{{url('/friend/'.$friend->username)}}" class="red-text text-lighten-2 collection-item">
                   <p>{{$friend->first_name.' '.$friend->last_name}} </p>
                 </a>
                 @endforeach
                 @endif
            </ul>
            @endif
    </div>
</div>

@stop
