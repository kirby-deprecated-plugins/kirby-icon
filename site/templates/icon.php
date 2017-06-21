<!-- query the icon-field (named 'my_first_icon' in the blueprint) and print-down it's value - 'fa-4x' stands for a big icon, and can be deleted -->

<i class="fa fa-<?php echo $page()->my_first_icon()->text(); ?> fa-4x"></i>
