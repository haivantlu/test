<!-- footer -->
<style>
          .ok{
              margin: 2%;
             
          }
          h2{
            font-size: 36px;
            font-weight: 300;
            font-family: 'Playfair Display', serif;
            opacity:0.8;
        }
        .outline{
            width: 100%;
            height: 25px;
            background-image: url(http://landing.engotheme.com/html/skyline/demo/images/Home-1/icon-our.png);
            background-repeat: no-repeat;
            background-position: center;
            margin-bottom: 2%;
        }
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');
body{
	line-height: 1.5;
	font-family: 'Poppins', sans-serif;
}
*{
	margin:0;
	padding:0;
	box-sizing: border-box;
}

.row{
	display: flex;
	flex-wrap: wrap;
}
ul{
	list-style: none;
}
.footer{
	background-color: #24262b;
    padding: 50px;
    width: 100%;
    /* width: 114%; */
    /* margin-left: -7%; */
    margin-top: 5%;
    margin-bottom: -3%;
    /* position: relative; */
}
.footer-col{
   width: 25%;
   padding: 0 15px;
}
.footer-col h4{
	font-size: 18px;
	color: #ffffff;
	text-transform: capitalize;
	margin-bottom: 35px;
	font-weight: 500;
	position: relative;
}
.footer-col h4::before{
	content: '';
	position: absolute;
	left:0;
	bottom: -10px;
	background-color: #e91e63;
	height: 2px;
	box-sizing: border-box;
	width: 50px;
}
.footer-col ul li:not(:last-child){
	margin-bottom: 10px;
}
.footer-col ul li a{
	font-size: 16px;
	text-transform: capitalize;
	color: #ffffff;
	text-decoration: none;
	font-weight: 300;
	color: #bbbbbb;
	display: block;
	transition: all 0.3s ease;
}
.footer-col ul li a:hover{
	color: #ffffff;
	padding-left: 8px;
}
.footer-col .social-links a{
	display: inline-block;
	height: 40px;
	width: 40px;
	background-color: rgba(255,255,255,0.2);
	margin:0 10px 10px 0;
	text-align: center;
	line-height: 40px;
	border-radius: 50%;
	color: #ffffff;
	transition: all 0.5s ease;
}
.footer-col .social-links a:hover{
	color: #24262b;
	background-color: #ffffff;
}

/*responsive*/
@media(max-width: 767px){
  .footer-col{
    width: 50%;
    margin-bottom: 30px;
}
}
@media(max-width: 574px){
  .footer-col{
    width: 100%;
}
}
      </style>
<footer class="footer">
        <div class="container-fluid">
            <div class="row">
                <div class="footer-col">
                    <h4>M???u Ph??ng</h4>
                    <ul>
                        <li><a href="#">Ph??ng ????n</a></li>
                        <li><a href="#">Ph??ng ????i</a></li>
                        <li><a href="#">Ph??ng gia ????nh</a></li>
                        <li><a href="#">Ph??ng luxury</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>Tin t???c</h4>
                    <ul>
                        <li><a href="#">S??? ki???n</a></li>
                        <li><a href="#">Khuy???n m??i</a></li>
                        <li><a href="#">Blogs</a></li>
                        <li><a href="#">Nh??n s???</a></li>
                        <li><a href="#">Gi???i thi???u</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>D???ch v???</h4>
                    <ul>
                        <li><a href="#">H??? B??i</a></li>
                        <li><a href="#">Ph??ng Gym</a></li>
                        <li><a href="#">Nh?? H??ng</a></li>
                        <li><a href="#">Massage</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>follow us</h4>
                    <div class="social-links">
                        <a href="https://www.facebook.com/profile.php?id=100020155038155"><i class="fab fa-facebook-f"></i></a>
                        <a href="https://twitter.com/?lang=vi"><i class="fab fa-twitter"></i></a>
                        <a href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                    <!-- n??t ?????u trang -->
                    <div class="nutdautrang">
                        <button id="myBtn" class="len" title="L??n ?????u trang"><i class="fas fa-arrow-up"></i></button>
                        <style>
                            .len{
                                width: 50px;
                                height: 80px;
                                color: darkgreen;
                                margin-left: 90%;
                                margin-top: -30%;
                            }
                            .fas{
                                color: darkred;
                                
                            }
                        </style>
                        <script>
                        window.onscroll = function() {scrollFunction()};
                        function scrollFunction() {

                        if (document.body.scrollTop > 600 || document.documentElement.scrollTop > 600) {
                        document.getElementById("myBtn").style.display = "block";
                        } else {
                        document.getElementById("myBtn").style.display = "none";
                        }
                        }

                        document.getElementById('myBtn').addEventListener("click", function(){
                        document.body.scrollTop = 0;
                        document.documentElement.scrollTop = 0;
                        });
                        </script>
                       
                    </div>
                </div>
            </div>
        </div>
  </footer>
   </body>
</html>