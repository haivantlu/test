<?php 
 include('partials-front/header.php');
 
 ?>


    <style>
      body{
          position: relative;
      }
      .div1{
          background-color: #f5f6fa;
          padding-top:8%;
      }
      .div2{
          background-color: white;
      }
      .icon-service{
           width: 10%;
            float: left;
        }
        .laptop{
            color:#9972b5;
        }
        .wifi{
            color:#1e90ff;
        }
        .home{
            color: yellow;
        }
        h3{
            padding-left:6%;
        }
        h2{
            font-size: 36px;
            font-weight: 300;
            font-family: 'Playfair Display', serif;
            opacity:0.8;
        }
        p{
            opacity: 0.5;
        }
        .clearfix{
            clear: both;
            float:none;
        }
        .outline{
            width: 100%;
            height: 25px;
            background-image: url(http://landing.engotheme.com/html/skyline/demo/images/Home-1/icon-our.png);
            background-repeat: no-repeat;
            background-position: center;
            margin-bottom: 2%;
        }
        .center{
            padding: 3% 0;
            margin: 3% 0;
        }
        .card{
            cursor: pointer;
            border: none;
            background-color:white ;
            box-shadow: 1px 2px 5px 1px grey;
            transition: 0.3s ease-in-out;
            margin-top: 4%;
            float:left;
        }
        .card:hover{
            transform: translateY(-6px);
        }
      
        .card-title{
            font-size: 17px;
            display:inline;
            text-transform: uppercase;
            font-weight: bold; 
            font-family: "Montserrat", sans-serif;
            color: #3d3d3d;
            padding-left: 6%;
        }
        .card-text{
            font-size: 14px;
            line-height: 2em;
            display: block;
            margin-block-start: 1em;
            margin-block-end: 1em;
            margin-inline-start: 0px;
            margin-inline-end: 0px;
        }
        .content1{
            width: 280px;
            height: 150px;
            background-color:#ffffff ;
            border-radius: 10px;
            padding-left: 3%;
        }
        .card-body{
            padding: 2%;
        }
        .head{
            float:left;
            padding: 2%;
            padding-left: 4%;
            /* background-color: #f5f6fa; */
        }
        .box{
            margin-left: 5%;
            float:left;
            width: 18rem;
        }
        .card-img-top{
            width: 100%;
            height: 145px;
            transition: all 1s;
            
        }
        .card-img-top:hover{
            -webkit-transform: scale(1.2); transform: scale(1.2); 
        }
        .btn{
            background-color: #576574;
            color: white;
        }
        main{
            position:relative;
        }
        .divide{
         height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 0.5em 1.5em rgb(0 0 0 / 10%), inset 0 0.125em 0.5em rgb(0 0 0 / 15%);
        }
        .search{
            height: 45px;
            width:40%;
            border:none;
        }
        form{
          padding-top:2%
        }
        .btn-primary{
            height: 45px;

        }
    
    </style>
  <main>
    <div class="container-fluid div1">
                <?php 
                    if(isset($_SESSION['login']))
                    {
                        echo $_SESSION['login'];
                        unset($_SESSION['login']);
                    }
                ?>
        <!-- start ti??u ?????  -->
      <div class="container mt-4">
        <div class="container text-center">
            <h2>D???ch v??? ??i k??m</h2>
            <div class="outline ">
            </div>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
         </div>
      </div>
       <!-- end ti??u ?????  -->
      
       <!-- start d???ch v??? c?? s???n  -->
      <div class="container div2">
      
        <div class="col-md-4 head">
            <div class="card ">
               <div class="card-body">
                    <div class="icon-service">
                       <i class="fa fa-laptop laptop"></i>
                    </div>
                    <div class="content1">
                       <h4 class="card-title">Ph???c v??? 24/7</h4>
                        <p class="card-text">Ch??ng t??i lu??n s???n s??ng ph???c v??? qu?? kh??ch h??ng m???i l??c</p>
                    </div>
               </div>
                <div class="clearfix"></div>
            </div>
        </div>

       <div class="col-md-4 head">
           <div class="card ">
               <div class="card-body">
                    <div class="icon-service">
                       <i class="fa fa-wifi wifi"></i>
                    </div>
                    <div class="content1">
                       <h4 class="card-title">WIFI</h4>
                       <p class="card-text">Mi???n ph?? truy c???p internet v???i t???c ????? cao trong khu??n vi??n kh??ch s???n</p>
                    </div>
                </div>
               <div class="clearfix"></div>
            </div>
       </div>
      

       <div class="col-md-4  head">
           <div class="card">
               <div class="card-body">
                    <div class="icon-service">
                       <i class="fa fa-home home"></i>
                    </div>
                    <div class="content1">
                       <h4 class="card-title">D???ch v??? ph??ng</h4>
                       <p class="card-text">Cung c???p d???ch v??? chu???n 5 sao h??ng ?????u mang ?????n tr???i nghi???m tuy???t v???i </p>
                    </div>
                </div>
               <div class="clearfix"></div>
            </div>
       </div>
       <div class="clearfix"></div>
      </div>
   
    <!-- end d???ch v??? c?? s???n  -->
    <!-- <div class="container-fluid mt-5"> -->
    <div class="divide mt-5"></div>
    <!-- </div> -->
    <!-- <div class="container-fluid text-center center "  style="background-color:#747d8c;">
        <h2 style="color:white">TI???N ??CH</h2>

    </div> -->
     <!-- <div class="container justify-content-center"> -->
            <form  class="text-center"action="" method="POST">
            <input class="search" type="search" name="search" placeholder="T??m ki???m d???ch v???.." required>
            <input type="submit" name="submitsearch" value="Search" class="btn btn-primary ">
            </form> 
    <!-- </div> -->
    <!-- start d???ch v??? th??m  -->
    <div class="container">
            
             <?php 
             if(isset($_POST['submitsearch'])){
                  $search= $_POST['search'];
                   // c??u truy v???n l???y d??? li???u t??? b???ng 
                $sql = "SELECT * FROM tbl_service WHERE ten_dv LIKE '%$search%'";
              
             }
             else{
            // c??u truy v???n l???y d??? li???u t??? b???ng 
                $sql = "SELECT * FROM tbl_service";}
            //   th???c thi c??u truy v???n 
                $res=mysqli_query($conn, $sql);
             // ?????m d??ng 
            //  var_dump($res);
                $count = mysqli_num_rows($res);
            // ki???m tra d??? li???u 
            if($count>0)
            {  
                    // l???p  h???t d??ng
                    while($row=mysqli_fetch_assoc($res))
                    {
                        //l???y gi?? tr???
                        $id = $row['dv_id'];
                        $title = $row['ten_dv'];
                        $description = $row['mieu_tadv'];
                        $price = $row['gia_dv'];
                        $image_name = $row['anh'];
                        
           ?>
                   <div class="col-md-6 col-sm-12 card box">
                    <?php 
                        //ki???m tra ???nh c?? trong c?? s??? d??? li???u 
                        if($image_name=="")
                        {
                            echo "<div class='error'>???nh kh??ng c?? s???n</div>";
                        }
                        else
                        {
                        ?>
                           <img src="images/service/<?php echo $image_name; ?>" alt="???nh d???ch v???" class="card-img-top" >
                            <?php
                            }
                          ?>
                            <div class="card-body">
                            <h5 class="card-title"><?php echo $title;?></h5></br>
                           <img  style="width: 40%;"src="https://th.bing.com/th/id/OIP.S57GDn_3Tw7T9Ft8lvb-mQHaB7?w=344&h=91&c=7&r=0&o=5&dpr=1.5&pid=1.7" alt="" srcset="">
                            <h3><?php echo $price.'VN??'; ?></h3>
                           <p class="card-text">
                                <?php echo $description;  ?>
                            </p>
                            <a href="order_service.php?dv_id=<?php echo $id; ?>"class="btn btn-infor">?????t d???ch v???</a>
                            </div>
                    </div>
                        <?php
                    }
                }
            else
            {
                echo "<div class='error'>Kh??ng t??m th???y d???ch v???.</div>";
            }
            ?>
            
       </div>
       <!-- end d???ch v??? th??m  -->
    <div class="clearfix"></div>
</div>
 </main>
  
  <?php include('partials-front/footer.php'); ?>
