<?php get_header(); ?>
  <main>
    <section class="contact">
      <div class="breadcrum row show_pc">
        <ul class="breadcrum_list">
          <li><a href="/">ホーム</a></li>
          <li>お問い合わせ</li>
        </ul>
      </div>
      <!-- ./breadcrum -->
      <div class="ttl">
        <div class="row">
          <div class="ttl_tt">
            <h2>お問い合わせ</h2>
            <!--/.b_ttl-->
          </div>
        </div>
      </div>
      <!--/.gr_ttl-->
      <div class="contact_inner">
        <div class="cp_profile sec">
          <div class="row">
            <div class="cp_profile_ct">
              <h3>お問い合わせメールフォーム</h3>

<?php while(have_posts()): the_post(); ?>
<?php the_content(); ?>
<?php endwhile; ?>


            </div>
          </div>
        </div>


      </div>
    </section>
  </main>
  <!-- end main -->
<?php get_footer(); ?>