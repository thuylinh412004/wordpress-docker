<?php
/**
 * Custom Search Template (Theo mẫu thầy - đầy đủ 13, 5, 14, 15)
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 */
get_header();
?>

<style>
/* ===============================
   SEARCH PAGE LAYOUT
   =============================== */
.search-page {
    background-color: #f9f9f9;
    padding: 50px 0;
    font-family: "Segoe UI", sans-serif;
}
.search-layout {
    display: grid;
    grid-template-columns: 1fr 3fr 1.2fr; /* 13 - 5 - 14 */
    gap: 25px;
}
@media (max-width: 992px) {
    .search-layout {
        grid-template-columns: 1fr;
    }
}

/* ===============================
   MODULE 13 - BÀI VIẾT NỔI BẬT
   =============================== */
.sidebar-left {
    background: #fff;
    border-radius: 10px;
    padding: 20px;
    box-shadow: 0 2px 6px rgba(0,0,0,0.05);
}
.sidebar-left h4 {
    font-size: 18px;
    font-weight: bold;
    margin-bottom: 20px;
    text-align: center;
}
.featured-post {
    margin-bottom: 20px;
    display: flex;
    flex-direction: column;
    gap: 10px;
    border-bottom: 1px solid #eee;
    padding-bottom: 15px;
}
.featured-post:last-child {
    border-bottom: none;
}
.featured-post img {
    width: 100%;
    height: 160px;
    border-radius: 8px;
    object-fit: cover;
}
.featured-post a {
    color: #333;
    font-weight: bold;
    text-decoration: none;
}
.featured-post a:hover {
    color: #007bff;
}

/* ===============================
   MODULE 5 - KẾT QUẢ TÌM KIẾM
   =============================== */
.search-results-box {
    background: #fff;
    border-radius: 10px;
    padding: 25px;
    box-shadow: 0 2px 8px rgba(0,0,0,0.05);
}
.search-results-box h2 {
    text-align: center;
    font-size: 24px;
    margin-bottom: 25px;
}
.search-results-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 25px;
}
@media (max-width: 992px) {
    .search-results-grid { grid-template-columns: repeat(2, 1fr); }
}
@media (max-width: 600px) {
    .search-results-grid { grid-template-columns: 1fr; }
}
.search-item {
    background: #fff;
    border-radius: 10px;
    box-shadow: 0 2px 6px rgba(0,0,0,0.05);
    overflow: hidden;
    transition: all 0.3s ease;
}
.search-item:hover {
    transform: translateY(-5px);
    box-shadow: 0 5px 15px rgba(0,0,0,0.1);
}
.search-thumb img {
    width: 100%;
    height: 200px;
    object-fit: cover;
}
.search-content {
    padding: 15px;
}
.search-content h3 {
    font-size: 18px;
    font-weight: bold;
    margin-bottom: 8px;
}
.search-content h3 a {
    color: #007bff;
    text-decoration: none;
}
.search-content h3 a:hover {
    text-decoration: underline;
}
.search-date {
    color: #888;
    font-size: 13px;
    margin-bottom: 10px;
}
.search-desc {
    font-size: 15px;
    color: #333;
    line-height: 1.6;
}

/* ===============================
   MODULE 14 - BÌNH LUẬN NỔI BẬT
   =============================== */
.sidebar-right {
    background: #fff;
    border-radius: 10px;
    padding: 20px;
    box-shadow: 0 2px 6px rgba(0,0,0,0.05);
}
.sidebar-right h4 {
    font-size: 18px;
    font-weight: bold;
    margin-bottom: 20px;
    text-align: center;
}
.comment-box {
    display: flex;
    flex-direction: column;
    gap: 15px;
}
.comment {
    display: flex;
    align-items: flex-start;
    gap: 10px;
    background: #f9f9f9;
    border-radius: 6px;
    padding: 10px;
}
.comment.reply {
    margin-left: 40px;
    background: #f2f2f2;
}
.comment .avatar img {
    border-radius: 50%;
}
.comment .content {
    flex: 1;
}
.comment .content strong {
    font-weight: bold;
    color: #333;
}
.comment .content p {
    font-size: 14px;
    color: #444;
    line-height: 1.5;
    margin: 5px 0 0 0;
}
.comment .content a {
    font-size: 13px;
    color: #007bff;
}

/* ===============================
   MODULE 15 - LAST POSTS (LATEST NEWS)
   =============================== */
.latest-news-box {
    background: #fff;
    border-radius: 10px;
    box-shadow: 0 3px 10px rgba(0,0,0,0.05);
    padding: 30px 40px;
    margin-top: 40px;
}
.latest-news-box h2 {
    font-size: 22px;
    font-weight: bold;
    color: #222;
    margin-bottom: 25px;
    position: relative;
}
.latest-news-box h2::after {
    content: "";
    position: absolute;
    bottom: -8px;
    left: 0;
    width: 50px;
    height: 3px;
    background: #007bff;
    border-radius: 3px;
}
.news-item {
    display: flex;
    align-items: flex-start;
    gap: 15px;
    position: relative;
    padding: 15px 0;
    border-left: 2px solid #007bff20;
}
.news-item:last-child {
    border-left: none;
}
.news-icon {
    width: 15px;
    height: 15px;
    background-color: #007bff;
    border-radius: 50%;
    position: absolute;
    left: -8px;
    top: 25px;
}
.news-content {
    margin-left: 20px;
    flex: 1;
}
.news-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
}
.news-title {
    font-size: 16px;
    font-weight: 600;
    color: #007bff;
    text-decoration: none;
}
.news-title:hover {
    text-decoration: underline;
}
.news-date {
    font-size: 13px;
    color: #999;
}
.news-excerpt {
    font-size: 15px;
    color: #444;
    line-height: 1.6;
    margin-top: 5px;
}
@media (max-width: 600px) {
    .news-header {
        flex-direction: column;
        align-items: flex-start;
        gap: 4px;
    }
    .news-date {
        font-size: 12px;
    }
}

