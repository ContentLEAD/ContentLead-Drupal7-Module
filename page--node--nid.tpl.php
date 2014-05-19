<?php
?>
<div id="page-wrapper">
		<div id="header-wrapper">
			<div id="header"> 
					<div id="branding-wrapper">
						<div class="branding">
							<?php if ($logo): ?>
								<div class="logo">
									<a href="<?php print $base_path ?>" title="<?php print t('Home') ?>"><img src="<?php print $logo ?>" alt="<?php print t('Home') ?>" /></a>
								</div> <!-- end logo -->
							<?php endif; ?>
							<div class="name-slogan-wrapper">
							<?php if ($site_name) : ?>
								<?php if ($is_front) : ?>
									<h1 class="site-name"><a href="<?php print $base_path ?>" title="<?php print $site_name ?>"><?php print $site_name ?></a></h1>
								<?php endif; ?>
								<?php if (!$is_front) : ?>
									<h2 class="site-name"><a href="<?php print $base_path ?>" title="<?php print $site_name ?>"><?php print $site_name ?></a></h2>
								<?php endif; ?>
							<?php endif; ?>
							<?php if ($site_slogan) : ?>
								<span class='site-slogan'><?php print $site_slogan; ?></span>
							<?php endif; ?>
							</div> <!-- end site-name + site-slogan wrapper -->
						</div>
					</div> <!-- end branding wrapper -->
				<?php if ($feed_icons): ?>
				<!--
				  <div class="feed-wrapper">
						<?php print $feed_icons; ?>
					</div> --> <!-- end feed wrapper -->
				<?php endif; ?>
			
				<div id="authorize">
					<ul style="padding:0; margin: 10px 0 0; text-align: right; line-height: 1em; ">
						<li>(203) 221-3033</li>
						<li>&nbsp;</li>	
						<li style="vertical-align: middle;"><a href="https://www.facebook.com/pages/Kyo-Logic-LLC/262030123831142" target="_blank"><img src="/sites/default/files/facebook.png" alt="facebook" width="16" height="16" /></a></li>
						<li>&nbsp;</li>	
						<li style="vertical-align: middle;"><a href="http://twitter.com/#!/KyoLogicLLC" target="_blank"><img src="/sites/default/files/twitter.png" alt="twitter" width="16" height="16" /></a></li>
						<?php if ($feed_icons): ?><li>&nbsp;</li><li class="last" style="vertical-align: middle;"><?php print $feed_icons; ?></li><?php endif; ?>
					</ul>
					<ul style="text-align: right; margin-top: 20px;">
						<?php global $user; 
							if ($user->uid != 0) {
								print '<li class="first">' .t('Logged in as '). '<a href="' .url('user/'.$user->uid). '">' .$user->name. '</a></li>';
						//	print '<li class="last"><a href="' .url('user/logout'). '">' .t('Logout'). '</a></li>'; } 
								print '<li class="last"><a href="' .url('user/logout'). '">' .t('Logout'). '</a></li>'; } 
							else {
								print '<li class="first"><a href="' .url('user'). '">' .t('Login'). '</a></li>';
						//	print '<li class="last"><a href="' .url('user/register'). '">' .t('Register'). '</a></li>'; }
								print '<li class="last"><a href="' .url('user/register'). '">' .t('Register'). '</a></li>'; }
								?>
				<!--
						<li>&nbsp;</li>		
						<li><a href="https://www.facebook.com/pages/Kyo-Logic-LLC/262030123831142" target="_blank"><img src="/sites/default/files/facebook.png" alt="facebook" width="16" height="16" /></a></li>
						<li class="last"><a href="http://twitter.com/#!/KyoLogicLLC" target="_blank"><img src="/sites/default/files/twitter.png" alt="twitter" width="16" height="16" /></a></li>
					-->
					</ul>
				</div> <!-- end authorize -->
			</div> <!-- end header -->
		</div> <!-- end header wrapper -->
		
		<div id="container-wrapper">
			<div id="container-outer">
				<div id="menu-wrapper">
					<div class="menu-outer">
						<div class="menu-inner">
							<div class="menu-left"></div> 
							<?php if ($main_menu || $page['superfish_menu']): ?>
										<div id="<?php print $main_menu ? 'menu' : 'superfish' ; ?>">
											<?php if ($main_menu) {
												print theme('links__system_main_menu', array('links' => $main_menu));}
											elseif (!empty($page['superfish_menu'])) {
												print render ($page['superfish_menu']);} ?>
										</div> <!-- end menu / superfish -->
							<?php endif; ?>
							<div class="menu-right"></div>
						</div>
					</div>
					<?php if (!$is_front) print $breadcrumb; ?>
				</div> <!-- end menu wrapper -->
				
				<?php if (!$page['slideshow']): ?>
					<?php if (!$is_front): ?>
						<div class="breadcrumb-shadow"></div> <!-- end breadcrumb shadow -->
					<?php endif; ?>
				<?php endif; ?>
				
				<?php if ($page['slideshow']): ?>
					<div id="slideshow-wrapper">
						<div class="slideshow">
							<?php print render ($page['slideshow']);?>
						</div> <!-- end slideshow -->
					</div> <!-- end slideshow wrapper -->
				<?php endif; ?>
				
				<?php if (!$page['slideshow']): ?>
					<?php if ($is_front): ?>
						<div id="slideshow-wrapper">
							<?php if ($page['highlighted']): ?><div class="mission"><?php print render($page['highlighted']); ?></div><?php endif; ?>
							<div class="slideshow">
								<!-- KyoLogic Images -->
						<!--	<img src="<?php print $base_path ?>sites/default/files/banner_1.jpg" width="804" height="375" alt="KyoLogic 1"/>	-->
								<img src="<?php print $base_path ?>sites/default/files/banner_2.jpg" width="804" height="375" alt="KyoLogic 2"/>
						<!--	<img src="<?php print $base_path ?>sites/default/files/banner_3.jpg" width="804" height="375" alt="KyoLogic 3"/>	-->
								<!-- end KyoLogic Images -->
								<img src="<?php print $base_path . $directory; ?>/images/slides/metropolis-1.jpg" width="804" height="375" alt="Metropolis 1"/>
								<img src="<?php print $base_path . $directory; ?>/images/slides/metropolis-2.jpg" width="804" height="375" alt="Metropolis 2"/>
								<img src="<?php print $base_path . $directory; ?>/images/slides/metropolis-3.jpg" width="804" height="375" alt="Metropolis 3"/>
							</div> <!-- end slideshow -->
						</div> <!-- end slideshow wrapper -->
					<?php endif; ?>
				<?php endif; ?>
			
				<div id="container-inner">
					<div id="content-wrapper" class="clearfix">
						<?php if ($page['sidebar_second']): ?>
							<div id="sidebar" class="column sidebar">
								<div class="section">
									<?php print render($page['sidebar_second']); ?>
								</div>
							</div> <!-- end sidebar-second -->
							<!--div class="clearfix"></div-->
						<?php endif; ?>
						<div id="main-content">
							<?php if($page['content_top']):?><div id="content-top"><?php print render ($page['$content_top']); ?></div><?php endif; ?>
							<?php if ($show_messages) { print $messages; }; ?>
							<?php print render($title_prefix); ?>
							
							<?php print render($title_suffix); ?>
							<?php if ($tabs): ?>
								<div class="tabs">
									<?php print render($tabs); ?>
								</div>
							<?php endif; ?>
							<?php print render($page['help']); ?>
							<?php if ($action_links): ?>
								<ul class="action-links">
									<?php print render($action_links); ?>
								</ul>
							<?php endif; ?>
							<section id="content">
				
				<?php print $messages; ?>
			
				<?php if ($action_links): ?>
					<ul class="action-links"><?php print render($action_links); ?></ul>
				<?php endif; ?>
	<?php			
			$query = new EntityFieldQuery();
	$query->entityCondition( 'entity_type','node' );
	$query->entityCondition( 'bundle','b_news' );
	$query->propertyCondition('status', 1);
	$query->propertyOrderBy('created', 'DESC');
	$query->range(0, 3);
		$result = $query->execute();
	

		 //get node ids
		   $nodearray  = array_keys($result['node']);

		//load node objects
      $nodes = node_load_multiple($nodearray);

     echo '<h1>Latest Articles</h1><ul id="lat">';
    foreach ($nodes as $node) {


	
    $tid=$node->field_brafton_term['und'][0]['tid'];
   	$term= taxonomy_term_load($tid);
 
   
   	$termpath = taxonomy_term_uri($term);
   	$termpath = drupal_get_path_alias($termpath['path']);
      $options = array('absolute' => TRUE);
     // print_r($node);
      $url = url('node/' . $node->nid, $options);
      
      echo '<li class="latest">';
      echo '<img class="thumb" src="'.file_create_url($node->field_brafton_image['und'][0]['uri']).'">';


      echo '<a href='.$url.'>'.$node->title.'</a><div class="sum">'.$node->body['und'][0]['summary'].'<br />

      <a href='.$url.'>Read more</a>

      </div>';
     // echo '<h4>Categories</h4><a href="'.$termpath.'">'.$term->name.'</a></li>';
    }

    echo "</ul>";
