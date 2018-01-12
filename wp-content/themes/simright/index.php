<?php get_header(); ?>
<section class="main-box video-list">
    <div class="banner">
        <h2 class="text-center">ABOUT US</h2>
        <P>Simulation in your browser</P>
        <P>Accessible,Cost-efficient,For everyone</P>
    </div>
    <section class="contain-box">
        <div class="slide-bar">
            <form class="neck-bar-search">
                <div class="form-group input-group">
                    <input type="text" class="form-control" placeholder="Search">
                    <button type="submit" class="input-group-addon"><i class="glyphicon glyphicon-search"></i></button>
                </div>
            </form>
            <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Viedeo_list_classification') ) : ?>
                <ul>
                    <?php wp_list_categories('depth=1&title_li=&orderby=id&show_count=1&hide_empty=1&child_of=0'); ?>
                </ul>
            <?php endif; ?>
        </div>
        <div class="contain-body">
            
        </div>
    </section>
</section>
<?php get_footer(); ?>