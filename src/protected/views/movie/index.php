<?php

/* @var $filterForm MovieFilterForm */
/* @var $dataProvider LibraryDataProvider */
$this->pageTitle = 'Movies';

?>
<script type="text/javascript">
$(document).ready(function(){
 
    $("[rel='tooltip']").tooltip();    
 
    $('#hover-cap-4col .thumbnail').hover(
        function(){
            $(this).find('.caption').fadeIn(250); //.fadeIn(250)
        },
        function(){
            $(this).find('.caption').fadeOut(250); //.fadeOut(205)
        }
    );    
 
});        
</script>

<div class="row">

<div class="span3">
<?php 
$this->widget('MovieFilter', array(
	'model'=>$filterForm));
?>
</div>
<div class="span9" >
<h2>Movies</h2>
<div class="well"style="padding-left:45px; padding-top:15px;>
<?php

$this->widget('ResultGrid', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_movieGridItem',
	'itemsTagName'=>'ul id="hover-cap-4col"',
	'itemsCssClass'=>'thumbnails item-grid',
));
?>
</div>
</div>
</div>