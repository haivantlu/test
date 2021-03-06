<?php include('partials-front/header.php'); ?>

<style>
.row{
    position: relative;
    margin-left: 40px;
}

ul{
list-style-type:none;
      }
ul li a{
    color:gray;
    font-size: 20px;
}
.ten {
  background-image: url(./images/room.jpg);
  background-size: cover;
  display:block;
  transition: all .3s ease;
  margin-top:5%;
}
.ten:hover{
  transform: scale(1.5);
}
.divider {
    margin: 30px 0;
}
.divider .line1 {
    width: 50px;
}
.divider .line2{
  width: 200px;
}
.divider .line1, .divider .line2 {
    height: 1px;
    background-color: #deaa86;
    margin: 3px auto;
}
.blog_post_image img{
width: 648px;
height: 417px;
transition: all .3s ease;
margin-top: 20px;
}
.blog_post_image img:hover{
    transform: scale(1.25);
}
.gallery_container img{
width: 317px;
height: 219px;
margin-top: 20px;

}


.latest_post_image img{
width: 318px;
height: 233px; 
transition: transform; 
}
.latest_post_image img:hover{

transform:rotateY(40deg); 
}
.sidebar_title{
    font-size: 30px;
    color:black;
    text-shadow: 2px 2px 10px #000;
    font-size:2rem;

}
.blog_post_date{
   background: #deaa86;
   color:white;
   padding:8px 14px 9px 13px;
   list-style: none;
   position: absolute;
    margin-bottom:40px ;
   font-size: 20px;
   display: inline-block;

}
.blog_post_text{
    text-align:center;
}

input{
    border: 0px solid white;
    border-bottom: 1px solid black;
    background: white;
}
.More{
    text-align: center;
    font-size: 30px;
    color:#747d8c;
    /* text-shadow: 2px 2px 10px #000; */
}
.More a{
    color:#747d8c;
    
}
.blog_post_link{
    text-align: center;
    font-size: 20px;
    margin-bottom: 70px;
    border-bottom: 2px solid gray;
    
}
.latest_post_content {
 
    text-align: center;
    font-size: 20px;
}
.blog_post_meta{
margin-top:80px;
}
.sidebar_gallery{
    margin-top: 70px;
}
.sidebar_archives{
    margin-top: 70px;
}
.sidebar_categories{
    margin-top: 70px;
}
.a{
     color:#747d8c;
}
</style>
</head>
<body>
<div  class=" text-center ten">
  <h1 style="color:white;padding:20px 0;text-shadow: 2px 2px 10px #000;">BLOG</h1>
  <span style="font-size:40px;text-shadow: 2px 2px 10px #000;color:white;">"S??? h??i l??ng l?? ph????ng ch??m c???a ch??ng t??i"</span>
</div>
<div class="divider">
            <hr class="line1">
            <hr class="line2">
