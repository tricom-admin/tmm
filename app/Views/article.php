<?= $this->extend('layout/main'); ?>

<?= $this->section('content'); ?>

<!-- ARTICLE PAGE -->
<section class="container-fluid article-page" id="article-page">
  <p class="title fs-1 fw-bold"><?= $article['title'] ?></p>
  <p class="created text"><?= date('d M Y', strtotime($article['created_at'])) ?></p>
  <div class="row">
    <img src="<?= getenv("ASSETS_URL") . $article['image'] ?>" alt="Article">
  </div>
  <div class="row" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1500">
    <div class="col-10 text"><?= $article['body'] ?></div>
  </div>
</section>
<!-- ARTICLE PAGE END -->

<?= $this->endSection(); ?>