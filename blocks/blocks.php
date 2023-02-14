<?php
function register_acf_block_types() {
  //Done
    acf_register_block_type(array(
        'name'              => 'accordions',
        'title'             => __('Accordions'),
        'render_template'   => 'blocks/accordions/block-accordions.php',
        'category'          => 'formatting',
        'icon' => array(
          'background' => '#bc9c3b',
          'foreground' => '#fff',
          'src' => 'ellipsis',
        ),
      'mode'            => 'preview', 
      'keywords'          => array( 'Accordions' ),
      'supports' => array( 'align' =>false ),
      'enqueue_assets'    => function(){
          wp_enqueue_style( 'go-accordions',  get_template_directory_uri() . '/blocks/accordions/accordions.min.css' );
          wp_enqueue_script('go-accordions', get_template_directory_uri().'/blocks/accordions/accordions.js', array( 'jquery' ),'4', true );
      },
    ));
     acf_register_block_type(array(
        'name'              => 'cta',
        'title'             => __('CTA'),
        'render_template'   => 'blocks/cta/cta.php',
        'category'          => 'formatting',
        'icon' => array(
          'background' => '#bc9c3b',
          'foreground' => '#fff',
          'src' => 'ellipsis',
        ),
      'mode'            => 'preview', 
      'keywords'          => array( 'list' ),
      'supports' => array( 'align' =>false ),
     
    ));

    acf_register_block_type(array(
        'name'              => 'get-know',
        'title'             => __('Get to know'),
        'render_template'   => 'blocks/get-know/get-know.php',
        'category'          => 'formatting',
        'icon' => array(
          'background' => '#bc9c3b',
          'foreground' => '#fff',
          'src' => 'ellipsis',
        ),
      'mode'            => 'preview', 
      'keywords'          => array( 'list' ),
      'supports' => array( 'align' =>false ),
     
    ));
    acf_register_block_type(array(
        'name'              => 'opinions',
        'title'             => __('Opinions'),
        'render_template'   => 'blocks/opinions/block-opinions.php',
        'category'          => 'formatting',
        'icon' => array(
          'background' => '#bc9c3b',
          'foreground' => '#fff',
          'src' => 'ellipsis',
        ),
      'mode'            => 'preview', 
      'keywords'          => array( 'opinions' ),
      'supports' => array( 'align' =>false ),
      'enqueue_assets'    => function(){
          wp_enqueue_style( 'go-opinions',  get_template_directory_uri() . '/blocks/opinions/opinions.min.css' );
          wp_enqueue_script('go-opinions', get_template_directory_uri().'/blocks/opinions/opinions.js', array( 'jquery' ),'4', true );
      },
    ));
    acf_register_block_type(array(
        'name'              => 'numbers',
        'title'             => __('Numbers'),
        'render_template'   => 'blocks/numbers/numbers.php',
        'category'          => 'formatting',
        'icon' => array(
          'background' => '#bc9c3b',
          'foreground' => '#fff',
          'src' => 'ellipsis',
        ),
      'mode'            => 'preview', 
      'keywords'          => array( 'numbers' ),
      'supports' => array( 'align' =>false ),
      'enqueue_assets'    => function(){
          wp_enqueue_style( 'go-numbers',  get_template_directory_uri() . '/blocks/numbers/numbers.min.css' );
      },
    ));
}
if( function_exists('acf_register_block_type') ) {
    add_action('acf/init', 'register_acf_block_types');
}
