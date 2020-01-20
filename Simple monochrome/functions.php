<?php 
    // サムネイル（アイキャッチ画像）使用許可
    add_theme_support('post-thumbnails');

    // ナビゲーション機能実装
    register_nav_menus(
        array(
            'gloval-navigation' => 'グローバル',
            'footer-navigation' => 'フッター',
            'portfolio-navigation' => 'ポートフォリオ',
        )
    );

    // ウィジェット登録（サイドバー用）
    function arphabet_widgets_init() {

        register_sidebar( array(
            'name' => 'プロフィール',           
            'id' => 'sidebar_widget01',
            'before_widget' => '<div class="bg-white pb-3 mb-3">',
            'after_widget' => '</div>',
            'before_title' => '<p class="bg-dark text-light font-weight-bold pl-3 py-1 profile">',
            'after_title' => '</p>',
        ) );

        register_sidebar( array(
            'name' => '検索窓',
            'id' => 'sidebar_widget02',
            'before_widget' => '<div class="bg-white pb-3 mb-3">',
            'after_widget' => '</div>',
            'before_title' => '<p class="bg-dark text-light font-weight-bold pl-3 py-1 search">',
            'after_title' => '</p>',
        ) );

        register_sidebar( array(
            'name' => 'ピックアップ記事',
            'id' => 'sidebar_widget03',
            'before_widget' => '<div class="bg-white pb-3 mb-3">',
            'after_widget' => '</div>',
            'before_title' => '<p class="bg-dark text-light font-weight-bold pl-3 py-1 pickup">',
            'after_title' => '</p>',
        ) );
        register_sidebar( array(
            'name' => 'フッターAbout',
            'id' => 'footer_widget01',
            'before_widget' => '<div class="text-white">',
            'after_widget' => '</div>',
            'before_title' => '<h2 class="h4 text-white border-bottom">',
            'after_title' => '</h2>',
        ) );
        register_sidebar( array(
            'name' => 'フッターTwitter',
            'id' => 'footer_widget02',
            'before_widget' => '<div>',
            'after_widget' => '</div>',
            'before_title' => '<h2 class="h4 text-white border-bottom">',
            'after_title' => '</h2>',
        ) );
    }
    add_action( 'widgets_init', 'arphabet_widgets_init' );

    // 外観（カスタマイズ）機能実装
    function my_theme_customize_register( $wp_customize ) {

    //-----------------------------------------------------------------------------
    //  ピックアップ記事（上）
    //-----------------------------------------------------------------------------        

        // セクション
        $wp_customize->add_section( 'my_theme_section_pickup_head', array(
          'title'     => 'ピックアップ記事（上）',
          'priority'  => 200,
        ));
      
        // セッティング
        $wp_customize->add_setting( 'my_theme_options[pickup_head]', array(
          'default'   => '',
          'type'      => 'option',
          'transport' => 'postMessage',
        ));
      
        // コントロール
        $wp_customize->add_control( 'my_theme_options_pickup_head', array(
          'settings'  => 'my_theme_options[pickup_head]',
          'label'     => 'テキスト入力',
          'section'   => 'my_theme_section_pickup_head',
          'type'      => 'text',
        ));

        $wp_customize->add_control( 'my_theme_options_pickup_head2', array(
            'settings'  => 'my_theme_options[pickup_head]',
            'label'     => 'テキスト入力2',
            'section'   => 'my_theme_section_pickup_head',
            'type'      => 'text',
        ));
  
  
    //-----------------------------------------------------------------------------
    //  ピックアップ記事（横）
    //-----------------------------------------------------------------------------        

        // セクション
        $wp_customize->add_section( 'section_pickup_side', array(
            'title'     => 'ピックアップ記事（サイド）',
            'priority'  => 200,
          ));
        
          // セッティング
          $wp_customize->add_setting( 'options[pickup_side]', array(
            'default'   => '',
            'type'      => 'option',
            'transport' => 'postMessage',
          ));
        
          // コントロール
          $wp_customize->add_control( 'control_pickup_side', array(
            'settings'  => 'options[pickup_side]',
            'label'     => 'テキスト入力3',
            'section'   => 'section_pickup_side',
            'type'      => 'text',
          ));
  
          $wp_customize->add_control( 'control_pickup_side2', array(
              'settings'  => 'options[pickup_side]',
              'label'     => 'テキスト入力4',
              'section'   => 'section_pickup_side',
              'type'      => 'text',
            ));

      }
      add_action( 'customize_register', 'my_theme_customize_register' );

?>