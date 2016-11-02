@extends('admin.layout')
@section('main')
<link href="{{URL::asset('admin/css/bootstrap.css')}}" rel="stylesheet" type="text/css" />
<script src="{{URL::asset('admin/js/jquery.js')}}"></script>
<script src="{{URL::asset('admin/js/bootstrap.js')}}"></script>
<link href="{{URL::asset('admin/css/summernote.css')}}" rel="stylesheet" type="text/css" />
<script src="{{URL::asset('admin/js/summernote.js')}}"></script>
<script src="{{URL::asset('admin/js/bootstrap.min.js')}}"></script>


<div id="page-wrapper">
  <div class="main-page">
    <div class="row">
        <div class="col-md-8">

    <form method="post" action="{{url('/administator/content/update/'.$content->id)}}" enctype="multipart/form-data">

      <div >
        <h3 style="margin-bottom:10px">Title</h3>
      <input type="text" class="form-control" placeholder="ชื่อบทความ" name="title" required value="{{$content->content_title}}">
      <input type="hidden" name="_token" value="{{ csrf_token() }}">

    </div>
      <div style="margin-top:30px;">
      <h3 style="margin-bottom:20px">Description</h3>
      <textarea name="description"id="summernote">{!!$content->description!!}</textarea>
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

$('#summernote').summernote({
  fontNames: ['Arial', 'Arial Black', 'Comic Sans MS', 'Courier New', 'Merriweather'],
  fontSize:['16pt','20pt','22pt']
});

    $('#summernote').summernote('bold');
$('#summernote').summernote('italic');
$('#summernote').summernote('underline');
$('#summernote').summernote('strikethrough');
  </script>
    </div>

        <div style="margin-top: 20px;">
          <button type="submit"  class="btn btn-success">save/publish</button>

        </div>
      </div>
      <div class="col-md-4" style="margin-top: 23px;">
        <div class="panel panel-default">
            <div class="panel-heading">Reference</div>
            <div class="panel-body">
              <div class="form-group">
              <input type="text" name="url" value="{{$content->reference}}" class="form-control" placeholder="http://">
              </div>


            </div>
        </div>
                <div class="panel panel-default">
                    <div class="panel-heading">Category</div>
                    <div class="panel-body">
                      <select class="form-control" name="category">
                        @foreach($category as $cate)
                      <option value="{{$content->cate_id}}">{{$cate->category_title_th}}</option>

                      @endforeach
                    </select>


                    </div>
                </div>
          <div class="panel panel-default">
            <div class="panel-heading">Picture</div>
            <div class="panel-body">
              <div class="form-group">
                <input type="file" id="exampleInputFile">
                <p class="help-block">Upload thumbnail picture</p>
              </div>
            </div>
        </div>

      </form>
        </div>
    </div>
  </div>
</div>
@stop
