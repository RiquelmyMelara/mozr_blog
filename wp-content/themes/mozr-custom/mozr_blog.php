
<?php
/*
Template Name: MOZR Blog Template
*/
get_header(); ?>
<div class="title" >
    <?php  if($_GET["category"] == null) { ?>
        <h1>
            <?php echo single_post_title() ?>
        </h1>
    <?php } else { ?>
        <h1>
            <?php 
            echo strtoupper(str_replace('O',"<span style='color: #EF4B26'>O</span>", get_the_category_by_ID(3)));
            ?>
        </h1>
    <?php } ?>
</div>
<div id="main-content" class="col-md-12">
    <div class='col-md-12 links-post' style='height: 25px; margin-bottom: 25px;'>
        <a style='width: 130px; display: inline-block;' href="<?php echo get_site_url() ?>/blog/?recent=true">Most recent</a>
        <a href="<?php echo get_site_url() ?>/blog/?popular=true">Popular</a>
        <?php
            $categories = get_categories( array(
                'orderby' => 'name',
                'parent'  => 0
            ) );
        ?>
        <select name="" id="categories" class='select-category'>
            <option value="">All categories</option>
            <?php foreach ( $categories as $category ) { 
                if($_GET["category"] == $category->cat_ID) { ?>
                    <option selected value="<?php echo $category->cat_ID ?>"><?php echo $category->name ?></option>
                <?php } else { ?>
                    <option value="<?php echo $category->cat_ID ?>"><?php echo $category->name ?></option>
                <?php } ?>
            <?php } ?>
        </select>
    </div>
            <?php
$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
            if($_GET["category"] == null) {
                $lastposts = get_posts( array(
                    'posts_per_page' => 3,
                    'paged' => $paged
                ) );
            }else{
                $lastposts = get_posts( array(
                    'posts_per_page' => 3,
                    'paged' => $paged,
                    'category' => $_GET["category"]
                ) );
            }


            if($_GET["recent"] == true) {
                $args = array(
                    'numberposts' => 10,
                    'offset' => 0,
                    'category' => 0,
                    'orderby' => 'post_date',
                    'order' => 'DESC',
                    'include' => '',
                    'exclude' => '',
                    'meta_key' => '',
                    'meta_value' =>'',
                    'post_type' => 'post',
                    'post_status' => 'draft, publish, future, pending, private',
                    'suppress_filters' => true
                );

                $lastposts = wp_get_recent_posts( $args, ARRAY_A );
            }

            if($_GET["popular"] == true){
                $popularposts = new WP_Query( array( 
                    'post_type' => 'post',
                    'posts_per_page' => '10',
                    'meta_key' => 'mozr_post_views_count', 
                    'orderby' => 'meta_value',
                    'date_query'     => array(
                            array(
                                'after' => '1 month ago'
                            )
                        ),
                    'order' => 'DESC'  ) );
            }

            
            
                if($_GET["popular"] == true){
                    while($popularposts->have_posts()) : $popularposts->the_post();
                    ?>
                    <div class="col-md-6">
                        <div class="post-container">
                            <div class="post-category">
                                <a href="<?php echo get_site_url() ?>/blog/?category=<?php echo get_the_category()[0]->cat_ID; ?>"><?php echo get_the_category()[0]->cat_name; ?></a>
                            </div>
                            <img src="<?php echo the_post_thumbnail_url() ?>" alt="Feature Image">
                            <div class='blog-content'>
                                <p class='post-date'><?php echo get_the_date()?></p>
                                <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                                <p class='post-description'>
                                    <?php echo get_the_excerpt(); ?>
                                </p>
                                <a href="<?php the_permalink(); ?>">
                                    <div class="read-this">
                                        Read this post
                                    </div>
                                </a>

                                <a href="" class='post-author'>By <?php echo get_the_author()?></a>
                            </div>
                        </div>
                    </div>
                    <?php
                    endwhile;
                }else{
                    foreach ( $lastposts as $post ) :
                        setup_postdata( $post ); ?>
                        <div class="col-md-6">
                            <div class="post-container">
                                <div class="post-category">
                                    <a href="<?php echo get_site_url() ?>/blog/?category=<?php echo get_the_category()[0]->cat_ID; ?>"><?php echo get_the_category()[0]->cat_name; ?></a>
                                </div>
                                <img src="<?php echo the_post_thumbnail_url() ?>" alt="Feature Image">
                                <div class='blog-content'>
                                    <p class='post-date'><?php echo get_the_date()?></p>
                                    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                                    <p class='post-description'>
                                        <?php echo get_the_excerpt(); ?>
                                    </p>
                                    <a href="<?php the_permalink(); ?>">
                                        <div class="read-this">
                                            Read this post
                                        </div>
                                    </a>
    
                                    <a href="" class='post-author'>By <?php echo get_the_author()?></a>
                                </div>
                            </div>
                        </div>
                    <?php
                    endforeach; 
                }
                
             ?>
             <div class="navigation col-md-12">
                <?php 
                                
                    $paging_args = array(
                        'base'         => '%_%',
                        'format'       => '?paged=%#%',
                        'total'        => count($lastposts),
                        'current'      => max(1, get_query_var('paged')),
                        'end_size'     => 1,
                        'mid_size'     => 1,
                        'prev_next'    => True,
                        'prev_text'    => __('« Previous'),
                        'next_text'    => __('Next »')
                    );
                    $lateset_posts_paging = paginate_links($paging_args);
                    echo $lateset_posts_paging;
                ?>
            </div>
</div>

<?php
get_footer();