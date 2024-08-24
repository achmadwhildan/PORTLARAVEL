@extends('layouts.master')

@section('content')

<link rel="stylesheet" href="assets/css/contact.css">

<section class="contact" id="contact">

    <div class="container-contact">
    <div class="contact-container">
        <h1>Contact Me</h1>
        <form action="#" class="contact-form">
            <input type="text" placeholder="Subject" name="subject" required>
            <input type="text" placeholder="Name" name="name" required>
            <input type="email" placeholder="Email" name="email" required>
            <textarea placeholder="Message" name="message" required></textarea>
            <button type="submit">SEND</button>
        </form>
    </div>
        <div class="map">
            <iframe 
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d198484.97261319768!2d106.7744482698044!3d-6.598603523598384!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69c43d92b95385%3A0x8bcd9e726d4b1e23!2sBogor%2C%20West%20Java%2C%20Indonesia!5e0!3m2!1sen!2sid!4v1663206391042!5m2!1sen!2sid" 
                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
    </div>

    <footer class="text-center">
        Copyright©Achmad Whildan|2024
    </footer>


</section>

@endsection