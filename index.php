<?php
$title="الرئيسية";
include_once('includes/header.php');
include_once('includes/connect_db.php');
include_once('includes/navbar.php');
?>

<div class="home-container">

    <h1 class="home-title">
        مرحبا بكم في محلات علي عبدالله الحبيشي لمواد البناء
    </h1>
    
    <p class="home-description">
محلات علي عبدالله الحبيشي لمواد البناء توفر منتجات السباكة والكهرباء والحديد والبلاستيك ومواد البناء المختلفة في اليمن بأسعار مناسبة وجودة عالية.
</p>

    <h2 class="section-title">أفضل منتجاتنا</h2>
    

    <div class="slider">
        <div class="slider-track">


    <a href="products.php"><img src="images/1779212785716.jpg" alt="معدات نجارة" class="featured-img"></a>

    <a href="products.php"><img src="images/1776261006084.jpg" alt="مغاسل" class="featured-img"></a>

    <a href="products.php"><img src="images/photo_2026-05-13_20-35-34.jpg" alt=" غراء بلاط بورسلان"  class="featured-img"></a>

    <a href="products.php"><img src="images/1776262623571.jpg" alt="معدات الكنج" class="featured-img"></a>

    <a href="products.php"><img src="images/1776351035659.jpg" alt="بخاخات" class="featured-img"></a>

    <a href="products.php"><img src="images/king_drill.jpg" alt="دريلات king" class="featured-img"></a>

    <a href="products.php"><img src="images/1776262285228.jpg" alt="كراسي" class="featured-img"></a>

    <a href="products.php"><img src="images/photo_2026-05-13_20-35-22.jpg" alt="غراء بلاط سيراميك" class="featured-img"></a>

    <a href="products.php"><img src="images/photo_2026-05-03_14-42-06.jpg" alt="معجون جدران" class="featured-img"></a>

</div>
</div>



    <p class="home-subtitle">
        جودة عالية بسعر مناسب
    </p>

    <a href="products.php" class="btn home-btn">
        عرض المنتجات
    </a>

</div>

<?php 
include_once('includes/footer.php');
?>