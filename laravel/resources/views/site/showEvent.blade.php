<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>show</title>
  </head>
  <body>
    <table>
      <tr>
        <td>id</td>
        <td>title</td>
        <td>location</td>
        <td>creator</td>
        <td>start_time</td>
        <td>start_date</td>
        <td>finish_time</td>
        <td>finishe_date</td>
        <td>detail</td>
        <td>phone</td>
        <td>url</td>
      </tr>
      <tr>
        <td>{{$event->id}}</td>
        <td>{{$event->title}}</td>
        <td>{{$event->location}}</td>
        <td>{{$event->creator}}</td>
        <td>{{$event->start_time}}</td>
        <td>{{$event->start_date}}</td>
        <td>{{$event->finish_time}}</td>
        <td>{{$event->finish_date}}</td>
        <td>{{$event->datail}}</td>
        <td>{{$event->contact}}</td>
        <td>{{$event->url}}</td>


      </tr>
    </table>
  </body>
</html>
