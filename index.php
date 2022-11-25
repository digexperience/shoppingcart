<?php
    session_start();  
?>
<?php
    $arrProducts = array(
        array(
            'name'          => "Blue Long Sleeve Polo",
            'description'   => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean dignissim vulputate tortor, sed ornare dui pharetra sed. Aliquam posuere eleifend eros nec aliquam. Aliquam ac risus a tellus mollis ultrices. Mauris tellus felis, luctus id metus nec, tristique molestie neque.",
            'price'         => "180",
            'photo1'        => "product1A.jpg",
            'photo2'        => "product1B.jpg"
        ),
        array(
            'name'          => "Stripe Long Sleeve Polo",
            'description'   => "Aenean tincidunt mattis eros, non venenatis felis suscipit eu. Fusce a tempus nulla. Cras pretium purus augue, ut semper arcu pulvinar sit amet. Nam et est consectetur, mollis mi nec, pharetra nibh. Sed malesuada pellentesque ipsum, vel congue purus. Mauris eget velit vel metus ullamcorper lacinia. Sed in vestibulum erat.",
            'price'         => "120",
            'photo1'        => "product2A.jpg",
            'photo2'        => "product2B.jpg",
        ),
        array(
            'name'          => "Gray Long Sleeve Polo",
            'description'   => "Donec ac neque non turpis aliquet vehicula a in eros. Vestibulum ante mauris, condimentum nec ex eget, ultrices consequat felis. Curabitur nec consequat magna. Donec euismod magna tortor, eget ultrices mauris lobortis et. Etiam imperdiet aliquet porta. Maecenas magna felis, placerat et rhoncus quis, gravida in nunc.",
            'price'         => "200",
            'photo1'        => "product3A.jpg",
            'photo2'        => "product3B.jpg",
        ),
        array(
            'name'          => "Fit Polo Shirt",
            'description'   => "Proin rutrum volutpat ultricies. In vitae lorem vitae augue blandit lobortis. Aenean vel elit malesuada, semper diam et, tristique quam. Praesent scelerisque ipsum vitae vehicula aliquet. Morbi odio risus, consectetur in tristique eget, scelerisque nec erat. Nulla porttitor erat eget risus scelerisque, vitae gravida tortor interdum. Aliquam commodo lacinia ante sit amet commodo.",
            'price'         => "100",
            'photo1'        => "product4A.jpg",
            'photo2'        => "product4B.jpg",
        ),
        array(
            'name'          => "Light Blue Polo Shirt",
            'description'   => "Nullam pharetra sit amet lectus eu mattis. Cras nec blandit massa. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Curabitur volutpat, velit eu bibendum aliquet, justo justo sodales ligula, sit amet fermentum velit est id sapien. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Cras eget scelerisque dui.",
            'price'         => "190",
            'photo1'        => "product5A.jpg",
            'photo2'        => "product5B.jpg",
        ),
        array(
            'name'          => "Blue Polo Shirt",
            'description'   => "Maecenas gravida viverra felis, in rutrum dolor. Nam pharetra mollis urna, eu sagittis odio luctus quis. Pellentesque vulputate arcu purus, non tincidunt ligula rutrum ac. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nunc et nibh sed massa vulputate sagittis. Fusce sit amet odio ut dui auctor venenatis eu non leo. ",
            'price'         => "160",
            'photo1'        => "product6A.jpg",
            'photo2'        => "product6B.jpg",
        ),
        array(
            'name'          => "Light Long Sleeve Polo",
            'description'   => "Morbi pharetra nisi felis. Interdum et malesuada fames ac ante ipsum primis in faucibus. Suspendisse pretium sem ut orci semper fermentum. Curabitur quis dui quis quam laoreet sollicitudin. Quisque sit amet faucibus ligula, quis pharetra lacus. Proin ut imperdiet lectus, sit amet placerat risus.",
            'price'         => "165",
            'photo1'        => "product7A.jpg",
            'photo2'        => "product7B.jpg",
        ), 
        array(
            'name'          => "Polka Dots Polo Shirt",
            'description'   => "Donec rutrum, ipsum ac molestie tristique, nisi leo hendrerit nibh, eu volutpat augue nibh in massa. Nulla molestie elit sit amet urna mattis, molestie pharetra tortor venenatis. In quis dolor sed urna maximus dignissim. Morbi aliquet nulla eget erat accumsan, id pretium ex varius.",
            'price'         => "145 ",
            'photo1'        => "product8A.jpg",
            'photo2'        => "product8B.jpg",
        )
    );
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css" integrity="sha512-P5MgMn1jBN01asBgU0z60Qk4QxiXo86+wlFahKrsQf37c9cro517WzVSPPV1tDKzhku2iJ2FVgL67wG03SGnNA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="styles.css">
    <title>Learn IT Easy Online Shop | Shopping Cart</title>
</head>
<body>
    <div class="container">
        <div class="row mt-5">
            <div class="col-10">
                <h1><i class="fa fa-store"></i>Easy Learn It Shop</h1>
            </div>
            <div class="col-2 text-right">
                <a href="cart.php" class="btn btn-primary">
                    <i class="fa fa-shopping-cart"></i> Cart
                    <span class="badge badge-light">                        
                        <?php echo (isset($_SESSION['totalQuantity']) ? $_SESSION['totalQuantity'] : "0"); ?>
                    </span>
                </a>
            </div>
        </div>
        <hr>

        <div class="row">
            <?php if(isset($arrProducts)): ?>
                <?php foreach($arrProducts as $key => $product): ?>
                    <div class="col-md-3 col-sm-6 mb-4">
                        <div class="product-grid2 card">
                            <div class="product-image2">
                                <a href="details.php?k=<?php echo $key; ?>">
                                    <img class="pic-1" src="img/<?php echo $product['photo1']; ?>">
                                    <img class="pic-2" src="img/<?php echo $product['photo2']; ?>">
                                </a>                        
                                <a class="add-to-cart" href="details.php?k=<?php echo $key; ?>"><i class="fa fa-cart-plus"></i> Add to cart</a>
                            </div>
                            <div class="product-content">
                                <h3 class="title">
                                    <?php echo $product['name']; ?>
                                    <span class="badge badge-dark">₱ <?php echo $product['price']; ?></span>
                                </h3>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php else: ?>
                <div class="col-12 card p-5">
                    <h3 class="text-center text-danger">No Product Found!</h3>
                </div>
            <?php endif; ?>
        </div>
    </div>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.bundle.min.js" integrity="sha512-wV7Yj1alIZDqZFCUQJy85VN+qvEIly93fIQAN7iqDFCPEucLCeNFz4r35FCo9s6WrpdDQPi80xbljXB8Bjtvcg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</body>
</html>
Footer
© 2022 GitHub, Inc.
Footer navigation
Terms
Privacy
Security
