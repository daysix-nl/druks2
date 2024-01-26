<?php
if (isset($block['data']['preview_image_help'])): ?>
    <img src="#" style="width:100%; height:auto;">
    <?php
else: ?>

    <div class="wysiwyg-block">
        <?php the_field('wysiwyg'); ?>
    </div>
<?php endif; ?>
