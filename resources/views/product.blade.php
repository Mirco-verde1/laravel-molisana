
@php
$logoMolisana= 'https://www.lamolisana.it/wp-content/uploads/2020/04/marchio-sito-test.png';
@endphp

<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="{{asset('css/app.css')}}">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
    integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA=="
    crossorigin="anonymous" />
  <title></title>
</head>
<body>


  <div class="main-container-app">
    <!-- START APPLICATION -->

    @include('header-part')

    <div class="container">

      <div class="details-product">


          <div class="left-chevron">
            @if($idProduct == 1 )

              <a href="/product/{{count($datiPasta)}}">

            @else

              <a href="/product/{{$idProduct -1}}">

            @endif
            <i class="fas fa-chevron-left"></i>
            </a>
          </div>


        <div class="container-description">


          <div class="title">
            <h3>{{$datiPasta[$idProduct - 1]['titolo']}}</h3>
          </div>

          <div class="image">
            <img src="{{$datiPasta[$idProduct -1]['src-h']}}" alt="">
          </div>

          <div class="front-image">
            <img src="{{$datiPasta[$idProduct -1]['src-p']}}" alt="">
          </div>
        </div>



        <div class="right-chevron">

          @if(($idProduct) == count($datiPasta) )

            <a href="/product/1">
              
          @else

            <a href="/product/{{$idProduct +1}}">

          @endif
          <i class="fas fa-chevron-right"></i>
          </a>
        </div>


      </div>





    </div>
    @include('footer-part')
  </div>

</body>
</html>
