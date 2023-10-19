<?= $this->extend('layout/main'); ?>

<?= $this->section('content'); ?>

<!-- WEB DESIGN PAGE -->
<section class="container-fluid social-media-page" id="social-media-page">
  <p class="title fs-1 fw-bold" style="color: #0659A7">Web Design</p>
  <div class="row mb-5">
    <div class="col">
      <div class="vision">
        <h5 class="card-title col-8 lh-base fw-semibold">Information and Portofolio</h5>
        <br />
        <p class="card-text col-11 lh-base fw-light">See how we have positively impacted our clients by our work.</p>
      </div>
    </div>
  </div>

  <div class="row row-cols-md-2 row-cols-1 flex-column flex-md-row g-5 mb-5">
    <div class="col d-flex justify-content-center">
      <a href="https://incozy.co.id" target="_blank" class="text-decoration-none text-black">
        <div class="card rounded-0 w-100">
          <img src="assets/img/Web-Incozy.jpg" class="img-fluid" alt="Incozy" data-bs-toggle="modal" data-bs-target="#incozyModal">
          <div class="card-body">
            <p class="card-text">Incozy</p>
          </div>
        </div>
      </a>
    </div>

    <div class="col d-flex justify-content-center">
      <a href="https://jobb.co.id" target="_blank" class="text-decoration-none text-black">
        <div class="card rounded-0 w-100">
          <img src="assets/img/Web-JOBB.jpg" class="img-fluid" alt="JOBB" data-bs-toggle="modal" data-bs-target="#jnModal">
          <div class="card-body">
            <p class="card-text">JOBB</p>
          </div>
        </div>
      </a>
    </div>

    <div class="col d-flex justify-content-center">
      <a href="https://trimas-sgi.com" target="_blank" class="text-decoration-none text-black">
        <div class="card rounded-0 w-100">
          <img src="assets/img/Web-Trimas.jpg" class="img-fluid" alt="Trimas" data-bs-toggle="modal" data-bs-target="#jnModal">
          <div class="card-body">
            <p class="card-text">Trimas</p>
          </div>
        </div>
      </a>
    </div>

    <div class="col d-flex justify-content-center">
      <a href="https://www.purenceembun.id" target="_blank" class="text-decoration-none text-black">
        <div class="card rounded-0 w-100">
          <img src="assets/img/Web-Embun.jpg" class="img-fluid" alt="Embun" data-bs-toggle="modal" data-bs-target="#jnModal">
          <div class="card-body">
            <p class="card-text">Embun</p>
          </div>
        </div>
      </a>
    </div>

  </div>
</section>
<!-- WEB DESIGN PAGE END -->

<?= $this->endSection(); ?>