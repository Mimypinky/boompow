@extends('admin.layout')
@section('main')
<?php
use Carbon\Carbon;
?>
<script type="text/javascript">
$('#myModal').modal('show');
</script>
<div id="page-wrapper">
  <div class="main-page">
    <div class="row">
      <form class="form-inline">
          <div class="input-group">
              <input type="text" class="form-control" placeholder="Search post">
              <span class="input-group-btn">
                <button class="btn btn-default" type="button">Search</button>
              </span>
          </div><!-- /input-group -->

          <label style="color: #555">Sort by: </label>
            <div class="form-group ">
              <select class="form-control">
              <option>Date</option>
              <option>Post</option>
              <option>Category</option>
              <option>Status: Available</option>
              <option>Status: Unavailable</option>
            </select>
          </div>
        <button type="button" class="btn btn-default">Sort</button>
      </form>
    </div>


    <div class="row">
        <div class="panel panel-default">
            <!-- Default panel contents -->
            <div class="head-table panel-heading">All post</div>

            <!-- Table -->
            <table class="table">
              <thead>
            <tr align="center">
              <th>ID</th>
              <th>TITLE</th>
              <th>CREATOR</th>
                <th>MEMBER</th>
              <th>STATUS</th>

              <th>VIEW</th>

              <th></th>
            </tr>
          </thead>
          <tbody>
            @foreach($events as $key=>$event)
            <?php
            $now = Carbon::parse('now');
            $start_date = Carbon::parse($event->start_date);
            $dif = $lengthOfAd = $now->diffInDays($start_date,false);

            $member = DB::table('join_event')->where('eve_id','=',$event->id)->count();

            if($dif<0 ){
              $status=' label-warning ';
              $message = 'Unavailable';

          }else{
              $status=' label-success ';
              $message = 'Availble';

            }
            ?>
            <tr >
              <th scope="row">{{$event->id}}</th>
              <td>{{$event->title}}</td>
              <td>{{$event->username}}</td>
              <td>{{$member.'/'.$event->max_amount}}</td>
              <td><span class="label {{$status}}">{{$message}}</span></td>
              <td align="center"><a href="" class="glyphicon glyphicon-eye-open "></a></td>

                <td>  <button data-toggle="modal" data-target="#myModal{{$key}}" class="btn btn-danger btn-sm dropdown-toggle" type="button" a>
   delete
  </button></td>
            </tr>

            <div class="modal fade" id="myModal{{$key}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <form action="" method="get">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <h4 class="modal-title" id="myModalLabel">ลบบทความ</h4>
      </div>
      <div class="modal-body">
        คุณต้องการที่จะลบกิจกรรมนี้ใช่หรือไม่ ?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">ยกเลิก</button>
         <button type="submit" class="btn btn-default">ใช่</button>
      </div>
    </div>
  </form>
  </div>

</div>
            @endforeach




          </tbody>
            </table>
        </div>
      </div>
  </div>
</div>
@stop
