<?php $this->load->view('layout/header'); ?>  
<style> 
    .mustang-page {
        position: relative;
        background-color: #f3f6fb;
        background-image: url('<?= base_url("assests/mustang.jpg") ?>');
        background-repeat: no-repeat;
        background-size: cover;
        background-position: center center;
        padding: 60px 20px;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        color: #f0f0f0;
        min-height: 100vh;
    }

    .mustang-page::before {
        content: "";
        position: absolute;
        top: 0; left: 0; right: 0; bottom: 0;
        background-color: rgba(0, 0, 0, 0.45);
        z-index: 0;
    }

    .mustang-container {
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

    .mustang-img img {
        width: 100%;
        height: auto;
        object-fit: cover;
        display: block;
    }

    .mustang-content {
        padding: 40px;
    }

    .mustang-content h1 {
        color: #0d6efd;
        font-size: 2.8rem;
        margin-bottom: 20px;
        font-weight: 700;
    }

    .mustang-content p {
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

<main class="mustang-page" role="main" aria-label="Mustang district information">
    <div class="mustang-container">
        <section class="mustang-img" aria-label="Mustang scenic image">
            <img src="<?= base_url('assests/mustang.jpg'); ?>" alt="Scenic view of Mustang" loading="lazy" />
        </section>

        <section class="mustang-content">
            <h1>Welcome to Mustang</h1>
            <p>
                Located in the trans-Himalayan region of Nepal, <strong>Mustang</strong> is a land of mystic beauty, ancient Tibetan culture, and dramatic desert landscapes. Known as the “Last Forbidden Kingdom,” Mustang is a destination like no other.
            </p>

            <div class="highlight-boxes" role="list" aria-label="Highlights of Mustang">
                <div class="highlight" role="listitem"><i class="bi bi-geo-alt-fill" aria-hidden="true"></i><span>Lo Manthang</span></div>
                <div class="highlight" role="listitem"><i class="bi bi-bank" aria-hidden="true"></i><span>Muktinath Temple</span></div>
                <div class="highlight" role="listitem"><i class="bi bi-airplane-engines" aria-hidden="true"></i><span>Jomsom</span></div>
                <div class="highlight" role="listitem"><i class="bi bi-people-fill" aria-hidden="true"></i><span>Tibetan Culture</span></div>
            </div>

            <article class="did-you-know" aria-labelledby="didYouKnowMustang">
                <h2 id="didYouKnowMustang">Did You Know?</h2>
                <ul>
                    <li>Mustang was a restricted demilitarized area until 1992, which preserved its unique culture.</li>
                    <li>Lo Manthang is a walled city founded in 1380 and still inhabited by descendants of the royal family.</li>
                    <li>Muktinath is sacred to both Hindus and Buddhists, known for its eternal flame and water spouts.</li>
                    <li>Mustang's landscape resembles the Tibetan plateau, with arid valleys and dramatic cliffs.</li>
                </ul>
            </article>

            <section class="must-visit" aria-labelledby="mustVisitMustang">
                <h2 id="mustVisitMustang">Must Visit Places in Mustang</h2>
                <div class="card-grid">
                    <article class="place-card" aria-label="Muktinath Temple">
                        <img src="<?= base_url('assests/muktinath.jpg'); ?>" alt="Muktinath Temple" loading="lazy" />
                        <div class="info">
                            <h4>Muktinath Temple</h4>
                            <p>A sacred pilgrimage site situated at the foot of the Thorong La Pass in the Himalayas.</p>
                        </div>
                    </article>

                    <article class="place-card" aria-label="Jomsom Town">
                        <img src="<?= base_url('assests/jomsome.jpg'); ?>" alt="Jomsom Town" loading="lazy" />
                        <div class="info">
                            <h4>Jomsom</h4>
                            <p>A gateway to Upper Mustang, famous for its airport, apple brandy, and Thakali culture.</p>
                        </div>
                    </article>

                    <article class="place-card" aria-label="Kagbeni Village">
                        <img src="<?= base_url('assests/kagbeni.jpg'); ?>" alt="Kagbeni Village" loading="lazy" />
                        <div class="info">
                            <h4>Kagbeni</h4>
                            <p>A picturesque village on the trail to Muktinath, rich in history and Tibetan heritage.</p>
                        </div>
                    </article>
                </div>
            </section>
        </section>
    </div>
</main>
