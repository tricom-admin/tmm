<?= $this->extend('layout/main'); ?>

<?= $this->section('content'); ?>
<!-- SOCIAL MEDIA PAGE -->
<section class="container-fluid social-media-page" id="social-media-page">
  <p class="title fs-1 fw-bold" style="color: #0659A7">Social Media</p>
  <div class="row mb-5">
    <div class="col">
      <div class="vision">
        <h5 class="card-title col-8 lh-base fw-semibold">Information and Portofolio</h5>
        <br />
        <p class="card-text col-11 lh-base fw-light">See how we have positively impacted our clients by our work.</p>
      </div>
    </div>
  </div>

  <div class="row mb-5">
    <div class="col-md-4">
      <img src="assets/img/socmed-jack-nicklaus.jpg" class="img-fluid" alt="Jack Nicklaus" data-bs-toggle="modal" data-bs-target="#jnModal">
    </div>
    <div class="col-md-8">
      <div class="jack-nicklaus">
        <h5 class="card-title col-8 lh-base fw-semibold">Jack Nicklaus</h5>
        <br />
        <p class="card-text col-11 lh-base fw-light">
          Jack Nicklaus Indonesia, the brand that inspired by the golf sports culture and lifestyle. Jack Nicklaus offer a variety of casual and sporty menswear such as polo shirts, smart casual shirts, pants, bermuda and more.
        </p>
      </div>
    </div>

    <div class="modal fade" id="jnModal" tabindex="-1" aria-labelledby="jnModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
          <div class="modal-body">
            <img src="assets/img/socmed-jack-nicklaus.jpg" class="img-fluid" alt="Jack Nicklaus" data-bs-toggle="modal" data-bs-target="#jnModal">
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="row mb-5">
    <div class="col-md-4">
      <img src="assets/img/socmed-jobb.jpg" class="img-fluid" alt="JOBB" data-bs-toggle="modal" data-bs-target="#jobbModal">
    </div>
    <div class="col-md-8">
      <div class="jobb">
        <h5 class="card-title col-8 lh-base fw-semibold">JOBB</h5>
        <br />
        <p class="card-text col-11 lh-base fw-light">
          JOBB started its journey as brand in 1994, JOBB has expanded into a today’s Fashion lead brand. For those of you who is looking for inspiration about the latest clothing or bottoms for your daily activities, then you must have
          JOBB.
        </p>
      </div>
    </div>
    <div class="modal fade" id="jobbModal" tabindex="-1" aria-labelledby="jobbModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
          <div class="modal-body">
            <img src="assets/img/socmed-jobb.jpg" class="img-fluid" alt="Jack Nicklaus" data-bs-toggle="modal" data-bs-target="#jobbModal">
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- SOCIAL MEDIA PAGE END -->

<?= $this->endSection(); ?>