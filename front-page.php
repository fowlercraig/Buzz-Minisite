<?php get_header(); ?>

<div id="sub">
  <div id="sub-button" class="swap" data-swap-target="#sub" data-swap-linked=".sub">Get Buzz Band</div>
  <div id="sub-form" class="fs-grid-fluid">
    <?php echo do_shortcode('[contact-form-7 id="17" title="Contact form 1"]'); ?>
  </div>
</div>

<div id="content-wrap">
  <div id="content-headline">
    <div class="fs-row">
      <div class="fs-cell fs-lg-10 fs-md-full fs-sm-3">
        <div class="logo"><img src="<?php print PUBLIC_DIR . 'buzzlogo.svg'; ?>" class="img-responsive"></div>
        <div class="carousel" data-carousel-options='{"single":true,"pagination": false, "controls": false}'>
          <?php $lines = get_field('messaging'); ?>
          <?php foreach ($lines as $line): ?>
          <div class="carousel-slide"><div class="headline"><?php echo $line['copy']; ?></div></div>
          <?php endforeach; ?>
        </div>
      </div>
    </div>
  </div>
  <div id="content-description" class="pinned pinned--bottom fs-grid-fluid">
    <div class="fs-row">
      <div class="fs-cell fs-lg-half fs-lg-push-6">
        <div class="fs-row">
          <?php the_post(); $content = get_the_content(); ?>
          <?php $list = explode("<hr>", $content); ?>
          <div class="body fs-cell fs-lg-half"><span class="title"><?php echo $list[0]; ?> — </span><?php echo $list[1]; ?></div>
          <div class="body fs-cell fs-lg-half"><?php echo $list[2]; ?></div>
        </div>
      </div>
    </div>
  </div>
</div>

<div id="layer-band-wrap" class="fs-grid-fluid">
  <div id="layer-band-1" class="pinned pinned--top">
    <div class="fs-row">
      <div class="fs-cell fs-lg-4 fs-lg-push-3 fs-md-3 fs-sm-hide">
        <img src="<?php print PUBLIC_DIR . '@2xAir_navy.png'; ?>" class="img-responsive">
      </div>
    </div>
  </div>
  <div id="layer-band-2">
    <div id="layer-band-2-wrapper">
      <div class="fs-row">
        <div class="fs-cell fs-lg-3 fs-md-3 fs-sm-half fs-sm-push-half fs-lg-justify-end">
          <img src="<?php print PUBLIC_DIR . '@2xAir_hero.png'; ?>" class="img-responsive">
        </div>
      </div>
    </div>
  </div>
  <div id="layer-band-3" class="pinned pinned--bottom">
    <div class="fs-row">
      <div class="fs-cell fs-lg-6 fs-md-3 fs-sm-hide">
        <img src="<?php print PUBLIC_DIR . '@2xBuzz_rear_band.png'; ?>" class="img-responsive">
      </div>
    </div>
  </div>
</div>

<div id="background-wrap">
  <div id="background-layer-1">
    <img src="<?php print PUBLIC_DIR . 'background-bottom.svg'; ?>" class="img-responsive">
  </div>
  <div id="background-layer-2" class="background" data-background-options='{"source":{"0px":"<?php print PUBLIC_DIR . 'option3.png'; ?>","980px":"<?php print PUBLIC_DIR . 'background-bottom-2.svg'; ?>"}}'></div>
</div>

<?php get_footer(); ?>