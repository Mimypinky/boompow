
@extends('admin.layout')
@section('main')
<div id="page-wrapper">
  <div class="main-page">
    <div class="row-one">
      <div class="col-md-4 widget">
        <div class="stats-left " style="background-color: #47b8e0;">
          <h5>All</h5>
          <h4>Users</h4>
        </div>
        <div class="stats-right" style="background-color: #5acbf3;">
          <label> 45</label>
        </div>
        <div style="background-color: #77919d;"><a href="{{url('administrator/user')}}" style="color: white;"><p style="    margin-left: 36%;">View all users</p></a></div>
        <div class="clearfix"> </div>
      </div>
      <div class="col-md-4 widget states-mdl">
        <div class="stats-left" style="background-color: #ffc952;">
          <h5>All</h5>
          <h4>Posts</h4>
        </div>
        <div class="stats-right" style="background-color: #ffd16d;">
          <label> 80</label>
        </div>
        <div style="background-color: #77919d;"><a href="{{url('administrator/post')}" style="color: white;"><p style="    margin-left: 36%;">View all posts</p></a></div>
        <div class="clearfix"> </div>
      </div>
      <div class="col-md-4 widget states-last">
        <div class="stats-left" style="background-color: #ff7473;">
          <h5>All</h5>
          <h4>Baned Users</h4>
        </div>
        <div class="stats-right" style="background-color: #fd8d8d;">
          <label>51</label>
        </div>
        <div style="background-color: #77919d;"><a href="" style="color: white;"><p style="    margin-left: 33%;">View all Banned users</p></a></div>
        <div class="clearfix"> </div>
      </div>
      <div class="clearfix"> </div>
    </div>

    <div class="clearfix"></div>
      <div class="row">
        <div class="panel panel-default">
            <!-- Default panel contents -->
            <div class="head-table panel-heading">Lasted post</div>

            <!-- Table -->
            <table class="table">
              <thead>
            <tr>
              <th>DATE</th>
              <th>POST</th>
              <th>CATEGOEY</th>
              <th>STATUS</th>
              <th></th>
              <th></th>

            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">18/08/2559</th>
              <td>Lorem ipsum</td>
              <td>สุขภาพ</td>
              <td><span class="label label-primary">Publish</span></td>
              <td><h5><a href="" target="_blank">View post</a> | <a href="" >Edit</a></h5></td>
              <td><a href="" class="myred"><span class="glyphicon glyphicon-trash" aria-hidden="true"></a></td>
            </tr>
            <tr>
              <th scope="row">17/08/2559</th>
              <td>Aliquam</td>
              <td>ตำรับอาหาร | <span>ของหวาน</span></td>
              <td><span class="label label-primary">Publish</span></td>
              <td><h5><a href="" target="_blank">View post</a> | <a href="" >Edit</a></h5></td>
              <td><a href="" class="myred"><span class="glyphicon glyphicon-trash" aria-hidden="true"></a></td>
            </tr>
            <tr>
              <th scope="row">16/08/2559</th>
              <td>Lorem ipsum</td>
              <td>บันเทิง | <span>ฟังเพลง</span></td>
              <td><span class="label label-primary">Publish</span></td>
              <td><h5><a href="" target="_blank">View post</a> | <a href="" >Edit</a></h5></td>
              <td><a href="" class="myred"><span class="glyphicon glyphicon-trash" aria-hidden="true"></a></td>
            </tr>
            <tr>
              <th scope="row">15/08/2559</th>
              <td>Aliquam</td>
              <td>ครัวเรือน</td>
              <td><span class="label label-primary">Publish</span></td>
              <td><h5><a href="" target="_blank">View post</a> | <a href="" >Edit</a></h5></td>
              <td><a href="" class="myred"><span class="glyphicon glyphicon-trash" aria-hidden="true"></a></td>
            </tr>
            <tr>
              <th scope="row">14/08/2559</th>
              <td>Lorem ipsum</td>
              <td>ห้องข่าว</td>
              <td><span class="label label-primary">Publish</span></td>
              <td><h5><a href="" target="_blank">View post</a> | <a href="" >Edit</a></h5></td>
              <td><a href="" class="myred"><span class="glyphicon glyphicon-trash" aria-hidden="true"></a></td>
            </tr>
            <tr>
              <th scope="row">13/08/2559</th>
              <td>Aliquam</td>
              <td>สิทธิประโยชน์</td>
              <td><span class="label label-primary">Publish</span></td>
              <td><h5><a href="" target="_blank">View post</a> | <a href="" >Edit</a></h5></td>
              <td><a href="" class="myred"><span class="glyphicon glyphicon-trash" aria-hidden="true"></a></td>
            </tr><tr>
              <th scope="row">13/08/2559</th>
              <td>Aliquam</td>
              <td>งานประดิษฐ์</td>
              <td><span class="label label-primary">Publish</span></td>
              <td><h5><a href="" target="_blank">View post</a> | <a href="" >Edit</a></h5></td>
              <td><a href="" class="myred"><span class="glyphicon glyphicon-trash" aria-hidden="true"></a></td>
            </tr>
          </tbody>
            </table>
        </div>
      </div>
  </div>
</div>
@stop
