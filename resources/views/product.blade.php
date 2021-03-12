
@php
$logoMolisana= 'https://www.lamolisana.it/wp-content/uploads/2020/04/marchio-sito-test.png';
@endphp

<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="{{asset('css/app.css')}}">
  <title></title>
</head>
<body>


  <div class="main-container-app">
    <!-- START APPLICATION -->

    @include('header-part')

    <div class="container">



      <div class="details-product">
        <div class="container">


          <div class="title">
            <h3>{{$datiPasta[$idProduct - 1]['titolo']}}</h3>
          </div>

          <div class="image">
            <img src="{{$datiPasta[$idProduct]['src-h']}}" alt="">
          </div>

          <div class="front-image">
            <img src="{{$datiPasta[$idProduct]['src-p']}}" alt="">
          </div>
        </div>
      </div>





    </div>
    @include('footer-part')
  </div>

</body>
</html>
