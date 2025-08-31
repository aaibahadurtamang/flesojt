<!--header-->
<?php $this->load->view('layout/header'); ?>
<!--Main content-->

<style>
body {
    margin: 0;
    font-family: Arial, sans-serif;
    background: 
        linear-gradient(to bottom, rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4)), 
        url('https://images.unsplash.com/photo-1501785888041-af3ef285b470') center/cover no-repeat;
    background-attachment: fixed;
    color: #fff;
}

.contact-section {
    max-width: 900px;
    margin: auto;
    padding: 40px 20px;
    background: rgba(255, 255, 255, 0.15);
    backdrop-filter: blur(12px);
    -webkit-backdrop-filter: blur(12px);
    border-radius: 15px;
    box-shadow: 0 8px 24px rgba(0, 0, 0, 0.3);
    text-align: center;
}

.contact-section h2 {
    font-size: 28px;
    color: #fff;
    margin-bottom: 10px;
}

.contact-section p {
    color: #eee;
    margin-bottom: 30px;
}

.contact-info {
    display: inline-block;
    background: rgba(255, 255, 255, 0.8);
    color: #222;
    padding: 25px;
    border-radius: 10px;
    box-shadow: 0 4px 16px rgba(0, 0, 0, 0.2);
    text-align: center;
    margin-bottom: 30px;
    backdrop-filter: blur(5px);
}

.contact-info h3 {
    margin-bottom: 15px;
    color: #2980b9;
}

.contact-info ul {
    list-style: none;
    padding: 0;
    margin: 0;
}

.contact-info ul li {
    margin-bottom: 10px;
    color: #333;
}

.social-links {
    margin-top: 15px;
}

.social-links a img {
    width: 30px;
    margin: 0 5px;
    transition: transform 0.2s;
}

.social-links a img:hover {
    transform: scale(1.1);
}

.map-container {
    display: flex;
    justify-content: center;
    margin-top: 20px;
}

.map-container iframe {
    width: 80%;
    max-width: 800px;
    height: 300px;
    border: 2px solid rgba(255, 255, 255, 0.4);
    border-radius: 10px;
    box-shadow: 0 4px 16px rgba(0, 0, 0, 0.3);
}

/* Responsive design */
@media (max-width: 600px) {
    .contact-info {
        padding: 15px;
    }

    .map-container iframe {
        width: 100%;
        height: 250px;
    }
}
</style>
</head>
<body>

<section class="contact-section">
    <h2>Contact Us</h2>
    <p>We’d love to hear from you! Reach out for bookings, inquiries, or travel advice.</p>

    <!-- Contact Info -->
    <div class="contact-info">
        <h3>📍 Our Office</h3>
        <ul>
            <li><strong>Address:</strong> Kapan, Kathmandu</li>
            <li><strong>Phone:</strong> +9779813882515 (WhatsApp)</li>
            <li><strong>Email:</strong> aayush20620402@gmail.com</li>
            <li><strong>Hours:</strong> Sun–Fri: 9:00 AM – 6:00 PM</li>
        </ul>
        <div class="social-links">
            <a href="#"><img src="https://cdn-icons-png.flaticon.com/512/733/733547.png" alt="Facebook"></a>
            <a href="#"><img src="https://cdn-icons-png.flaticon.com/512/733/733558.png" alt="Instagram"></a>
            <a href="#"><img src="https://cdn-icons-png.flaticon.com/512/733/733579.png" alt="YouTube"></a>
        </div>
    </div>

    <!-- Google Map -->
    <div class="map-container">
        <iframe 
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4345.49677039076!2d85.3534393761143!3d27.730302824477334!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb1be00b655a2f%3A0xcafbefcae085d04e!2sBal%20Uddhar%20Secondary%20School!5e1!3m2!1sen!2snp!4v1755145333432!5m2!1sen!2snp" 
            allowfullscreen="" 
            loading="lazy">
        </iframe>
    </div>
</section>

</body>
