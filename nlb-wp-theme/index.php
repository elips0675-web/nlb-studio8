<?php get_header(); ?>

<div class="container py-5">
    <div class="jumbotron">
        <h1 class="display-4">Добро пожаловать!</h1>
        <p class="lead">Это главная страница демонстрационного проекта на Bootstrap 4.</p>
        <hr class="my-4">
        <p>Используйте меню для навигации по сайту.</p>
    </div>

    <?php if ( have_posts() ) : ?>
        <?php while ( have_posts() ) : the_post(); ?>
            <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
            <?php the_content(); ?>
        <?php endwhile; ?>
    <?php endif; ?>

</div>

<?php get_footer(); ?>