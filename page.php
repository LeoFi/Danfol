<?php 
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other 'pages' on your WordPress site will use a different template.
 *
 */
get_header(); ?>
<div class="smallhead">
</div>
<!-- begin / breadcrumbs

<div class="page-intro" style="margin-top: 0px;">
    <div class="container">
        <div class="row">
            <div class="col-md-12  col-sm-12 ">
                <ol class="breadcrumb ">
                    <i class="fa fa-home pr-10"></i> <?php aripop_breadcrumbs(); ?>
                </ol>
            </div>
        </div>
    </div>
</div>

end / breadcrumbs-->

<!--end / page-title-->
<div class="mainblogwrapper">
    <div class="container">
        <div class="row">
            <div class="mainblogcontent">
                <div class="col-md-12">
                    <!-- *** Post loop starts *** -->

                    <!-- *** Post1 Starts *** -->
                    <?php if (have_posts()) while (have_posts()) : the_post(); ?> 
                            <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                                <div class="article-page">
                                   <!-- <div class="headline"><h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2></div> -->

                                    <?php the_content(); ?>
                                </div>
                            </div>
                        <?php endwhile; ?>
                    <div class="clearfix"></div>

                    <!-- *** Post1 Starts Ends *** -->
                    <!-- *** Post loop ends*** -->
                    <div class="clearfix"></div>
                    <!-- ***Comment Template *** -->
                    <?php comments_template(); ?>
                    <!-- ***Comment Template *** -->
                </div>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>
