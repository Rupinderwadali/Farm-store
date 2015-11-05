<?php if(is_active_sidebar('sidebar-footer')) { ?>
	<div id="sidebar-footer" class="clear">
		<div id="fcol1" class="col"></div>
		<div id="fcol2" class="col"></div>
		<div id="fcol3" class="col"></div>
		<div id="fcol4" class="col"></div>
		
	</div>
<?php } ?>

<?php// dynamic_sidebar('sidebar-footer'); ?>

<?php 
	$themeInfo = get_theme_mod('careta_themeinfo_text', 'BE ORGANIC</a>');
	if (trim($themeInfo) != '')
	{
	?>
		<div id="themeinfo">
			<?php 
				if (get_theme_mod('careta_social_location', 'header') == 'footer') 
				{
					echo "<div class=\"social\">";
					careta_draw_social();  
					echo "</div>";
				}
			?>
			<?php echo $themeInfo; ?>
		</div>
	<?php
	}
?>
