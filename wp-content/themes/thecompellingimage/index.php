<?php get_header(); ?>
<div class="content_row">
<div class="row1">
<div class="txt_row_home">Popular Courses</div>
<?php   //if ( function_exists(dynamic_sidebar('Popular courses Section')) ) :
            //dynamic_sidebar('Popular courses Section'); endif; ?>
<?php
// Setup your custom query
$args = array( 'post_type' => 'product','meta_key' => 'Popular Course','posts_per_page' => 4,'product_cat' => 'Photography','orderby' => 'id', 'order' => 'DESC');
$loop = new WP_Query( $args );
?>
<div class="img_col1">
<div class="col1txt">Photography</div>
<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
<div class="row1img"> 
<?php /*?>	
<a href="<?php echo bloginfo('url'); ?>/programmes/#<?php the_title(); ?>" class="img_txt1">
<?php */ ?>
<a href="<?php echo bloginfo('url'); ?>/?post_type=product" class="img_txt1">
<?php echo get_the_post_thumbnail($loop->post->ID,array(210,94)); ?>
<span><?php the_title(); ?></span>
</a></div>
<?php endwhile; wp_reset_query(); // Remember to reset ?>
</div>

<?php
// Setup your custom query
$args = array( 'post_type' => 'product','meta_key' => 'Popular Course','posts_per_page' => 4,'product_cat' => 'Multimedia','orderby' => 'id', 'order' => 'DESC');
$loop = new WP_Query( $args );
?>
<div class="img_col2">
<div class="col1txt">Multimedia</div>
<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
<div class="row1img"> 
<?php /*?>		
<a href="<?php echo bloginfo('url'); ?>/programmes/#<?php the_title(); ?>" class="img_txt1">
<?php */ ?>
<a href="<?php echo bloginfo('url'); ?>/?post_type=product" class="img_txt1">
<?php echo get_the_post_thumbnail($loop->post->ID,array(210,94)); ?>
<span><?php the_title(); ?></span>
</a>
</div>
<?php endwhile; wp_reset_query(); // Remember to reset ?>
</div>

</div>
</div>
<?php if ( function_exists(dynamic_sidebar('Free Lesson Section')) ) : ?>
<div class="get_start_row1_wrapper">
<div class="get_start_row1">
<?php   if ( function_exists(dynamic_sidebar('Free Lesson Section')) ) :
            dynamic_sidebar('Free Lesson Section'); endif; ?>	
</div>
</div>

<div class="get_start_black">
<div class="get_start_black_row">
<?php   if ( function_exists(dynamic_sidebar('Free Lesson Section')) ) :
            dynamic_sidebar('Free Lesson Section'); endif; ?>	
</div>
</div>
<?php  endif; ?>
<div class="findoffer_row">
<div class="findoffer_inner">
<h1 class="title">Find out more about this great offer!</h1>
<a class="signup tdn" href="<?php echo bloginfo('url'); ?>/?page_id=7"> Sign Up for Course</a>
</div>
</div>
<div class="row_black_wrapper overflow_fix">
<div class="row_inner">
<p class="title_red txt_center">Train with the World's Top Pro Photographers and Photoshop Experts!</p>
<p class="title_grey txt_center">Featured Instructors</p>


<?php  	

		if ( function_exists(dynamic_sidebar('Featured Instructors Section')) ) :
            dynamic_sidebar('Featured Instructors Section');
             endif; ?>	
<?php   if ( function_exists(dynamic_sidebar('Featured Instructors Bottom')) ) :
            dynamic_sidebar('Featured Instructors Bottom');
             endif; ?>	
<?php /* ?> 
<ul class="products">
    <?php
        $args = array( 'post_type' => 'product', 'posts_per_page' => 6, 'product_cat' => 'Photography', 'orderby' => 'rand' );
        $loop = new WP_Query( $args );
        while ( $loop->have_posts() ) : $loop->the_post(); global $product; ?>
           
                <li class="product">    

                    <a href="<?php echo get_permalink( $loop->post->ID ) ?>" title="<?php echo esc_attr($loop->post->post_title ? $loop->post->post_title : $loop->post->ID); ?>">

                        <?php woocommerce_show_product_sale_flash( $post, $product ); ?>

                        <?php if (has_post_thumbnail( $loop->post->ID )) echo get_the_post_thumbnail($loop->post->ID, 'shop_catalog'); else echo '<img src="'.woocommerce_placeholder_img_src().'" alt="Placeholder" width="300px" height="300px" />'; ?>

                        <h3><?php the_title(); ?></h3>

                        <span class="price"><?php echo $product->get_price_html(); ?></span>                    

                    </a>

                    <?php woocommerce_template_loop_add_to_cart( $loop->post, $product ); ?>

                </li>

    <?php endwhile; ?>
    <?php wp_reset_query(); ?>
</ul><!--/.products-->
<?php */ ?>
            
</div>
</div>
<div class="row_grey_wrapper overflow_fix">
<div class="row_inner">
<p class="title_red_small">Testimonials</p>
<?php   if ( function_exists(dynamic_sidebar('Testimonials')) ) :
            dynamic_sidebar('Testimonials'); endif; ?>	
</div>
</div>
<?php get_footer(); ?>			