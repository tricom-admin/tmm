<?= $this->extend('layout/main'); ?>

<?= $this->section('content'); ?>

<!--HOMEPAGE-->
<div class="container-fluid homepage d-flex justify-content-center" id="homepage">
  <div class="homepage-body banner-carousel owl-carousel">
    <div class="col">
      <a href="#">
        <img class="img-fluid" src="<?= base_url('assets/img/banner-1.jpg'); ?>" alt="">
      </a>
    </div>
    <div class="col">
      <a href="#contact">
        <img class="img-fluid" src="<?= base_url('assets/img/banner-2.jpg'); ?>" alt="About Us">
      </a>
    </div>
    <div class="col">
      <a href="#about-us">
        <img class="img-fluid" src="<?= base_url('assets/img/banner-3.jpg'); ?>" alt="Contact Us">
      </a>
    </div>
  </div>
</div>
<!--HOMEPAGE END-->

<!-- ABOUT US-->
<section class="container-fluid about-us" id="about-us">
  <div class="row">
    <div class="col">
      <div class="card-body text d-grid gap-3" data-aos="fade-up" data-aos-duration="2000">
        <p class="card-title fs-3 lh-base fw-semibold">TRICOM Agency is prepared to serve as your company's digital solution.</p>
        <p class="card-text w-75 lh-base fw-light fs-13">
          Tricom Agency is a full-service digital marketing agency based in Jakarta, Indonesia. We are powered by a team of experts in website, social media, SEO, digital ads, analytics, and marketing who work with a growth mindset to
          deliver success for your business.
        </p>
        <a href="/about-us" class="btn btn-primary btn-text text-white rounded-5 border-0 fw-light">Learn More</a>
      </div>
    </div>
    <div class="col align-self-center" data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="2000">
      <img src="<?php echo base_url('assets/img/about-us.jpg'); ?>" class="img-fluid" alt="About-Us" />
    </div>
  </div>
</section>
<!--ABOUT US END -->

<!-- OUR SERVICES -->
<section class="container-fluid services bg-grey" id="services">
  <p class="title fs-1 fw-bold">Our Services</p>
  <div class="row" id="categories" style="height: 100%; max-height: 70vh;">
    <div class="col-md-3" data-aos="fade-right" data-aos-easing="ease-out-cubic" data-aos-duration="2000">
      <div class="card text-center" id="btncard">
        <ul class="list-group list-group-flush">
          <!-- <li type="button" class="list-group-item">Social media</li>
              <li class="list-group-item">Photography</li>
              <li class="list-group-item">Video production</li>
              <li class="list-group-item">Web design</li> -->
        </ul>
      </div>
    </div>

    <div class="col" id="details" data-aos="fade-left" data-aos-easing="ease-out-cubic" data-aos-duration="2000">
      <div class="card" id="itm" style="height: 100%;">
        <div class="row r-services" id="products">
        </div>
      </div>
    </div>
  </div>
</section>
<!-- OUR SERVICES END -->

