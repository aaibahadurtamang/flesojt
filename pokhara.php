<?php $this->load->view('layout/header'); ?>

<style>
    .pokhara-page {
        position: relative;
        background-color: #f3f6fb;
        background-image: url('<?= base_url("assests/pokhara.png") ?>'); /* ✅ Set your desired background image here */
        background-repeat: no-repeat;
        background-size: cover;
        background-position: center center;
        padding: 60px 20px;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        color: #f0f0f0;
        min-height: 100vh;
    }

    .pokhara-page::before {
        content: "";
        position: absolute;
        top: 0; left: 0; right: 0; bottom: 0;
        background-color: rgba(0, 0, 0, 0.45);
        z-index: 0;
    }

    .pokhara-container {
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

    .pokhara-img img {
        width: 100%;
        height: auto;
        object-fit: cover;
        display: block;
    }

    .pokhara-content {
        padding: 40px;
    }

    .pokhara-content h1 {
        color: #0d6efd;
        font-size: 2.8rem;
        margin-bottom: 20px;
        font-weight: 700;
    }

    .pokhara-content p {
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

<main class="pokhara-page" role="main" aria-label="Pokhara city information">
    <div class="pokhara-container">
        <section class="pokhara-img" aria-label="Pokhara city image">
            <img src="<?= base_url('assests/pokhara.png'); ?>" alt="Scenic view of Pokhara" loading="lazy" />
        </section>

        <section class="pokhara-content">
            <h1>Welcome to Pokhara</h1>
            <p>
                Known as the adventure capital of Nepal, <strong>Pokhara</strong> is a mesmerizing city that blends breathtaking natural beauty with spiritual serenity. From the shimmering waters of Phewa Lake to the towering peaks of the Annapurna range, every corner of Pokhara invites awe and exploration.
            </p>

            <div class="highlight-boxes" role="list" aria-label="Highlights of Pokhara">
                <div class="highlight" role="listitem"><i class="bi bi-geo-alt-fill" aria-hidden="true"></i><span>Phewa Lake</span></div>
                <div class="highlight" role="listitem"><i class="bi bi-cloud-sun-fill" aria-hidden="true"></i><span>Panoramic Mountain Views</span></div>
                <div class="highlight" role="listitem"><i class="bi bi-airplane-engines" aria-hidden="true"></i><span>Paragliding Adventures</span></div>
                <div class="highlight" role="listitem"><i class="bi bi-bicycle" aria-hidden="true"></i><span>Peaceful Cycling Routes</span></div>
            </div>

            <article class="did-you-know" aria-labelledby="didYouKnowPokhara">
                <h2 id="didYouKnowPokhara">Did You Know?</h2>
                <ul>
                    <li>Pokhara is home to one of the world’s top 5 paragliding spots.</li>
                    <li>The Annapurna mountain range is visible right from the city on a clear day.</li>
                    <li>The International Mountain Museum is located in Pokhara.</li>
                    <li>You can enjoy sunrise views from the World Peace Pagoda or Sarangkot.</li>
                </ul>
            </article>

            <section class="must-visit" aria-labelledby="mustVisitPokhara">
                <h2 id="mustVisitPokhara">Must Visit Places in Pokhara</h2>
                <div class="card-grid">
                    <article class="place-card" aria-label="Phewa Lake">
                        <img src="<?= base_url('assests/phewa.jpg'); ?>" alt="Phewa Lake" loading="lazy" />
                        <div class="info">
                            <h4>Phewa Lake</h4>
                            <p>Enjoy serene boat rides and the reflection of Machhapuchhre on still waters.</p>
                        </div>
                    </article>

                    <article class="place-card" aria-label="Sarangkot">
                        <img src="<?= base_url('assests/sarangkot.jpg'); ?>" alt="Sarangkot viewpoint" loading="lazy" />
                        <div class="info">
                            <h4>Sarangkot</h4>
                            <p>Catch breathtaking sunrises with a panoramic view of the Annapurna range.</p>
                        </div>
                    </article>

                    <article class="place-card" aria-label="Gupteshwor Cave">
                        <img src="<?= base_url('assests/caves.jpg'); ?>" alt="Gupteshwor Cave" loading="lazy" />
                        <div class="info">
                            <h4>Gupteshwor Cave</h4>
                            <p>Explore mysterious limestone formations and sacred temples inside the cave.</p>
                        </div>
                    </article>
                </div>
            </section>
        </section>
    </div>
</main>
``
