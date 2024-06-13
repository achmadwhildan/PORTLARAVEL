<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/about.css">
    <link rel="stylesheet" href="phone.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <script src="https://unpkg.com/scrollreveal"></script>
    
</head>
<body>


    <header>
        <main>
            <div class="about">
                <aside>
                    <div class="container">
                        <div class="image">
                            <img src="assets/img/about.jpg" alt="image" width="300px">
                        </div>
                    </div>
                </aside>
                <article>
                    <div class="artikel">
                        <h1><span style="color:  rgb(116, 254, 106);">ACHMAD WHILDAN</span></h1>
                        <p>Saya whildan siswa dari SMK WIKRAMA BOGOR, Hobi saya bermain futsal,<br> 
                        Umur saya 16 tahun, jalan lembah neundeut Desa Sukakarya kecamatan <br>
                        megamendung kabupaten bogor jurusan saya di SMK WIKRAMA adalah PPLG <br>
                        atau Pengembangan perangkat lunak dan gim</p>
                    </div>
                    <div class="button">
                        <a href="http://127.0.0.1:8000/contact">Contact me</a>
                    </div>
                </article>
            </div>
        </main>
        <section>
            <div class="skill">
                <h2>SKILL YANG DI KUASAI</h2>
                <div class="container">
                    <div class="im">
                        <img src="assets/img/js.png" alt="" width="300px">
                        <img src="assets/img/html_css-removebg-preview.png" alt="image" width="300px">
                        <img src="assets/img/php-removebg-preview.png" alt="" width="300px">
                    </div>
                </div>
                <div class="skill-bar">
                    <h2>PROGRES</h2>

                    <li><h3>html</h3>
                        <span class="bar"><span class="html"></span></span>
                    </li>
                    <li><h3>css</h3>
                        <span class="bar"><span class="css"></span></span>
                    </li>
                    <li><h3>php</h3>
                        <span class="bar"><span class="php"></span></span>
                    </li>
                    <li><h3>js</h3>
                        <span class="bar"><span class="js"></span></span>
                    </li>
                </div>
            </div>

            <div class="alamat">
                <div class="halaman">
                    <h1>sertifikat</h1>
                    <div class="sertifikat">
                        <div class="sertificat"><img src="assets/img/sertifikat.png" alt=""></div>
                    </div>
                </div>

                <h1>MAPS</h1>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d564.6132358169062!2d106.90718216107557!3d-6.688170053362806!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69c95bfabe797f%3A0xb254ff7855c4a43d!2sPasirkalong!5e0!3m2!1sen!2sid!4v1697702288340!5m2!1sen!2sid" width="700px" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </section>
        <footer>
            <span style="color: white;">Copyright©2023 Achmad Whildan</span>
        </footer>
    </header>
    <script>
        ScrollReveal({ 
            reset: true, 
            distance: '60px',
            duration: 2500,
            delay: 400
        }); 
        ScrollReveal().reveal('.about', { delay: 500, origin: 'left' });
        ScrollReveal().reveal('.skill', { delay: 600, origin: 'right' });
        ScrollReveal().reveal('.alamat', { delay: 700, origin: 'left' });

    </script>
</body>
</html>