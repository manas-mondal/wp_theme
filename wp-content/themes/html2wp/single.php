<?php get_header();?>

		<!--start page-header -->
		<section id="page-header" class="parallax">
             <div class="overlay"></div>
			<div class="container">
				<h1>Single Work</h1>
                <!--Start Breadcrumb-->
                <div class="breadcrumb">
					
				</div>
                <!--End Breadcrumb-->
			</div>
		</section>
		<!--End page-header -->
		
		<!--Start single-work -->
		<section id="single-work" class="section">
			<?php 
                
                if(have_posts()){
                   
                   while(have_posts()){
                   	the_post();
            ?>
			<div class="container">
				<div class="row">					
					<div class="col-md-8">
					<div style="margin-bottom:50px;">						
						<?php the_post_thumbnail('single-img'); ?>
					</div>
						<h3 class="margin-bottom-15"><?php the_title(); ?></h3>	
						<p><?php the_excerpt() ?></p>					
						 
						<ul class="work-detail-list">
							
							<li><span>Comment :</span><?php echo get_comments_number() ?></li>
							
							<li><span>Date released :</span><?php the_date() ?></li>
						</ul>
					</div>
                    
                    <!--Start Work Detail-->
					<div class="col-md-4 work-detail">
                            <?php dynamic_sidebar('main-sidebar') ?>
                   </div>
                    <!--End Work Detail-->
				</div> <!--/ row-->
			</div> <!--/ container-->
			<?php }} ?>		
		</section>
		<!--End single-work -->
		<?php get_footer(); ?>