/* ===============================
   PHÂN TRANG (TRÊN CÙNG MODULE 15)
   =============================== */
.pagination {
    margin-top: 30px;
    text-align: center;
}
</style>

<section class="search-page">
    <div class="container">
        <div class="search-layout">

            <!-- MODULE 13 -->
            <div class="sidebar-left">
                <h4>Bài viết nổi bật</h4>
                <?php
                $featured_posts = get_posts([
                    'numberposts' => 3,
                    'post_status' => 'publish'
                ]);
                foreach ($featured_posts as $post) :
                ?>
                    <div class="featured-post">
                        <a href="<?php echo get_permalink($post->ID); ?>">
                            <?php if (has_post_thumbnail($post->ID)) : ?>
                                <?php echo get_the_post_thumbnail($post->ID, 'medium'); ?>
                            <?php else : ?>
                                <img src="https://via.placeholder.com/400x250?text=No+Image" alt="">
                            <?php endif; ?>
                            <div class="featured-title"><?php echo esc_html($post->post_title); ?></div>
                        </a>
                    </div>
                <?php endforeach; ?>
            </div>

            <!-- MODULE 5 -->
            <div class="search-results-box">
                <h2>Kết quả tìm kiếm cho: "<strong><?php echo get_search_query(); ?></strong>"</h2>
                
                <?php if ( have_posts() ) : ?>
                    <div class="search-results-grid">
                        <?php while ( have_posts() ) : the_post(); ?>
                            <div class="search-item">
                                <div class="search-thumb">
                                    <a href="<?php the_permalink(); ?>">
                                        <?php if ( has_post_thumbnail() ) {
                                            the_post_thumbnail('medium');
                                        } else {
                                            echo '<img src="https://via.placeholder.com/400x250?text=No+Image" alt="">';
                                        } ?>
                                    </a>
                                </div>
                                <div class="search-content">
                                    <div class="search-date">📅 <?php echo get_the_date('d/m/Y'); ?></div>
                                    <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                                    <p class="search-desc"><?php echo wp_trim_words(get_the_excerpt(), 20, '...'); ?></p>
                                </div>
                            </div>
                        <?php endwhile; ?>
                    </div>

                    <div class="pagination">
                        <?php the_posts_pagination([
                            'mid_size' => 2,
                            'prev_text' => __('← Trước'),
                            'next_text' => __('Sau →'),
                        ]); ?>
                    </div>
                <?php else : ?>
                    <div class="no-results">
                        <p>😕 Không tìm thấy kết quả phù hợp với từ khóa của bạn.</p>
                        <form role="search" method="get" class="search-form" action="<?php echo esc_url(home_url('/')); ?>">
                            <input type="search" name="s" placeholder="Nhập từ khóa..." value="<?php echo get_search_query(); ?>">
                            <button type="submit">Tìm kiếm</button>
                        </form>
                    </div>
                <?php endif; ?>

                <!-- MODULE 15 - LAST POSTS -->
                <div class="latest-news-box">
                    <h2>Latest News</h2>
                    <?php
                    $recent_posts = get_posts([
                        'numberposts' => 3,
                        'post_status' => 'publish'
                    ]);
                    if ($recent_posts) :
                        foreach ($recent_posts as $post) :
                    ?>
                        <div class="news-item">
                            <div class="news-icon"></div>
                            <div class="news-content">
                                <div class="news-header">
                                    <a href="<?php echo get_permalink($post->ID); ?>" class="news-title">
                                        <?php echo esc_html($post->post_title); ?>
                                    </a>
                                    <span class="news-date"><?php echo get_the_date('d M, Y', $post->ID); ?></span>
                                </div>
                                <p class="news-excerpt">
                                    <?php echo wp_trim_words(get_the_excerpt($post->ID), 20, '...'); ?>
                                </p>
                            </div>
                        </div>
                    <?php endforeach; endif; ?>
                </div>
            </div>

            <!-- MODULE 14 -->
            <div class="sidebar-right">
                <h4>Bình luận nổi bật</h4>
                <div class="comment-box">
                    <?php
                    $recent_comments = get_comments([
                        'number' => 5,
                        'status' => 'approve',
                        'post_status' => 'publish'
                    ]);
                    if ($recent_comments) :
                        foreach ($recent_comments as $comment) :
                            $avatar = get_avatar($comment->comment_author_email, 45);
                            $author = $comment->comment_author;
                            $excerpt = wp_trim_words($comment->comment_content, 15, '...');
                            $post_link = get_permalink($comment->comment_post_ID);
                            $is_reply = $comment->comment_parent > 0 ? 'reply' : '';
                    ?>
                        <div class="comment <?php echo $is_reply; ?>">
                            <div class="avatar"><?php echo $avatar; ?></div>
                            <div class="content">
                                <strong><?php echo esc_html($author); ?></strong>
                                <p><?php echo esc_html($excerpt); ?></p>
                                <a href="<?php echo esc_url($post_link); ?>">Xem bài viết</a>
                            </div>
                        </div>
                    <?php endforeach;
                    else :
                        echo '<p>Chưa có bình luận nào.</p>';
                    endif;
                    ?>
                </div>
            </div>

        </div>
    </div>
</section>

<?php get_footer(); ?>
