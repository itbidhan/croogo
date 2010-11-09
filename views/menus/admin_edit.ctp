<div class="menus form">
    <h2><?php echo $title_for_layout; ?></h2>
    <?php echo $this->Form->create('Menu');?>
        <fieldset>
            <div class="tabs">
                <ul>
                    <li><a href="#menu-basic"><span><?php __('Menu'); ?></span></a></li>
                    <li><a href="#menu-misc"><span><?php __('Misc.'); ?></span></a></li>
                    <?php echo $layout->adminTabs(); ?>
                </ul>

                <div id="menu-basic">
                    <?php
                        echo $this->Form->input('id');
                        echo $this->Form->input('title');
                        echo $this->Form->input('alias');
                        echo $this->Form->input('description');
                        //echo $this->Form->input('status');
                    ?>
                </div>

                <div id="menu-misc">
                    <?php
                        echo $this->Form->input('params');
                    ?>
                </div>
                <?php echo $layout->adminTabs(); ?>
            </div>
        </fieldset>
    <?php echo $this->Form->end('Submit');?>
</div>