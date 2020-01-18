<footer class="bg-dark">
        <div class="container">
            <div class="row">

                <!-- About Me -->
                <div class="col-md-4 col-12">
                    <div class="py-5 px-3">                        
                        <div>
                            <?php dynamic_sidebar( 'footer_widget01' ); ?>
                        </div>
                        <?php
                            $defaults = array(
                                'menu_class'      => 'text-white list-unstyled', // ulタグに着けるクラス名
                                'container'       => false,
                                'link_before'     => '<span class="text-white footerLink">',
                                'link_after'      => '<span>',
                                'theme_location'  => 'footer-navigation',
                            );
                            wp_nav_menu( $defaults );
                        ?>
                    </div>
                </div>

                <!-- Portfolio -->
                <div class="col-md-4 col-12 py-5 px-3">
                    <h2 class="h4 text-white border-bottom">Portfolio</h2>
                    <?php
                        $defaults = array(
                            'menu_class'      => 'text-white list-unstyled', // ulタグに着けるクラス名
                            'container'       => false,
                            'link_before'     => '<span class="text-white py-3 d-block borderDot-b-white">',
                            'link_after'      => '<span>',
                            'theme_location'  => 'portfolio-navigation',
                        );
                        wp_nav_menu( $defaults );
                    ?>
                </div>

                <!-- Twitter -->
                <div class="col-md-4 col-12">
                    <div class="py-5 px-3">
                        <?php dynamic_sidebar( 'footer_widget02' ); ?>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <!-- <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js " integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n " crossorigin="anonymous "></script> -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js " integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo " crossorigin="anonymous "></script>
    <!-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js " integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6 " crossorigin="anonymous "></script> -->
    <?php wp_footer(); ?>
</body>

</html>