<p>
      <a href="/products" class="btn btn-secondary">Go Back to Products</a> 
</p>

<h1>Update Product</h1>

<form  method="post" enctype="multipart/form-data">

  <?php if ($product['image']): ?>
          <img src="/<?php echo $product['image'] ?>" class="product-img-view">
          <?php endif; ?>


    <div class="form-group">
      <label>Product Image</label>
      <br>
      <input type="file" name="image">
    </div>
    <div class="form-group">
      <label>Product Title</label>
      <input type="text" name="title" class="form-control" value="<?php echo $product['title'] ?>">
    </div>
    <div class="form-group">
      <label>Product Description</label>
      <textarea class="form-control" name="description"><?php echo $product['description'] ?></textarea>
    </div>
    <div class="form-group">
      <label>Product Price</label>
      <input type="number" step=".01" name="price" value="<?php echo $product['price'] ?>" class="form-control">
    </div><br>

    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
