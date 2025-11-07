<?php
/**
 * Custom Header file for Group C (Bootstrap + Font Awesome)
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header id="site-header" class="custom-header border-bottom bg-white py-2">
    <div class="container d-flex align-items-center justify-content-between">

        <!-- Left: Logo + Home + Search -->
        <div class="d-flex align-items-center gap-3 flex-grow-1">

            <!-- Logo -->
            <div class="fw-bold fs-5 me-3">
                <a href="<?php echo esc_url(home_url('/')); ?>" class="text-decoration-none text-dark">Group C</a>
            </div>

            <!-- Home -->
            <div>
                <a href="<?php echo esc_url(home_url('/')); ?>" class="btn btn-light px-3 py-1">Home</a>
            </div>

            <!-- Search form -->
            <form role="search" method="get" class="d-flex ms-2" action="<?php echo esc_url(home_url('/')); ?>">
                <input type="search" name="s" class="form-control form-control-sm" placeholder="Search" />
                <button type="submit" class="btn btn-outline-secondary btn-sm ms-1">Submit</button>
            </form>
        </div>

        <!-- Center: Menu -->
        <nav class="mx-4">
            <?php
            wp_nav_menu(array(
                'theme_location' => 'primary',
                'menu_class'     => 'main-menu d-flex list-unstyled mb-0 gap-4',
                'container'      => false,
                'items_wrap'     => '<ul id="%1$s" class="%2$s">%3$s</ul>',
            ));
            ?>
        </nav>

        <!-- Right: Icons -->
        <div class="d-flex align-items-center gap-3">
            <!-- Menu -->
            <button class="btn btn-link text-dark d-flex flex-column align-items-center">
                <i class="fa-solid fa-ellipsis"></i>
                <small>Menu</small>
            </button>

            <!-- Search -->
            <button class="btn btn-link text-dark d-flex flex-column align-items-center">
                <i class="fa-solid fa-magnifying-glass"></i>
                <small>Search</small>
            </button>

            <!-- Account Dropdown -->
            <div class="dropdown">
                <button class="btn btn-link text-dark dropdown-toggle d-flex flex-column align-items-center" data-bs-toggle="dropdown">
                    <i class="fa-solid fa-user-circle"></i>
                    <small>Account</small>
                </button>
                <ul class="dropdown-menu dropdown-menu-end shadow-sm">
                    <li><a class="dropdown-item" href="#">Profile</a></li>
                    <li><a class="dropdown-item" href="#">Settings</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="#">Logout</a></li>
                </ul>
            </div>
        </div>
    </div>
</header>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<?php wp_footer(); ?>
</body>
</html>
