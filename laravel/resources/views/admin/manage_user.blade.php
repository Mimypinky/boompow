@extends('admin.layout')
@section('main')
<?php
use Carbon\Carbon;
?>
<script type="text/javascript">
$('#viewDetail').modal('show');
</script>
<div id="page-wrapper">
  <div class="main-page">
      <div class="row">
      <form class="form-inline">
          <div class="input-group">
              <input type="text" class="form-control" placeholder="Search username">
              <span class="input-group-btn">
                <button class="btn btn-default" type="button">Search</button>
              </span>
          </div><!-- /input-group -->

          <label style="color: #555">Sort by: </label>
            <div class="form-group ">
              <select class="form-control">
              <option>Registered date</option>
              <option>User name</option>
              <option>Gender</option>
              <option>Status: Normal</option>
              <option>Status: Banned</option>
            </select>
          </div>
        <button type="button" class="btn btn-default">Sort</button>
      </form>
    </div>
      <div class="row">
        <div class="panel panel-default" style="margin-top: -21px;">
            <!-- Default panel contents -->
            <div class="head-table panel-heading">Users</div>

            <!-- Table -->
            <table class="table">
              <thead>
            <tr>
              <th>ID</th>
              <th>REGISTERED DATE</th>
              <th>USER NAME</th>
              <th>NAME</th>
              <th style="text-align:center">PROFILE_ID</th>
              <th>STATUS</th>

              <th style="text-align:center">PERMISSION</th>
              <th>BAN</th>
              <th></th>
            </tr>
          </thead>
          <tbody>
            @foreach($users as $key=>$user)
            <?php $dt=$user->created_at;
              $date = $dt->toDateString();?>
            <tr>

              <th scope="row">{{$user->id}}</th>
              <td>{{$date}}</td>
              <td>{{$user->username}}</td>
              <td>{{$user->first_name.'  '.$user->last_name}}</td>
                <td align="center">{{$user->profile_id}}</td>
              @if($user->admin_status=='admin')
              <td align="center"><span class="label label-success" style="text-transform: uppercase;">{{$user->admin_status}}</span></td>
              @elseif($user->admin_status=='banned')
              <td align="center"><span class="label label-danger" style="text-transform: uppercase;">{{$user->admin_status}}</span></td>

              @else
              <td align="center"><span class="label label-info" style="text-transform: uppercase;">{{$user->admin_status}}</span></td>
              @endif

              <td align="center"><!-- Split button -->
                <div class="btn-group">
                  <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Change <span class="caret"></span>
                  </button>
                  <ul class="dropdown-menu" aria-labelledby="dropdownMenu4">
  <li><a href="#">Admin</a></li>
  <li><a href="#">User</a></li>

</ul>
                </div>
</td>

<td><button type="button"class="btn btn-warning btn-sm" data-toggle="modal" data-target="#banUser{{$key}}">Ban</button></td>
<td align="left"><button type="button" data-toggle="modal" data-target="#viewDetail{{$key}}" class="btn btn-default">
  <span class="glyphicon glyphicon-info-sign"><span></td>


      </tr>
<?php $info = DB::table('profiles')->where('id','=',$user->profile_id)->first();?>
  <div class="modal fade" id="viewDetail{{$key}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <h4 class="modal-title" id="myModalLabel">ข้อมูลพื้นฐาน</h4>
      </div>
      <div class="modal-body">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-4" style="text-align:center">
              <img src="{{url('img/uploads/avatars/'.$info->avatar)}}" style="margin-bottom:10px;"alt="{{$user->first_name.' '.$user->blast_name}}" class="img-thumbnail">
              @if($user->admin_status=='admin')
              <br/>
            <span class="label label-success" style="text-transform: uppercase;">{{$user->admin_status}}</span>
              @elseif($user->admin_status=='banned')
              <br/>
            <span class="label label-danger" style="text-transform: uppercase;">{{$user->admin_status}}</span>
              @else
              <br/>
              <span class="label label-info" style="text-transform: uppercase;">{{$user->admin_status}}</span>
              @endif

            </div>
            <div class="col-md-8">
<p><b>ชื่อ&nbsp;&nbsp;</b>{{$user->first_name.'  '.$user->last_name}}</p><br>
<p><b>เพศ&nbsp;&nbsp;</b>
@if($info->gender=='female')
หญิง
  @elseif($info->gender=='male')
  ชาย
  @endif

&nbsp;&nbsp;&nbsp;<b>วันเกิด</b>
{{$info->dob}}
</p><br>
<p><b>Email&nbsp;&nbsp;&nbsp;</b>{{$info->email}}</p><br>
<p><b>BIO</b>&nbsp;&nbsp;&nbsp;{{$info->bio}}</p>

            </div>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="banUser{{$key}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <form method="get" action="{{url('/administator/user/ban/'.$user->id)}}">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">ระงับการใช้งาน</h4>
      </div>
      <div class="modal-body">
        คุณต้องการที่จะระงับผู้ใช้นี้ใช่หรือไม่?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">ยกเลิก</button>
        <button type="submit" class="btn btn-primary">ใช่</button>
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
