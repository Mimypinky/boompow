@extends('admin.layout')
@section('main')
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
              <th>STATUS</th>
              <th>PROFILE_ID</th>
              <th></th>

            </tr>
          </thead>
          <tbody>
            @foreach($users as $user)
            <?php $dt=$user->created_at;
              $date = $dt->toDateString();?>
            <tr>

              <th scope="row">{{$user->id}}</th>
              <td>{{$date}}</td>
              <td>{{$user->username}}</td>
              <td>{{$user->first_name.'  '.$user->last_name}}</td>
              @if($user->admin_status=='admin')
              <td><span class="label label-success">{{$user->admin_status}}</span></td>
              @else
              <td><span class="label label-info">{{$user->admin_status}}</span></td>
              @endif
              <td>{{$user->profile_id}}</td>
              <td><h5><a href="" data-toggle="modal" data-target="#profile-detail">View detail</a> | <a href="" style="color: red;">Ban</a></h5></td>
            </tr>
            @endforeach
          </tbody>
            </table>
        </div>
      </div>
  </div>
</div>
@stop
