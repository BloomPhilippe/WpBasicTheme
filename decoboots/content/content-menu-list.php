<ul class="<?php echo $class ?>">
    <?php
    $actualUrl = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
    if ($menu_items !== FALSE) :
        foreach ($menu_items as $value):
            if ($value->menu_item_parent == 0):
                $class = '';
                $parent = '';
                if ($value->url == $actualUrl) {
                    $class = 'menu__current';
                }
                if (!empty($children[$value->ID])){
                    $parent = 'parent';
                }
                ?>
                <li class="<?php echo $parent ?>">
                    <a class="<?php echo $class ?>" href="<?php echo $value->url ?>">
                        <?php echo $value->title ?>
                    </a>
                    <?php
                    if (!empty($children[$value->ID])):
                        ?>
                        <ul class="children-menu">
                            <?php
                            foreach ($children[$value->ID] as $child):
                                ?>
                                <li>
                                    <a class="" href="<?php echo $child->url ?>">
                                        <?php echo $child->title ?>
                                    </a>
                                </li>
                                <?php
                            endforeach;
                            ?>
                        </ul>
                        <?php
                    endif;
                    ?>
                </li>
                <?php
            endif;
        endforeach;
    endif;
    ?>
</ul>