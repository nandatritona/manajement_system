<div class="sidebar sidebar-main">
    <div class="sidebar-content">

        <!-- User menu -->
        <div class="sidebar-user">
            <div class="category-content">
                <div class="media">
                    <a href="<?= site_url()?>Dashboard" class="media-left"><img src="<?= base_url() ?>global_assets/images/placeholders/placeholder.jpg" class="img-circle img-sm" alt=""></a>
                    <div class="media-body">
                        <span class="media-heading text-semibold"><?php echo $this->session->userdata('UserName')?></span>
                        <div class="text-size-mini text-muted">
                            Selamat Datang
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /user menu -->

        <!-- Main navigation -->
        <div class="sidebar-category sidebar-category-visible">
            <div class="category-content no-padding">
                <ul class="navigation navigation-main navigation-accordion">
                    <li><a href="<?= site_url()?>Dashboard"><i class="icon-home4"></i> <span>Dashboard</span></a></li>
                    <?php
                    // Level 1
                    foreach ($_MenuLv1 as $row1) :
                        echo "<li class='nav-item nav-item-submenu'>";
                        echo "<a href='#' class='nav-link'>$row1->MenuIcon<span>$row1->MenuLabel</span></a>";
                        echo "<ul class='nav nav-group-sub' data-submenu-title='Layouts'>";
                        foreach ($_MenuLv2 as $row2) :
                            if ($row2->MenuHeader === $row1->MenuID) :
                                echo "<li class='nav-item'>";
                                echo "<a href='".site_url($row2->MenuLink)."' class='nav-link active'>$row2->MenuLabel</a>";
                                echo "</li>";
                            endif;
                        endforeach;
                        echo "</ul>";
                        echo "</li>";
                    endforeach;
                    ?>
                </ul>
            </div>
        </div>
        <!-- /main navigation -->

    </div>
</div>