</div>
   <div class="blog">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-8">
                        <div  class=" text-center ">
                        <h1 style="text-shadow: 2px 2px 10px #000;color:black;font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif; border-bottom:2px solid gray; margin-bottom: 90px; ">EVENT - NEWS</h1>
                        
                        </div>
                            <div class="blog_post_container">
                                <div class="blog_post">
                                    <div class="blog_post_image">
                                        <img  class="img-fluid" src="./images/golf.jpg" alt="https://unsplash.com/s/photos/golf">
                                        <div class="blog_post_date d-flex flex-column align-items-center justify-content-center">
                                            <div class="blog_post_day">18</div>
                                            <div class="blog_post_month">Th??ng 10 n??m 2021</div>
                                        </div>
                                    </div>
                                    <div class="blog_post_meta">
                                        <ul>
                                            <li class="blog_post_meta_item"><a href="#">B???i Brian</a></li>
                                            <li class="blog_post_meta_item"><a href="#">GOLF</a></li>
                                            <li class="blog_post_meta_item"><a href="#">3 b??nh lu???n</a></li>
                                        </ul>
                                    </div>
                                    <div class="More"><a href="#">H??y th??? nh???ng m??n th??? thao mang l???i c???m gi??c tho???i m??i </a></div>
                                    <div class="blog_post_text">
                                        <p>"????? ???chi???u chu???ng??? h???t ch???ng ???y y??u c???u qu??? l?? ??i???u kh??ng d??? d??ng, nh??ng th???t may, MARRIOT l???i s??? h???u nh???ng kh??ng gian l?? t?????ng cho m??n th??? thao n??y ?????y t??nh ngh??? thu???t n??y. Kh??ng ??t b???n b?? n?????c ngo??i ???? tr???m tr??? ng???c nhi??n v???i ch???t l?????ng s??n golf Vi???t Nam."</p>
                                    </div>
                                    <div class="More"><a href="#">?????c th??m</a></div>
                                </div>
                                <div class="blog_post">
                                    <div class="blog_post_image">
                                      
                                        <img class="img-fluid"  src="./images/man.webp" alt="https://pixabay.com/vi/images/search/l%c6%b0%e1%bb%9bt%20s%c3%b3ng/">
                                        <div class="blog_post_date d-flex flex-column align-items-center justify-content-center">
                                            <div class="blog_post_day">19</div>
                                            <div class="blog_post_month">Th??ng 10 n??m 2021</div>
                                        </div>
                                    </div>
                                    <div class="blog_post_meta">
                                        <ul>
                                            <li class="blog_post_meta_item"><a href="#">B???i David</li>
                                            <li class="blog_post_meta_item"><a href="#">L?????T S??NG</li>
                                            <li class="blog_post_meta_item"><a href="#">4 b??nh lu???n</li>
                                        </ul>
                                    </div>
                                    <div class="More"><a href="#">H??y th??? th??ch b???n th??n v???i s??? ki???n l?????t s??ng th?? v??? </a></div>
                                    <div class="blog_post_text">
                                        <p>" L?????t s??ng v?? m???t trong nh???ng s??? ki???n thu h??t r???t nhi???u kh??ch h??ng tham gia v?? c??ng v???i nh???ng ph???n th?????ng h???p d???n "</p>
                                    </div>
                                    <div class="More"><a href="#">?????c th??m</a></div>
                                </div>
                                <div class="blog_post">
                                    <div class="blog_post_image">
                                        <img class="img-fluid" src="./images/wedding.webp" alt="https://pixabay.com/vi/images/search/%C4%91%C3%A1m%20c%C6%B0%E1%BB%9Bi%20tr%C3%AAn%20bi%E1%BB%83n%20/">
                                        <div class="blog_post_date d-flex flex-column align-items-center justify-content-center">
                                            <div class="blog_post_day">20</div>
                                            <div class="blog_post_month">Th??ng 10 n??m 2021</div>
                                        </div>
                                    </div>
                                    <div class="blog_post_meta">
                                        <ul>
                                            <li class="blog_post_meta_item"><a href="#">B???i Christopher,Jessica</li>
                                            <li class="blog_post_meta_item"><a href="#">WEDDING</li>
                                            <li class="blog_post_meta_item"><a href="#">5 b??nh lu???n</li>
                                        </ul>
                                    </div>
                                    <div class="More"><a href="#">Tr???i nghi???m m??a c?????i t???i MARRIOT mang l???i cho b???n ????m c?????i ????ng nh??? </a></div>
                                    <div class="blog_post_text">
                                        <p>"Nh???ng ????m c?????i ??? kh??ch s???n ?????u ???????c b??n t??? ch???c thi???t k??? ph?? h???p v???i nhu c???u v?? y??u c???u c???a kh??ch h??ng "</p>
                                    </div>
                                    <div class="More"><a href="#">?????c Th??m</a></div>
                                </div>
                                <div class="blog_post">
                                    <div class="blog_post_image">
                                        <img class="img-fluid" src="./images/spa.jpg" alt="https://www.google.com/search?q=h%C3%ACnh+%E1%BA%A3nh++ti%E1%BB%87m+spa+4k&sxsrf=AOaemvI3DpxbQaU34SRCgox_QEuYwq93pA:1635512217747&tbm=isch&source=iu&ictx=1&fir=EvByxC8aYPou1M%252ClKFvmcScab9XGM%252C_%253B0Uh9ARjkBCCxjM%252ClKFvmcScab9XGM%252C_%253B8K9kCnFmKnjOuM%252C-RJCi4nMKIAb1M%252C_%253BkKvA4Uu90pXIYM%252C-RJCi4nMKIAb1M%252C_%253Buozbkwmj_heXqM%252Crr-0L_4uaR6MoM%252C_%253B65oGmw4golRAdM%252Cn4osAq4qvV2h_M%252C_%253BclRdJaC4Md-_FM%252CRW8bxk6LOIMpoM%252C_%253B8tyvl-ftFUOu5M%252Cs2lYVLiVwUGT6M%252C_%253BNKDB2qhB6uG22M%252Cfe6Jacx76pPTbM%252C_%253BnAO-YOqdeRWw6M%252ClKFvmcScab9XGM%252C_&vet=1&usg=AI4_-kRx115Kr8b1-mYvwELTRLNDVTIidA&sa=X&ved=2ahUKEwi2u47m1e_zAhUEHXAKHbjdC-EQ9QF6BAgCEAE#imgrc=EvByxC8aYPou1M">
                                        <div class="blog_post_date d-flex flex-column align-items-center justify-content-center">
                                            <div class="blog_post_day">22</div>
                                            <div class="blog_post_month">Th??ng 10 n??m 2021</div>
                                        </div>
                                    </div>
                                    <div class="blog_post_meta">
                                        <ul>
                                            <li class="blog_post_meta_item"><a href="#">B???i LOCCYE</a></li>
                                            <li class="blog_post_meta_item"><a href="#">SPA</a></li>
                                            <li class="blog_post_meta_item"><a href="#">6 b??nh lu???n</a></li>
                                        </ul>
                                    </div>
                                    <div class="More"><a href="#">C??c d???ch v??? lu??n l?? l???a ch???n gi??p c?? th??? tho???i m??i  </a></div>
                                    <div class="blog_post_text">
                                        <p>"Kh??ng gian r???ng r??i , tho???i m??i ,gi??p m???i ng?????i th?? gi??n sau nh???ng ng??y l??m vi???c m???t m???i "</p>
                                    </div>
                                    <div class="More"><a href="#">?????c Th??m</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 sidebar_col">
                            <div class="sidebar_search">
                                <form action="#">
                                    <input id="sidebar_search_input" type="search" class="sidebar_search_input " placeholder="" required="required">
                                    <input id="sidebar_search_button" type="submit" class="sidebar_search_button " value="T??m ki???m">
                                    
                                  
                                </form>
                            </div>
                            <div class="sidebar_archives">
                                <div class="sidebar_title">S??? KI???N G???N ????Y</div>
                                <div class="sidebar_list">
                                    <ul>
                                        <li><a href="#">Th??ng 7 n??m 2021</a></li>
                                        <li><a href="#">Th??ng 8 n??m 2021</a></li>
                                        <li><a href="#">Th??ng 9 n??m 2021</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="sidebar_categories">
                                <div class="sidebar_title">Th??? lo???i</div>
                                <div class="sidebar_list">
                                    <ul>
                                        <li><a href="#">Du l???ch</a></li>
                                        <li><a href="#">???m th???c</a></li>
                                        <li><a href="#">????m c?????i</a></li>
                                        <li><a href="#">C??c l???i khuy??n</a></li>
                                        <li><a href="#">Th??? thao</a></li>
                                        <li><a href="#">H???i ngh??? </a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="sidebar_latest_posts">
                                <div class="sidebar_title">B??i vi???t m???i nh???t</div>
                                <div class="latest_posts_container">
                                    <ul>
                                        <li class="latest_post clearfix">
                                            <div class="latest_post_image">
                                                <a href="#"><img src="./images/istockphoto.jpg" alt=""></a>
                                            </div>
                                            <div class="latest_post_content">
                                                <div class="latest_post_title "><a href="#">N??i L?? t?????ng ????? l??m n??n m???t ????m c?????i th?? m???ng </a></div>
                                                <div class="latest_post_meta">
                                                    <div class="latest_post_author "><a href="#">b???i Smith</a></div>
                                                    <div class="latest_post_date "><a href="#">25 thg 8, 2021</a></div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="latest_post clearfix">
                                            <div class="latest_post_image">
                                                <a href="#"><img src="./images/beach.jpg" alt=""></a>
                                            </div>
                                            <div class="latest_post_content">
                                                <div class="latest_post_title "><a href="#">?????a ??i???m ????ng m?? ?????c m?? b???n c???n ?????t ch??n t???i </a></div>
                                                <div class="latest_post_meta">
                                                    <div class="latest_post_author "><a href="#">b???i Jane</a></div>
                                                    <div class="latest_post_date "><a href="#">10 thg 10, 2021</div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="latest_post clearfix">
                                            <div class="latest_post_image">
                                                <a href="#"><img src="./images/familly.jpg" alt=""></a>
                                            </div>
                                            <div class="latest_post_content">
                                                <div class="latest_post_title"><a href="#">C??ng gia ????nh t???o n??n ??i???u b???t ng???</a></div>
                                                <div class="latest_post_meta">
                                                    <div class="latest_post_author "><a href="#">b???i Lucy</a></div>
                                                    <div class="latest_post_date "><a href="#">22 thg 10, 2021</a></div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="latest_post clearfix">
                                            <div class="latest_post_image">
                                                <a href="#"><img src="./images/eat.jpg" alt=""></a>
                                            </div>
                                            <div class="latest_post_content">
                                                <div class="latest_post_title "><a href="#">N??i tr???i nghi???m nh???ng m??n ??n tuy???t v???i </a></div>
                                                <div class="latest_post_meta">
                                                    <div class="latest_post_author "><a href="#">b???i lucas</a></div>
                                                    <div class="latest_post_date "><a href="#"> 26 thg 10, 2021</a></div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="sidebar_gallery">
                                <div class="sidebar_title">Instagram</div>
                                <div class="gallery_container">
                                    <ul class="gallery_items d-flex flex-row align-items-start justify-content-between flex-wrap">
                                        <li class="gallery_item">
                                            <a class="colorbox cboxElement" href="https://pixabay.com/images/search/travel/">
                                            <img src="./images/a.jpg" alt="https://pixabay.com/images/search/travel/">
                                            </a>
                                        </li>
                                        
                                        <li class="gallery_item">
                                            <a class="colorbox cboxElement" href="https://www.istockphoto.com/vi/search/2/image?phrase=travel&utm_source=pixabay&utm_medium=affiliate&utm_campaign=ADP_image_sponsored&referrer_url=http:%2F%2Fpixabay.com%2Fimages%2Fsearch%2Ftravel%2F&utm_term=travel">
                                            <img src="./images/b.jpg" alt="c">
                                            </a>
                                        </li>
                                        <li class="gallery_item">
                                            <a class="colorbox cboxElement" href="https://www.istockphoto.com/vi/search/2/image?phrase=travel&utm_source=pixabay&utm_medium=affiliate&utm_campaign=ADP_image_sponsored&referrer_url=http:%2F%2Fpixabay.com%2Fimages%2Fsearch%2Ftravel%2F&utm_term=travel">
                                            <img src="./images/c.jpg" alt="a">
                                            </a>
                                        </li>
                                        <li class="gallery_item">
                                            <a class="colorbox cboxElement" href="https://www.istockphoto.com/vi/search/2/image?phrase=travel&utm_source=pixabay&utm_medium=affiliate&utm_campaign=ADP_image_sponsored&referrer_url=http:%2F%2Fpixabay.com%2Fimages%2Fsearch%2Ftravel%2F&utm_term=travel">
                                            <img src="./images/d.jpg" alt="">
                                            </a>
                                        </li>
                                        <li class="gallery_item">
                                            <a class="colorbox cboxElement" href="https://www.istockphoto.com/vi/search/2/image?phrase=travel&utm_source=pixabay&utm_medium=affiliate&utm_campaign=ADP_image_sponsored&referrer_url=http:%2F%2Fpixabay.com%2Fimages%2Fsearch%2Ftravel%2F&utm_term=travel">
                                            <img src="./images/e.jpg" alt="">
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
           
<div class="divider">
            <hr class="line1">
            <hr class="line2">
</div>     
<?php include('partials-front/footer.php'); ?>
