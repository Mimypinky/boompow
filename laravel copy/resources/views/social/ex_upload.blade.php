<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <style>

    </style>
  </head>
  <body>
    <form action="{{url('/admin/upload/action')}}" method="post" enctype="multipart/form-data">
<input type="hidden" name="_token" value="{{ csrf_token() }}">
    <div class="row page-header">
        <div class="col-sm-12">
            <h1 class="">Basic Uploader</h1>
        </div>
        <div class="col-sm-6 text-right padding-top-20">
            <input type="file" name="uploader" id="uploader" />
        </div>
        <div class="col-sm-6 text-right padding-top-20">
            <button class="btn btn-success" type="submit" name = "btn-upload" title="Upload image"><i class="fa fa-upload" ></i> Upload</button>
            <button class="btn btn-danger del" type="submit" name = "btn-delete" title="Delete Multiple image"><i class="fa fa-trash-o" ></i> Delete</button>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <div class="panel panel-default">
        <div class="panel-body">
            <div class="dataTable_wrapper">
                <div class="row">

                    <div class="col-xs-3 gallery">
                        <img src="img/pic2.jpg" />
                    </div>

                </div>

            </div>
        </div>
    </div>
</form>

  </body>
</html>
