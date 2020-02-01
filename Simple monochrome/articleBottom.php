<div class="container">

     <!-- SNS用ボタン -->
    <div class="borderDot-t-dark d-flex py-3">
    <a class="facebook d-block w-100 px-5 py-2 text-center" href="#">
        <i class="fab fa-facebook-f text-white fa-lg"></i>
    </a>
    <a class="twitter d-block w-100 px-5 py-2 text-center" href="#">
        <i class="fab fa-twitter text-white fa-lg"></i>
    </a>
    <a class="line d-block w-100 px-5 py-2 text-center" href="#">
        <i class="fab fa-line text-white fa-lg"></i>
    </a>
    </div>

    <!-- 次の記事＆前の記事 -->
    <?php 
    // 前の記事を取得
    $prev_post = get_previous_post();   
    if( !empty( $prev_post ) ) {
        $url = get_permalink( $prev_post->ID );
    }

    // 次の記事を取得
    $next_post = get_next_post();
    if( !empty( $next_post ) ) {
        $url = get_permalink( $next_post->ID );
    }
    ?>
    <div class="pt-3 pb-2 d-flex justify-content-between">
        <?php if( $next_post  ) : ?>
            <?php next_post_link('%link', '<i class="fas fa-angle-left bottomlink-left text-white py-3 px-1"></i><div class="d-inline-block py-3 px-2 text-dark">%title</div>'); ?>
        <?php else : ?>
            <p class="d-inline-block px-2"><i class="fas fa-angle-left bottomlink-left text-white py-3 px-1 mr-2"></i>この記事が最新の記事です。</p>
        <?php endif; ?>
        <?php if( $prev_post) : ?>
            <?php previous_post_link('%link', '<div class="d-inline-block py-3 px-2 text-dark">%title</div><i class="fas fa-angle-right bottomlink-right text-white py-3 px-1"></i>'); ?>
        <?php else : ?>
            <p class="d-inline-block px-2">この記事が一番古い記事です。<i class="fas fa-angle-right bottomlink-right text-white py-3 px-1 ml-2"></i></p>
        <?php endif; ?>
    </div>


    <!-- コメントフォーム -->
    <!-- <form class="shadow-sm">
        <div class="container p-3 bg-light">
            <label class="px-3 py-3 commentLabel borderDot-b-dark d-block" for="exampleFormControlTextarea1">コメントする</label>
            <textarea class="form-control p-3 mb-3" id="exampleFormControlTextarea1" rows="8"></textarea>
            <button type="button" class="btn btn-dark">コメントを送信</button>
        </div>
    </form>                                 -->

</div>