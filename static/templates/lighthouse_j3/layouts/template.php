<?php
/* Copyright (C) YOOtheme GmbH, http://www.gnu.org/licenses/gpl.html GNU/GPL */

// get template configuration
include($this['path']->path('layouts:template.config.php'));
?>

<!DOCTYPE HTML>
<html lang="<?php echo $this['config']->get('language'); ?>" dir="<?php echo $this['config']->get('direction'); ?>">

<head>
<?php echo $this['template']->render('head'); ?>
<style>
/*custom css*/
#top-a, #showcase, #slogan-a, #slogan-b, .colored .menu-sidebar{
	background: #<?php echo $this['config']->get('top_a_from'); ?>;
	background: -moz-linear-gradient(left,  <?php echo $this['config']->get('top_a_from'); ?> 0%, <?php echo $this['config']->get('top_a_to'); ?> 50%, <?php echo $this['config']->get('top_a_from'); ?> 100%);
	background: -webkit-gradient(linear, left top, right top, color-stop(0%,<?php echo $this['config']->get('top_a_from'); ?>), color-stop(50%,<?php echo $this['config']->get('top_a_to'); ?>), color-stop(100%,<?php echo $this['config']->get('top_a_from'); ?>));
	background: -webkit-linear-gradient(left,  <?php echo $this['config']->get('top_a_from'); ?> 0%,<?php echo $this['config']->get('top_a_to'); ?> 50%,<?php echo $this['config']->get('top_a_from'); ?> 100%);
	background: -o-linear-gradient(left,  <?php echo $this['config']->get('top_a_from'); ?> 0%,<?php echo $this['config']->get('top_a_to'); ?> 50%,<?php echo $this['config']->get('top_a_from'); ?> 100%);
	background: -ms-linear-gradient(left,  <?php echo $this['config']->get('top_a_from'); ?> 0%,<?php echo $this['config']->get('top_a_to'); ?> 50%,<?php echo $this['config']->get('top_a_from'); ?> 100%);
	background: linear-gradient(to right,  <?php echo $this['config']->get('top_a_from'); ?> 0%,<?php echo $this['config']->get('top_a_to'); ?> 50%,<?php echo $this['config']->get('top_a_from'); ?> 100%);
}
<?php echo $this['config']->get('custom_css'); ?>
</style>
</head>

