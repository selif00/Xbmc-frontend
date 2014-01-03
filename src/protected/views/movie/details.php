<?php

/* @var $this MovieController */
/* @var $actorDataProvider LibraryDataProvider */
/* @var $details stdClass */

$this->pageTitle = $details->label.' ('.$details->year.') - Movies';

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
<div class="item-details">
	<div class="row">
		<div class="span3">
		<div class="well">
        	<?php 
			
			echo CHtml::image(new ThumbnailVideo($details->thumbnail, 
					Thumbnail::SIZE_LARGE), '', array(
				'class'=>'item-thumbnail hidden-phone',
			));
			
			// The check is also done in RetrieveMediaWidget but we don't want 
			// to show this piece of text at all if the user can't do what it 
			// says
			if (Yii::app()->user->role !== User::ROLE_SPECTATOR)
			{
				?>
				<div class="item-links">
					<h4>Watch / Download</h4>

					<p>
						(Note if the video don't play on the player)
                        Click the Watch button to start streaming the video (open 
						the file in your favorite media player), or download the 
						individual files for later viewing using the links below it.
					</p>

					<?php $this->widget('RetrieveMovieWidget', array(
						'links'=>$movieLinks,
						'details'=>$details,
					)); ?>
				</div>
				<?php
			}
			
			?>
		</div>	
		</div>
		
		<div class="span9 item-description" style="margin-left:10px;">
			<div class="item-top row-fluid">
				<div class="item-title span6">
					<h2>
						<a href="http://www.imdb.com/title/<?php echo $details->imdbnumber; ?>">
							<?php echo $details->label; ?>
						</a>
					</h2>

					<p>(<?php echo $details->year; ?>)</p>

					<p class="tagline">
						<?php echo $details->tagline; ?>
					</p>

				</div>
				
				<div class="span6 hidden-phone">
                
					<?php $this->widget('MediaFlags', array(
							'streamDetails'=>$details->streamdetails)); ?>
                          
				</div>		                
			</div>
<div class="span 12"> 
 <script type="text/javascript">
 
 $(document).ready(function() {
    $('.video').allofthelights(
 {
	 'opacity': '1',
 }
	
	);
	});




</script>
<?php $videoname = $details->file; ?>
<?php  

$ffmpeg = FFMpeg\FFMpeg::create();
$video = $ffmpeg->open(''.$videoname.'');

$video
    ->frame(FFMpeg\Coordinate\TimeCode::fromSeconds(10))
    ->save('frame.jpg');

$thumbnail = "../../frame.jpg";


?>





<div class="switch"><button class="btn btn-primary" id="button">Turn Off the Light</button></div><br />

 <video id="my_video_1" class="video video-js vjs-default-skin" 
      controls preload="none" width="850px" height="400px" data-setup='{}'
      poster='<?php echo $thumbnail; ?>'>
 	<source src="<?php echo $videoname; ?>" type="video/mp4" />
<?php
$it = new RecursiveDirectoryIterator(dirname($details->file));
$allowed=array("vtt","srt");


foreach(new RecursiveIteratorIterator($it) as $file) {
 	
	 if(in_array(substr($file, strrpos($file, '.') + 1),$allowed)) {
         echo "<track src='$file' kind='captions' srclang='en_US' label='English' /> \n";
    }else
		{
		echo "";
	}
	
	
}



?>
    

<object width="840" height="400"> 
<param name="movie" value="http://fpdownload.adobe.com/strobe/FlashMediaPlayback.swf"></param>
<param name="flashvars" value="src=<?php echo $videoname;?>&controlBarMode=floating&poster=<?php  echo new ThumbnailVideo($details->thumbnail, Thumbnail::SIZE_LARGE);?>"></param>
<param name="allowFullScreen" value="true"></param>
<param name="allowscriptaccess" value="always"></param>
<embed src="http://fpdownload.adobe.com/strobe/FlashMediaPlayback.swf" type="application/x-shockwave-flash" allowscriptaccess="always" allowfullscreen="true" width="840" height="400" flashvars="src=<?php echo $videoname;?>&controlBarMode=floating&poster=<?php echo  new ThumbnailVideo($details->thumbnail, Thumbnail::SIZE_LARGE);?>"></embed>
</object>
 </video>
<!--
    <script>
      var videos = [
        {
          src : [
           
            '/intro.mp4'
           
          ],
          poster : '<?php // echo new ThumbnailVideo($details->thumbnail, Thumbnail::SIZE_LARGE);?>',
          title : 'Intro'
        },
        {
          src : [
            
            '<?php // echo $videoname;?>'
            
          ],
          poster : 'http://flowplayer.org/media/img/demos/playlist/railway_station.jpg',
          title : '<?php // echo $details->title; ?>'
        },
       
      ];
      var player = videojs('my_video_1');
      player.playList(videos, {
        getVideoSource: function(vid, cb) {
          cb(vid.src, vid.poster);
        }
      });
      $('[data-action=prev]').on('click', function(e) {
        player.prev();
      });
      $('[data-action=next]').on('click', function(e) {
        player.next();
      });
    </script>
 -->
<br />
<center>
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- movies1 -->
<ins class="adsbygoogle"
     style="display:inline-block;width:729px;height:90px"
     data-ad-client="ca-pub-1191244841301389"
     data-ad-slot="2660959087"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
</center><br />

<style>
  /* Show the controls (hidden at the start by default) */
  .video-js .vjs-control-bar { display: block; }
  
    /* Make the CDN fonts accessible from the CSS */
  @font-face {
    font-family: 'VideoJS';
    src: url('http://vjs.zencdn.net/f/2/vjs.eot');
    src: url('http://vjs.zencdn.net/f/2/vjs.eot?#iefix') format('embedded-opentype'), 
      url('http://vjs.zencdn.net/f/2/vjs.woff') format('woff'),     
      url('http://vjs.zencdn.net/f/2/vjs.ttf') format('truetype');
  }

  /* Make the demo a little prettier */
  .video-js { margin: 0 auto; }

</style>

			<div class="item-info clearfix">
			<div class="well" style="height:45px;">	
				<?php
				
				$rating = $details->rating;
				
				if ((int)$rating > 0)
					$this->renderPartial('/videoLibrary/_rating', array(
						'rating'=>$rating, 'votes'=>$details->votes));
				
				?>

				<div class="pull-left">

					<div class="item-metadata clearfix">

						<p><?php echo implode(' / ', $details->genre); ?></p>
						<?php

						// Runtime and MPAA rating are not always available
						Yii::app()->controller->renderPartial('//videoLibrary/_runtime', 
								array('runtime'=>$details->runtime));
						
						// MPAA rating is not always available
						if ($details->mpaa)
							echo '<p>MPAA rating: '.$details->mpaa.'</p>';
						
						?>
                        
      
                        
                        
					</div>
</div>
				</div>
			</div>
              <?php

						// Runtime and MPAA rating are not always available
						Yii::app()->controller->renderPartial('//videoLibrary/_runtime', 
								array('runtime'=>$details->trailer));
						
						 ?>
                        <h3>Trailer</h3>
            <div >

                            
  <div class="well">                          
     <div id="ytplayer"></div>

<script>
  // Load the IFrame Player API code asynchronously.
  var tag = document.createElement('script');
  tag.src = "https://www.youtube.com/player_api";
  var firstScriptTag = document.getElementsByTagName('script')[0];
  firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

  // Replace the 'ytplayer' element with an <iframe> and
  // YouTube player after the API code downloads.
  var player;
  function onYouTubePlayerAPIReady() {
    player = new YT.Player('ytplayer', {
      height: '390',
      width: '835',
      videoId: '<? echo substr($details->trailer, 57); ?>'
    });
  }
</script>
<script type="text/javascript">

function ReplaceNumberWithCommas(yourNumber) {
    //Seperates the components of the number
    var components = yourNumber.toString().split(".");
    //Comma-fies the first part
    components [0] = components [0].replace(/\B(?=(\d{3})+(?!\d))/g, ",");
    //Combines the two sections
    return components.join(".");
}

  function youtubeFeedCallback(data) {
    var s = '';
    if (data.entry.gd$rating) {
      s += '<b>Rating:&nbsp;</b> ' + data.entry.gd$rating.average.toFixed(1) + ' out of ' + data.entry.gd$rating.max + '&nbsp; (' + ReplaceNumberWithCommas(data.entry.gd$rating.numRaters) + ' ratings&nbsp;)&nbsp;';
    }
	s += '<span class="pull-right">' + ReplaceNumberWithCommas(data.entry.yt$statistics.viewCount) + '&nbsp;Views</span><br />';
	s += '<b>&nbsp;  <i class="icon-thumbs-up"></i>  </b> ' + ReplaceNumberWithCommas(data.entry.yt$rating.numLikes) + '';
	s += '<b>&nbsp;  <i class="icon-thumbs-down"></i>  </b> ' + ReplaceNumberWithCommas(data.entry.yt$rating.numDislikes) + '';
    s += '<br/><a class="pull-right" href="' + data.entry.media$group.media$player.url + '" target="_blank">Watch on YouTube</a>';
    document.write(s);
  }
</script>
<br />

<script type="text/javascript" src="http://gdata.youtube.com/feeds/api/videos/<? echo substr($details->trailer, 57); ?>?v=2&amp;alt=json-in-script&amp;callback=youtubeFeedCallback"></script>   
<h3>Comments</h3>


<div class="well">   
<div id="comments" data-spy="scroll" data-offset="0" class="scrollspy-example"></div>
<script type="text/javascript">
$.ajax({
    url: "http://gdata.youtube.com/feeds/api/videos/<? echo substr($details->trailer, 57); ?>/comments?v=2&alt=json&max-results=25",  
    //gets the max first 50 results.  To get the 'next' 50, use &start-index=50
    dataType: "jsonp",
    success: function(data){
        $.each(data.feed.entry, function(key, val) {
            
            comment = $("<div class='comment'></div>");
            
            author = $("<a target='_blank' class='youtube_user'></a>");
            author.attr("href", "http://youtube.com/user/" + val.author[0].name.$t);
            author.html(val.author[0].name.$t);
            
            content = $("<div style='font-size: 14px;' class='content'></div>");
            content.html(val.content.$t);
            
            comment.append(author).append(content);
            $('#comments').append(comment);
        });
    }
});
</script>  
             
   </div>                         
                            
            </div>
						
						
             
			<h3>Plot</h3>
			
			<div class="item-plot">
			<div class="well">
            	<p>
					<?php echo !empty($details->plot) ? $details->plot 
							: 'Not available'; ?>
				</p>
                </div>
			</div>
			<h3>Cast</h3>
			
			<?php echo FormHelper::helpBlock("Click an image to see other movies with that person, or click the name to go to the person's IMDb page"); ?>
	<div class="well">		
			<div class="row-fluid">
				<?php $this->widget('zii.widgets.CListView', array(
					'dataProvider'=>$actorDataProvider,
					'itemView'=>'_actorGridItem',
					'itemsTagName'=>'ul id="hover-cap-4col"',
					'itemsCssClass'=>'thumbnails actor-grid',
					'enablePagination'=>false,
					'template'=>'{items}'
				)); ?>
			</div>
            </div>
		</div>
	</div>
</div>
<?php 

?>
