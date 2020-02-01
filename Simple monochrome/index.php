<!-- header取得 -->
<?php get_header(); ?>
    <main class="bg-light">
        <?php if(get_theme_mod('pickup_display')) : ?>
            <?php 
            $ID1 = get_theme_mod('pickupID1', ''); 
            $ID2 = get_theme_mod('pickupID2', ''); 
            $ID3 = get_theme_mod('pickupID3', ''); 
            ?>
            <div class="w-100 bg-white">
                <div class="container">
                    <div class="row py-3">
                        <!-- 記事１ -->
                        <?php if(!empty($ID1)) : ?>
                            <div class="col-md-4 col-12">
                                <div class="bg-white">
                                    <!-- サムネイル -->
                                    <?php
                                    $thumbnail_id1 = get_post_thumbnail_id($ID1); 
                                    $eye_img1 = wp_get_attachment_image_src( $thumbnail_id1, '');
                                    $permalink1 = get_permalink($ID1);
                                    ?>
                                    <a href="<?php echo $permalink1; ?>">
                                        <div class="shadow-sm">
                                            <img class="img-fluid" src="<?php echo $eye_img1[0]; ?>" alt="">
                                        </div>
                                    </a>
                                </div>
                            </div>
                        <?php endif; ?>
                        <!-- 記事２ -->
                        <?php if(!empty($ID2)) : ?>
                            <div class="col-md-4 col-12">
                                <div class="bg-white">
                                    <!-- サムネイル -->
                                    <?php
                                    $ID2 = get_theme_mod('pickupID2', '');
                                    $thumbnail_id2 = get_post_thumbnail_id($ID2); 
                                    $eye_img2 = wp_get_attachment_image_src( $thumbnail_id2, '');
                                    $permalink2 = get_permalink($ID2);
                                    ?>
                                    <a href="<?php echo $permalink2; ?>">
                                        <div class="shadow-sm">
                                            <img class="img-fluid" src="<?php echo $eye_img2[0]; ?>" alt="">
                                        </div>
                                    </a>
                                </div>
                            </div>
                        <?php endif; ?>
                        <!-- 記事３ -->
                        <?php if(!empty($ID3)) : ?>
                            <div class="col-md-4 col-12">
                                <div class="bg-white">
                                    <!-- サムネイル -->
                                    <?php
                                    $ID3 = get_theme_mod('pickupID3', '');
                                    $thumbnail_id3 = get_post_thumbnail_id($ID3); 
                                    $eye_img3 = wp_get_attachment_image_src( $thumbnail_id3, '');
                                    $permalink3 = get_permalink($ID3);
                                    ?>
                                    <a href="<?php echo $permalink3; ?>">
                                        <div class="shadow-sm">
                                            <img class="img-fluid" src="<?php echo $eye_img3[0]; ?>" alt="">
                                        </div>
                                    </a>
                                </div>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        <?php endif; ?>

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
                                <h2 class="h4 px-3 pt-4"><?php the_title(); ?></h2>
                                <!-- カテゴリー -->
                                <?php the_category(''); ?>
                                <!-- サムネイル -->
                                <div class="py-2">
                                    <?php if(has_post_thumbnail()) : ?>
                                        <?php the_post_thumbnail( '', array( 'class' => 'img-fluid' ) ); ?>
                                    <?php else: ?>
                                    <!-- サムネイル画像を設定していないときの画像はここで設定 -->
                                        <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/img/20161006_noimage.svg" alt="サムネイル画像がありません">
                                    <?php endif; ?>
                                </div>
                                <!-- デスクリプション -->
                                <div class="px-3 mt-3 mb-2 text-secondary">
                                    <?php the_excerpt(); ?>
                                </div>
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

                    <!-- 数字付きページ移動 -->
                    <div class="mt-3 px-3 py-2">
                    <?php  
                        $paginationhtml = get_the_posts_pagination();
                        echo preg_replace('/\<h2 class=\"screen-reader-text\"\>(.*?)\<\/h2\>/ui', '', $paginationhtml);
                    ?>
                    </div>
                </div>
                
                <!-- sidebar取得 -->
                <?php get_sidebar(); ?>    

            </div>

        </div>
        <!-- /container -->
    </main>

<!-- footer取得 -->
<?php get_footer(); ?>