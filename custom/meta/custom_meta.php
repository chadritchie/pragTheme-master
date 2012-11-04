<div class="my_meta_control">
 
  <p>More details for the product.</p>
 
  <label>Price</label>
 
  <p>
    <?php $mb->the_field('price'); ?>
    <input type="text" name="<?php $mb->the_name(); ?>" value="<?php $mb->the_value(); ?>"/>
    <span>Enter in a price</span>
  </p>
 
  <label>Description <span>(optional)</span></label>
 
  <p>
    <?php $mb->the_field('description'); ?>
    <textarea name="<?php $mb->the_name(); ?>" rows="3"><?php $mb->the_value(); ?></textarea>
    <span>Enter in a description</span>
  </p>

</div>