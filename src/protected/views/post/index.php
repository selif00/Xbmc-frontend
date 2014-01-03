<?php if(!empty($_GET['tag'])): ?>
<h1>Posts Tagged with <i><?php echo CHtml::encode($_GET['tag']); ?></i></h1>
<?php endif; ?>
<?php $this->widget('zii.widgets.CBreadcrumbs', array(
	'links'=>$this->breadcrumbs,
)); ?>


<!-- breadcrumbs -->
<h2>Latest Blog</h2>
<div class="row">
<div class="span10">
    <div class="well">
    <?php $this->widget('zii.widgets.CListView', array(
        'dataProvider'=>$dataProvider,
        'itemView'=>'_view',
        'template'=>"{items}\n{pager}",
    )); ?>
    </div>
    </div>
    
    <div class="span2">
    <div class="well">
    <center>
    <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- blog sidebar -->
<ins class="adsbygoogle"
     style="display:inline-block;width:120px;height:600px"
     data-ad-client="ca-pub-1191244841301389"
     data-ad-slot="7435909084"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
</center>
    </div>
    </div>

</div>