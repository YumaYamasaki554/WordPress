<!-- header取得 -->
<?php get_header(); ?>

    <main class="bg-light">
        <div class="w-100 bg-white">
            <div class="container">
                <div class="row py-3">
                    <div class="col-md-4 col-12">
                        <div class="bg-white">
                            <!-- サムネイル -->
                            <a href="#">
                                <div class="shadow-sm">
                                    <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/img/6717846322bed72b8645df931d722339_m.jpg" alt="">
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4 col-12">
                        <div class="bg-white">
                            <!-- サムネイル -->
                            <a href="#">
                                <div class="shadow-sm">
                                    <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/img/binary-2380422_1920.jpg" alt="">
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4 col-12">
                        <div class="bg-white">
                            <!-- サムネイル -->
                            <a href="#">
                                <div class="shadow-sm">
                                    <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/img/finger-pointing-at-javascript-code.jpg" alt="">
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row py-3">
                <!-- メインコンテンツ -->
                <div class="col-md-8 col-12">
                    <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
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
                                <div class="py-2">
                                    <?php if(has_post_thumbnail()) : ?>
                                        <?php the_post_thumbnail( '', array( 'class' => 'img-fluid' ) ); ?>
                                    <?php else: ?>
                                    <!-- サムネイル画像を設定していないときの画像はここで設定 -->
                                        <p>サムネイル画像がありません</p>
                                    <?php endif; ?>
                                </div>
                                <!-- デスクリプション -->
                                <p class="px-3 text-secondary"><?php the_excerpt(); ?></p>
                                <!-- ボタン -->
                                <a href="<?php the_permalink(); ?>">
                                    <div class="d-inline-block border p-3 text-secondary">
                                        続きを読む
                                    </div>
                                </a>
                            </div>
                        </div>
                    <?php endwhile; else: ?>
                        <p>記事がありません。</p>
                    <?php endif; ?>
                </div>
                
                <!-- sidebar取得 -->
                <?php get_sidebar(); ?>    
            
            </div>

        </div>
        <!-- /container -->
    </main>

<!-- footer取得 -->
<?php get_footer(); ?>