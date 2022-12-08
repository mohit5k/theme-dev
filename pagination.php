<?php
function woof_pagination($pages = '', $range = 2)
{ 
 $showitems = ($range * 2)+1;  

     global $paged;
     if(empty($paged)) $paged = 1;

     if($pages == '')
     {
         global $wp_query;
         $pages = $wp_query->max_num_pages;
         if(!$pages)
         {
             $pages = 1;
         }
     }   

     if(1 != $pages)
     {
        echo "
		<div class='col-md-12 mt-5'>
		    <nav aria-label='pagination'>
               <ul class='pagination float-right'>";
          echo "<li class='page-item'><a aria-label='Previous' class='page-link' href='".get_pagenum_link(1)."'><span aria-hidden='true' class='hidden-xs'>Previous</span><span class='visible-xs'></span></a></li>";
         
        for ($i=1; $i <= $pages; $i++)
        {
             if (1 != $pages &&( !($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems ))
             {
                 echo ($paged == $i)? "<li class='page-item'><a class='page-link active'>".$i."</a></li>":"<li class='page-item'><a class='page-link' href='".get_pagenum_link($i)."'>".$i."</a></li>";
             }
        }

        echo "<li class='page-item'><a aria-label='Next' class='page-link' href='".get_pagenum_link($pages)."'><span aria-hidden='true' class='hidden-xs'>Next</span><span class='visible-xs'></span></a></li>";

        echo "</ul></nav></div>\n";
     }
}
?>