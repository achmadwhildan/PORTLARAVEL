@extends('layouts.master')

@section('content')

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="assets/css/about.css">
    <section class="about">
        <div class="container-box">
            <div class="about-content">
                <article class="text">
                    <p>
                        Hello, lets me introduce myself, <br>
                        my name is <span style="color: rgb(116, 254, 106)">ACHMAD WHILDAN</span>, you could call me <spanstyle="color: rgb(116, 254, 106)">WHILDAN</span>, <br>
                        I am <span style="color: rgb(116, 254, 106)">16</span> years old, I study at <spanstyle="color: rgb(116, 254, 106)">SMK WIKRAMA BOGOR</span>, <br>
                        my major is <span style="color: rgb(116, 254, 106)">software and game development.</span>
                    </p>
                </article>
            </div>
                <div class="about-img">
                    <img src="assets/img/about.jpg" alt="">
                </div>
        </div>
    </section>

    <section class="skill">

        <h2>My Skill</h2>
            <div class="bhs">Lenguages Programming</div>
            <div class="skill-container">
                <div class="item">
                    <i class="fa-brands fa-html5 fa-2xl"></i>
                    <h4>HTML</h4>
                </div>
                <div class="item">
                    <i class="fa-brands fa-css3-alt fa-2xl"></i>
                    <h4>CSS</h4>
                </div>
                <div class="item">
                    <i class="fa-brands fa-js fa-2xl"></i>
                    <h4>JS</h4>
                </div>
                <div class="item">
                    <i class="fa-brands fa-php fa-2xl"></i>
                    <h4>PHP</h4>
                </div>
            </div>
    
            <div class="frame-work">Frameworks</div> 
                <div class="frame">
                    <div class="child">
                        <i class="fa-brands fa-bootstrap fa-2xl"></i>
                        <h4>bootstrap</h4>
                    </div>
                    <div class="child">
                        <i class="fa-brands fa-css3 fa-2xl"></i>
                        <h4>Tailwind</h4>
                    </div>
                    <div class="child">
                        <i class="fa-brands fa-laravel fa-2xl"></i>
                        <h4>Laravel</h4>
                    </div>
                    <div class="child">
                        <i class="fa-brands fa-node-js fa-2xl"></i>
                        <h4>Node Js</h4>
                    </div>
                </div>
    
            <div class="frame-work">Tools</div>
                <div class="tools">
                    <div class="child">
                        <i class="fa-brands fa-git-alt fa-2xl"></i>
                        <h4>Git</h4>
                    </div>
                    <div class="child">
                        <i class="fa-brands fa-github fa-2xl"></i>
                        <h4>Git Hub</h4>
                    </div>
                    <div class="child">
                        <i class="fa-solid fa-code fa-2xl"></i>
                        <h4>Vs Code</h4>
                    </div>
                    <div class="child">
                        <i class="fa-solid fa-table fa-2xl"></i>
                        <h4>Xampp</h4>
                    </div>
                </div>
    </section>

    <section>

        <h2>My Certificate</h2>

        <div class="sertifikat">
            <div class="certificate">
                <img src="assets/img/images.jpeg" width="70px" alt=""></a>
                <p>Belajar Dasar Pemrograman Web</p>
                <p style="margin-left: 167px">Dicoding</p>
                    <a href="https://www.dicoding.com/certificates/QLZ9RYWWMP5D">views <svg xmlns="http://www.w3.org/2000/svg" width="20" height="15" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8"/>
                    </svg></a>
            </div>
            <div class="certificate">
                <img src="assets/img/images.jpeg" width="70px" alt=""></a>
                <p>Cloud Practitioner Essentials
                    (Belajar Dasar AWS Cloud)</p>
                    <p>Dicoding</p>
                    <a href="//www.dicoding.com/certificates/GRX5OM0QYP0M">views <svg xmlns="http://www.w3.org/2000/svg" width="20" height="15" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8"/>
                    </svg></a>
            </div>
            <div class="certificate">
                <img src="assets/img/images.jpeg" width="70px" alt=""></a>
                <p>Belajar Prinsip Pemrograman SOLID</p>
                    <p style="margin-left: 147px">Dicoding</p>
                    <a href="https://www.dicoding.com/certificates/98XWLJ7K9ZM3">views <svg xmlns="http://www.w3.org/2000/svg" width="20" height="15" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8"/>
                    </svg></a>
            </div>
        </div>

    </section>

    <footer class="text-center">
        Copyright©Achmad Whildan|2024
    </footer>

@endsection