<!--SERVICES MOBILE VERSION -->
<section class="container-fluid mobile-services bg-grey">
  <p class="title fs-1 fw-bold">Our Services</p>
  <div class="services-content owl-carousel">
    <div class="card">
      <img src="<?php echo base_url('assets/img/social-media.jpg'); ?>" style="height: 25rem" alt="Social-Media" />
      <div class="card-body text-center d-grid gap-2 my-auto">
        <div class="c-title fw-semibold">Social Media</div>
        <div class="text lh-base fw-light fs-13">
          Digital marketing has become an essential part of modern business to stay competitive in todays digital landscape. It provides a way to connect with customers, build brand awareness, and increase sales, all while being cost-effective and measurable.
        </div>
        <a href="/social-media" class="btn btn-primary text text-white text-center rounded-5 border-0 fw-light">Learn More</a>
      </div>
    </div>
    <div class="card">
      <img src="<?php echo base_url('assets/img/photography.jpg'); ?>" style="height: 25rem" alt="Photography" />
      <div class="card-body text-center d-grid gap-2">
        <div class="c-title fw-semibold">Photography</div>
        <div class="text lh-base fw-light">
          Capture your precious moments with TRICOM best photography services. We believe that every moment is worth remembering, so we are dedicated to providing the best photography experience.
        </div>
        <a href="/photography" class="btn btn-primary btn-text text-white text-center rounded-5 border-0 fw-light">Learn More</a>
      </div>
    </div>
    <div class="card">
      <img src="<?php echo base_url('assets/img/video-production.jpg'); ?>" style="height: 25rem" alt="Video-Production" />
      <div class="card-body text-center d-grid gap-2">
        <div class="c-title fw-semibold">Video Production</div>
        <div class="text lh-base fw-light">
          Video production services, we can work on a variety of projects, including corporate videos, lookbook videos, Campaign videos, and launching videos with creative excellence and professionalism.
        </div>
        <a href="/video-production" class="btn btn-primary btn-text text-center text-white rounded-5 border-0 fw-light">Learn More</a>
      </div>
    </div>
    <div class="card">
      <img src="<?= base_url('assets/img/web-dev.jpg'); ?>" style="height: 25rem" alt="Web-Design" />
      <div class="card-body text-center d-grid gap-2">
        <div class="c-title fw-semibold">Web Design</div>
        <div class="text lh-base fw-light">
          Welcome to TRICOM web design service! In today digital era, websites play a very important role in the success of a brand, so we ensure that your brand website is not only visually stunning, but also user-friendly and effective in achieving your brand goals.
        </div>
        <a href="/web-design" class="btn btn-primary btn-text text-white text-center rounded-5 border-0 fw-light">Learn More</a>
      </div>
    </div>
  </div>
</section>
<!-- END -->

<!-- OUR CLIENTS -->
<section class="container-fluid our-clients" id="our-clients" data-aos="zoom-in" data-aos-duration="2000">
  <p class="title fs-1 fw-bold text-center">Our Satisfied Clients</p>
  <p class="sub-clients text fw-light text-center text-dark">Let's start realizing your dream brand with Tricom Agency!</p>
  <div class="brand d-grid">
    <div class="col my-1">
      <img src="<?php echo base_url('assets/img/logobrand/logo-jn.png'); ?>" class="img-fluid rounded-2 border-5" alt="Jack-Nicklaus" />
    </div>
    <div class="col my-1">
      <img src="<?php echo base_url('assets/img/logobrand/logo-yescare.png'); ?>" class="img-fluid rounded-2" alt="YesCare" />
    </div>
    <div class="col my-1">
      <img src="<?php echo base_url('assets/img/logobrand/logo-chitose.png'); ?>" class="img-fluid rounded-2" alt="Chitose" />
    </div>
    <div class="col my-1">
      <img src="<?php echo base_url('assets/img/logobrand/logo-cpro.png'); ?>" class="img-fluid rounded-2" alt="C-Pro" />
    </div>
    <div class="col my-1">
      <img src="<?php echo base_url('assets/img/logobrand/logo-incozy3.png'); ?>" class="img-fluid rounded-2" alt="InCozy" />
    </div>
    <div class="col my-1">
      <img src="<?php echo base_url('assets/img/logobrand/logo-bellini.png'); ?>" class="img-fluid rounded-2" alt="Bellini" />
    </div>
    <div class="col my-1">
      <img src="<?php echo base_url('assets/img/logobrand/logo-yukshopping3.png'); ?>" class="img-fluid rounded-2" alt="YukShopping" />
    </div>
    <div class="col my-1">
      <img src="<?php echo base_url('assets/img/logobrand/logo-jobb.png'); ?>" class="img-fluid rounded-2" alt="Jobb" />
    </div>
    <div class="col my-1">
      <img src="<?php echo base_url('assets/img/logobrand/logo-medico.png'); ?>" class="img-fluid rounded-2" alt="Medico" />
    </div>
    <div class="col my-1">
      <img src="<?php echo base_url('assets/img/logobrand/logo-fiore3.png'); ?>" class="img-fluid rounded-2" alt="Fiore" />
    </div>
    <div class="col my-1">
      <img src="<?php echo base_url('assets/img/logobrand/logo-spoon.png'); ?>" class="img-fluid rounded-2" alt="Spoon" />
    </div>
    <div class="col my-1">
      <img src="<?php echo base_url('assets/img/logobrand/logo-swoosh.png'); ?>" class="img-fluid rounded-2" alt="Swoosh" />
    </div>
    <div class="col my-1">
      <img src="<?php echo base_url('assets/img/logobrand/logo-monster2.png'); ?>" class="img-fluid rounded-2" alt="Monster" />
    </div>
    <div class="col my-1">
      <img src="<?php echo base_url('assets/img/logobrand/logo-zao.png'); ?>" class="img-fluid rounded-2" alt="Zao" />
    </div>
    <div class="col my-1">
      <img src="<?php echo base_url('assets/img/logobrand/logo-embun2.png'); ?>" class="img-fluid rounded-2" alt="Embun" />
    </div>
  </div>
