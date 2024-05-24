@extends('layouts.guest')

@section('content')
<!-- Header -->
<header>
    <div class="container-fluid d-flex align-items-center justify-content-center  bg-site-image">
        <div class=" text-center col-lg-6">
            <h1 class=" text-white mb-5 header-title">
                HELLO, YOU ARE IN THE RIGHT PLACE <br>
               
            </h1>
            <p class="text-light mb-5  header-description">
                If you expect your software to be worked with hand in hand with your best idea
            </p>
            <div class="d-flex justify-content-center">
                <a href="/login" class="btn btn-bg-light btn-lg text-white px-4 py-2 me-3">
                    <i class=""></i>
                    Log In
                </a>
                <a href="/register" class="btn btn-bg-dark border btn-lg  text-white px-4 py-2">
                    <i class=""></i>
                    Register
                </a>
            </div>
        </div>
    </div>
</header>
<!-- End Header -->
<!-- About -->
<section class=" my-lg-2">
    <div class="container title d-flex flex-column justify-content-between align-items-center flex-lg-row my-5 mb-0">
        <h2 class="text-white">About Them
        </h2>
        <a href="#" class="btn btn-bg-light text-white px-4 py-2 me-3">
            <i class="fa-solid fa-book-open"></i>
            Explore All
        </a>
    </div>
    
    <div class=" container d-flex  justify-content-between align-items-center flex-lg-column my-5">
        <div class="  d-flex  justify-content-between align-items-center flex-lg-row my-5">
            <div class="image-container col-lg-6">
                <img src="{{ asset('assets/images/aboutUs/about.jpg') }}" alt="About Us Image" class="img-fluid">
            </div>
            <div class="content-info">
                <p class="text-white">MILAV este o companie de dezvoltare software cu sediul în Moldova (Cahul), România. Ea lucrează în principal cu clienți străini și îi ajută să dezvolte soluții software care să le transforme ideile într-un produs digital gata.
    
                    Unele dintre produsele create pentru clienții săi includ site-uri web corporative, magazine online, portaluri uriașe, aplicații web și pentru întreprinderi, aplicații mobile, dezvoltare full-stack și componente web reutilizabile.
                    
                    MILAV creează produse premiate care transformă afacerile clienților săi. Și este bucuroasă să anunțe că, datorită creșterii continue, are sloturi deschise pentru dezvoltatorii React/React Native medii și seniori.
                </p>
                <a href="#" class="btn btn-bg-light text-white px-4 py-2 me-3">More info ---></a>
            </div>
           
        </div>
      
        <div class="icon-container d-flex mt-5 ">
            <div class="icon-item me-4 mb-4 ">
                <img src="{{ asset('assets/images/aboutUs/1.svg') }}" alt="Icon 1" class="img-fluid">
            </div>
            <div class="icon-item me-4  mb-4">
                <img src="{{ asset('assets/images/aboutUs/2.svg') }}" alt="Icon 2" class="img-fluid">
            </div>
            <div class="icon-item me-4  mb-4">
                <img src="{{ asset('assets/images/aboutUs/3.svg') }}" alt="Icon 3" class="img-fluid">
            </div>
            <div class="icon-item  me-4 mb-4">
                <img src="{{ asset('assets/images/aboutUs/4.svg') }}" alt="Icon 4" class="img-fluid">
            </div>
        </div>
    </div>
   
</section>

<!-- End About Them -->
<!-- Gallery -->
<section class="collections my-5 py-5">
    <div class="container title d-flex flex-column justify-content-between align-items-center flex-lg-row my-5">
        <h2 class="text-white text-center text-lg-start">Gallery</h2>
        <a href="#" class="btn btn-bg-light text-white px-4 py-2 me-3">
            <i class="fa-regular fa-images"></i>
            Explore All
        </a>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="card bg-card radius">
                    <div class="card-body">
                        <div class="d-flex flex-wrap">
                            <img src="{{ asset('assets/images/gallery/im1.png') }}" class="w-50 p-2 radius" alt="Metaverse">
                            <img src="{{ asset('assets/images/gallery/im1.png') }}" class="w-50 p-2 radius" alt="Metaverse">
                            <img src="{{ asset('assets/images/gallery/im1.png') }}" class="w-50 p-2 radius" alt="Metaverse">
                            <img src="{{ asset('assets/images/gallery/im1.png') }}" class="w-50 p-2 radius" alt="Metaverse">
                        </div>
                        <div class="d-flex justify-content-between mt-3">
                            <div class="d-flex author flex-row align-items-center">
                                <div class="d-flex flex-column justify-content-center">
                                    <h5 class="text-white mb-0">Metaverse</h5>
                                    <p class="text-secondary mb-0">Created by <span class="text-white">John Doe</span></p>
                                </div>
                            </div>
                           
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card bg-card radius">
                    <div class="card-body">
                        <div class="d-flex flex-wrap">
                            <img src="{{ asset('assets/images/gallery/im1.png') }}" class="w-50 p-2 radius" alt="Metaverse">
                            <img src="{{ asset('assets/images/gallery/im1.png') }}" class="w-50 p-2 radius" alt="Metaverse">
                            <img src="{{ asset('assets/images/gallery/im1.png') }}" class="w-50 p-2 radius" alt="Metaverse">
                            <img src="{{ asset('assets/images/gallery/im1.png') }}" class="w-50 p-2 radius" alt="Metaverse">
                        </div>
                        <div class="d-flex justify-content-between mt-3">
                            <div class="d-flex author flex-row align-items-center">
                                <div class="d-flex flex-column justify-content-center">
                                    <h5 class="text-white mb-0">Metaverse</h5>
                                    <p class="text-secondary mb-0">Created by <span class="text-white">John Doe</span></p>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card bg-card radius">
                    <div class="card-body">
                        <div class="d-flex flex-wrap">
                            <img src="{{ asset('assets/images/gallery/im1.png') }}" class="w-50 p-2 radius" alt="Metaverse">
                            <img src="{{ asset('assets/images/gallery/im1.png') }}" class="w-50 p-2 radius" alt="Metaverse">
                            <img src="{{ asset('assets/images/gallery/im1.png') }}" class="w-50 p-2 radius" alt="Metaverse">
                            <img src="{{ asset('assets/images/gallery/im1.png') }}" class="w-50 p-2 radius" alt="Metaverse">
                        </div>
                        <div class="d-flex justify-content-between mt-3">
                            <div class="d-flex author flex-row align-items-center">
                               
                                <div class="d-flex flex-column justify-content-center">
                                    <h5 class="text-white mb-0">Metaverse</h5>
                                    <p class="text-secondary mb-0">Created by <span class="text-white">John Doe</span></p>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Gallery -->
@endsection