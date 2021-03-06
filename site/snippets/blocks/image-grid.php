<section class="image-grid">
  <?php $media =  $data->media()->toFiles(); ?>
  <?php foreach($media as $m): ?>
    <?php if ($m->type() == 'video') { ?>
      <video data-src="<?= $m->url() ?>"
             class="grid-item"
             muted=""
             loop=""
             preload="auto"
             autoplay="true"
             playsinline="">
        <source src="<?= $m->url() ?>" type="<?= $m->mime() ?>">
      </video>
    <?php } elseif ($m->type() == 'image') { ?>
      <div class="grid-item">
        <img srcset="<?= $m->srcset([300, 800, 1024]) ?>"
             alt="">
      </div>
    <?php } ?>
  <?php endforeach ?>
</section>
