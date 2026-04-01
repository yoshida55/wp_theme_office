<?php get_header(); ?>

<main>
  <section class="lineup_area">
    <h2 class="lineup_title">News & Press</h2>
    <p class="lineup_subTitle">ニュースとプレスリリース</p>

    <!-- 移動タブの移動(アニメーション) -->
    <div class="tab_wrapper">
      <!-- タブボタン -->
      <div class="tab_list">
        <button class="tab_btn is-active" data-tab="news">ニュース</button>
        <button class="tab_btn" data-tab="press">プレスリリース</button>
        <!-- 動く線 -->
        <span class="tab_line"></span>
      </div>

      <!-- コンテンツ -->
      <div class="tab_content is-show" data-content="news">
        <!-- 【flex】ニュース一覧を縦に並べる -->
        <div>
          <ul class="lineup_list">

            <?php if (have_posts()) :
              while (have_posts()) : the_post(); ?>

                <li class="lineup_item">
                  <a class="tab_link" href="<?php the_permalink(); ?>" target="_blank">
                    <time class="lineup_date" datetime="<?php the_date('Y-m-d'); ?>"> <?php the_date('Y-m-d'); ?></time>
                    <span class="lineup_category"><?php the_category(', '); ?></span>
                    <p class="lineup_text"><?php the_title(); ?></p>
                  </a>
                </li>

              <?php endwhile; ?>
            <?php endif; ?>


          </ul>
        </div>
      </div>
      <div class="tab_content" data-content="press">
        <p>プレスリリースの内容</p>
      </div>
    </div>
  </section>
</main>

<?php get_footer(); ?>