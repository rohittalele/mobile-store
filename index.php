
<?php session_start(); ?>
<?php 

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Mobile Shop</title>
  <?php include("./includes/links.php") ?>
<style type="text/css">
  .wish{
     position: relative; top: 8px; right: 15px; border-radius: 30px; border:  none; color: #bfbfbf; 
  }
  .wishyes{
    color: red;
  }
</style>
</head>
<body>

 <?php include("./includes/navbar.php") ?>	
<div class="main">


    <h1>MYMOBILE</h1>
    <p>The only best place to buy mobile phones...</p>
    <a href="signup.php"><button>Join Us</button></a>
</div>
<div class="jumbotron" style="text-align: center;">
  <h1>See Our Best Deals Here</h1>
  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
  tempor incididunt ut labore</p>
</div>

<div style="text-align: center; padding: 30px 0px">
  <h1>Products</h1>
</div>

<div class="container">

     <div class="row"  style="display:flex; justify-content: space-around;">
<?php 
      include './includes/connection.php';
     
      $p_selectquery = "select * from product limit 5";
      $p_query = mysqli_query($con, $p_selectquery);
          while($p_res = mysqli_fetch_array($p_query)){
            
?>
        <div class="card text-center" style="width:200px">
       <a href="" class=" ml-auto wish <?php if($wr){ echo "wishyes"; } ?>"><i class="fa fa-heart"></i></a>
  <img class="card-img-top m-auto" src="<?php echo $p_res['image']; ?>" alt="Card image" style=" width: 80%; padding: 0px; height: 200px;">
  <div class="card-body">
         <h6 class="card-title"><?php echo substr($p_res['name'], 0, 15)?>...</h6>
         <h5 class="card-title">$ <?php echo $p_res['price']; ?></h5>
    <a href="product-info.php?id=<?php echo $p_res['id']; ?>" class="btn btn-outline-dark">view</a>
    
  </div>
</div>
<?php } ?>

</div>

 <a href="products.php"> <button type="button" class="btn btn-light btn-block" style="margin: 40px 0px">View More</button></a>
</div>

 <?php include("./includes/footer.php") ?>
</body>
</html>