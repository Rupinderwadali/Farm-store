		
		<div id="post-list">
		  <?php
		    $terms = get_terms('area');
                    foreach($terms as $term) :
                    $posts = new WP_Query(array('area' => $term->slug));
			if($posts->have_posts()) :
			{
			   while($posts->have_posts()) :
				{
				  $posts->the_posts();
				   {

					get_template_part('content', 'arealist' );
				   }

				}
			}
						
			else
			  {
			    while(have_posts()) 
				{
				  the_post();
					{
  					   get_template_part( 'content', 'entry' );
					}	
				}
			  }	
			?>
		</div>
		
		<div id="post-navi">
			<?php 
				$big = 999999999; 
				if ($wp_query->max_num_pages > 1) echo __('Pages','default') . ' : ' ;
				echo paginate_links(array(
					'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ), 
						'format' => '?paged=%#%', 'current' => max( 1, get_query_var('paged') ),
						'total' => $wp_query->max_num_pages,
						'prev_next' => False
				));
			?>
		</div>
