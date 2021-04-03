<?php 
    require_once("entities/product.class.php");
    require_once("entities/category.class.php");
?>
//add de tao conflict ne nhe
<?php
    include_once("header.php");
    if(!isset($_GET["cateid"])){
        $prods = Product::list_product();
    } else{
        $cateid = $_GET["cateid"];
        $prods = Product::list_product_by_cateid($cateid);
    }
    $cates = Category::list_category();
?>

<div class="container text-center">
    <div class="col-sm-3">
    
    </div>
    <h3>Sản phẩm cửa hàng</h3><br>
    <div class="row">
        <?php
            foreach($prods as $item){
        ?>
            <div class="col-sm-4">
                <img src="<?php echo "/LAB3/".$item["Picture"];?>" class="img-responsive" style="width:100%" alt="Image">
                <p class="text-danger"><?php echo $item["ProductName"];?></p>
                <p class="text-info"><?php echo $item["Price"];?></p>
                <p>
                    <button type="button" class="btn btn-primary">Mua hàng</button>
                </p>
            </div>
            <?php } ?>
    </div>
</div>

<?php

    include_once("header.php");
?>