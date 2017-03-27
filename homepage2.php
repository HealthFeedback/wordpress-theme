<?php
/*
Template Name: Homepage 2
*/
?>

</div><!-- / .row -->
</div><!-- / .container -->

<?php function get_trim_text ($string) {
  $maxlen = 180;
  $excerpt = $string;
  $excerptlen = strlen($excerpt);
  if ($excerptlen > $maxlen) {
    $excerpt = substr($excerpt, 0, $maxlen).'...';
    $excerptlen = $maxlen + 3;
  }
  if ($excerpt[0] == '"')
    $excerpt = substr($excerpt, 0, $excerptlen-1);
  return $excerpt;
}?>

<div class="sigla feeds-hero">
    <div class="container">
  <div class="row feeds-hero__row">
    <h3 class="half-black">
      Accurate information: the foundation of a functioning democracy
    </h3>
  </div>
        </div>
</div>
<div class="feeds-aim overflow-hidden">
  <div class="container"><div class="feeds-container">
      <p class="feeds-aim__container__img col col-2"> WHAT WE DO </p>
      <p class="feeds-aim__container__text col col-10">
Climate Feedback is a worldwide network of scientists sorting fact from fiction in climate change media coverage. Our reviews help the public know which climate news to trust. </p>
  </div></div>
</div>

<div class="container">

<?php
  $args = array(
    'post_type' => array('evaluation'),
    'posts_per_page' => 3
  );
  $loop = new WP_Query( $args );
?>
<div class="feeds-container">
    <div class="feeds-title h3">Latest Article Reviews</div>
  <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
    <?php if( $loop->current_post == 0 && !is_paged() ) : ?>
      <a href="<?php echo get_permalink( get_the_ID() ); ?>" >
        <div class='feed feed__article mb3'>
          <div class='col col-lg-8'>
              <div class='feed__article-first__screenshot' style='padding-left: 0px !important;  padding-right: 0px !important;'>
            <img
              class='feed__article-first__screenshot__img'
              src="<?php echo simplexml_load_string(get_the_post_thumbnail())->attributes()->src;?>"
            >
          </div>
              </div>
          <div class="feed__article-first__text col col-lg-4">
            <div class='feed-title h3'>
              <?php echo get_the_title(); ?>
            </div>
            <div class='feed-outlet h3'>
              <?php echo get_post_meta( get_the_ID(), 'outlet', true); ?>
            </div>
            <div class='feed-excerpt mb1'>
              <?php echo get_trim_text(get_the_excerpt());?>
            </div>
            <div>
              - <?php echo get_post_meta( get_the_ID(), 'date', true); ?>
            </div>
          </div>
        </div>
      </a>
    <?php else : ?>
      <a class="col col-lg-6" href="<?php echo get_permalink( get_the_ID() ); ?>" >
        <div class='feed feed__article mb3'>
          <div class='feed__article-next__screenshot mb1'>
            <img
              class='feed__article-next__screenshot__img'
              src="<?php echo simplexml_load_string(get_the_post_thumbnail())->attributes()->src;?>"
            >
          </div>
          <div class='feed-title h3'>
            <?php echo get_the_title(); ?>
          </div>
          <div class='feed-outlet h3'>
            <?php echo get_post_meta( get_the_ID(), 'outlet', true); ?>
          </div>
          <div class='feed-excerpt mb1'>
            <?php echo get_trim_text(get_the_excerpt());?>
          </div>
          <div>
            - <?php echo get_post_meta( get_the_ID(), 'date', true); ?>
          </div>
        </div>
      </a>
    <?php endif; ?>
  <?php endwhile; ?>
</div>
<div class="feeds-more mb1 p1">
  <a
    class="feeds-more__link h4 p1"
    href="<?php echo get_site_url(); ?>/evaluations"
  >
    More Article Reviews
  </a>
</div>

<!-- Begin MailChimp Signup Form -->
<link href="//cdn-images.mailchimp.com/embedcode/slim-10_7.css" rel="stylesheet" type="text/css">
<style type="text/css">
    #mc_embed_signup{background:#fff; clear:left; font:14px Helvetica,Arial,sans-serif; }

    /* Add your own MailChimp form style overrides in your site stylesheet or in this style block.
       We recommend moving this block and the preceding CSS link to the HEAD of your HTML file. */
</style>
    <div class="mc_embed_bar">
<div id="mc_embed_signup" style="background-color: #F5F5F5;overflow-y:hidden;">
  <form action="//climatefeedback.us9.list-manage.com/subscribe/post?u=e33d7323df2327db90438153a&amp;id=e4773425e1"
    method="post" id="mc-embedded-subscribe-form"
    name="mc-embedded-subscribe-form"
    class="validate overflow-hidden"
    target="_blank"
    style="padding:5px;"
  novalidate>
    <div class="overflow-hidden p1">
      <div class="feeds__sign-up__icon col col-md-2 p2">
        <img
          class="feeds__sign-up__icon__img"
          src="<?php echo get_site_url(); ?>/wp-content/uploads/icons/paper-plane-xxl.png"
        >
      </div>
      <div class="feeds__sign-up__text col col-md-6 p2">
        <h3>Get scientists’ reviews delivered directly to your inbox</h3>
      </div>
       <div
        class="col col-md-4 feeds__sign-up__inputs"
        id="mc_embed_signup_scroll"
      >
         <div style="width:100%;">
           <input
            class="feeds__sign-up__inputs__input mb1"
            type="email"
            value=""
            name="EMAIL"
            class="email"
            id="mce-EMAIL"
            placeholder="enter your email address"
            required
          >
           <input
            class="button feeds-submit feeds__sign-up__inputs__input forceblue"
            type="submit"
            value="Sign Up"
            name="subscribe"
            id="mc-embedded-subscribe"
          >
         </div>
         <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
         <div style="position: absolute; left: -5000px;" aria-hidden="true">
           <input type="text" name="b_e33d7323df2327db90438153a_e4773425e1" tabindex="-1" value="">
        </div>
       </div>
     </div>
  </form>
