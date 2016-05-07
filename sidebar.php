<!-- Left-Sidebar -->
<aside class="col-lg-3 col-md-3 col-sm-3">
  <?php if ( is_active_sidebar( 'left-sidebar' ) ) : ?>
					<div>
					    <?php dynamic_sidebar( 'left-sidebar' ); ?>
					</div>
					<?php endif; ?>
					
					<?php if ( is_active_sidebar( 'left-sidebar' ) ) : ?>
					<div>
					    <?php dynamic_sidebar( 'left-sidebar-2' ); ?>
					</div>
					<?php endif; ?>
  <!-- /Left Sidebar -->
</aside>
