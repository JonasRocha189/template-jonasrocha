<?php get_header(); ?>

<div class="jumbotron">
	<div class="container">
		<h1 class="display-3"><?php the_title(); ?></h1>
		<nav aria-label="breadcrumb">
		  <ol class="breadcrumb">
		    <li class="breadcrumb-item"><a href="/">Home</a></li>
		    <li class="breadcrumb-item"><a href="/<?php echo get_the_category(); ?>"><?php the_category(); ?></a></li>
		    <li class="breadcrumb-item active" aria-current="page">Data</li>
		  </ol>
		</nav>
	</div>
</div>

<div class="container" style="padding-top: 70px">
	<div class="row">
		<div class="col-lg-3">
			<?php get_template_part( 'template-parts/sidebar-ads');  ?>
		</div>		
		<div class="col-lg-9">
			<?php
        if (have_posts()):
          the_content();
        endif;
      ?>
		</div>
	</div><!-- /.row -->
</div><!-- /.container -->
<?php get_footer(); ?>