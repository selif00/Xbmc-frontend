<div class="post">
	<div class="title">
	<h4>	<?php echo CHtml::link(CHtml::encode($data->title), $data->url); ?></h4>
	</div>
	<div class="author">
		posted by <?php echo $data->author->username . ' on ' . date('F j, Y',$data->create_time); ?> <span class="comment pull-right" ><i class="icon-comment"></i><?php echo CHtml::link("Comments: {$data->commentCount}",$data->url.'#comments'); ?></span>
        
	</div>
	<div class="content">
   
		<?php
			$this->beginWidget('CMarkdown', array('purifyOutput'=>true));
			echo $data->content;
			$this->endWidget();
		?>
      
	</div>
	<div class="tag_nav">
		<b>Tags:</b>
		<?php echo implode(', ', $data->tagLinks); ?>
		<br/>
		<?php echo CHtml::link('Permalink', $data->url); ?> | 
		Last updated on <?php echo date('F j, Y',$data->update_time); ?>
        <hr class="posthr" />
	</div>
</div>