<body id="page" class="page <?php echo $this['config']->get('bg_texture'); ?> <?php echo $this['config']->get('comp_texture'); ?> <?php echo $this['config']->get('element_gradient'); ?> <?php if ($this['config']->get('show_rings_margin')) : ?>show_rings_margin<?php endif; ?> <?php echo $this['config']->get('custom_cur'); ?>" data-config='<?php echo $this['config']->get('body_config','{}'); ?>'>

	<?php if ($this['modules']->count('absolute')) : ?>
		<div id="absolute">
			<?php echo $this['modules']->render('absolute'); ?>
		</div>
	<?php endif; ?>

	<div class="top-bg <?php if ($this['config']->get('show_top_half')) : ?>show_top_half<?php endif; ?> <?php if ($this['modules']->count('slider')) : ?> has_slider<?php endif; ?>"></div>

	<!-- a small dark toolbar -->
	<div id="toolbar" class="grid-block">
		<div class="wrapper grid-block">
			<?php if ($this['modules']->count('toolbar-l') || $this['config']->get('date')) : ?>
				<div class="float-left">
					<?php if ($this['config']->get('date')) : ?>
						<time datetime="<?php echo $this['config']->get('datetime'); ?>"><?php echo $this['config']->get('actual_date'); ?></time>
					<?php endif; ?>
				
					<?php echo $this['modules']->render('toolbar-l'); ?>
				</div>
			<?php endif; ?>
				
			<!-- search -->
			<?php if ($this['modules']->count('search')) : ?>
			<div class="float-right search-box">
				<div id="search"><?php echo $this['modules']->render('search'); ?></div>
			</div>
			
			<?php endif; ?>
			<?php if ($this['modules']->count('toolbar-r')) : ?>
				<div class="float-right"><?php echo $this['modules']->render('toolbar-r'); ?></div>
			<?php endif; ?>

			<!-- social icons -->
			<div class="float-right top-links">
					
					<?php if ($this['config']->get('behance_link')) : ?>	
						<a class="behance" href="http://behance.net/<?php echo $this['config']->get('behance_link'); ?>" target="blank" title="behance"></a>
					<?php endif; ?>					

					<?php if ($this['config']->get('deviantart_link')) : ?>	
						<a class="deviantart" href="http://<?php echo $this['config']->get('deviantart_link'); ?>.deviantart.com" target="blank" title="deviantart"></a>
					<?php endif; ?>

					<?php if ($this['config']->get('digg_link')) : ?>	
						<a class="digg" href="http://digg.com/users/<?php echo $this['config']->get('digg_link'); ?>" target="blank" title="digg"></a>
					<?php endif; ?>

					<?php if ($this['config']->get('dribbble_link')) : ?>	
						<a class="dribbble" href="http://dribbble.com/<?php echo $this['config']->get('dribbble_link'); ?>" target="blank" title="dribbble"></a>
					<?php endif; ?>
								
					<?php if ($this['config']->get('facebook_link')) : ?>	
						<a class="facebook" href="http://www.facebook.com/<?php echo $this['config']->get('facebook_link'); ?>" target="blank" title="facebook"></a>
					<?php endif; ?>

					<?php if ($this['config']->get('pinterest_link')) : ?>	
						<a class="pinterest" href="http://www.pinterest.com/<?php echo $this['config']->get('pinterest_link'); ?>" target="blank" title="pinterest"></a>
					<?php endif; ?>	

					<?php if ($this['config']->get('flickr_link')) : ?>	
						<a class="flickr" href="http://www.flickr.com/photos/<?php echo $this['config']->get('flickr_link'); ?>" target="blank" title="flickr"></a>
					<?php endif; ?>	

					<?php if ($this['config']->get('forrst_link')) : ?>	
						<a class="forrst" href="https://forrst.com/people/<?php echo $this['config']->get('forrst_link'); ?>" target="blank" title="forrst"></a>
					<?php endif; ?>	

					<?php if ($this['config']->get('github_link')) : ?>	
						<a class="github" href="http://www.github.com/<?php echo $this['config']->get('github_link'); ?>" target="blank" title="github"></a>
					<?php endif; ?>	

					<?php if ($this['config']->get('google_link')) : ?>	
						<a class="google" href="http://plus.google.com/<?php echo $this['config']->get('google_link'); ?>" target="blank" title="google+"></a>
					<?php endif; ?>	

					<?php if ($this['config']->get('linkedin_link')) : ?>	
						<a class="linkedin" href="http://www.linkedin.com/<?php echo $this['config']->get('linkedin_link'); ?>" target="blank" title="linked in"></a>
					<?php endif; ?>	
					
					<?php if ($this['config']->get('tumblr_link')) : ?>	
						<a class="tumblr" href="http://<?php echo $this['config']->get('tumblr_link'); ?>.tumblr.com" target="blank" title="tumblr"></a>
					<?php endif; ?>	

					<?php if ($this['config']->get('twitter_link')) : ?>	
						<a class="twitter" href="http://www.twitter.com/<?php echo $this['config']->get('twitter_link'); ?>" target="blank" title="twitter"></a>
					<?php endif; ?>	

					<?php if ($this['config']->get('vimeo_link')) : ?>	
						<a class="vimeo" href="http://www.vimeo.com/<?php echo $this['config']->get('vimeo_link'); ?>" target="blank" title="vimeo"></a>
					<?php endif; ?>	

					<?php if ($this['config']->get('youtube_link')) : ?>	
						<a class="youtube" href="http://www.youtube.com/user/<?php echo $this['config']->get('youtube_link'); ?>" target="blank" title="youtube"></a>
					<?php endif; ?>	

			</div>
		</div>
	</div>

	<div class="wrapper">
	 	<header id="header">
	 		<div id="header-top">
				
				<!-- logo -->
				<?php if ($this['modules']->count('logo')) : ?>	
					<a id="logo" href="<?php echo $this['config']->get('site_url'); ?>">
						<?php echo $this['modules']->render('logo'); ?>
					</a>
				<?php else : ?>
					<a id="logo" href="<?php echo $this['config']->get('site_url'); ?>"><?php echo $this['modules']->render('logo'); ?>
						<span class="logo-img no-size-auto"></span>
					</a>
				<?php endif; ?>

				<?php  if ($this['modules']->count('banner')) : ?>
				<div class="grid-block float-right">
					<div id="banner"><?php echo $this['modules']->render('banner'); ?></div>
				</div>
				<?php endif; ?>

				<?php  if ($this['modules']->count('counter')) : ?>
				<div class="grid-block float-right">
					<div id="counter"><?php echo $this['modules']->render('counter'); ?></div>
				</div>
				<?php endif; ?>

			</div>
		</header>

		<div class="sheet header">
		<div class="sheet-body">
			<div class="wrapper grid-block">

			<div class="grid-block">
				<div id="hmenu" class="grid-block">
					<?php  if ($this['modules']->count('menu')) : ?>
						<nav id="menu"><?php echo $this['modules']->render('menu'); ?></nav>
					<?php endif; ?>
				</div>
			</div>

			<?php if ($this['modules']->count('slogan-a')) : ?>
				<section id="slogan-a">
					<?php echo $this['modules']->render('slogan-a'); ?>
				</section>
			<?php endif; ?>

			<?php if ($this['modules']->count('showcase')) : ?>
				<section id="showcase">
					<div class="showcase-gradient">
					<div class="header-content grid-block">
						<?php echo $this['modules']->render('showcase', array('layout'=>$this['config']->get('showcase'))); ?>
					</div>
					</div>
				</section>
			<?php endif; ?>

				<?php if ($this['modules']->count('map')) : ?>
				<section id="g-map">
					<?php echo $this['modules']->render('map'); ?>
				</section>
				<?php endif; ?>


				<?php if ($this['modules']->count('slider')) : ?>
				<section id="slide-zone">
					<?php echo $this['modules']->render('slider'); ?>
				</section>
				<?php endif; ?>


				<?php if ($this['modules']->count('slogan-b')) : ?>
					<section id="slogan-b">
						<?php echo $this['modules']->render('slogan-b'); ?>
					</section>
				<?php endif; ?>

				<?php if ($this['modules']->count('top-a')) : ?>
					<section id="top-a" class="grid-block">
						<div class="wrapper">
							<?php echo $this['modules']->render('top-a', array('layout'=>$this['config']->get('top-a'))); ?>
						</div>
					</section>
				<?php endif; ?>
			</div>
			</div>
		</div>
		<?php if ($this['config']->get('show_rings_margin')) : ?>
			<div class="rings wrapper">
				<div class="left-ring"></div>
				<div class="right-ring"></div>
			</div>
		<?php endif; ?>

		<div class="sheet main-content">
		<div class="sheet-body <?php echo $this['config']->get('main_texture'); ?>">
		<!-- header block -->
		<?php if ($this['modules']->count('breadcrumbs') || $this['modules']->count('top-b')) : ?>

		<!-- mid block -->
		<div id="mid-block" >
				
			<!-- breadcrumbs -->
			<?php if ($this['modules']->count('breadcrumbs')) : ?>
				<section id="breadcrumbs">
					<div class="wrapper grid-block">
					<a href="<?php echo $this['config']->get('site_url'); ?>" class="home"></a>
					<?php echo $this['modules']->render('breadcrumbs'); ?>
					</div>
				</section>
			<?php endif; ?>

		</div>
			
			<?php if ($this['modules']->count('top-b')) : ?>
				<section id="top-b" class="grid-block">
					<div class="wrapper">
						<?php echo $this['modules']->render('top-b', array('layout'=>$this['config']->get('top-b'))); ?>
					</div>
				</section>
			<?php endif; ?>
		<?php endif; ?>

		<?php if ($this['modules']->count('mosaic')) : ?>
				<section id="mosaic" class="grid-block">
						<?php echo $this['modules']->render('mosaic', array('layout'=>$this['config']->get('mosaic'))); ?>
				</section>
		<?php endif; ?>

		<div class="wrapper grid-block content-texture <?php echo $this['config']->get('content_texture'); ?>">
			<?php if ($this['modules']->count('innertop-a + innertop-b + innerbottom-a + innerbottom-b + sidebar-a + sidebar-b') || $this['config']->get('system_output')) : ?>
			<div id="main" class="grid-block">
			
				<div id="maininner" class="grid-box">
					<?php if ($this['modules']->count('innertop-a')) : ?>
					<section id="innertop-a" class="grid-block"><div class="wrapper"><?php echo $this['modules']->render('innertop-a', array('layout'=>$this['config']->get('innertop-a'))); ?></div></section>
					<?php endif; ?>

					<?php if ($this['modules']->count('innertop-b')) : ?>
					<section id="innertop-b" class="grid-block"><div class="wrapper"><?php echo $this['modules']->render('innertop-b', array('layout'=>$this['config']->get('innertop-b'))); ?></div></section>
					<?php endif; ?>
					

					<?php if ($this['config']->get('system_output')) : ?>
					<section id="content" class="grid-block"><?php echo $this['template']->render('content'); ?></section>
					<?php endif; ?>

					
					<?php if ($this['modules']->count('innerbottom-a')) : ?>
					<section id="innerbottom-a" class="grid-block"><div class="wrapper"><?php echo $this['modules']->render('innerbottom-a', array('layout'=>$this['config']->get('innerbottom-a'))); ?></div></section>
					<?php endif; ?>
					
					<?php if ($this['modules']->count('innerbottom-b')) : ?>
					<section id="innerbottom-b" class="grid-block"><div class="wrapper"><?php echo $this['modules']->render('innerbottom-b', array('layout'=>$this['config']->get('innerbottom-b'))); ?></div></section>
					<?php endif; ?>

				</div>
				<!-- maininner end -->
				
				<?php if ($this['modules']->count('sidebar-a')) : ?>
				<aside id="sidebar-a" class="grid-box"><?php echo $this['modules']->render('sidebar-a', array('layout'=>'stack')); ?></aside>
				<?php endif; ?>
				
				<?php if ($this['modules']->count('sidebar-b')) : ?>
				<aside id="sidebar-b" class="grid-box"><?php echo $this['modules']->render('sidebar-b', array('layout'=>'stack')); ?></aside>
				<?php endif; ?>

			</div>
			<?php endif; ?>
			</div>
			<!-- main end -->


		<!-- bottom block -->
		<?php if ($this['modules']->count('utility') || $this['modules']->count('bottom-a') || $this['modules']->count('bottom-b')) : ?>
			<div id="bottom-block">
				<div class="wrapper grid-block">
				<?php if ($this['modules']->count('bottom-a')) : ?>
					<section id="bottom-a" class="grid-block">
						<div class="wrapper">
							<?php echo $this['modules']->render('bottom-a', array('layout'=>$this['config']->get('bottom-a'))); ?>
						</div>
					</section>
				<?php endif; ?>

				<?php if ($this['modules']->count('bottom-b')) : ?>
					<section id="bottom-b" class="grid-block">
						<div class="wrapper">
							<?php echo $this['modules']->render('bottom-b', array('layout'=>$this['config']->get('bottom-b'))); ?>
						</div>
						</section>
				<?php endif; ?>
				</div>

		<?php if ($this['modules']->count('utility')) : ?>
			<section id="utility" class="<?php echo $this['config']->get('utility_texture'); ?>">
				<?php echo $this['modules']->render('utility'); ?>
			</section>
		<?php endif; ?>
		</div>

		<?php endif; ?>
		</div>
		</div>
		</div>

				
			<section id="bottom-c" class="grid-block <?php echo $this['config']->get('footer_texture'); ?>" >
				<div class="wrapper grid-block">
					<?php  if ($this['modules']->count('bottom-menu')) : ?>
						<nav id="bottom-menu"><?php echo $this['modules']->render('bottom-menu'); ?></nav>
					<?php endif; ?>
				</div>

				<div class="wrapper grid-block">
						<div class="footer-body">
							<?php if ($this['modules']->count('bottom-c')) : ?>
								<?php echo $this['modules']->render('bottom-c', array('layout'=>$this['config']->get('bottom-c'))); ?>
							<?php endif; ?>
						</div>	
					</div>		
				</div>
				
				<section id="bottom-d">
					<div class="wrapper grid-block">

				<?php if ($this['modules']->count('copyright')) : ?>
					<section id="copyright" class="float-left">
						<?php echo $this['modules']->render('copyright'); ?>
						<?php if ($this['config']->get('warp_branding')) : ?>
							<?php $this->output('warp_branding'); ?>
						<?php endif; ?>
					</section>
				<?php endif; ?>


				<?php if ($this['modules']->count('bottom-d')) : ?>
					<div class="float-right">
						<?php if ($this['modules']->count('bottom-d')) : ?>
							<?php echo $this['modules']->render('bottom-d', array('layout'=>$this['config']->get('bottom-d'))); ?>
						<?php endif; ?>
					</div>
				<?php endif; ?>

				</section>
					
			<?php if ($this['config']->get('totop_scroller')) : ?>
			<a id="totop-scroller" href="#page"></a>
			<?php endif; ?>

			<div id="footer-block">
			<?php if ($this['modules']->count('footer + debug')) : ?>
			<div class="wrapper grid-block">
				<footer id="footer" class="grid-block">
					<?php
						echo $this['modules']->render('footer');
						echo $this['modules']->render('debug');
					?>
				</footer>
			
			<?php endif; ?>
		</div>	
		</div>
		</section>


		<?php if ($this['modules']->count('reveal-a')) : ?>
			<div id="reveal-a" class="reveal-modal">
				<?php echo $this['modules']->render('reveal-a', array('layout'=>'stack')); ?>
				<a class="close-reveal-modal">&#215;</a>
			</div>
		<?php endif; ?>	

		<?php if ($this['modules']->count('reveal-b')) : ?>
			<div id="reveal-b" class="reveal-modal">
				<?php echo $this['modules']->render('reveal-b', array('layout'=>'equal')); ?>
				<a class="close-reveal-modal">&#215;</a>
			</div>
		<?php endif; ?>	

		<?php if ($this['modules']->count('reveal-c')) : ?>
			<div id="reveal-c" class="reveal-modal">
				<?php echo $this['modules']->render('reveal-c', array('layout'=>'double')); ?>
				<a class="close-reveal-modal">&#215;</a>
			</div>
		<?php endif; ?>

		<?php echo $this->render('footer'); ?>
	
	<script>
		(function($){
		$(document).on('ready', function() {
			<?php echo $this['config']->get('custom_js'); ?>
		});
		})(jQuery);
	</script>
</body>
</html>