</section>
<!-- OUR CLIENTS END -->

<!-- CUSTOMER TESTIMONY -->
<section class="container-fluid customer-testimony">
  <p class="title fs-1 mb-3 fw-bold text-center">What They Say?</p>
  <div class="testimony-content owl-carousel">
    <div class="single-testimony text-center text-white lh-lg testimony-card">
      <p class="text-testi">
        I want to express my utmost satisfaction with the services provided by Tricom Agency. The websites they have created for us are visually stunning, user-friendly, and optimized for search engines. Therefore, I highly recommend Tricom Agency to any business in need of top-notch website services.
      </p>
      <br />
      <div class="client-info">
        <h5 class="name text fw-semibold">Sadana Iwan</h5>
        <p class="text-testi fst-italic">Direktur PT Mido Indonesia</p>
      </div>
    </div>

    <div class="single-testimony text-center text-white lh-lg testimony-card">
      <p class="text-testi">
        I can confidently say that Tricom Agency is a reliable partner. The team is committed to delivering high-quality results. They have a deep understanding of user experience and design principles. Tricom Agency has exceeded our expectations and can be trusted for other projects in the future.
      </p>
      <br />
      <div class="client-info">
        <h5 class="name text fw-semibold">Chandra Andriati</h5>
        <p class="text-testi fst-italic">Direktur Utama PT Inkabiz Indonesia</p>
      </div>
    </div>
    <div class="single-testimony text-center text-white lh-lg testimony-card">
      <p class="text-testi">
        Tricom Agency has been instrumental in the success of our online presence. As a company director, I appreciate their proactive approach and attention to detail. I am impressed with Tricom Agency's professionalism and highly recommend their website design and maintenance services.
      </p>
      <br />
      <div class="client-info">
        <h5 class="name text fw-semibold">Robertus Budi Setiono</h5>
        <p class="text-testi fst-italic">Direktur PT Harmag Cipta Indonesia</p>
      </div>
    </div>
  </div>
</section>
<!-- CUSTOMER TESTIMONY END -->

<!-- ARTICLE -->
<section class="container-fluid" id="article">
  <p class="title fs-1 fw-bold">Latest Article</p>
  <div class="article owl-carousel" style="gap: 2%">
    <?php
    if (!empty($article)) :
      foreach ($article as $row) :
    ?>
        <div class="card">
          <img src="<?= $row['image'] ? getenv("ASSETS_URL") . $row['image'] : '' ?>" class="card-img-top" alt="Article" />
          <div class="card-body text-center text">
            <div class="c-title fw-semibold mb-2"><?= $row['title'] ?></div>
            <div class="lh-base fw-light article-excerpt">
              <?= substr($row['excerpt'], 0, 50) . "..." ?>
            </div>
          </div>
          <div class="card-footer text-center border-0 bg-transparent">
            <a href="/article/<?= $row['slug'] ?>" class="btn btn-primary btn-text text-white rounded-5 border-0 fw-light">Learn More</a>
          </div>
        </div>
      <?php
      endforeach;
    else :
      ?>

    <?php
    endif;
    ?>
  </div>
</section>
<!-- ARTICLE END -->

