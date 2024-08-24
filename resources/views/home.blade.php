@extends('layouts.master')

@section('content')

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/home.css">

    <section class="home">
        
        <div class="container-hm">
            <div class="home-content">
            
                <h2>
                    Hello👋 <br>
                    My name is <span style="color: rgb(116, 254, 106);">"ACHMAD WHILDAN"</span>
                </h2>
    
                <div class="text-animation">
                    <span class="text first-text">I'm a </span>
                    <span class="text sec-text">Front End</span>
                </div>
                <div class="icon-item">
                    <a href="https://www.linkedin.com/in/achmad-whildan-07173130a/"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-linkedin" viewBox="0 0 16 16">
                        <path d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854zm4.943 12.248V6.169H2.542v7.225zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248S2.4 3.226 2.4 3.934c0 .694.521 1.248 1.327 1.248zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016l.016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225z"/>
                        </svg></a>
                    <a href="https://api.whatsapp.com/send/?phone=%2B6281281162076&text&type=phone_number&app_absent=0"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16">
                        <path d="M13.601 2.326A7.85 7.85 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.9 7.9 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.9 7.9 0 0 0 13.6 2.326zM7.994 14.521a6.6 6.6 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.56 6.56 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592m3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.73.73 0 0 0-.529.247c-.182.198-.691.677-.691 1.654s.71 1.916.81 2.049c.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232"/>
                        </svg></a>
                    <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16">
                        <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1zm13 2.383-4.708 2.825L15 11.105zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741M1 11.105l4.708-2.897L1 5.383z"/>
                        </svg></a>
                </div>
            </div>

            <div class="home-image">
                <img src="assets/img/kartun.jpg" alt="kartun">
            </div>
        </div>
    </section>

    <section class="project">
        <h1 class="heading">MY <span style="color: rgb(116, 254, 106)">PROJECT</span></h1>
            

                <div class="container text-center">
                    <div class="row">
                        <div class="col">
                            <img src="assets/img/mesinkasir.png" width="320px" alt="">
                            <i class="fa-brands fa-html5 fa-lg"></i>
                            <i class="fa-brands fa-css3-alt fa-lg"></i>
                            <i class="fa-brands fa-php fa-lg"></i>
                            <p>Mesin Kasir</p>
                            <h4><a href="http://achmadwhildan.byethost31.com/mesin%20kasir/">views all <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8"/>
                                </svg></a></h4>
                        </div>
                        <div class="col">
                            <img src="assets/img/datasiswa.png" width="320px" height="180px~" alt="">
                            <i class="fa-brands fa-html5 fa-lg"></i>
                            <i class="fa-brands fa-css3-alt fa-lg"></i>
                            <i class="fa-brands fa-php fa-lg"></i>
                            <p>Data Siswa</p>
                            <h4><a href="http://achmadwhildan.byethost31.com/Data%20siswa/">views all <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8"/>
                                </svg></a></h4>
                        </div>
                        <div class="col">
                            <img src="assets/img/bahanbakar.png" width="320px" height="180px" alt="">
                            <i class="fa-brands fa-html5 fa-lg"></i>
                            <i class="fa-brands fa-css3-alt fa-lg"></i>
                            <i class="fa-brands fa-php fa-lg"></i>
                            <p>Bahan Bakar</p>
                            <h4><a href="http://achmadwhildan.byethost31.com/shell/">views all <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8"/>
                                </svg></a></h4>
                        </div>
                        <div class="col">
                            <img src="assets/img/hitungluas.png" width="320px" height="195px" alt="">
                            <i class="fa-brands fa-html5 fa-lg"></i>
                            <i class="fa-brands fa-css3-alt fa-lg"></i>
                            <i class="fa-brands fa-php fa-lg"></i>
                            <p>Hitung luas persegi panjang dan segitiga</p>
                            <h4><a href="http://achmadwhildan.byethost31.com/projekATS/">views all <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8"/>
                                </svg></a></h4>
                        </div>
                        <div class="col">
                            <img src="assets/img/eccomer.png" width="320px" height="195px" alt="">
                            <i class="fa-brands fa-html5 fa-lg"></i>
                            <i class="fa-brands fa-css3-alt fa-lg"></i>
                            <p>Web Shop</p>
                            <h4><a href="https://achmadwhildan.github.io/web-shop/">views all <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8"/>
                                </svg></a></h4>
                        </div>
                        <div class="col">
                            <img src="assets/img/rentalmotor.png" width="320px" height="195px" alt="">
                            <i class="fa-brands fa-html5 fa-lg"></i>
                            <i class="fa-brands fa-css3-alt fa-lg"></i>
                            <i class="fa-brands fa-php fa-lg"></i>
                            <p>Rental Motor</p>
                            <h4><a href="http://achmadwhildan.byethost31.com/rental%20motor/">views all <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8"/>
                                </svg></a></h4>
                        </div>
                    </div>
                </div>
            
                <footer class="text-center">
                    Copyright©Achmad Whildan|2024
                </footer>

    </section> 

@endsection