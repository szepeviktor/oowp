<a href='<?php print $post->permalink(); ?>' class='item item-<?php print $post::postType(); ?>'>
    <h3><?php print $post->title(); ?></h3>
    <p><?php print $post->excerpt(); ?></p>
</a>
