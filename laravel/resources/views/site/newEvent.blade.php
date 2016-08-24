<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>CreateEvent</title>
  </head>
  <body>
    <table border="1">
      <form action ="post" >
        <tr><td colspan="4">
    ชื่อกิจกรรม : <input type="text" name="title"/>
  </td></tr>
  <tr><td colspan="4">
    สถานที่ : <input type="text" name="location"/>
  </td></tr>
  <tr><td>ผู้สร้างกิจกรรม</td>
  <td><input type="text" value="19" name="creator"/></td></tr>
  <tr><td align="right">
เริ่มกิจกรรม วันที่
  </td>
    <td >
    <input type="date" name="start_date"/>
</td>
</tr>
<tr><td align="right">
สิ้นกิจกรรม วันที่
</td>
  <td >
  <input type="date" name="finished_date"/>
</td>
</tr>
<tr><td align="right">
เวลาเริ่ม
</td>
  <td >
  <input type="time" name="start_time"/>
</td>
</tr>
<tr><td align = "right">เวลาสิ้นสุด</td>
<td><input type="time" name="finished_time"/></td></tr>
<tr><td>
  เบอร์โทรติดต่อ
</td>
<td>
<input type="phone" name="phonenumber"/>
</td>

</tr>
<tr>
<td>
รายละเอียดเพิ่มเติม
</td>
  <td>
    <textarea name="detail"></textarea>

  </td>
</tr>
<tr>
<td>
link
</td>
  <td>
    <input type="text" name="url"/>

  </td>
</tr>
<tr>
<td>
รูปภาพ
</td>
<td colspan="4">
<input type="file" name="event_pic" accept="image/gif, image/jpeg, image/png" alt="รูปภาพของคุณ"onchange="loadFile(event)"/>
</td>
</tr>
<tr>
  <td></td>
  <td>
<img id="output" width="500px"/>
<script>
  var loadFile = function(event) {
    var reader = new FileReader();
    reader.onload = function(){
      var output = document.getElementById('output');
      output.src = reader.result;
    };
    reader.readAsDataURL(event.target.files[0]);
  };
</script>
</td>
</tr>
<tr>
  <td colspan="2" align="right">
<input type="submit" value="เสร็จสิ้น" /></td>
<td>
<input type="reset" value="reset"/>
</td>

</tr>

  </form>
</table>

  </body>
</html>
