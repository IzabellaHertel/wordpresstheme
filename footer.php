</main>

<footer id="footer">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-6 left-foot">
				<?php $social = get_field('social_footer','options'); 
					foreach ($social as $item){
						echo '<a href="'.$item['link'].'"><i class="fa fa-'.$item['icon'].'"></i></a>';
					}
				?>
			</div>
			<div class="col-xs-12 col-sm-6 right-foot">
				<?php the_field('copyright','options'); ?>
			</div>
		</div>
	</div>
</footer>

<?php wp_footer(); ?>
</body>
</html>