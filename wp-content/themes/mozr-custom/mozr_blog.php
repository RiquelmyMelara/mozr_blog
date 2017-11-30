
<?php
/*
Template Name: MOZR Blog Template
*/
get_header(); ?>
<div class="title" >
    <?php  if($_GET["category"] == null) { ?>
        <h1>
        <?php echo strtoupper(str_replace('O',"<span style='color: #EF4B26'>O</span>", get_the_title())) ?>
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
            $post_per_pages = 3;
            $args = array( 
                'paged' => $paged,
                'post_type' => 'post',
                'posts_per_page' => $post_per_pages);

            if($_GET["category"] != null) {
                $args['category'] = $_GET["category"];
            }

            if($_GET["recent"] == true) {
                $args['orderby'] = 'post_date';
                $args['order'] = 'DESC';                
            }

            if($_GET["popular"] == true){
                $args['meta_key'] = 'mozr_post_views_count';
                $args['orderby'] = 'meta_value';
                $args['date_query'] = array( array( 'after' => '1 month ago'));
                $args['order'] = 'DESC';                
            }
            
            $lastposts = new WP_Query($args);
            
            while($lastposts->have_posts()) : $lastposts->the_post();
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
                
             ?>
             <div class="navigation col-md-12">
                <?php 
                    $big = 999999999;                   
                    $paging_args = array(
                        'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
                        'format' => '?paged=%#%',
                        'total'        => $lastposts->max_num_pages,
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