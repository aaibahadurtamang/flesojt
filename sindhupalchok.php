<?php $this->load->view('layout/header'); ?>  
<style> 
    .sindhupalchowk-page {
        position: relative;
        background-color: #f3f6fb;
        background-image: url('<?= base_url("assests/sindhu.jpg") ?>');
        background-repeat: no-repeat;
        background-size: cover;
        background-position: center center;
        padding: 60px 20px;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        color: #f0f0f0;
        min-height: 100vh;
    }

    .sindhupalchowk-page::before {
        content: "";
        position: absolute;
        top: 0; left: 0; right: 0; bottom: 0;
        background-color: rgba(0, 0, 0, 0.45);
        z-index: 0;
    }

    .sindhu-container {
        position: relative;
        z-index: 1;
        max-width: 1100px;
        margin: 0 auto;
        background-color: rgba(255, 255, 255, 0.95);
        border-radius: 15px;
        box-shadow: 0 4px 15px rgba(0,0,0,0.1);
        overflow: hidden;
        color: #333;
    }

    .sindhu-img img {
        width: 100%;
        height: auto;
        object-fit: cover;
        display: block;
    }

    .sindhu-content {
        padding: 40px;
    }

    .sindhu-content h1 {
        color: #0d6efd;
        font-size: 2.8rem;
        margin-bottom: 20px;
        font-weight: 700;
    }

    .sindhu-content p {
        font-size: 1.2rem;
        line-height: 1.8;
        margin-bottom: 30px;
        color: #444;
    }

    .highlight-boxes {
        display: flex;
        flex-wrap: wrap;
        gap: 20px;
        margin-bottom: 40px;
    }

    .highlight {
        flex: 1 1 220px;
        background-color: #f0f4f8;
        border-left: 4px solid #0d6efd;
        padding: 20px;
        border-radius: 10px;
        display: flex;
        align-items: center;
    }

    .highlight i {
        font-size: 1.5rem;
        color: #0d6efd;
        margin-right: 10px;
    }

    .highlight span {
        font-weight: 600;
        color: #333;
    }

    .did-you-know {
        background-color: #e8f0fe;
        padding: 30px;
        border-radius: 10px;
        margin-bottom: 50px;
    }

    .did-you-know h2 {
        font-size: 1.8rem;
        color: #0d6efd;
        margin-bottom: 15px;
        font-weight: 700;
    }

    .did-you-know ul {
        padding-left: 20px;
        list-style-type: disc;
        color: #333;
        font-size: 1.1rem;
        margin: 0;
    }

    .did-you-know ul li {
        margin-bottom: 10px;
    }

    .must-visit h2 {
        font-size: 1.8rem;
        color: #0d6efd;
        margin-bottom: 30px;
        font-weight: 700;
    }

    .card-grid {
        display: flex;
        flex-wrap: wrap;
        gap: 20px;
    }

    .place-card {
        background-color: #fff;
        border-radius: 12px;
        overflow: hidden;
        box-shadow: 0 4px 8px rgba(0,0,0,0.05);
        flex: 1 1 250px;
        display: flex;
        flex-direction: column;
        transition: transform 0.3s ease;
    }

    .place-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 8px 16px rgba(0,0,0,0.1);
    }

    .place-card img {
        width: 100%;
        height: 160px;
        object-fit: cover;
        display: block;
    }

    .place-card .info {
        padding: 15px;
        flex-grow: 1;
    }

    .place-card .info h4 {
        font-size: 1.2rem;
        color: #333;
        margin-bottom: 10px;
        font-weight: 600;
    }

    .place-card .info p {
        font-size: 0.95rem;
        color: #555;
        line-height: 1.4;
    }
</style>

<main class="sindhupalchowk-page" role="main" aria-label="Sindhupalchowk district information">
    <div class="sindhu-container">
        <section class="sindhu-img" aria-label="Sindhupalchowk scenic image">
            <img src="<?= base_url('assests/sindhu.jpg'); ?>" alt="Scenic view of Sindhupalchowk" loading="lazy" />
        </section>

        <section class="sindhu-content">
            <h1>Welcome to Sindhupalchowk</h1>
            <p>
                Nestled in the hills of central Nepal, <strong>Sindhupalchowk</strong> is a beautiful district known for its natural hot springs, rich cultural heritage, and mountain landscapes. A gateway to the Himalayas, it's a must-visit for adventurers and peace seekers alike.
            </p>

            <div class="highlight-boxes" role="list" aria-label="Highlights of Sindhupalchowk">
                <div class="highlight" role="listitem"><i class="bi bi-water" aria-hidden="true"></i><span>Tatopani Hot Springs</span></div>
                <div class="highlight" role="listitem"><i class="bi bi-tree" aria-hidden="true"></i><span>Helambu Region</span></div>
                <div class="highlight" role="listitem"><i class="bi bi-mountain" aria-hidden="true"></i><span>Lantang Trek Access</span></div>
                <div class="highlight" role="listitem"><i class="bi bi-house-door" aria-hidden="true"></i><span>Traditional Tamang Villages</span></div>
            </div>

            <article class="did-you-know" aria-labelledby="didYouKnowSindhu">
                <h2 id="didYouKnowSindhu">Did You Know?</h2>
                <ul>
                    <li>Sindhupalchowk is home to the famous Tatopani Hot Springs near the Nepal-Tibet border.</li>
                    <li>The district was one of the hardest hit during the 2015 Nepal earthquake and has since seen strong recovery efforts.</li>
                    <li>The Helambu region offers a serene trekking experience with stunning views and monasteries.</li>
                    <li>Many Tamang and Sherpa communities live here, preserving unique cultures and traditions.</li>
                </ul>
            </article>

            <section class="must-visit" aria-labelledby="mustVisitSindhu">
                <h2 id="mustVisitSindhu">Must Visit Places in Sindhupalchowk</h2>
                <div class="card-grid">
                    <article class="place-card" aria-label="Tatopani Hot Springs">
                        <img src="<?= base_url('assests/tatopani.jpg'); ?>" alt="Tatopani Hot Springs" loading="lazy" />
                        <div class="info">
                            <h4>Tatopani Hot Springs</h4>
                            <p>Relax in natural hot springs surrounded by mountains, a popular spot for healing and wellness.</p>
                        </div>
                    </article>

                    <article class="place-card" aria-label="Helambu Region">
                        <img src="<?= base_url('assests/helambu.jpg'); ?>" alt="Helambu Region" loading="lazy" />
                        <div class="info">
                            <h4>Helambu Region</h4>
                            <p>Explore tranquil villages, Buddhist monasteries, and pristine trails in this offbeat trekking destination.</p>
                        </div>
                    </article>

                    <article class="place-card" aria-label="Bhotekoshi River">
                        <img src="<?= base_url('assests/bhotekoshi.jpg'); ?>" alt="Bhotekoshi River" loading="lazy" />
                        <div class="info">
                            <h4>Bhotekoshi River</h4>
                            <p>Famous for thrilling white-water rafting and bungee jumping in scenic gorges.</p>
                        </div>
                    </article>
                </div>
