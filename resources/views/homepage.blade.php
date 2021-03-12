@php
$logoMolisana= 'https://www.lamolisana.it/wp-content/uploads/2020/04/marchio-sito-test.png';
@endphp



<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="{{asset('css/app.css')}}">



  <div class="main-container-app">
    <!-- START APPLICATION -->

    @include('header-part')
    <div class="container">



      <div class="product-container">

        <!--FIRST PART PASTA LUNGA -->
        <div class="type-of-pasta-1">

          <h4>LE LUNGHE</h4>
          @foreach ($datiPasta as $key => $type)
          @if($type['tipo'] === 'lunga')

          <div class="box-product">
            <a href="/product/{{$key + 1}}">
              <img src="{{$type['src']}}" alt="">
            </a>
          </div>

          @endif
          @endforeach
        </div>

        <!--SECOND PART PASTA CORTA  -->
        <div class="type-of-pasta-2">

          <h4>LE CORTE</h4>
          @foreach ($datiPasta as $key => $type)
          @if($type['tipo'] === 'corta')

          <div class="box-product">
            <a href="/product/{{$key + 1}}">
              <img src="{{$type['src']}}" alt="">
            </a>
          </div>

          @endif
          @endforeach
        </div>

        <!--TIRD PART PASTA CORTISSIMA -->
        <div class="type-of-pasta-3">

          <h4>LE CORTISSIME</h4>
          @foreach ($datiPasta as $key => $type)
          @if($type['tipo'] == 'cortissima')

          <div class="box-product">
            <a href="/product/{{$key + 1}}">
              <img src="{{$type['src']}}" alt="">
            </a>
          </div>

          @endif
          @endforeach
        </div>




      </div>


    </div>
    @include('footer-part')
    <!-- END MAIN-CONTAINER-APP -->
  </div>


  </html>
