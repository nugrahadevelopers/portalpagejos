@extends('template')
@section('title', 'Portal')
 
@section('intro-header')
  <!-- Header -->
    <header class="intro-header text-white" style="background: url('{{ asset('/images/header-bg.jpg') }}') no-repeat bottom center;">
        <div class="container text-center">
        <h1>JOS TECH</h1>
        <p class="lead">Mari Melek Digital Bersama Kami</p>
        </div>
    </header>
  <!-- END : Header -->
@endsection
 
@section('main')
    <!-- Main -->
    <section class="main">
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="card-deck">
                    <div class="card" style="width: 18rem;">
                        <div class="card-body text-center">
                        <h2 class="card-title">Profil</h2>
                        <img class="img-fluid mb-3" src="images/pic6.png" alt="Card image cap" style="height: 150px; widht: 150px;">
                        <p class="card-text">Ketahui Siapa Dibalik JOS TECH</p> <a href="{{ url('/profil') }}" class="btn btn-primary"><i class="fa fa-sign-in"></i> Kunjungi Halaman</a>
                        </div>
                    </div>
                    <div class="card" style="width: 18rem;">
                        <div class="card-body text-center">
                        <h2 class="card-title">Demo</h2>
                        <img class="img-fluid mb-3" src="images/pic6.png" alt="Card image cap" style="height: 150px; widht: 150px;">
                        <p class="card-text">Demo Aplikasi Yang Kami Kerjakan</p> <a href="{{ url('/project') }}" class="btn btn-primary"><i class="fa fa-sign-in"></i> Kunjungi Halaman</a>
                        </div>
                    </div>
                    <div class="card" style="width: 18rem;">
                        <div class="card-body text-center">
                        <h2 class="card-title">Youtube</h2>
                        <img class="img-fluid mb-3" src="images/pic6.png" alt="Card image cap" style="height: 150px; widht: 150px;">
                        <p class="card-text">Kunjungi Channel YT Kami</p> <a href="{{ url('/youtube') }}" class="btn btn-primary"><i class="fa fa-sign-in"></i> Kunjungi Halaman</a>
                        </div>
                    </div>
                </div>
                <div class="card-deck">
                    <div class="card" style="width: 18rem;">
                        <div class="card-body text-center">
                        <h2 class="card-title">Facebook Page</h2>
                        <img class="img-fluid mb-3" src="images/pic6.png" alt="Card image cap" style="height: 150px; widht: 150px;">
                        <p class="card-text">Kunjungi Facebook Page Kami</p> <a href="{{ url('/facebook') }}" class="btn btn-primary"><i class="fa fa-sign-in"></i> Kunjungi Halaman</a>
                        </div>
                    </div>
                    <div class="card" style="width: 18rem;">
                        <div class="card-body text-center">
                        <h2 class="card-title">Instagram</h2>
                        <img class="img-fluid mb-3" src="images/pic6.png" alt="Card image cap" style="height: 150px; widht: 150px;">
                        <p class="card-text">Kunjungi Instagram Kami</p> <a href="{{ url('/instagram') }}" class="btn btn-primary"><i class="fa fa-sign-in"></i> Kunjungi Halaman</a>
                        </div>
                    </div>
                    <div class="card" style="width: 18rem;">
                        <div class="card-body text-center">
                        <h2 class="card-title">Lowongan</h2>
                        <img class="img-fluid mb-3" src="images/pic6.png" alt="Card image cap" style="height: 150px; widht: 150px;">
                        <p class="card-text">Mari Bergabung Bersama Kami</p> <a href="{{ url('/lowongan') }}" class="btn btn-primary"><i class="fa fa-sign-in"></i> Kunjungi Halaman</a>
                        </div>
                    </div>
                </div>
        </div>
     </section>
    <!-- END : Main -->
@endsection