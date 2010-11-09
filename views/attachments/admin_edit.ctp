<div class="attachments form">
    <h2><?php echo $title_for_layout; ?></h2>

    <?php echo $this->Form->create('Node', array('url' => array('controller' => 'attachments', 'action' => 'edit')));?>
        <fieldset>

            <div class="tabs">
                <ul>
                    <li><a href="#node-basic"><span><?php __('Attachment'); ?></span></a></li>
                    <li><a href="#node-info"><span><?php __('Info'); ?></span></a></li>
                </ul>
            
                <div id="node-basic">
                    <div class="thumbnail">
                        <?php
                            $fileType = explode('/', $this->data['Node']['mime_type']);
                            $fileType = $fileType['0'];
                            if ($fileType == 'image') {
                                echo $image->resize('/uploads/'.$this->data['Node']['slug'], 200, 300);
                            } else {
                                echo $this->Html->image('/img/icons/' . $filemanager->mimeTypeToImage($this->data['Node']['mime_type'])) . ' ' . $this->data['Node']['mime_type'];
                            }
                        ?>
                    </div>

                    <?php
                        echo $this->Form->input('id');
                        echo $this->Form->input('title');
                        echo $this->Form->input('excerpt', array('label' => __('Caption', true)));
                        //echo $this->Form->input('body', array('label' => __('Description', true)));
                    ?>
                </div>

                <div id="node-info">
                    <?php
                        echo $this->Form->input('file_url', array('label' => __('File URL', true), 'value' => Router::url($this->data['Node']['path'], true), 'readonly' => 'readonly'));
                        echo $this->Form->input('file_type', array('label' => __('Mime Type', true), 'value' => $this->data['Node']['mime_type'], 'readonly' => 'readonly'));
                    ?>
                </div>
            </div>
        </fieldset>
    <?php echo $this->Form->end('Submit');?>
</div>