
@php
$logoMolisana= 'https://www.lamolisana.it/wp-content/uploads/2020/04/marchio-sito-test.png';
@endphp

<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title></title>
</head>
<body>


  <div class="main-container-app">
    <!-- START APPLICATION -->


    <div class="container">

      <div class="header">

        @include('header-part')

      </div>

      <div class="content">
        {{$datiPasta[$idProduct - 1]['titolo']}}
        <img src="{{$datiPasta[$idProduct]['src-h']}}" alt="">;
      </div>


      @include('footer-part')
    </div>
  </div>

</body>
</html>
