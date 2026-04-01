<?php get_header(); ?>

<!-- ===============================================
     メインビジュアル
     =============================================== -->
<section class="mainvisual_area">
  <img src="<?php echo get_template_directory_uri(); ?>/img/mainvisual.jpg" alt="オフィスの画像" />
</section>
<!-- ===============================================
     ニュースエリア
     =============================================== -->
<main>
  <section class="news_area">
    <!-- 【flex】titleとlineupを横並びにする -->
    <div class="news_flex">
      <h2 class="title_main">News</h2>
      <a href="<?php echo get_category_link(get_cat_ID('ニュース')); ?>" class="news_lineUp">すべて見る</a>
    </div>

    <!-- wordPress化 -->

    <ul class="news_list">
      <?php
      if (have_posts()) :
        while (have_posts()) : the_post();
      ?>

          <li class="news_item">
            <time class="news_date" datetime="<?php echo esc_html(get_the_date('Y-m-d')); ?>"><?php echo esc_html(get_the_date('Y.m.d')); ?></time>
            <span class="news_category"><?php the_category(', '); ?></span>
            <p class="news_text"><?php the_title(); ?></p>
          </li>



      <?php
        endwhile;

      endif;
      ?>

    </ul>










  </section>

  <!-- ===============================================
      ABOUT
      =============================================== -->
  <section class="about_area">
    <img src="<?php echo get_template_directory_uri(); ?>/img/about.jpg" alt="地面に靴" />
    <div class="about_textArea">
      <h2 class="title">About</h2>
      <p class="subTitle">私たちについて</p>
      <p>テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>

      <p>テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>

      <p>テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
    </div>
  </section>
  <!-- ===============================================
      BUSINESS
      =============================================== -->
  <section class="business_area">
    <h2 class="title">BUSINESS</h2>
    <p class="subTitle">事業内容</p>
    <div class="business_list">
      <div class="business_item">
        <p class="business_name">Web制作・マーケティング</p>
        <img class="business_img" src="<?php echo get_template_directory_uri(); ?>/img/business1.jpg" alt="事業内容の画像" />
      </div>
      <div class="business_item">
        <p class="business_name">プロモーション企画・制作</p>
        <img class="business_img" src="<?php echo get_template_directory_uri(); ?>/img/business2.jpg" alt="事業内容の画像" />
      </div>

      <div class="business_item">
        <p class="business_name">インターネットメディア事業</p>
        <img class="business_img" src="<?php echo get_template_directory_uri(); ?>/img/business3.jpg" alt="事業内容の画像" />
      </div>

      <div class="business_item">
        <p class="business_name">ソーシャル企画・運営</p>
        <img class="business_img" src="<?php echo get_template_directory_uri(); ?>/img/business4.jpg" alt="事業内容の画像" />
      </div>
    </div>
  </section>

  <!-- ===============================================
       COMPANY
       =============================================== -->
  <section class="company_area">
    <!-- 会社情報 -->
    <div class="company_info">
      <h2 class="title">COMPANY</h2>
      <p class="subTitle">会社情報</p>
      <dl class="company_wrapper">
        <dt class="company_title">会社名</dt>
        <dd class="company_detail">株式会社階段式</dd>
        <dt class="company_title">所在地</dt>
        <dd class="company_detail">東京都渋谷区</dd>
        <dt class="company_title">代表</dt>
        <dd class="company_detail">東京都渋谷区</dd>
        <dt class="company_title">設立</dt>
        <dd class="company_detail">東京都渋谷区</dd>
        <dt class="company_title">資本金</dt>
        <dd class="company_detail">東京都渋谷区</dd>
        <dt class="company_title">事業内容</dt>
        <dd class="company_detail">Web制作・マーケティング<br />インターネットメディア事業<br />プロモーション企画・制作<br />ソーシャル企画・運営</dd>
      </dl>
      <img class="company_img" src="<?php echo get_template_directory_uri(); ?>/img/company.jpg" alt="会社の画像" />
    </div>
  </section>
</main>


<?php get_footer(); ?>