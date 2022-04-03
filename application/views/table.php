<?php include "includes/header.php"; ?>


<div class="limiter">
    <div class="container-login100" style="background-image: url('<?php echo base_url("assets/images/bg-01.jpg") ?>');">
        <div class="wrap-login100" style="width:60%;">
            <div class="text-center" style="color:white">
                <h2>Products</h2>
            </div>
            <hr style="background-color:white">
            <br>

            <table class="table table-hover" style="color:white">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Product Name</th>
                        <th>Category</th>
                        <th>Stock</th>
                        <th>Price</th>
                        <th>Created Date</th>
                    </tr>
                </thead>
                <tbody><?php foreach ($items as $item) {
                        ?>
                        <tr>
                            <td><?php echo $item->id ?></td>
                            <td><?php echo $item->product_name ?></td>
                            <td><?php
                                foreach ($categories as $category) {
                                    if ($category->id == $item->product_category_id) {
                                        echo $category->category_name;
                                    }
                                }
                                ?></td>
                            <td><?php echo $item->stock ?></td>
                            <td><?php echo $item->price ?></td>
                            <td><?php echo $item->createdAt ?></td>

                        </tr><?php
                            } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?php include "includes/footer.php"; ?>