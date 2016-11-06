@extends('admin.layout')
@section('main')

<link href="{{URL::asset('admin/css/bootstrap.css')}}" rel="stylesheet" type="text/css" />
<script src="{{URL::asset('admin/js/jquery.js')}}"></script>
<script src="{{URL::asset('admin/js/bootstrap.js')}}"></script>
<link href="{{URL::asset('admin/css/summernote.css')}}" rel="stylesheet" type="text/css" />
<script src="{{URL::asset('admin/js/summernote.js')}}"></script>
<script src="{{URL::asset('admin/js/bootstrap.min.js')}}"></script>

<!-- include summernote css/js-->

<div id="page-wrapper">
  <div class="main-page">
    <div class="row">
        <div class="col-md-8">

    <form method="post" action="{{url('/administator/content/create')}}" enctype="multipart/form-data">

      <div >
        <h3 style="margin-bottom:10px">Title</h3>
      <input type="text" class="form-control" placeholder="ชื่อบทความ" name="title" required>
      <input type="hidden" name="_token" value="{{ csrf_token() }}">

    </div>
      <div style="margin-top:30px;">
      <h3 style="margin-bottom:20px">Description</h3>
      <textarea name="description"id="summernote"></textarea>
      <script>
      $('#summernote').summernote({
  height: 300,                 // set editor height
  minHeight: 100,             // set minimum height of editor
  maxHeight: 600,             // set maximum height of editor
  focus: true,                 // set focus to editable area after initializing summernote
  placeholder:'Write here..',
  fontNames: ['Arial', 'Arial Black', 'Comic Sans MS', 'Courier New']
});
      $('#summernote').summernote({
        toolbar: [
        // [groupName, [list of button]]
        ['style', ['bold', 'italic', 'underline', 'clear']],
        ['font', ['strikethrough', 'superscript', 'subscript']],
        ['fontsize', ['fontSize']],
        ['color', ['color']],
        ['para', ['ul', 'ol', 'paragraph']],
        ['height', ['height']],

        ['insert',['picture','table','hr','link']]
      ]

    });



    $('#summernote').summernote('bold');
$('#summernote').summernote('italic');
$('#summernote').summernote('underline');
$('#summernote').summernote('strikethrough');
$('#summernote').summernote('fontName', 'sukhumvitregular');
$('#summernote').summernote('fontSize', 14);
  </script>
    </div>

        <div style="margin-top: 20px;">
          <button type="submit"  class="btn btn-success">save/publish</button>
          <button type="button"  class="btn btn-default" id="clear">clear</button>

        </div>
        <script>
        $('#clear').on('click',function(){
          $('#summernote').summernote('code',null);
        });

        </script>
      </div>
      <div class="col-md-4" style="margin-top: 23px;">
        <div class="panel panel-default">
            <div class="panel-heading">Reference</div>
            <div class="panel-body">
              <div class="form-group">
              <input type="text" name="url"  class="form-control" placeholder="http://">
              </div>


            </div>
        </div>
                <div class="panel panel-default">
                    <div class="panel-heading">Category</div>
                    <div class="panel-body">
                      <select class="form-control" name="category">
                        @foreach($category as $cate)
                      <option value="{{$cate->id}}">{{$cate->category_title_th}}</option>

                      @endforeach
                    </select>


                    </div>
                </div>
          <div class="panel panel-default">
            <div class="panel-heading">Picture</div>
            <div class="panel-body">
              <div class="form-group">
                <input type="file" name="files" accept="image/*" id="uploadImage">
                <p class="help-block">Upload thumbnail picture</p>
              </div>
              <div class="row">
              <div id="show_pic_box" style="margin-top:5%;margin-left:10%">
                <img  id="show_pic" style="width:70%"/>
                <script>
                document.getElementById("uploadImage").onchange = function () {
                    var reader = new FileReader();

                    reader.onload = function (e) {
                        // get loaded data and render thumbnail.
                        document.getElementById("show_pic").src = e.target.result;
                    };

                    // read the image file as a data URL.
                    reader.readAsDataURL(this.files[0]);
                };
                </script>
              </div>
            </div>
            </div>
        </div>

      </form>
        </div>
    </div>
  </div>
</div>
@stop