//end latest 

  //start categories


	


//get all terms in brafton vocabulary
$terms = taxonomy_get_tree(1);

//loop through terms
foreach($terms as $termsin){


	echo '<h1>'.$termsin->name.'</h1>';

    $catquery = new EntityFieldQuery();
	$catquery->entityCondition( 'entity_type','node' );
	$catquery->entityCondition( 'entity_id',$nodearray,'NOT IN' );
	$catquery->entityCondition( 'bundle','b_news' );
	$catquery->propertyCondition('status', 1);
	$catquery->propertyOrderBy('created', 'DESC');
	$catquery->range(0, 3);
	$catquery->fieldCondition('field_brafton_term', 'tid', $termsin->tid);

		$result = $catquery->execute();


	$nids = array_keys($result['node']);
	 $nodes = node_load_multiple($nids);

echo '<ul class="cats">';

    foreach ($nodes as $node) {

  	$options = array('absolute' => TRUE);
// print_r($node);
$url = url('node/' . $node->nid, $options);


echo '<li class="catart">';
if($node->field_brafton_image)
echo '<img class="thumb" src="'.file_create_url($node->field_brafton_image['und'][0]['uri']).'">';


echo '<a href='.$url.'>'.$node->title.'</a><div class="sum">'.$node->body['und'][0]['summary'].'<br /><a href='.$url.'>Read more</a></div>';
//echo '<h4>Categories</h4><a href="'.$termpath.'">'.$term->name.'</a></li>';

  //end loop through nodes

}
echo'</ul>';


//end loop through categories
}





  
		

