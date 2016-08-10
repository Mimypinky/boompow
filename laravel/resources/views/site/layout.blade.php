<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta charset="utf-8">
    <!--Import Google Icon Font-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->

    <link type="text/css" rel="stylesheet" href="{{URL::asset('materialize/css/materialize.min.css')}}"  media="screen,projection"/>


    <link href='https://fonts.googleapis.com/css?family=Kanit&subset=thai,latin' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="{{URL::asset('css/mycss.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/style.css') }}">


    <!--Import bootstrap.css

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    <!--materialize javaScript-->

    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="{{ URL::asset('jquery-cookie.js')}}"></script>


    <script type="text/javascript" src="{{ URL::asset('materialize/js/materialize.min.js')}}"></script>
    <script type="text/javascript" src="{{ URL::asset('js/intro.js')}}"></script>
    <script type="text/javascript" src="{{ URL::asset('js/resizetext.js')}}"></script>
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/introjs.css')}}">
    <script type="text/javascript">
        $( document ).ready(function(){
         $(".button-collapse2").sideNav();
         $(".button-collapse").sideNav();
     })
 </script>

 <script type="text/javascript">
    $(document).ready(function () {
        $(".button-collapse").sideNav();
    })

    $(document).ready(function () {
        $('.modal-trigger').leanModal();
        $('#modal1').openModal();
        $('#modal1').closeModal();
    });

     $(document).ready(function() {
    $('select').material_select();
  });
</script>
    <title></title>
  </head>
  <body>
<header>
@yield('')
</header>
<section id="main"></section>
<footer></footer>
  </body>
</html>
