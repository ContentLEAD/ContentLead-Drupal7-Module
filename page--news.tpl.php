
<div id="main">
	
	<div id="white" class="clearfix">
	
		<header id="logo">
			<a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home">
				<img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
			</a>
		</header>
		
		<header id="slogan">
			<?php print $site_slogan; ?>
		</header>
		
		<aside id="sidebar-right">
			<?php print render($page['sidebar_right']); ?>
		</aside>
		
		<div id="mr-container">
			
			<aside id="sidebar-left">
				<?php print render($page['sidebar_left']); ?>
			</aside>
			
			<section id="content">
				
				<?php print $messages; ?>
				<?php print render($tabs); ?>
				<?php print render($page['help']); ?>
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
		$nodes = array();
		;

		   $nids = array_keys($result['node']);
      $nodes = node_load_multiple($nids);

     echo '<h1>Latest Articles</h1><ul id="lat">';
    foreach ($nodes as $node) {


	
    $tid=$node->field_brafton_term['und'][0]['tid'];
   	$term= taxonomy_term_load($tid);
   	$nids[]=$node->nid;
   	$tids[] = $term->tid;
   	$termpath = taxonomy_term_uri($term);
   	$termpath = drupal_get_path_alias($termpath['path']);
      $options = array('absolute' => TRUE);
     // print_r($node);
      $url = url('node/' . $node->nid, $options);
      
      echo '<li class="latest">';
      echo '<img class="thumb" src="'.file_create_url($node->field_brafton_image['und'][0]['uri']).'">';


      echo '<a href='.$url.'>'.$node->title.'</a><div class="sum">'.$node->body['und'][0]['summary'].'</div>';
      echo '<h4>Categories</h4><a href="'.$termpath.'">'.$term->name.'</a></li>';
    }

    echo "</ul>";
    			$catquery = new EntityFieldQuery();
	$catquery->entityCondition( 'entity_type','node' );
	$catquery->entityCondition( 'entity_id',$nids,'NOT IN' );
	$catquery->entityCondition( 'bundle','b_news' );
	$catquery->propertyCondition('status', 1);
	$catquery->propertyOrderBy('created', 'DESC');
	$catquery->range(0, 3);
		$result = $catquery->execute();
		$nodes = array();


		$nids = array_keys($result['node']);
      $nodes = node_load_multiple($nids);
$inc=0;
$range=0;
echo '<ul class="cats">';
    foreach ($nodes as $node) {

    


    $tid=$node->field_brafton_term['und'][0]['tid'];
   	$term= taxonomy_term_load($tid);
   	$termpath = taxonomy_term_uri($term);
   	$termpath = drupal_get_path_alias($termpath['path']);
if($term->tid == $tids[$inc]){
	if($range < 3 ){
		    echo '<h1>'.$term->name.'</h1>';
		      $options = array('absolute' => TRUE);
		     // print_r($node);
		      $url = url('node/' . $node->nid, $options);
		      
		      echo '<li class="catart">';
		      echo '<img class="thumb" src="'.file_create_url($node->field_brafton_image['und'][0]['uri']).'">';


		      echo '<a href='.$url.'>'.$node->title.'</a><div class="sum">'.$node->body['und'][0]['summary'].'</div>';
		      echo '<h4>Categories</h4><a href="'.$termpath.'">'.$term->name.'</a></li>';
		$range++;
      //end range
  		}
  	$inc++;
  	//end term
  	}

  //end for each
    }

		;

?>
</ul>
			</section><!-- / #content -->
		
		</div><!-- / #mr-container -->
		
		<div id="link-area">
			<a href="/shop">Shop our current collection</a>
		</div>
		
	</div><!--  / #white -->
	
	<footer>
		<?php print render($page['footer']); ?>
	</footer>
	
</div><!-- / #main -->	


	
