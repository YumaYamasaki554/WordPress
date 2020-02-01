<!-- header取得 -->
<?php get_header(); ?>

    <main class="bg-light">

        <div class="container">
            <div class="row py-3">
                <!-- メインコンテンツ -->
                <div class="col-md-8 col-12">
                    <?php while(have_posts()) : the_post(); ?>
                        <div class=" bg-white shadow pb-3 mb-3">
                            <div class="bg-dark py-1">
                                <!-- 日付 -->
                                <time class="text-light ml-3 postedTime"><?php the_time('Y/m/d') ?></time>
                            </div>
                            <div class="text-center">
                                <!-- コンテンツタイトル -->
                                <h2 class="h4 px-2 pt-4"><?php the_title(); ?></h2>
                                <!-- カテゴリー -->
                                <?php the_category(''); ?>
                                <!-- サムネイル -->
                                <div class="pt-2 pb-5">
                                    <?php if(has_post_thumbnail()) : ?>
                                        <?php the_post_thumbnail( '', array( 'class' => 'img-fluid' ) ); ?>
                                    <?php else: ?>
                                    <!-- サムネイル画像を設定していないときの画像はここで設定 -->
                                        <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/img/20161006_noimage.svg" alt="サムネイル画像がありません">
                                   <?php endif; ?>
                                </div>
                            </div>
                            <div class="px-5 pb-3">
                                <!-- 本文 -->
                                <?php the_content(); ?>
                            </div>
                           
                            <!-- メインコンテンツ下部 -->
                            <?php get_template_part('articleBottom'); ?>
                        </div>
                    <?php endwhile; ?>
                </div>
                
                <!-- sidebar取得 -->
                <?php get_sidebar(); ?>    
            
            </div>

        </div>
        <!-- /container -->
    </main>

<!-- footer取得 -->
<?php get_footer(); ?>