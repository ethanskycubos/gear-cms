<header id="head">

    <div class="container">

        <div class="expand">
            <i class="icon icon-navicon-round"></i>
        </div>

        <h1><?=admin::$page; ?></h1>

        <div class="user">

            <nav>
                <ul>
                    <li>
                        <a href="">
                            <i class="icon icon-ios-help-outline"></i>
                        </a>
                    </li>
                    <li>
                        <a href="<?=config::get('url'); ?>">
                            <i class="icon icon-ios-home-outline"></i>
                        </a>
                    </li>
                    <li>
                        <a href="?logout=1">
                            <i class="icon icon-log-in"></i>
                        </a>
                    </li>
                </ul>
            </nav>

            <a href="<?=config::get('url').'admin/user/index/edit'; ?>" class="profile">
                <img src="<?=config::get('url').'admin/assets/img/avatar.jpg'; ?>" alt="">
                <span>
                    <?=user::current()->username; ?>
                </span>
            </a>

            <div class="clear"></div>

        </div>

        <div class="clear"></div>

    </div>

    <div id="nav">

        <?php
            $submenu = admin::getSubmenu();

            if($submenu):
        ?>

        <div class="submenu">
            <div class="container">
                <nav>
                    <ul>
                        <?php

                            foreach($submenu as $url => $array) {

                                $class = ($array['class']) ? ' class="'.$array['class'].'"' : '';

                                echo '
                                    <li'.$class.'>
                                        <a href="'.config::get('url').'admin/'.$url.'">'.$array['name'].'</a>
                                    </li>
                                ';

                            }

                        ?>
                    </ul>
                </nav>
            </div>
        </div>

        <?php
            endif;

            $menu = admin::getMenu();
            if($menu):
        ?>

        <div class="menu">
            <div class="container">
                <nav>
                    <ul>
                        <?php
                            foreach($menu as $url => $array) {

                                $class = ($array['class']) ? ' class="'.$array['class'].'"' : '';

                                echo '
                                    <li'.$class.'>
                                        <a href="'.config::get('url').'admin/'.$url.'">'.$array['name'].'</a>
                                    </li>
                                ';

                            }
                        ?>
                    </ul>
                </nav>
            </div>
        </div>

        <?php
            endif;
        ?>

    </div>

</header>

<div class="container">
    <main>

        <?php echo config::get('system'); ?>
