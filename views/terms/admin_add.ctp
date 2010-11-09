<?php
    $this->Html->script(array('terms'), false);
?>
<div class="terms form">
    <h2><?php echo $title_for_layout; ?></h2>

    <?php 
        echo $this->Form->create('Term', array(
            'url' => array(
                'controller' => 'terms',
                'action' => 'add',
                $vocabulary['Vocabulary']['id'],
            ),
        ));
    ?>
        <fieldset>
            <div class="tabs">
                <ul>
                    <li><span><a href="#term-basic"><?php __('Term'); ?></a></span></li>
                    <?php echo $layout->adminTabs(); ?>
                </ul>

                <div id="term-basic">
                <?php
                    echo $this->Form->input('Taxonomy.parent_id', array(
                        'options' => $parentTree,
                        'empty' => true,
                    ));
                    echo $this->Form->input('title');
                    echo $this->Form->input('slug', array('class' => 'slug'));
                    echo $this->Form->input('description');
                ?>
                </div>
                <?php echo $layout->adminTabs(); ?>
            </div>
        </fieldset>
    <?php echo $this->Form->end('Submit');?>
</div>