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


    <div class="container">

        @include('header-part')

      <div class="product-container">
   @yield('main')


      </div>

@include('footer-part')
    </div>

    <!-- END MAIN-CONTAINER-APP -->
  </div>


  </html>


  <!--
        <div class="content">
          {{$datiPasta[$idProduct - 1]['titolo']}}
          <img src="{{$datiPasta[$idProduct]['src-h']}}" alt="">;
        </div> -->
