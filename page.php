<?php get_header(); ?>
?>

<div id="content-info" style="padding:120px; border-radius:10px;  padding-bottom:50px;"> 
<div id="content-title" style="padding:20px;  border-bottom:5px solid yellow;"> 
<b style="font-size:30px;"> <?php the_title(); ?></b>

   <?php 
   if (have_posts()): while (have_posts()): the_post(); ?>
		        <h1 class="baslik"><?php the_title(); ?></h1>
		        <div class="icerik"><?php if (is_single()) {
               the_content();
          } else {
               the_excerpt();
          }

          ?></div>
		   <?php endwhile; ?>
	   <?php else: ?>
    <h2 class="sayfa-bulunamadi"><?php _e('Üzgünüm, aradığınızı bulamadık.', 'textdomain'); ?></h2>
   <?php endif; ?>
  

</div>
<div id="bottom-buttons"> 
    <div>
    YAZAR <h6> <?php the_author(); ?> <i class="bi bi-check-circle" style="color:blue;" title="Doğrulanmış Hesap"> </i> </h6>
    </div>
    <div id="okundusayisi">

     <i class="bi bi-check-all"></i>   
     <p style="font-size:10px;">Bu yazı ?? Kez okundu</p>

    </div>
    <div id="c-list" style="list-type:none;"> 
   <i class="bi bi-front"> </i> KATEGORİ<?php the_category();?>
</div>
    <div id="buttons" align="right"> 
    <i class="bi bi-share"></i>
<i class="bi bi-chat-dots"></i>


</div>
</div>
</div>
<?php get_footer();?>