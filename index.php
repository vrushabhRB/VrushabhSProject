<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <style>
        #ques{
            min-height: 433px;
        }
    </style>
    <title>Welcome to CHATMATE </title>
</head>

<body>
    
<?php include 'partials/_header.php';
include 'partials/_dbconnect.php';
$search="search"?>
<div class="container">
    <div class="text-centre">Discuss</div>
    <div class="row">
        <!--using for loop here to iterate through available categories on webapp-->


                  <!-- Fetch all the categories and use a loop to iterate through categories -->
                  <?php 
         $sql = "SELECT * FROM `categories`"; 
         $result = mysqli_query($conn, $sql);
         while($row = mysqli_fetch_assoc($result)){
          // echo $row['category_id'];
          // echo $row['category_name'];
          $id = $row['category_id'];
          $cat = $row['category_name'];
          $desc = $row['category_discription'];
          echo '<div class="col-md-4 my-2">
                  <div class="card" style="width: 18rem;">
                  <img src="https://source.unsplash.com/500x400/?' .$cat. ',coding" class="card-img-top" alt="...">
                      
                      <div class="card-body">
                          <h5 class="card-title"><a href="threadlist.php?catid=' . $id . '">' . $cat . '</a></h5>
                          <p class="card-text">' . substr($desc, 0, 90). '... </p>
                          <a href="threadlist.php?catid=' . $id . '" class="btn btn-primary">Discuss</a>
                      </div>
                  </div>
                </div>';
         } 
         ?>    
        </div>
    </div>

<!-- 
     <div class="col-md-4">
    <div class="card" style="width: 18rem;">
  <img src="https://source.unsplash.com/500x400/?code,python" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Python</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="chat.php" class="btn btn-primary">Explore</a>
  </div>
</div>
    </div> -->
















    <!-- <div class="col-md-4">
    <div class="card my-2" style="width: 18rem;">
  <img src="https://source.unsplash.com/500x400/?code,javascript" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">javascript</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="chat.php" class="btn btn-primary">Explore</a>
  </div>
</div>
    </div>

    <div class="col-md-4">
    <div class="card my-2" style="width: 18rem;">
  <img src="https://source.unsplash.com/500x400/?code,css" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">CSS</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="chat.php" class="btn btn-primary">Explore</a>
  </div>
</div>
    </div>

    <div class="col-md-4">
    <div class="card my-2" style="width: 18rem;">
  <img src="https://source.unsplash.com/500x400/?code,cpp" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">cpp</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="chat.php" class="btn btn-primary">Explore</a>
  </div>
</div>
    </div>


<div class="col-md-4">
    <div class="card my-2" style="width: 18rem;">
  <img src="https://source.unsplash.com/500x400/?code,python" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Python</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="chat.php" class="btn btn-primary">Explore</a>
  </div>
</div>
    </div>

    <div class="col-md-4">
    <div class="card my-2" style="width: 18rem;">
  <img src="https://source.unsplash.com/500x400/?code,python" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Python</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="chat.php" class="btn btn-primary">Explore</a>
  </div>
</div>
    </div>
</div>
</div> -->

<div class="container">
    
</div>
<?php 
include 'partials/_footer.php';?>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
        integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous">
    </script>
</body>

</html>