<?php
/**
 * Custom Single Post Template (Group C)
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 */

get_header();
?>

<style>
/* ===============================
   CUSTOM SINGLE POST PAGE
   =============================== */
.single-layout {
    background-color: #f9f9f9;
    padding: 60px 0;
    font-family: "Segoe UI", sans-serif;
}
.post-box {
    background: #fff;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0,0,0,0.05);
    padding: 30px;
}

/* ===============================
   LEFT SIDEBAR (CATEGORIES)
   =============================== */
.sidebar-left {
    background: #ffffff;
    border-radius: 10px;
    box-shadow: 0 2px 6px rgba(0,0,0,0.05);
    padding: 20px;
}
.sidebar-left h5 {
    font-weight: bold;
    text-transform: uppercase;
    margin-bottom: 15px;
}

/* ===============================
   RIGHT SIDEBAR (RECENT POSTS)
   =============================== */
.sidebar-right {
    background: #44b8ac;
    border-radius: 10px;
    color: #fff;
    padding: 20px;
    box-shadow: 0 2px 6px rgba(0,0,0,0.05);
}
.sidebar-right h5 {
    font-weight: bold;
    text-transform: uppercase;
    margin-bottom: 15px;
}
.sidebar-right a {
    color: #fff;
    text-decoration: none;
}
.sidebar-right a:hover {
    text-decoration: underline;
}

/* ===============================
   POST DETAIL
   =============================== */
.post-title {
    font-size: 28px;
    font-weight: bold;
    color: #222;
    margin-bottom: 10px;
}
.post-meta {
    color: #777;
    font-size: 14px;
    margin-bottom: 20px;
}
.post-content {
    font-size: 17px;
    color: #444;
    line-height: 1.7;
}

/* ===============================
   PREV / NEXT POSTS (mẫu thầy)
   =============================== */
.custom-prev-next {
    margin-top: 60px;
    padding-top: 30px;
    border-top: 1px solid #eee;
}
.date-box {
    background: #fff;
    border: 1px solid #ddd;
    border-radius: 6px;
    width: 55px;
    height: 55px;
    text-align: center;
    line-height: 1.2;
    display: flex;
    flex-direction: column;
    justify-content: center;
    font-weight: bold;
    font-size: 15px;
    box-shadow: 0 1px 4px rgba(0,0,0,0.05);
}
.date-box span {
    font-size: 11px;
    color: #888;
}
.title-link {
    text-decoration: none;
    font-size: 16px;
    color: #222;
    font-weight: 500;
}
.title-link:hover {
    color: #007bff;
    text-decoration: underline;
}
.custom-prev-next .d-flex:hover {
    background: #f8f9fa;
    transition: 0.3s ease;
    border-radius: 5px;
    padding-left: 5px;
}

/* ===============================
   COMMENT SECTION
   =============================== */
.comment-section {
    margin-top: 60px;
    padding-top: 30px;
    border-top: 1px solid #eee;
}
.comment-section h3 {
    font-size: 20px;
    font-weight: bold;
    margin-bottom: 15px;
}
</style>

<section class="single-layout">
    <div class="container">
        <div class="row gy-4">
            
            <!-- ==========================
                 LEFT SIDEBAR - Categories
                 ========================== -->
            <div class="col-md-3">
                <div class="sidebar-left">
                    <h5>Categories</h5>
                    <?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
                        <?php dynamic_sidebar( 'sidebar-1' ); ?>
                    <?php else : ?>
                        <p class="text-muted">No categories available.</p>
                    <?php endif; ?>
                </div>
            </div>

            <!-- ==========================
                 MAIN CONTENT - Detail Post
                 ========================== -->
            <div class="col-md-6">
                <div class="post-box">
                    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

                        <h1 class="post-title"><?php the_title(); ?></h1>
                        <div class="post-meta">
                            Đăng ngày: <?php echo get_the_date('d/m/Y'); ?> | Tác giả: <?php the_author(); ?>
                        </div>
                        <div class="post-content">
                            <?php the_content(); ?>
                        </div>

                        <!-- ==========================
                             PREV / NEXT POSTS (Mẫu thầy)
                             ========================== -->
                        <div class="custom-prev-next">
                            <?php
                            $prev_post = get_previous_post();
                            $next_post = get_next_post();
                            ?>

                            <?php if ($prev_post): ?>
                                <div class="d-flex align-items-center mb-4">
                                    <div class="date-box me-3">
                                        <strong><?php echo get_the_date('d', $prev_post); ?></strong>
                                        <span><?php echo get_the_date('m', $prev_post); ?></span>
                                    </div>
                                    <a href="<?php echo get_permalink($prev_post); ?>" class="title-link">
                                        <?php echo get_the_title($prev_post); ?>
                                    </a>
                                </div>
                            <?php endif; ?>

                            <?php if ($next_post): ?>
                                <div class="d-flex align-items-center">
                                    <div class="date-box me-3">
                                        <strong><?php echo get_the_date('d', $next_post); ?></strong>
                                        <span><?php echo get_the_date('m', $next_post); ?></span>
                                    </div>
                                    <a href="<?php echo get_permalink($next_post); ?>" class="title-link">
                                        <?php echo get_the_title($next_post); ?>
                                    </a>
                                </div>
                            <?php endif; ?>
                        </div>

                        <!-- COMMENTS -->
                        <div class="comment-section">
                            <?php comments_template(); ?>
                        </div>

                    <?php endwhile; endif; ?>
                </div>
            </div>

            <!-- ==========================
                 RIGHT SIDEBAR - Recent Posts
                 ========================== -->
            <div class="col-md-3">
                <div class="sidebar-right">
                    <h5>Recent Posts</h5>
                    <?php
                    $recent_posts = wp_get_recent_posts(array(
                        'numberposts' => 3,
                        'post_status' => 'publish'
                    ));
                    if ( !empty($recent_posts) ) :
                        foreach ( $recent_posts as $post ) : ?>
                            <div class="d-flex align-items-center border-bottom border-light pb-2 mb-2">
                                <div class="recent-date text-center me-3 bg-light text-dark rounded px-2 py-1">
                                    <strong><?php echo get_the_date('d', $post['ID']); ?></strong><br>
                                    <small><?php echo get_the_date('m', $post['ID']); ?></small>
                                </div>
                                <a href="<?php echo get_permalink($post['ID']); ?>" class="flex-grow-1">
                                    <?php echo esc_html($post['post_title']); ?>
                                </a>
                            </div>
                        <?php endforeach; ?>
                        <div class="text-center mt-3">
                            <a href="<?php echo get_permalink(get_option('page_for_posts')); ?>" class="btn btn-light btn-sm text-uppercase fw-bold">
                                Xem tất cả tin tức
                            </a>
                        </div>
                    <?php else : ?>
                        <p>Chưa có bài viết nào.</p>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
