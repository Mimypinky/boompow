@extends('admin.layout')
@section('main')
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
              <option>Status: Draft</option>
              <option>Status: Publish</option>
            </select>
          </div>
        <button type="button" class="btn btn-default">Sort</button>
      </form>
    </div>

  <div class="row">
    <a href="addnewpost.html" type="button" class="btn btn-primary"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Add new post</a>
  </div>

    <div class="row">
        <div class="panel panel-default">
            <!-- Default panel contents -->
            <div class="head-table panel-heading">All post</div>

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
              <td><span class="label label-info">Draft</span></td>
              <td><h5><a href="">Publish</a> | <a href="" >Edit</a></h5></td>
              <td><a href="" class="myred"><span class="glyphicon glyphicon-trash" aria-hidden="true"></a></td>
            </tr>
            <tr>
              <th scope="row">17/08/2559</th>
              <td>Aliquam</td>
              <td>ตำรับอาหาร | <span>ของหวาน</span></td>
              <td><span class="label label-info">Draft</span></td>
              <td><h5><a href="">Publish</a> | <a href="" >Edit</a></h5></td>
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
