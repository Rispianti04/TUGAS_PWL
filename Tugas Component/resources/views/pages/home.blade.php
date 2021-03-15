@extends('layouts.app')
@section('title', 'Home')
@section('content')
    <h1>SELAMAT DATANG DI BLOGKU, {{$name}}</h1>
    <div class="container">
        <header class="blog-header py-3">
          <div class="row flex-nowrap justify-content-between align-items-center">
            <div class="col-4 pt-1">
              <a class="text-muted" href="#">Follow me</a>
            </div>
            <div class="col-4 d-flex justify-content-end align-items-center">
              <a class="text-muted" href="#">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="mx-3"><circle cx="10.5" cy="10.5" r="7.5"></circle><line x1="21" y1="21" x2="15.8" y2="15.8"></line></svg>
              </a>
            </div>
          </div>
        </header>

        <div >
          <div class="col-md-6 px-0">
            <h1 class="display-4 ">Hai temen-temen selamat datang di blogku, ikuti aku untuk segala kegiatanku
            melalui website ini agar kalian tidak kehabisan informasi . dan semoga bermanfaat temen.. ada yang baru nih dengan judul 
            Cara Membuat Blog Pribadi yang Menarik, Gratis, dan Menghasilkan</p>
            <p class="lead mb-0"><a href="#" class="text-white font-weight-bold">halaman selanjutnya</a></p>
          </div>
        </div>

      <main role="main" class="container">
        <div class="row">
          <div class="col-md-8 blog-main">

            <div class="blog-post">
              <h2 class="blog-post-title">Di zaman yang serba digital saat ini, semua orang dapat berkarya secara bebas dan juga berpartisipasi dalam menyongsong kemajuan teknologi. Selain itu, kebebasan berekspresi yang dapat dituangkan melalui blog atau wordpress juga dapat menghasilkan pundi-pundi uang yang cukup menggiurkan apabila dikelola secara benar.

Bagi Anda yang saat ini sedang berimajinasi dan ingin dituangkan dalam sebuah tulisan, membuat blog merupakan salah satu solusi bagi Anda. Selain bisa mengeksplorasi imajinasi dengan tulisan, Anda juga dapat mengasah kemampuan menulis.

Salah satu platform yang dapat digunakan untuk membuat sebuah blog yaitu blogspot. Blogspot sendiri apabila dikelola secara benar juga akan mendatangkan keuntungan.

Tidak memandang yang sudah berpengalaman atau pemula, blogspot sama-sama menghasilkan pundi rupiah. Apalagi cara membuat blogspot pun cukup mudah sehingga tidak menutup kemungkinan untuk siapapun yang ingin mencoba memiliki blog pribadi.

Berikut ini adalah cara membuat blog pribadi yang menarik, gratis, dan menghasilkan yang dilansir dari Liputan6.com: <br>
</p>
<button  type="submit" class="btn btn-primary" data-toggle="modal" data-target="#modal" style="margin-bottom: 30px;">Untuk melanjutkan, klik disini</button>
<x-modal id="modal">
    @slot('header')
        warning !!
    @endslot
    Kehalaman Selanjutnya ?
    @slot('footer1')
        YA
    @endslot
    @slot('footer2')
        TIDAK
    @endslot
</x-modal>
@stop

@section('js')
    <script></script>
@stop

