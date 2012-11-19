<script language="JavaScript" type="text/javascript">
/*<![CDATA[*/
$(document).ready(function(){
    $('#gallery li').hover(function(){
       $(this).children('.gcontent').stop(true, true).fadeIn('fast');
    }, function(){
        $(this).children('.gcontent').fadeOut();
    });
});
/*]]>*/
</script>
<?php
	$slidecat = get_option('swt_slide_category1');
	$slidecount = get_option('swt_slide_count1');
    $my_query = new WP_Query('category_name= '. $slidecat .'&showposts='.$slidecount.'');
    if($my_query->have_posts()):
?>
<div id="gallery">
<ul>

<?php $x=0; while ($my_query->have_posts()) : $my_query->the_post();$do_not_duplicate = $post->ID; $x++; ?>
<li class="item<?php echo $x; ?>">
<?php if ( function_exists( 'get_the_image' ) ) {
get_the_image( array( 'custom_key' => array( 'gallthumb' ), 'default_size' => 'full', 'image_class' => 'gallthumb', 'width' => '206', 'height' => '191' ) ); } ?>
<div class="gcontent">
<h3 class="gtitle"><a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
<p><?php truncate_post(80, true); ?></p>
<a class="gmore" href="<?php the_permalink() ?>#more">Read More</a>
</div>
</li>
<?php endwhile; ?>

</ul>
</div>
<?php endif; ?>