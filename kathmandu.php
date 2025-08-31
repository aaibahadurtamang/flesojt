<?php $this->load->view('layout/header'); ?>

<style>
    .kathmandu-page {
        position: relative;
        background-color: #f3f6fb;
        background-image: url('<?= base_url("assests/kktm.jpg") ?>');
        background-repeat: no-repeat;
        background-size: cover;
        background-position: center center;
        padding: 60px 20px;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        color: #f0f0f0;
        min-height: 100vh;
    }

    .kathmandu-page::before {
        content: "";
        position: absolute;
        top: 0; left: 0; right: 0; bottom: 0;
        background-color: rgba(0, 0, 0, 0.45);
        z-index: 0;
    }

    .kathmandu-container {
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

    .kathmandu-img img {
        width: 100%;
        height: auto;
        object-fit: cover;
        display: block;
    }

    .kathmandu-content {
        padding: 40px;
    }

    .kathmandu-content h1 {
        color: #0d6efd;
        font-size: 2.8rem;
        margin-bottom: 20px;
        font-weight: 700;
    }

    .kathmandu-content p {
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

<main class="kathmandu-page" role="main" aria-label="Kathmandu city information">
    <div class="kathmandu-container">
        <section class="kathmandu-img" aria-label="Kathmandu city image">
            <img src="<?= base_url('assests/kktm.jpg'); ?>" alt="Scenic view of Kathmandu" loading="lazy" />
        </section>

        <section class="kathmandu-content">
            <h1>Welcome to Kathmandu</h1>
            <p>
                The vibrant capital of Nepal, <strong>Kathmandu</strong> is a bustling metropolis steeped in history and culture. From ancient temples to lively markets, Kathmandu offers a fascinating blend of tradition and modern life.
            </p>

            <div class="highlight-boxes" role="list" aria-label="Highlights of Kathmandu">
                <div class="highlight" role="listitem"><i class="bi bi-buildings-fill" aria-hidden="true"></i><span>Durbar Square</span></div>
                <div class="highlight" role="listitem"><i class="bi bi-basket-fill" aria-hidden="true"></i><span>Local Markets</span></div>
                <div class="highlight" role="listitem"><i class="bi bi-tent-fill" aria-hidden="true"></i><span>Boudhanath Stupa</span></div>
                <div class="highlight" role="listitem"><i class="bi bi-tree-fill" aria-hidden="true"></i><span>Patan Durbar Square</span></div>
            </div>

            <article class="did-you-know" aria-labelledby="didYouKnowKathmandu">
                <h2 id="didYouKnowKathmandu">Did You Know?</h2>
                <ul>
                    <li>Kathmandu Durbar Square is a UNESCO World Heritage Site.</li>
                    <li>Boudhanath Stupa is one of the largest spherical stupas in Nepal.</li>
                    <li>The city hosts vibrant festivals like Indra Jatra and Dashain.</li>
                    <li>Patan Durbar Square showcases exquisite Newari architecture.</li>
                </ul>
            </article>

            <section class="must-visit" aria-labelledby="mustVisitKathmandu">
                <h2 id="mustVisitKathmandu">Must Visit Places in Kathmandu</h2>
                <div class="card-grid">
                    <article class="place-card" aria-label="Kathmandu Durbar Square">
                        <img src="<?= base_url('assests/darbar.jpg'); ?>" alt="Kathmandu Durbar Square" loading="lazy" />
                        <div class="info">
                            <h4>Kathmandu Durbar Square</h4>
                            <p>Explore ancient palaces, temples, and courtyards in the heart of the city.</p>
                        </div>
                    </article>

                    <article class="place-card" aria-label="Boudhanath Stupa">
                        <img src="<?= base_url('assests/baudha.jpg'); ?>" alt="Boudhanath Stupa" loading="lazy" />
                        <div class="info">
                            <h4>Boudhanath Stupa</h4>
                            <p>Experience spiritual vibes at one of the largest Buddhist stupas in Nepal.</p>
                        </div>
                    </article>

                    <article class="place-card" aria-label="Patan Durbar Square">
                        <img src="<?= base_url('assests/patan.jpg'); ?>" alt="Patan Durbar Square" loading="lazy" />
                        <div class="info">
                            <h4>Patan Durbar Square</h4>
                            <p>Admire the intricate wood carvings and historical monuments.</p>
                        </div>
                    </article>
                </div>
            </section>
        </section>
    </div>
</main>

<?php $this->load->view('layout/footer'); ?>
