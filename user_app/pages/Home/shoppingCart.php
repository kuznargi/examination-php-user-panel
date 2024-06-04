<div class="container">
    <section id="cart" class="section-p1">
        <table width="100%">
            <thead>
                <tr>
                    <td>Remove</td>
                    <td>Image</td>
                    <td>Product</td>
                    <td>Price</td>
                    <td>Discount</td>
                    <td>Discounted Price</td>
                    <td>Quantity</td>
                </tr>
            </thead>
            <tbody>

                <?php foreach ($data["shoppingCarts"] as $cart) : ?>
                    <?php foreach ($products as $product) : ?>
                        <?php if ($cart->product_id == $product->id) : ?>
                            <tr>
                             <td>   <form method="post">
                                    <button type="submit" name="id" value="<?= $cart->id ?>"><i class="fas fa-times-circle" style="color:black"></i></button>
                                </form>
</td>

                                <td><img src="/user/images/products/<?= htmlspecialchars($product->image_url) ?>" alt=""></td>
                                <td><?= htmlspecialchars($product->name) ?></td>
                                <td> <del><?=  htmlspecialchars($product->price) ?></del></td>
                                <td><?=  htmlspecialchars($product->discount) ?></td>
                                <td><?php echo $product->price - $product->discount ?></td>
                                <td><?= htmlspecialchars($cart->quantity) ?></td>
                            </tr>
                        <?php endif; ?>
                    <?php endforeach; ?>
                <?php endforeach; ?>

            </tbody>
        </table>
    </section>
</div>