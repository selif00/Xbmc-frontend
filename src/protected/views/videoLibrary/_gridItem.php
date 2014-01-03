<?php

if (!isset($labelUrl))
	$labelUrl = $itemUrl;

?>
<li class="span2" style="margin-top:10px;">
	<div class="thumbnail">
		
		<div class="image-container">
			<?php 
			
			if ($itemUrl)
				echo CHtml::link(Thumbnail::lazyImage($thumbnail), $itemUrl);
			else
				echo Thumbnail::lazyImage($thumbnail);
			
			?>
		</div>
		
		<div class="caption">
			<?php 
			
			if ($labelUrl)
				echo '<p class="text-warning">', CHtml::link($label, $labelUrl), '</p>';
			else
				echo '<p class="text-warning">', $label, '</p>';
			
			?>
            <div class="play">
            <h2><?php  echo CHtml::link('PLAY', $labelUrl); ?></h2>
            </div>
		</div>
	
	</div>
</li>