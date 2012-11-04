<div class="my_meta_control">
 
  <p>More details for the product.</p>
 
  <label>Size</label>
 
  <p>
    <?php $mb->the_field('size'); ?>
    <input type="text" name="<?php $mb->the_name(); ?>" value="<?php $mb->the_value(); ?>"/>
    <span>Enter in a price</span>
  </p>
 
  <label>Info <span>(optional)</span></label>
 
  <p>
    <?php $mb->the_field('info'); ?>
    <textarea name="<?php $mb->the_name(); ?>" rows="3"><?php $mb->the_value(); ?></textarea>
    <span>Enter in a description</span>
  </p>

</div>