</div>
        </div>
<!--End mc_embed_signup-->


<?php
  $args = array(
    'post_type' => array('claimreview'),
    'posts_per_page' => 2
  );
  $loop = new WP_Query( $args );
?>
<div class="feeds-container feeds-container__claim ">
    <div class="feeds-title h3">Latest Claim Reviews</div>
  <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
    <a href="<?php echo get_permalink( get_the_ID() ); ?>" >
      <div class="feed feed__claim col col-lg-6 mb1">
        <div class="feed__claim__container relative">
          <div class="feed__claim__container__illustration col col-4">
            <div class="feed__claim__container__illustration__screenshot">
              <img
                class="feed__claim__container__illustration__screenshot__img"
                src="<?php echo get_post_meta( get_the_ID(), 'screenshot', true)?>"
              >
            </div>
          </div>
          <div class="feed__claim__container__content col col-8">
            <img
              class="feed__claim__container__content__verdict__img mb1"
              src="<?php echo get_site_url(); ?>/wp-content/uploads/tags/TagH_<?php echo get_post_meta( get_the_ID(), 'verdict', true)?>.png"
            >
            <div class="feed-excerpt feed__claim__container__content__text mb1">
              "<?php echo get_post_meta( get_the_ID(), 'claimshort', true); ?>"
            </div>
            <div class="feed__claim__container__content__outlet">
              <?php echo get_post_meta( get_the_ID(), 'author', true); ?>, <?php echo get_post_meta( get_the_ID(), 'outlet', true); ?>
            </div>
          </div>
        </div>
      </div>
    </a>
  <?php endwhile; ?>
</div>
<div class="feeds-more mb1 p1">
  <a
    class="feeds-more__link h4 p1"
    href="<?php echo get_site_url(); ?>/claim-reviews"
  >
    More Claim Reviews
  </a>
</div>

    
</div><!-- / .container -->

   
<section class="scientist-signup">
  <div class="container">
    <div class="row">
      <div class="col-sm-12 call-to-action">
        <div class="media-left">
          <img alt="" class="sci-fig" src="<?php echo get_stylesheet_directory_uri(); ?>/dist/images/scientists-logo2.png">
        </div>
        <div class="media-body">
          <h3>Scientists</h3>
          <p>You can help create a better informed society. Become a reviewer today! <br />See <a class="wht" href="/community/">who is already contributing</a>.</p>
          <a href="/for-scientists/" class="btn btn-primary btn-lg">Apply here</a>
        </div>
      </div>
    </div>
  </div>
</section>
    
 <div class="container">
<div class="feeds-title h3">Insights</div>
<?php
  $args = array(
    'post_type' => array('post'),
    'cat' => array('-claimreview', '-evaluation'),
    'posts_per_page' => 2
  );
  $loop = new WP_Query( $args );
?>
<div class="feeds-container mr3 p1">
  <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
    <a class="col col-lg-6" href="<?php echo get_permalink( get_the_ID() ); ?>" >
      <div class='feed feed__perspective mb1 p2'>
        <div class='feed__perspective__screenshot mb1'>
          <img
            class='feed__perspective__screenshot__img'
            src="<?php echo simplexml_load_string(get_the_post_thumbnail())->attributes()->src;?>"
          >
        </div>
        <div class='feed-title h3'>
          <?php echo get_the_title(); ?>
        </div>
        <div class='feed-excerpt mb1'>
          <?php echo get_trim_text(get_the_excerpt());?>
        </div>
        <div>
          - <?php the_date(); ?>
        </div>
      </div>
    </a>
  <?php endwhile; ?>
</div>
<div class="feeds-more p1 mb3">
  <a
    class="feeds-more__link h4 p1"
    href="<?php echo get_site_url(); ?>/blog-posts"
  >
    More Insights
  </a>
</div>

</div><!-- / .container -->



<section class="press-show">
  <div class="container">

      <h3 style="font-size: 1.25rem;">Hear what they are saying about us</h3>
    <div class="row">
      <div class="col-4" style="padding-left: 1em; padding-right: 1em">
        <a href="/press/annotation-might-future-fact-checking/" target="_blank"> <img class="press-fig img-responsive" src="<?php echo get_stylesheet_directory_uri(); ?>/dist/images/ps-Poynter.png"> </a>
      </div>
      <div class="col-4">
        <a href="/press/scientists-get-tool-to-mark-online-climate-science-media-coverage-and-its-not-a-rusty-teaspoon/" target="_blank">   <img class="press-fig img-responsive" src="<?php echo get_stylesheet_directory_uri(); ?>/dist/images/the-guardian-logo_grey.png"></a>
      </div>
      <div class="col-4 forbes" style="padding-left: 2em">
        <a href="/press/climate-scientists-launch-brainy-attack-inaccurate-news/" target="_blank"> <img class="press-fig img-responsive" src="<?php echo get_stylesheet_directory_uri(); ?>/dist/images/ps-Forbes.png"></a>
      </div>
      <div class="col-4">
        <a href="/press-coverage/" class="btn btn-primary">More Press</a>
      </div>
    </div>
      

      
  </div>
      
</section>