<?php
$title="المنتجات";
include_once('includes/header.php');
include_once('includes/connect_db.php');
include_once('includes/navbar.php');
?>

<h1 class="home-title">المنتجات</h1>

<div class="category-buttons">
    <button onclick="loadProducts('ALL')" class="btn">الكل </button>
    <button onclick="loadProducts('P')" class="btn">سباكة </button>
    <button onclick="loadProducts('C')" class="btn">نجارة </button>
    <button onclick="loadProducts('I')" class="btn">حديد و بلاستيك </button>
    <button onclick="loadProducts('F')" class="btn">زراعة </button>
    <button onclick="loadProducts('T')" class="btn">بلاط </button>

    
</div>

<form method="GET" class="search-box">
    <input type="text" name="search" placeholder="ابحث عن منتج...">
    <button type="submit">بحث</button>
</form>
<script>

function loadProducts(type){

    let url = "get_products.php";

    if(type !== "ALL"){
        url += "?type=" + type;
    }

    fetch(url)
    .then(response => response.text())
    .then(data => {
        document.getElementById("products-container").innerHTML = data;
    });

    //optional: clear search input when switching category.

    document.querySelector('input[name="search"]').value = "";

}

</script>

<div id="products-container"
 class="products-container">
<?php 

if(isset($_GET['search'])){
    $search = mysqli_real_escape_string($conn, $_GET['search']);
    $sql = "SELECT * FROM products
            WHERE P_name LIKE '%$search%' 
            OR description LIKE '%$search%'";
} else {
    $sql = "SELECT * FROM products";
}

$result = mysqli_query($conn, $sql);



while ($row = mysqli_fetch_assoc($result)) {
?>
    <div class="product-card">
        <img src="<?php echo htmlspecialchars($row['P_image']);?>" class="product-img" alt="<?php echo htmlspecialchars($row['P_name']); ?>">
        <h3><?php echo htmlspecialchars($row['P_name']);?></h3>

<?php if ($row['P_price'] > 0) { ?>
    <p>
        السعر:
        <?php echo htmlspecialchars($row['P_price']); ?>
        ريال سعودي /
        <?php echo htmlspecialchars($row['Unit']); ?>
    </p>
<?php } ?>

<?php if ($row['P_state'] === 'available') { ?>

    <?php if ($row['P_price'] == 0) { ?>
        <a href="product.php?id=<?php echo $row['P_id']; ?>" class="price-btn">
            طلب
        </a>
    <?php } else { ?>
        <a href="product.php?id=<?php echo $row['P_id']; ?>" class="btn">
            عرض
        </a>
    <?php } ?>

<?php } else { ?>
    <span class="unavailable">غير متوفر</span>
<?php } ?>
    </div>
<?php } ?>
</div>


<?php 
include_once('includes/footer.php');
?>