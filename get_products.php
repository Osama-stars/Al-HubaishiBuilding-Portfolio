<?php  

include_once('includes/connect_db.php');

if(isset($_GET['type']) && $_GET['type'] != "ALL"){

    $type = mysqli_real_escape_string($conn, $_GET['type']);

    $sql = "SELECT * FROM products WHERE Type='$type'";

} else {

    $sql = "SELECT * FROM products";
}

$result = mysqli_query($conn, $sql);

while ($row = mysqli_fetch_assoc($result)) {
?>

<div class="product-card">

    <img 
        src="<?php echo htmlspecialchars($row['P_image']);?>" 
        class="product-img"
        alt="<?php echo htmlspecialchars($row['P_name']); ?>"
    >

    <h3>
        <?php echo htmlspecialchars($row['P_name']);?>
    </h3>


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

            <a 
                href="product.php?id=<?php echo $row['P_id']; ?>" 
                class="price-btn"
            >
                طلب
            </a>

        <?php } else { ?>

            <a 
                href="product.php?id=<?php echo $row['P_id']; ?>" 
                class="btn"
            >
                عرض
            </a>

        <?php } ?>

    <?php } else { ?>

        <span class="unavailable">
            غير متوفر
        </span>

    <?php } ?>

</div>

<?php } ?>