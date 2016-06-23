<ul class="<?php echo $class?>">
    <?php
    $actualUrl = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
    if ($menu_items !== FALSE) :
        foreach ($menu_items as $value):
            $class = '';
            if ($value->url == $actualUrl){
                $class = 'menu__current';
            }
            ?>
            <li>
                <a class="<?php echo $class ?>" href="<?php echo $value->url ?>">
                    <?php echo $value->title ?>
                </a>
            </li>
            <?php
        endforeach;
    endif;
    ?>
</ul>