?>

			</section><!-- / #content -->
						</div>
					</div> <!-- end content wrapper-->
				</div> <!-- end container inner -->
				
				<?php if($page['bottom_1'] || $page['bottom_2'] || $page['bottom_3'] || $page['bottom_4']) : ?>
					<div id="bottom-wrapper" class="in<?php print (bool) $page['bottom_1'] + (bool) $page['bottom_2'] + (bool) $page['bottom_3'] + (bool) $page['bottom_4']; ?> clearfix">
						<?php if($page['bottom_1']) : ?>
							<div class="column A">
								<?php print render ($page['bottom_1']); ?>
							</div>
						<?php endif; ?>
						<?php if($page['bottom_2']) : ?>
							<div class="column B">
								<?php print render ($page['bottom_2']); ?>
							</div>
						<?php endif; ?>
						<?php if($page['bottom_3']) : ?>
							<div class="column C">
								<?php print render ($page['bottom_3']); ?>
							</div>
						<?php endif; ?>
						<?php if($page['bottom_4']) : ?>
							<div class="column D">
								<?php print render ($page['bottom_4']); ?>
							</div>
						<?php endif; ?>
						<div class="clearfix"></div>
					</div><!-- end bottom wrapper-->
				<?php endif; ?>

			</div> <!-- end container outer -->
			<div id="shadow-bottom"></div>
		</div> <!-- end container wrapper -->
			
		<div id="footer">
			<?php print render ($page['footer']); ?>
			<?php if($secondary_menu) : ?>
				<div id="subnav">
					<?php print theme('links__system_secondary_menu', array('links' => $secondary_menu, 'attributes' => array('class' => array('links', 'clearfix')))); ?>
				</div>
			<?php endif; ?>
			<?php // print $notice; ?>
			<div style="clear:both; font-size:11px; text-align:center;"><em>© 2002 - 2013 Kyo Logic, LLC &nbsp; (203) 221-3033</em></div>
		</div> <!-- end footer -->
			
</div> <!-- end page wrapper -->