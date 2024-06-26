@extends('layouts.guest')

@section('content')
<!-- Header -->
<header id="home">
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
<section  id="about" class=" my-lg-2 ">
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
<section id="gallery" class=" my-lg-2">
    <div class="container title d-flex flex-column justify-content-between align-items-center flex-lg-row my-5">
        <h2 class="text-white text-center text-lg-start">Gallery</h2>
        <a href="#" class="btn btn-bg-light text-white px-4 py-2 me-3">
            <i class="fa-regular fa-images"></i>
            Explore All
        </a>
    </div>
</section>
<!-- End Gallery -->
<!-- Contact Them -->
<section id="contact" class=" my-0 py-0  ">
    <div class="container title d-flex flex-column justify-content-between align-items-center flex-lg-row my-5">
        <h2 class="text-white text-center text-lg-start">Contact Them</h2>
        <a href="#" class="btn btn-bg-light text-white px-4 py-2 me-3">
            <i class="fa-regular fa-images"></i>
            Explore All
        </a>
    </div>
    <div class=" container contact-info">
      <div>
        <h3 style="color: white;">Vizitați una dintre locații în Cahul, sau contactați</h3>
            <p style="color: white;">
            <span class="address">Sediul central:</span><br>
            <span class="address">Cahul
                B.P. Hașdeu Street 2
                Rep. Moldova</span><br>
            <span class="address">csatlos.sandor@milav.eu</span><br>
            <span class="phone"><i class="fas fa-phone"></i> Telefon: +40 747 191 825</span>
            </p>
      </div>
      <div class="contact-info-map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1030.4945393529008!2d28.18743321953205!3d45.900948652548735!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40b65db775628177%3A0x3eb9667f8dbcdc13!2sMILAV%20IT!5e0!3m2!1sro!2s!4v1717274391390!5m2!1sro!2s" width="750" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
    </div>

    <div class=" container form">
        <div>
            <form action="{{ route('contact.store') }}" method="post" class="contact-form">
                @csrf
                <h3 style="color: white;">Scrieți un mesaj</h3>
                <label for="name">Numele dumneavoastră</label>
                <input type="text" id="name" name="name" required>
          
                <label for="email">Adresa de e-mail</label>
                <input type="email" id="email" name="email" required>
          
                <label for="subject">Subiect</label>
                <input type="text" id="subject" name="subject" required>
          
                <label for="message">Mesajul dumneavoastră</label>
                <textarea id="message" name="message" rows="5" required></textarea>
                <button type="submit" class="btn btn-bg-light text-white px-4 py-2 me-3">
                    <i class=""></i> Submit
                </button>
                <a  href="/contacts" class="btn btn-bg-light text-white px-4 py-2 me-3">
                    <i class=""></i> See the messages
                </a>
            </form>
        </div>
        <div class="contact-form-image">
            <img src="{{ asset('assets/images/contact/contact1.png') }}" alt="Imagine de contact">
        </div>
        
    </div>
    

    
  </section>
<!-- End Contact Us -->
@endsection