<!-- CONTACT -->
<section class="container-fluid contact bg-grey" id="contact">
  <p class="title fs-1 fw-bold">Let’s discuss your project!</p>
  <div class="d-grid flex-sm-column r-maps">
    <div class="col c-text text-decoration-none text">
      <div class="row r-info my-3">
        <div class="col icon">
          <i class="bi bi-telephone" style="color: #0659a7; font-size: 25px"></i>
        </div>
        <div class="col text-decoration-none my-auto"><a class="text-decoration-none text-black" href="tel:(021) 58357377" target="_blank">(021) 58357377</a>
          <!-- <p class="text-decoration-none">021-56920213</p> -->
        </div>
      </div>
      <div class="row r-info my-3">
        <div class="col icon">
          <i class="bi bi-envelope" style="color: #0659a7; font-size: 25px"></i>
        </div>
        <div class="col my-auto"><a class="text-decoration-none text-black" href="mailto:tricomagency@trisula.com" target="_blank">tricomagency@trisula.com</a>
          <!-- <p>tricomagency@trisula.com</p> -->
        </div>
      </div>
      <div class="row r-info my-3">
        <div class="col icon">
          <i class="bi bi-geo-alt fw-bold" style="color: #0659a7; font-size: 25px"></i>
        </div>
        <div class="col">
          <p class="w-75">
            Trisula Center<br />
            Jalan Lingkar Luar Barat Blok A - B 1, RT.14/RW.14, Rw. Buaya, Kecamatan Cengkareng, Kota Jakarta Barat, Daerah Khusus Ibukota Jakarta 11740
          </p>
        </div>
      </div>
    </div>
    <!-- overflow-scroll -->
    <div class="col overflow-scroll">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.666879455042!2d106.72665651476889!3d-6.175331995529216!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f78167bb60d5%3A0x390ec47a1212cbca!2sTrisula%20Center!5e0!3m2!1sid!2sid!4v1683168836580!5m2!1sid!2sid" class="location" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
  </div>
</section>
<!-- CONTACT END -->

<?php

include "services.php";

?>

<script type="text/javascript">
  $(document).ready(function() {
    $(".banner-carousel").owlCarousel({
      rewind: true,
      margin: 10,
      autoplay: true,
      autoplayTimeout: 3500,
      smartSpeed: 1500,
      responsiveClass: true,
      responsive: {
        0: {
          items: 1,
          // nav:true,
          dots: true,
        },
        600: {
          items: 1,
          // nav:false,
          dots: true,
        },
        1000: {
          items: 1,
          // nav:true,
          loop: false,
          dots: true,
        },
      },
    });

    $(".services-content").owlCarousel({
      loop: true,
      margin: 10,
      autoplay: true,
      autoplayTimeout: 5000,
      smartSpeed: 1500,
      responsiveClass: true,
      responsive: {
        0: {
          items: 1,
          // nav:true,
          dots: true,
        },
        600: {
          items: 1,
          // nav:false,
          dots: true,
        },
        1000: {
          items: 1,
          // nav:true,
          loop: false,
          dots: true,
        },
      },
    });

    $(".testimony-content").owlCarousel({
      loop: true,
      margin: 10,
      // autoplay: true,
      autoplayTimeout: 5000,
      smartSpeed: 1500,
      responsiveClass: true,
      responsive: {
        0: {
          items: 1,
          // nav:true,
          dots: true,
        },
        600: {
          items: 2,
          // nav:false,
          dots: true,
        },
        900: {
          items: 2,
          // nav:false,
          dots: true,
        },
        1200: {
          items: 3,
          // nav:true,
          loop: false,
          dots: true,
        },
      },
    });

    $(".article").owlCarousel({
      loop: true,
      margin: 10,
      responsiveClass: true,
      // autoWidth: true,
      mergeFit: true,
      responsive: {
        0: {
          items: 1,
          // nav: true,
        },
        600: {
          items: 2,
          // nav: false,
        },
        900: {
          items: 2,
          // nav: false,
        },
        1200: {
          items: 3,
          // nav: true,
          loop: true,
        },
      },
    });
  });
</script>

<?= $this->endSection(); ?>