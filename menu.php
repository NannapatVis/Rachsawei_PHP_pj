<?php
session_start();
include('config.php');

// ตรวจสอบว่ามีค่า ID ที่ส่งมาจาก URL
if (isset($_GET['id'])) {
  $product_id = $_GET['id'];
  
  // ดึงข้อมูลสินค้าจากฐานข้อมูล หรือที่เก็บข้อมูล
  $query = mysqli_query($conn, "SELECT * FROM products WHERE id = $product_id");
  $result = mysqli_fetch_assoc($query);
}
?>

<!DOCTYPE html>
<html>
<head>
    <title><?php echo $result['product_name']; ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body class="bg-body-tertiary">
    <?php include 'include/menu.php'; ?>

    

    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
        </ol>
        <BR>
        <BR>
        <br>
        <center>
            <div class="col-md-7">
                <div class="card flex-md-row mb-4 box-shadow h-md-250">
                    <div class="card-body d-flex flex-column align-items-start">

                        <b><font size="6"><?php echo $result['product_name']; ?></font></b> 
                        <br>
                        <b><font size="5" align="left">PRICE <?php echo $result['price']; ?> ฿</font></b>
                        <BR>
                        <font size="4" align="left"><?php echo $result['detail']; ?></font>
                        <br>
                        <div class="container">
                            <a href="product-list.php" button type="button" class="btn btn-sm btn-outline-secondary">Back</button></a>
                            <a href="<?php echo $base_url; ?>/cart-add.php?id=<?php echo $product['id']; ?>" button type="button" class="btn btn-sm btn-outline-secondary">Add to Cart</a>

                        </div>
                    </div>
                    <img class="card-img-right flex-auto d-none d-md-block" data-src="holder.js/200x250?theme=thumb" style="width: 400px; height: 400px;" src="<?php echo $base_url; ?>/upload_image/<?php echo $result['profile_image']; ?>" width="500" height="500" align="center" data-holder-rendered="true">
                </div>
            </div>
        </center>
        <br><br><br><br><br><br><br><br>
        <footer class="py-4 bg-dark">
            <center>
                <svg xmlns="http://www.w3.org/2000/svg" height="1.75em" viewBox="0 0 512 512">
                    <path d="M224,202.66A53.34,53.34,0,1,0,277.36,256,53.38,53.38,0,0,0,224,202.66Zm124.71-41a54,54,0,0,0-30.41-30.41c-21-8.29-71-6.43-94.3-6.43s-73.25-1.93-94.31,6.43a54,54,0,0,0-30.41,30.41c-8.28,21-6.43,71.05-6.43,94.33S91,329.26,99.32,350.33a54,54,0,0,0,30.41,30.41c-8.28,21-6.43,71.05-6.43,94.33S91,329.26,99.32,350.33a54,54,0,0,0,30.41,30.41c21,8.29,71,6.43,94.31,6.43s73.24,1.93,94.3-6.43a54,54,0,0,0,30.41-30.41c8.35-21,6.43-71.05,6.43-94.33S357.1,182.74,348.75,161.67ZM224,338a82,82,0,1,1,82-82A81.9,81.9,0,0,1,224,338Zm85.38-148.3a19.14,19.14,0,1,1,19.13-19.14A19.1,19.1,0,0,1,309.42,189.74ZM400,32H48A48,48,0,0,0,0,80V432a48,48,0,0,0,48,48H400a48,48,0,0,0,48-48V80A48,48,0,0,0,400,32ZM382.88,322c-1.29,25.63-7.14,48.34-25.85,67s-41.4,24.63-67,25.85c-26.41,1.49-105.59,1.49-132,0-25.63-1.29-48.26-7.15-67-25.85s-24.63-41.42-25.85-67c-1.49-26.42-1.49-105.61,0-132,1.29-25.63,7.07-48.34,25.85-67s41.47-24.56,67-25.78c26.41-1.49,105.59-1.49,132,0-25.63,1.29-48.33,7.15-67-25.85s-24.63-41.42-25.85-67.05C384.37,216.44,384.37,295.56,382.88,322Z"/>
                </svg>
                <svg xmlns="http://www.w3.org/2000/svg" height="1.75em" viewBox="0 0 512 512">
                    <path d="M459.37 151.716c.325 4.548.325 9.097.325 13.645 0 138.72-105.583 298.558-298.558 298.558-59.452 0-114.68-17.219-161.137-47.106 8.447.974 16.568 1.299 25.34 1.299 49.055 0 94.213-16.568 130.274-44.832-46.132-.975-84.792-31.188-98.112-72.772 6.498.974 12.995 1.624 19.818 1.624 9.421 0 18.843-1.3 27.614-3.573-48.081-9.747-84.143-51.98-84.143-102.985v-1.299c13.969 7.797 30.214 12.67 47.431 13.319-28.264-18.843-46.781-51.005-46.781-87.391 0-19.492 5.197-37.36 14.294-52.954 51.655 63.675 129.3 105.258 216.365 109.807-1.624-7.797-2.599-15.918-2.599-24.04 0-57.828 46.782-104.934 104.934-104.934 30.213 0 57.502 12.67 76.67 33.137 23.715-4.548 46.456-13.32 66.599-25.34-7.798 24.366-24.366 44.833-46.132 57.827 21.117-2.273 41.584-8.122 60.426-16.243-14.292 20.791-32.161 39.308-52.628 54.253
                </svg>
                <svg xmlns="http://www.w3.org/2000/svg" height="1.75em" viewBox="0 0 512 512">
                    <path d="M48 64C21.5 64 0 85.5 0 112c0 15.1 7.1 29.3 19.2 38.4L236.8 313.6c11.4 8.5 27 8.5 38.4 0L492.8 150.4c12.1-9.1 19.2-23.3 19.2-38.4c0-26.5-21.5-48-48-48H48zM0 176V384c0 35.3 28.7 64 64 64H448c35.3 0 64-28.7 64-64V176L294.4 339.2c-22.8 17.1-54 17.1-76.8 0L0 176z"/>
                </svg>
                <svg xmlns="http://www.w3.org/2000/svg" height="1.75em" viewBox="0 0 512 512">
                    <path d="M224,202.66A53.34,53.34,0,1,0,277.36,256,53.38,53.38,0,0,0,224,202.66Zm124.71-41a54,54,0,0,0-30.41-30.41c-21-8.29-71-6.43-94.3-6.43s-73.25-1.93-94.31,6.43a54,54,0,0,0-30.41,30.41c-8.28,21-6.43,71.05-6.43,94.33S91,329.26,99.32,350.33a54,54,0,0,0,30.41,30.41c-8.28,21-6.43,71.05-6.43,94.33S91,329.26,99.32,350.33a54,54,0,0,0,30.41,30.41c21,8.29,71,6.43,94.31,6.43s73.24,1.93,94.3-6.43a54,54,0,0,0,30.41-30.41c8.35-21,6.43-71.05,6.43-94.33S357.1,182.74,348.75,161.67ZM224,338a82,82,0,1,1,82-82A81.9,81.9,0,0,1,224,338Zm85.38-148.3a19.14,19.14,0,1,1,19.13-19.14A19.1,19.1,0,0,1,309.42,189.74ZM400,32H48A48,48,0,0,0,0,80V432a48,48,0,0,0,48,48H400a48,48,0,0,0,48-48V80A48,48,0,0,0,400,32ZM382.88,322c-1.29,25.63-7.14,48.34-25.85,67s-41.4,24.63-67,25.85c-26.41,1.49-105.59,1.49-132,0-25.63-1.29-48.26-7.15-67-25.85s-24.63-41.42-25.85-67c-1.49-26.42-1.49-105.61,0-132,1.29-25.63,7.07-48.34,25.85-67s41.47-24.56,67-25.78c26.41-1.49,105.59-1.49,132,0-25.63,1.29-48.33,7.15,67-25.85s-24.63-41.42-25.85-67.05C384.37,216.44,384.37,295.56,382.88,322Z"/>
                </svg>
                <br><br>
                <div class="container">
                    <p class="m-0 text-center text-white">Good Desserts is The Foundation of Happiness</p>
                </div>
            </center>
        </footer>
    </body>
</html>
