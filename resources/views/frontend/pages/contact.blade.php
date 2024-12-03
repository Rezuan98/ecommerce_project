@extends('frontend.master.master')

@section('ftitle', 'Contact Us')

@section('content')
<div class="contact-section">
    <!-- Hero Section -->
    <div class="hero">
        <div class="container">
            <h1>Contact Us</h1>
            <p>We’d love to hear from you. Reach out to us with any inquiries or feedback.</p>
        </div>
    </div>

    <!-- Contact Information -->
    <div class="contact-info container">
        <div class="row">
            <div class="col-md-4 info-box">
                <i class="fas fa-phone"></i>
                <h4>Phone</h4>
                <p>+8801768261278</p>
            </div>
            <div class="col-md-4 info-box">
                <i class="fas fa-envelope"></i>
                <h4>Email</h4>
                <p>support@eManager.com</p>
            </div>
            <div class="col-md-4 info-box">
                <i class="fas fa-map-marker-alt"></i>
                <h4>Address</h4>
                <p>2/D,Block:J,Baridhara,Gulshan</p>
            </div>
        </div>
    </div>

    <!-- Contact Form -->
    <div class="contact-form container">
        <h2>Send Us a Message</h2>
        <form action="{{route('store.message')}}" method="POST">
            @csrf
            <div class="row">
                <div class="col-md-6 form-group">
                    <input type="text" name="name" placeholder="Your Name" required />
                </div>
                <div class="col-md-6 form-group">
                    <input type="phone" name="phone" placeholder="Your Phone" required />
                </div>
            </div>
            <div class="form-group">
                <textarea name="message" rows="5" placeholder="Your Message" required></textarea>
            </div>
            <button type="submit">Send Message</button>
        </form>
    </div>

    <!-- Google Map Section -->
    <div class="map-section">
        <h2>Find Us</h2>

        <iframe 
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3650.66127437325!2d90.4254871!3d23.7950734!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b900024c3ae3%3A0x42e8b09572c1070f!2seManager!5e0!3m2!1sen!2sbd!4v1733215637157!5m2!1sen!2sbd" height="450" 
            width="100%" 
            height="400" 
            style="border:0;" 
            allowfullscreen="" 
            loading="lazy">
        </iframe>
    </div>
</div>
@endsection
