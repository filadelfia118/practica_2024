<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

    
</head>
<body>
    <div class="container ">
        <nav class="navbar navbar-expand-lg  " data-bs-theme="dark">
            <div class="container-fluid  ">
                <a class="navbar-brand" href="{{ route('guest.index') }}">
                    <img src="{{ asset('assets/images/MilavLogoWhiteSmall2.png') }}" alt="Logo" class="logo">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-between" id="navbarNavAltMarkup">
                    <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    </form>
                    <div class="navbar-nav">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                        <a class="nav-link active" href="#">About</a>
                        <a class="nav-link active" href="#">Gallery</a>
                        <a class="nav-link active" href="#">Contact us</a>
                        <a href="/login" class="btn btn-bg-light text-white px-4 py-2 me-3">
                            <i class=""></i>
                            Log In
                        </a>
                        <a href="/register" class="btn btn-bg-dark border text-white px-4 py-2">
                            <i class=""></i>
                            Register
                        </a>
                        
                    </div>
                </div>
            </div>
        </nav>
    </div>

    @yield('content')

    
    <footer class="mt-5 text-white d-flex align-items-center justify-content-center  ">
        <div class="d-flex flex-column">
          <nav class="navbar navbar-expand-lg  " data-bs-theme="dark">
            <div class="container ">
                <a class="navbar-brand" href="{{ route('guest.index') }}">
                    <img src="{{ asset('assets/images/MilavLogoWhiteSmall2.png') }}" alt="Logo" class="logo">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-between" id="navbarNavAltMarkup">
                    <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    </form>
                    <div class="navbar-nav">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                        <a class="nav-link active" href="#">About</a>
                        <a class="nav-link active" href="#">Gallery</a>
                        <a class="nav-link active" href="#">Contact us</a>
                        <a href="/login" class="btn btn-bg-light text-white px-4 py-2 me-3">
                            <i class=""></i>
                            Log In
                        </a>
                        <a href="/register" class="btn btn-bg-dark border text-white px-4 py-2">
                            <i class=""></i>
                            Register
                        </a>
                        
                    </div>
                </div>
            </div>
          </nav>
            <div class="container footer-contact-section ">
                <div class="phone">
                  <hr class="line">
                  <svg version="1.1" id="Capa_3" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                    x="0px" y="0px" viewBox="0 0 60 60" style="enable-background:new 0 0 60 60;" xml:space="preserve">
                    <g>
                      <path d="M30,26c3.86,0,7-3.141,7-7s-3.14-7-7-7s-7,3.141-7,7S26.14,26,30,26z M30,14c2.757,0,5,2.243,5,5s-2.243,5-5,5
                                         s-5-2.243-5-5S27.243,14,30,14z" />
                      <path d="M29.823,54.757L45.164,32.6c5.754-7.671,4.922-20.28-1.781-26.982C39.761,1.995,34.945,0,29.823,0
                                         s-9.938,1.995-13.56,5.617c-6.703,6.702-7.535,19.311-1.804,26.952L29.823,54.757z M17.677,7.031C20.922,3.787,25.235,2,29.823,2
                                         s8.901,1.787,12.146,5.031c6.05,6.049,6.795,17.437,1.573,24.399L29.823,51.243L16.082,31.4
                                         C10.882,24.468,11.628,13.08,17.677,7.031z" />
                      <path d="M42.117,43.007c-0.55-0.067-1.046,0.327-1.11,0.876s0.328,1.046,0.876,1.11C52.399,46.231,58,49.567,58,51.5
                                         c0,2.714-10.652,6.5-28,6.5S2,54.214,2,51.5c0-1.933,5.601-5.269,16.117-6.507c0.548-0.064,0.94-0.562,0.876-1.11
                                         c-0.065-0.549-0.561-0.945-1.11-0.876C7.354,44.247,0,47.739,0,51.5C0,55.724,10.305,60,30,60s30-4.276,30-8.5
                                         C60,47.739,52.646,44.247,42.117,43.007z" />
                    </g>
                  </svg>
                  <hr class="line right">
                  <div class="detail">
                    <span>Odorheiu Secuiesc<br>
                      II. Rákoczi Ferenc Street 84<br>
                      Harghita, Romania</span>
                  </div>
                </div>
          
                <div class="offices">
                  <hr class="line">
                  <svg version="1.1" id="Capa_4" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                    x="0px" y="0px" viewBox="0 0 60 60" style="enable-background:new 0 0 60 60;" xml:space="preserve">
                    <g>
                      <path d="M30,26c3.86,0,7-3.141,7-7s-3.14-7-7-7s-7,3.141-7,7S26.14,26,30,26z M30,14c2.757,0,5,2.243,5,5s-2.243,5-5,5
                                         s-5-2.243-5-5S27.243,14,30,14z" />
                      <path d="M29.823,54.757L45.164,32.6c5.754-7.671,4.922-20.28-1.781-26.982C39.761,1.995,34.945,0,29.823,0
                                         s-9.938,1.995-13.56,5.617c-6.703,6.702-7.535,19.311-1.804,26.952L29.823,54.757z M17.677,7.031C20.922,3.787,25.235,2,29.823,2
                                         s8.901,1.787,12.146,5.031c6.05,6.049,6.795,17.437,1.573,24.399L29.823,51.243L16.082,31.4
                                         C10.882,24.468,11.628,13.08,17.677,7.031z" />
                      <path d="M42.117,43.007c-0.55-0.067-1.046,0.327-1.11,0.876s0.328,1.046,0.876,1.11C52.399,46.231,58,49.567,58,51.5
                                         c0,2.714-10.652,6.5-28,6.5S2,54.214,2,51.5c0-1.933,5.601-5.269,16.117-6.507c0.548-0.064,0.94-0.562,0.876-1.11
                                         c-0.065-0.549-0.561-0.945-1.11-0.876C7.354,44.247,0,47.739,0,51.5C0,55.724,10.305,60,30,60s30-4.276,30-8.5
                                         C60,47.739,52.646,44.247,42.117,43.007z" />
                    </g>
                  </svg>
                  <hr class="line right">
                  <div class="detail">
                    <span>Cahul <br>
                      B.P. Hașdeu Street 2 <br>
                      Rep. Moldova</span>
                  </div>
                </div>
                <div class="mail">
                  <hr class="line">
                  <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                    x="0px" y="0px" viewBox="0 0 511.874 511.874" style="enable-background:new 0 0 511.874 511.874;"
                    xml:space="preserve">
                    <g>
                      <g>
                        <g>
                          <path d="M490.114,12.813H132.568c-12.012,0.014-21.746,9.748-21.76,21.76v98.62l-16.35-24.525
                          c-7.484-11.289-22.535-14.676-34.133-7.68l-33.638,20.224c-11.016,6.464-19.097,16.946-22.545,29.244
                          c-12.271,44.681-3.166,121.66,109.824,234.667C203.821,474.885,270.816,499.06,316.99,499.06
                          c10.69,0.049,21.339-1.34,31.659-4.13c12.293-3.448,22.775-11.518,29.252-22.519l20.198-33.673
                          c6.968-11.589,3.584-26.609-7.68-34.091l-80.546-53.692c-11.049-7.308-25.859-4.905-34.031,5.521l-23.45,30.148
                          c-2.451,3.226-6.897,4.166-10.445,2.21l-4.463-2.458c-14.686-8.004-32.964-17.971-69.879-54.886
                          c-3.994-3.994-7.612-7.731-11.008-11.307h333.517c11.982,0.009,21.713-9.676,21.76-21.658V34.573
                          C511.86,22.561,502.126,12.827,490.114,12.813z M229.318,401.362l4.335,2.381c10.897,6.093,24.614,3.266,32.213-6.639
                          l23.45-30.148c2.666-3.396,7.49-4.179,11.093-1.801l80.546,53.692c3.659,2.439,4.759,7.321,2.5,11.093l-20.198,33.673
                          c-4.218,7.233-11.071,12.553-19.123,14.848c-40.337,11.093-110.933,1.707-218.078-105.446S9.56,195.273,20.627,154.97
                          c2.293-8.051,7.61-14.903,14.839-19.123l33.673-20.207c3.773-2.254,8.652-1.155,11.093,2.5l53.717,80.546
                          c2.382,3.602,1.599,8.43-1.801,11.093l-30.157,23.458c-9.903,7.597-12.731,21.311-6.639,32.205l2.389,4.335
                          c8.533,15.65,19.14,35.123,57.805,73.779C194.212,382.213,213.677,392.828,229.318,401.362z M494.808,298.526
                          c-0.028,2.567-2.127,4.627-4.693,4.608H141.203c-11.083-12.674-20.64-26.604-28.476-41.506l-2.458-4.48
                          c-1.96-3.54-1.022-7.982,2.202-10.428l30.157-23.458c10.43-8.17,12.833-22.982,5.521-34.031l-20.275-30.43V34.573
                          c-0.014-1.249,0.476-2.451,1.359-3.334c0.883-0.883,2.085-1.373,3.334-1.359h357.547c1.249-0.014,2.451,0.476,3.334,1.359
                          c0.883,0.883,1.373,2.085,1.359,3.334V298.526z" />
                          <path d="M460.725,52.323l-142.618,108.16c-4.035,2.932-9.499,2.932-13.534,0L162.008,52.323
                          c-3.756-2.849-9.111-2.113-11.959,1.643c-2.849,3.756-2.113,9.111,1.643,11.959l142.583,108.151
                          c10.144,7.494,23.989,7.494,34.133,0L471.034,65.925c1.805-1.368,2.992-3.398,3.299-5.642c0.307-2.244-0.29-4.518-1.661-6.321
                          C469.824,50.213,464.478,49.48,460.725,52.323z" />
                          <path d="M238.517,174.793l-87.415,93.611c-3.214,3.447-3.025,8.848,0.422,12.062c3.447,3.214,8.848,3.025,12.062-0.422
                          l87.416-93.653c2.888-3.484,2.553-8.617-0.762-11.698C246.924,171.612,241.78,171.656,238.517,174.793z" />
                          <path d="M384.728,174.793c-3.214-3.447-8.614-3.637-12.062-0.422c-3.447,3.214-3.637,8.614-0.422,12.062l87.39,93.611
                          c3.214,3.447,8.614,3.637,12.062,0.422c3.447-3.214,3.637-8.614,0.422-12.062L384.728,174.793z" />
                        </g>
                      </g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                  </svg>
                  <hr class="line right">
                  <div class="detail">
                    <span>Contact Details: </span>
                    <a href="mailto:csatlos.sandor@milav.eu" target="_blank">csatlos.sandor@milav.eu</a>
                    <a href="tel:0040747191825">+40 747 191 825</a>
                  </div>
                </div>
              </div>
            <div class="d-flex align-center justify-content-center ">
                <p class="my-5">
                    Copyright 2024 <a href="/">Milav</a>
                </p>
            </div>
        </div>
        
    </footer>
</body>
</html>
