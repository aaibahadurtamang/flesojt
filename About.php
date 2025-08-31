<!--header-->
<?php $this->load->view('layout/header'); ?>
<!--Main content-->

<style>
body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background: 
        linear-gradient(to bottom, rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4)),
        url('https://images.unsplash.com/photo-1501785888041-af3ef285b470') center/cover no-repeat;
    background-attachment: fixed;
    color: #fff;
}

.about-section {
    max-width: 1000px;
    margin: 60px auto;
    padding: 50px 30px;
    background: rgba(255, 255, 255, 0.15);
    backdrop-filter: blur(12px);
    -webkit-backdrop-filter: blur(12px);
    border-radius: 15px;
    box-shadow: 0 8px 24px rgba(0, 0, 0, 0.3);
    text-align: center;
    color: #fff;
}

.about-section h1 {
    font-size: 3rem;
    color: #2980b9;
    margin-bottom: 15px;
}

.about-section p {
    font-size: 1.2rem;
    line-height: 1.7;
    margin-bottom: 20px;
    color: #e6e6e6;
}

.about-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: 25px;
    margin-top: 40px;
}

.about-card {
    background: rgba(255, 255, 255, 0.85);
    color: #222;
    border-radius: 15px;
    box-shadow: 0 6px 18px rgba(0, 0, 0, 0.15);
    overflow: hidden;
    text-align: left;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    cursor: default;
}

.about-card:hover {
    transform: translateY(-8px);
    box-shadow: 0 12px 30px rgba(0, 0, 0, 0.25);
}

.about-card img {
    width: 100%;
    height: 200px;
    object-fit: cover;
    border-top-left-radius: 15px;
    border-top-right-radius: 15px;
}

.about-card .content {
    padding: 20px 18px;
}

.about-card h3 {
    color: #2980b9;
    margin-bottom: 12px;
    font-size: 1.5rem;
}
.about-card p {
    color: #444;
    font-size: -4rem;
    line-height: 1.5;
}
/* Quote Banner */
.quote-banner {
    margin-top: 60px;
    padding: 40px 30px;
    background: url('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTTy9F2nOgzN7Wm5yXY_SxUoqgCYjdbzBGttA&s') center/cover no-repeat;
    color: white;
    border-radius: 15px;
    box-shadow: 0 6px 20px rgba(0, 0, 0, 0.3);
    text-align: center;
    font-style: italic;
    font-size: 1.8rem;
    line-height: 1.4;
    user-select: none;
    backdrop-filter: brightness(0.75);
}

/* Responsive */
@media (max-width: 768px) {
    .about-section {
        padding: 40px 15px;
    }

    .about-card .content {
        padding: 15px 12px;
    }

    .about-section h1 {
        font-size: 2.4rem;
    }

    .quote-banner {
        font-size: 1.5rem;
        padding: 30px 20px;
    }
}
</style>
</head>
<body>

<section class="about-section">
    <h1>About Us</h1>
    <p>Welcome to <strong>MR.Travels</strong> — your expert guide to exploring the majestic beauty of Nepal. We specialize in creating unforgettable journeys through the Himalayas, cultural heritage sites, and hidden gems across Nepal.</p>
    <p>Founded by passionate Nepali travelers, our mission is to provide seamless, authentic, and affordable travel experiences that let you truly connect with Nepal’s nature and culture.</p>

    <div class="about-grid">
        <div class="about-card">
            <img src="https://images.unsplash.com/photo-1500530855697-b586d89ba3ee" alt="Our Story">
            <div class="content">
                <h3>Our Story</h3>
                <p>From a small local team, we have grown into a trusted travel agency, helping travelers discover Nepal’s breathtaking landscapes and rich traditions.</p>
            </div>
        </div>

        <div class="about-card">
            <img src="https://images.unsplash.com/photo-1507525428034-b723cf961d3e" alt="Destinations in Nepal">
            <div class="content">
                <h3>Destinations</h3>
                <p>Explore popular destinations like Kathmandu, Pokhara, Chitwan, Everest Base Camp, Annapurna Circuit, and more — with tailor-made itineraries for every adventurer.</p>
            </div>
        </div>

        <div class="about-card">
            <img src="https://images.unsplash.com/photo-1526778548025-fa2f459cd5c1" alt="Why Choose Us">
            <div class="content">
                <h3>Why Choose Us</h3>
                <p>With 24/7 local support, knowledgeable guides, affordable packages, and authentic cultural experiences, we make your Nepal journey smooth and memorable.</p>
            </div>
        </div>
    </div>

    <!-- Travel Quote Banner -->
    <div class="quote-banner">
        "Jobs fill your pockets, but adventures fill your soul."
    </div>
</section>

</body>
</html>
