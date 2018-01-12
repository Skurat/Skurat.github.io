<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Portfolio</title>
    
    <!-- BEGIN LINK -->
    <link rel="stylesheet" href="bower_components/normalize-css/normalize.css">
    <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
    <!-- END LINK -->
</head>
<body>
   <header class="navbar navbar-inverse">
       
   </header>
   <!-- BEGIN CONTENT -->
    <?php echo "<h1>Here</h1>"; ?>
    <div class="content">
       <!--+++++++++++++++++ BEGIN PHOTONAME +++++++++++++++++-->
        <div class="photoName">
            <figure>
                <img src="https://scontent.fiev10-1.fna.fbcdn.net/v/t34.0-12/20840230_343619612747281_695892002_n.jpg?oh=c68570112b6595e6664f12e8f439221c&oe=5A57A826" alt="">
                <figcapture class="headText">Skuratovskiy Eugene</figcapture>
            </figure>
        </div>
        <!--+++++++++++++++++ END PHOTONAME +++++++++++++++++-->
        <!--+++++++++++++++++ BEGIN ABOUT +++++++++++++++++-->
        <div class="about">
            <div><span class="headText">About me</span></div>
        </div>
        <!--+++++++++++++++++ END ABOUT +++++++++++++++++-->
        <!--+++++++++++++++++ BEGIN PROJECTS +++++++++++++++++-->
        <div class="projects">
            <div><span class="headText">Projects</span></div>
                <ul class="projItems">
                   <a href="#left"><i class="fa fa-arrow-left"></i></a>
                    <li>
                        <img src="https://placehold.it/450x300" alt="">
                    </li>
                    <li>
                        <img src="https://placehold.it/450x300" alt="">
                    </li>
                    <li>
                        <img src="https://placehold.it/450x300" alt="">
                    </li>
                    <a href="#right"><i class="fa fa-arrow-right"></i></a>
                </ul>
                <div class="projInfo">
                    <div class="projInner"></div>
                </div>
            </div>
            <!--+++++++++++++++++END PROJECTS +++++++++++++++++-->
            <!--+++++++++++++++++ BEGIN TOOLS +++++++++++++++++-->
            <div class="tools">
                <div><span class="headText">Tools</span></div>
                <div class="lang">
                    <div class="halfList">
                       <h1>Web-development</h1>
                        <ul>
                            <li>html</li>
                            <li>css</li>
                            <li>js</li>
                            <li>php</li>
                            <li>sql</li>
                        </ul>
                    </div>
                    <div class="halfInfo">
                        <img src="https://www.saci-florence.edu/sites/default/files/img/promo/maria_nissan_923x563.jpg" alt="">
                        <div class="langInfo">
                            
                        </div>
                    </div>
                </div>
                <div class="other">
                    <div class="halfInfo">
                        <img src="https://www.saci-florence.edu/sites/default/files/img/promo/maria_nissan_923x563.jpg" alt="">
                        <div class="otherInfo">
                            
                        </div>
                    </div>
                    <div class="halfList">
                       <h1>Other</h1>
                        <ul>
                            <li>github</li>
                            <li>mysql</li>
                            <li>npm</li>
                        </ul>
                    </div>
                </div>
            </div>
            <!--+++++++++++++++++ END TOOLS +++++++++++++++++-->
        </div>
        <!-- END CONTENT -->
    
    <footer class="navbar navbar-default">
        <div class="footer">
            <div class="social">
               <span class="headFooter">Social</span>
                <ul>
                    <li><i class="fa fa-facebook fa-lg"></i> <a href="#">Facebook</a></li>
                    <li><i class="fa fa-twitter fa-lg"></i> <a href="#">Twiter</a></li>
                    <li><i class="fa fa-instagram fa-lg"></i> <a href="#">Instagram</a></li>
                </ul>
            </div>
            <div class="webService">
               <span class="headFooter">Web-service</span>
                <ul>
                    <li><i class="fa fa-github fa-lg"></i> <a href="#">GitHub</a></li>
                    <li><i class="fa fa-codepen fa-lg"></i> <a href="#">CodePen</a></li>
                    <li><i class="fa fa-linkedin fa-lg"></i> <a href="#">LinkedIn</a></li>
                </ul>
            </div>
            <div class="mail">
               <span class="headFooter">Mail</span>
                <ul>
                    <li><i class="fa fa-google-plus fa-lg"></i> <a href="#">Gmail</a></li>
                </ul>
            </div>
        </div>
    </footer>
    <!-- BEGIN SCRIPT -->
    <script src="bower_components/jquery/dist/jquery.js"></script>
    <script src="bower_components/bootstrap/dist/js/bootstrap.js"></script>
    <script src="jq.js"></script>
    <!-- END SCRIPT -->
</body>
</html>
