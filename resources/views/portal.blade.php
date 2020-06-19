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
    <!-- <section class="main">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto">
            <h2>Halaman Home</h2>
            <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          </div>
        </div>
      </div>
    </section> -->
    <section class="main">
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="card-deck">
                    <div class="card" style="width: 18rem;">
                        <div class="card-body text-center">
                        <h2 class="card-title">Profil</h2>
                        <img class="img-fluid mb-3" src="images/pic6.png" alt="Card image cap" style="height: 150px; widht: 150px;">
                        <p class="card-text">Ketahui Siapa Dibalik JOS TECH</p> <a href="#" class="btn btn-primary"><i class="fa fa-sign-in"></i> Kunjungi Halaman</a>
                        </div>
                    </div>
                    <div class="card" style="width: 18rem;">
                        <div class="card-body text-center">
                        <h2 class="card-title">Demo</h2>
                        <img class="img-fluid mb-3" src="images/pic6.png" alt="Card image cap" style="height: 150px; widht: 150px;">
                        <p class="card-text">Demo Aplikasi Yang Kami Kerjakan</p> <a href="#" class="btn btn-primary"><i class="fa fa-sign-in"></i> Kunjungi Halaman</a>
                        </div>
                    </div>
                    <div class="card" style="width: 18rem;">
                        <div class="card-body text-center">
                        <h2 class="card-title">Youtube</h2>
                        <img class="img-fluid mb-3" src="images/pic6.png" alt="Card image cap" style="height: 150px; widht: 150px;">
                        <p class="card-text">Kunjungi Channel YT Kami</p> <a href="#" class="btn btn-primary"><i class="fa fa-sign-in"></i> Kunjungi Halaman</a>
                        </div>
                    </div>
                </div>
                <div class="card-deck">
                    <div class="card" style="width: 18rem;">
                        <div class="card-body text-center">
                        <h2 class="card-title">Facebook Page</h2>
                        <img class="img-fluid mb-3" src="images/pic6.png" alt="Card image cap" style="height: 150px; widht: 150px;">
                        <p class="card-text">Kunjungi Facebook Page Kami</p> <a href="#" class="btn btn-primary"><i class="fa fa-sign-in"></i> Kunjungi Halaman</a>
                        </div>
                    </div>
                    <div class="card" style="width: 18rem;">
                        <div class="card-body text-center">
                        <h2 class="card-title">Instagram</h2>
                        <img class="img-fluid mb-3" src="images/pic6.png" alt="Card image cap" style="height: 150px; widht: 150px;">
                        <p class="card-text">Kunjungi Instagram Kami</p> <a href="#" class="btn btn-primary"><i class="fa fa-sign-in"></i> Kunjungi Halaman</a>
                        </div>
                    </div>
                    <div class="card" style="width: 18rem;">
                        <div class="card-body text-center">
                        <h2 class="card-title">Lowongan</h2>
                        <img class="img-fluid mb-3" src="images/pic6.png" alt="Card image cap" style="height: 150px; widht: 150px;">
                        <p class="card-text">Mari Bergabung Bersama Kami</p> <a href="#" class="btn btn-primary"><i class="fa fa-sign-in"></i> Kunjungi Halaman</a>
                        </div>
                    </div>
                </div>
        </div>
        <!-- <div class="container-fluid">
            <div class="row justify-content-center text-center" style="margin-top: 3%;">
                <div class="card float-left col-md-3 mr-3" style="width: 20%;">
                    <div class="card-body">
                        <h2 class="card-title">Profil</h2>
                        <img class="img-fluid mb-3" src="images/pic6.png" alt="Card image cap" style="height: 150px; widht: 150px;">
                        <p class="card-text">Ketahui Siapa Dibalik JOS TECH</p> <a href="#" class="btn btn-primary"><i class="fa fa-sign-in"></i> Kunjungi Halaman</a>
                    </div>
                </div>
                <div class="card float-left col-md-3 mr-3" style="width: 20%;">
                    <div class="card-body">
                        <h2 class="card-title">Demo</h2>
                        <img class="img-fluid mb-3" src="images/pic6.png" alt="Card image cap" style="height: 150px; widht: 150px;">
                        <p class="card-text">Demo Aplikasi Yang Kami Kerjakan</p> <a href="#" class="btn btn-primary"><i class="fa fa-sign-in"></i> Kunjungi Halaman</a>
                    </div>
                </div>
                <div class="card float-left col-md-3 mr-3" style="width: 20%;">
                    <div class="card-body">
                        <h2 class="card-title">Youtube</h2>
                        <img class="img-fluid mb-3" src="images/pic6.png" alt="Card image cap" style="height: 150px; widht: 150px;">
                        <p class="card-text">Kunjungi Channel YT Kami</p> <a href="#" class="btn btn-primary"><i class="fa fa-sign-in"></i> Kunjungi Halaman</a>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center mt-3 text-center">
                <div class="card float-left col-md-3 mr-3" style="width: 20%;">
                    <div class="card-body">
                        <h2 class="card-title">Facebook Page</h2>
                        <img class="img-fluid mb-3" src="images/pic6.png" alt="Card image cap" style="height: 150px; widht: 150px;">
                        <p class="card-text">Kunjungi Facebook Page Kami</p> <a href="#" class="btn btn-primary"><i class="fa fa-sign-in"></i> Kunjungi Halaman</a>
                    </div>
                </div>
                <div class="card float-left col-md-3 mr-3" style="width: 20%;">
                    <div class="card-body">
                        <h2 class="card-title">Instagram</h2>
                        <img class="img-fluid mb-3" src="images/pic6.png" alt="Card image cap" style="height: 150px; widht: 150px;">
                        <p class="card-text">Kunjungi Instagram Kami</p> <a href="#" class="btn btn-primary"><i class="fa fa-sign-in"></i> Kunjungi Halaman</a>
                    </div>
                </div>
                <div class="card float-left col-md-3 mr-3" style="width: 20%;">
                    <div class="card-body">
                        <h2 class="card-title">Lowongan</h2>
                        <img class="img-fluid mb-3" src="images/pic6.png" alt="Card image cap" style="height: 150px; widht: 150px;">
                        <p class="card-text">Mari Bergabung Bersama Kami</p> <a href="#" class="btn btn-primary"><i class="fa fa-sign-in"></i> Kunjungi Halaman</a>
                    </div>
                </div>
            </div>
        </div> -->
     </section>
    <!-- END : Main -->
@endsection