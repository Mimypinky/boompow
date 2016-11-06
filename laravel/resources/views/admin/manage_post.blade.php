@extends('admin.layout')
@section('main')

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
              <option>Status: Draft</option>
              <option>Status: Publish</option>
            </select>
          </div>
        <button type="button" class="btn btn-default">Sort</button>
      </form>
    </div>

  <div class="row">
    <a href="{{url('administator/content/create')}}" type="button" class="btn btn-primary"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Add new post</a>
  </div>

    <div class="row">
        <div class="panel panel-default">
            <!-- Default panel contents -->
            <div class="head-table panel-heading">All post</div>

            <!-- Table -->
            <table class="table">
              <thead>
            <tr>
              <th>ID</th>
              <th>DATE</th>
              <th>TITLE</th>
              <th>CATEGORY</th>
              <th></th>
              <th></th>
              <th></th>
              <th></th>
            </tr>
          </thead>
          <tbody>
            @foreach($contents as $key=> $content )
            <?php
            $dt = $content->created_at;
            $date =  $dt->toDateString();     ?>
            <tr >
              <th scope="row">{{$content->id}}</th>
              <td>{{$date}}</td>

              <td>{{$content->content_title}}</td>
              <td>{{$content->category_title}}</td>
              <td align="center"><a href="{{url('/content/'.$content->category_title.'/'.$content->id)}}" class="glyphicon glyphicon-eye-open "></a></td>
              <td>

                 <a href="{{url('administator/content/edit/'.$content->id)}}" ><span class="glyphicon glyphicon-pencil" aria-hidden="true"></a>

              </td>
                <td>  <button data-toggle="modal" data-target="#myModal{{$key}}" class="btn btn-danger btn-sm dropdown-toggle" type="button" a>
   delete
  </button></td>
            </tr>

            <div class="modal fade" id="myModal{{$key}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <form action="{{url('/administator/content/delete/'.$content->id)}}" method="get">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <h4 class="modal-title" id="myModalLabel">ลบบทความ</h4>
      </div>
      <div class="modal-body">
        คุณต้องการที่จะลบบทความนี้ใช่หรือไม่ ?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">ยกเลิก</button>
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
