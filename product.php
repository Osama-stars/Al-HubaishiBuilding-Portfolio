<?php
$title="المنتج";
include_once('includes/header.php');
include_once('includes/connect_db.php');
include_once('includes/navbar.php');

$id = intval($_GET['id']); // The ID of the product from the products page.
$sql = "SELECT * FROM products WHERE P_id = $id";
$result = mysqli_query($conn, $sql);
$product = mysqli_fetch_assoc($result);
$name =$product['P_name'];
$Price =$product["P_price"];

$whatsapp_number = "967772139268"; // رقم أيمن
$message = "هل هذا المنتج لازال متوفراً؟\n";
$message .= "المنتج: $name\n";
$message = "هل هذا المنتج لازال متوفراً؟\n";
$message .= "المنتج: $name\n";

if ($Price > 0) {
    $message .= "السعر: $Price\n";
}
$whatsapp_link = "https://wa.me/$whatsapp_number?text=" . urlencode($message);

?>


<div class="product-card-single">
    <img src="<?php echo htmlspecialchars($product['P_image']); ?>" 
         alt="<?php echo htmlspecialchars($product['P_name']); ?>" 
         class="product-img-single">
    <h3 class="product-name-single"><?php echo htmlspecialchars($product['P_name']); ?></h3>
    <p class="product-description-single"><?php echo htmlspecialchars($product['description']); ?></p>
    <?php if ($product['P_price'] > 0) { ?>
    <p class="product-price-single">
        السعر: <?php echo htmlspecialchars($product['P_price']); ?>
        ريال سعودي /
        <?php echo htmlspecialchars($product['Unit']); ?>
    </p>
<?php } ?>
    <p class="product-state-single"><?php echo ($product['P_state'] === 'available') ? "متوفر" : "غير متوفر"; ?></p>
    <a href="products.php" class="btn product-btn-single">العودة إلى المنتجات</a>
    <a href=<?php echo $whatsapp_link;?> class="green-btn" target="_blank">طلب عبر الواتس اب</a>
</div>

<?php 
include_once('includes/footer.php');
?>