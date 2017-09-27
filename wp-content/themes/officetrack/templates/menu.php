<div class="header-container2">
	<header class="header">
		<div class="top-bar">
			<div class="logo-container">
				<a href="<?php echo get_site_url();?>">
                    <span  class="logo">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/logo2.png" width="190">
                    </span>
				</a>
			</div>
			<div class="appbar-nav">
				<ul class="appbar-nav-menu">
					<?php
					$menu_name = "header-menu";
					$locations = get_nav_menu_locations();
					$menu = wp_get_nav_menu_object($menu_name);
					$menu_items = wp_get_nav_menu_items( $menu->term_id, array( 'order' => 'DESC' ) );
					$count = 0;
					$submenu = false;
					foreach ($menu_items as $item):
						$title = $item->title;
						$link = $item->url;
						if (!$item -> menu_item_parent):
							$parent_id = $item->ID;
                        ?><li class="appbar-services">
							<a href="<?php echo $link; ?>">
								<?php echo $title; ?>
							</a>
						<?php endif; ?>
						<?php if ( $parent_id == $item->menu_item_parent ): ?>
						<?php if ( !$submenu ): $submenu = true; ?>
							<span><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/down.svg" width="8" height="5"></span>
							<ul class="dropdown-menu dropdown-menu-servicies">
						<?php endif; ?>
						<li>
							<span class="subsection"></span>
							<a href="<?php echo $link; ?>" class="section-option"><?php echo $title; ?></a>
						</li>
						<?php if ( $menu_items[ $count + 1 ]->menu_item_parent != $parent_id && $submenu ): ?>
							</ul>
							<?php $submenu = false; endif; ?>
					<?php endif; ?>
						<?php if ( $menu_items[ $count + 1 ]->menu_item_parent != $parent_id ): ?>
						</li>
						<?php $submenu = false; endif; ?>
						<?php $count++; endforeach; ?>
				</ul>
			</div>
			<div class="sign-in">
				<div class="hamburger"></div>
				<a class="free-trial">
					<button class="button-blue">
						<span>Free Trial</span>
					</button>
				</a>
				<a target="_blank" href="http://login.officetrack.com/secure/GlobalOfficeTrackLogon.aspx?ReturnUrl=%2Findex.aspx">
					<button class="button-transparent">
						<span>Login</span>
					</button>
				</a>
			</div>
		</div>
	</header>
	<div class="menujq">
		<ul>
			<li><a target="_blank" href="http://login.officetrack.com/secure/GlobalOfficeTrackLogon.aspx?ReturnUrl=%2Findex.aspx">Login</a></li>
			<li><a class="free-trial">Free Trial</a></li>
			<li><a href="about_us.html">About us</a></li>

			<?php
			$menu_name = "header-menu";
			$locations = get_nav_menu_locations();
			$menu = wp_get_nav_menu_object($menu_name);
			$menu_items = wp_get_nav_menu_items( $menu->term_id, array( 'order' => 'DESC' ) );
			$count = 0;
			$submenu = false;
			foreach ($menu_items as $item):
				$title = $item->title;
				$link = $item->link;
				if (!$item -> menu_item_parent):
					$parent_id = $item->ID;
					?>
					<li><a href="<?php echo $link; ?>"><?php echo $title; ?></a>
				<?php endif; ?>
				<?php if ( $parent_id == $item->menu_item_parent ): ?>
				<?php if ( !$submenu ): $submenu = true; ?>
					<ul>
				<?php endif; ?>
				<li>
					<a href="<?php echo $link; ?>"><?php echo $title; ?></a>
				</li>
				<?php if ( $menu_items[ $count + 1 ]->menu_item_parent != $parent_id && $submenu ): ?>
					</ul>
					<?php $submenu = false; endif; ?>
			<?php endif; ?>
				<?php if ( $menu_items[ $count + 1 ]->menu_item_parent != $parent_id ): ?>
				</li>
				<?php $submenu = false; endif; ?>
				<?php $count++; endforeach; ?>
		</ul>
	</div>
	<div id="cont_demo" style="display: none;">
		<iframe src="https://p.officecore.co.il/LBS_Externals/OfficetrackTrial/ENRegister.aspx?ProviderGuid=F029E1C5-EF17-4C7D-88D2-1318F605244C" width="540" height="600" frameborder="0" id="MainFrame" marginheight="0" marginwidth="0" scrolling="no"></iframe>
		<div id="close_demo">x</div>
	</div>
</div>