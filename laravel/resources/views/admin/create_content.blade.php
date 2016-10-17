@extents('admin.layout')
@section('main')
<div id="page-wrapper">
  <div class="main-page">
    <div class="row">
        <div class="col-md-8">
        <form class="form-horizontal" style="width: 780px;">
            <div class="form-group col-md-12">
              <label for="exampleInputName2">Title</label>
              <input type="text" class="form-control" id="exampleInputName2">
            </div>
        </form>


        <div id="sample">
            <textarea name="area3" style="width: 750px; height: 300px;">
              HTML content default in textarea
          </textarea>
        </div>
        <div style="margin-top: 20px;">
          <button type="button" class="btn btn-primary">Publish</button>
          <button type="button" class="btn btn-info">Save draft</button>
        </div>
      </div>
      <div class="col-md-3" style="margin-top: 23px;">
          <div class="panel panel-default">
            <div class="panel-heading">Picture</div>
            <div class="panel-body">
              <div class="form-group">
                <input type="file" id="exampleInputFile">
                <p class="help-block">Upload thumbnail picture</p>
              </div>
            </div>
        </div>

        <div class="panel panel-default">
            <div class="panel-heading">Category</div>
            <div class="panel-body">
            <form action="post" required>
              <div class="checkbox">
              <label>
                <input type="checkbox" value="health">
                สุขภาพ
              </label><br>
              <label>
                <input type="checkbox" value="food_menu" >
                ตำรับอาหาร
                <select class="form-control">
                  <option>Choose sub category</option>
                  <option value="dish" >ของคาว</option>
                  <option value="dessert">ของหวาน</option>
              </select>
              </label><br>

              <label>
                <input type="checkbox" value="entertain">
                บันเทิง
                <select class="form-control">
                  <option>Choose sub category</option>
                  <option value="radio" >วิทยุ</option>
                  <option value="movie">ดูหนัง</option>
                  <option value="music">ฟังเพลง</option>
                  <option value="dhamma">ธรรมะ</option>
              </select>
              </label><br>
              <label>
                <input type="checkbox" value="family">
                ครัวเรือน
              </label><br>
              <label>
                <input type="checkbox" value="news">
                ห้องข่าว
                <select class="form-control">
                  <option>Choose sub category</option>
                  <option value="entertainment_n" >ข่าวบังเทิง</option>
                  <option value="sport_n">ข่าวกีฬา</option>
                  <option value="economy_n">ข่าวเศรษฐกิจ</option>
                  <option value="politic_n">ข่าวการเมือง</option>
              </select>
              </label><br>
              <label>
                <input type="checkbox" value="privilege">
                สิทธิประโยชน์
              </label><br>
              <label>
                <input type="checkbox" value="diy">
                งานประดิษฐ์
              </label><br>
            </div>
            </form>
            </div>
        </div>
        </div>
    </div>
  </div>
</div>
@stop
