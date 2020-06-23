<?php

if (have_post()) :
    while(have_post()) : the_post();
        the_content();
    endwhile;
endif;