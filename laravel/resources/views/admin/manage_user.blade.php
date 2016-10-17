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
              <th>REGISTERED DATE</th>
              <th>USER NAME</th>
              <th>STATUS</th>
              <th></th>

            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">18/08/2559</th>
              <td>สมัย สมร</td>
              <td><span class="label label-info">Normal</span></td>
              <td><h5><a href="" data-toggle="modal" data-target="#profile-detail">View detail</a> | <a href="" style="color: red;">Ban</a></h5></td>
            </tr>
            <tr>
              <th scope="row">17/08/2559</th>
              <td>สมรักษ์ คักคิกคิก</td>
              <td><span class="label label-info">Normal</span></td>
              <td><h5><a href="" data-toggle="modal" data-target="#profile-detail">View detail</a> | <a href="" style="color: red;">Ban</a></h5></td>
            </tr>
            <tr>
              <th scope="row">16/08/2559</th>
              <td>ละม้าย คล้ายจะเป็นลม</td>
              <td><span class="label label-info">Normal</span></td>
              <td><h5><a href="" data-toggle="modal" data-target="#profile-detail">View detail</a> | <a href="" style="color: red;">Ban</a></h5></td>
            </tr>
            <tr>
              <th scope="row">15/08/2559</th>
              <td>สมศรี ชูจันทร์</td>
              <td><span class="label label-danger">Banned</span></td>
              <td><h5><a href="" data-toggle="modal" data-target="#profile-detail">View detail</a> | <a href="" style="color: red;">Unbaned</a></h5></td>
            </tr>
            <tr>
              <th scope="row">14/08/2559</th>
              <td>สมัคร รักจริง</td>
              <td><span class="label label-info">Normal</span></td>
              <td><h5><a href="" data-toggle="modal" data-target="#profile-detail">View detail</a> | <a href="" style="color: red;">Ban</a></h5></td>
            </tr>
            <tr>
              <th scope="row">13/08/2559</th>
              <td>คลาก เคนท์</td>
              <td><span class="label label-info">Normal</span></td>
              <td><h5><a href="" data-toggle="modal" data-target="#profile-detail">View detail</a> | <a href="" style="color: red;">Ban</a></h5></td>
            </tr><tr>
              <th scope="row">13/08/2559</th>
              <td>เล็ก ลูเทอร์</td>
              <td><span class="label label-danger">Banned</span></td>
              <td><h5><a href="" data-toggle="modal" data-target="#profile-detail">View detail</a> | <a href="" style="color: red;">Unbaned</a></h5></td>
            </tr>
          </tbody>
            </table>
        </div>
      </div>
  </div>
</div>
@stop
