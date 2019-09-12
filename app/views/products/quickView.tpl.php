<h3><?php echo $product->name; ?></h3>

<img src="<?php echo $product->mainImage; ?>" width="250px" />

<div class="product-details">
	<h4>&pound;<?php echo $product->price->amount; ?></h4>
    
    <span><?php echo $product->stockStatus; ?></span>
    
    <div class="size-container">
        <?php foreach ($product->sizes as $size): ?>
            <div class="size">
                <?php echo $size; ?>
            </div>
        <?php endforeach; ?>
    </div>
    
    <div class="product-description">
        <?php echo $product->description; ?>
    </div>

</div>