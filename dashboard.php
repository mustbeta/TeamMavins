<?php
session_start();

require_once("config/db_config.php");
   require_once("functions/userhandler.php");
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">

     <!-- font awesome -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/solid.css" integrity="sha384-r/k8YTFqmlOaqRkZuSiE9trsrDXkh07mRaoGBMoDcmA58OHILZPsk29i2BsFng1B" crossorigin="anonymous">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/regular.css" integrity="sha384-IG162Tfx2WTn//TRUi9ahZHsz47lNKzYOp0b6Vv8qltVlPkub2yj9TVwzNck6GEF" crossorigin="anonymous">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/brands.css" integrity="sha384-BKw0P+CQz9xmby+uplDwp82Py8x1xtYPK3ORn/ZSoe6Dk3ETP59WCDnX+fI1XCKK" crossorigin="anonymous">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/fontawesome.css" integrity="sha384-4aon80D8rXCGx9ayDt85LbyUHeMWd3UiBaWliBlJ53yzm9hqN21A+o1pqoyK04h+" crossorigin="anonymous">
    <!-- End  -->

</head>

<body>
    <header>
        <a href="#" class="brand"> Team Mavin</a>
        <ul class="dropdown">
            <li><i class="fa fa-user"></i> User</li>
            <div class="dropContent">
                <a href="#"><i class="fa fa-cog"></i> Edit Profile</a>
                <a href="logout.php"><i class="fa fa-sign-out-alt"></i>Log Out</a>

            </div>
                        
                                    
        </ul>
    </header>
    <div class="dashboard">
        <div class="bio">
            <h3> Welcome  <?php 
                
                $connection = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_DATABASE) or die (mysqli_error());
mysqli_select_db ($connection, DB_DATABASE) or die (mysqli_error());


                $theUserId = userLoggedIn();

                $userDetails = "SELECT * FROM users WHERE id = $theUserId";


                $queryUser = mysqli_query($connection,$userDetails);

                if (!$queryUser) {
                    die("could not query User" .mysqli_error($connection));
                }

                //fetch the details of the log in user from the database

                $fetchUser = mysqli_fetch_assoc($queryUser);

                //fetch the name from the details you fetch fromthe database

                $nameOfUser = $fetchUser['firstname'];

                echo "$nameOfUser";

            ?>
                
            </h3>
            <div class="img"></div>
            <h3>About Me</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem atque ipsa adipisci harum? Iusto saepe tempore praesentium ad quae. Nesciunt adipisci voluptas facere ex excepturi modi porro distinctio eaque odit?</p>
        </div>
        <div class="groups">
                
                <h3>Groups</h3>
            <ul>
                <li> Team Excel <span class="a">9 Members</span></li>
                <li> Team Satellite <span class="b">10 Members</span></li>
                <li> Team Ardulio <span class="c">6 Members</span></li>
                <li> Team Champoin <span class="d">4 Members</span></li>
            </ul>
            </div>
        <div class="posts">
           <input type="text" placeholder="what is on your mind?" class="input-post">
           <button class="post-btn"> Post</button>
           <div class="timeline">
                <section>
                    
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia exercitationem accusamus, repudiandae tenetur ipsum, inventore culpa quibusdam at suscipit dolorum doloribus! Praesentium accusantium corporis officia facilis, in vitae cum sit.</p>
                    <span><i class="fa fa-share-alt"></i>6</span>
                    <span><i class="fa fa-comment"></i> 15</span>
                    <span><i class="fa fa-thumbs-up"> 8</i></span>
                </section>
                <section>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia exercitationem accusamus, repudiandae tenetur ipsum, inventore culpa quibusdam at suscipit dolorum doloribus! Praesentium accusantium corporis officia facilis, in vitae cum sit.</p>
                        <span><i class="fa fa-share-alt"></i>9 </span>
                    <span><i class="fa fa-comment"></i> 12</span>
                    <span><i class="fa fa-thumbs-up"></i> 9</span>
                    </section>
           </div>
        </div>
        <div class="lists">
            <div class="friends">
                <h3>Friend List</h3>
                <ul>
                    <li> <i class="fas fa-users"></i> Barileela French</li>
                    <li> <i class="fas fa-users"></i> Alaketu Olamilekan Soliu</li>
                    <li> <i class="fas fa-users"></i> Nnadozie Emmanuel Alozie</li>
                    <li> <i class="fas fa-users"></i> Chibueze Arinze </li>
                    <li> <i class="fas fa-users"></i> Abdulkareem Mustapha</li>
                    <li> <i class="fas fa-users"></i> Afarait Sulaimon Bola </li>
                    <li> <i class="fas fa-users"></i> Olayiwola Olanrewaju Omitola </li>
                    <li> <i class="fas fa-users"></i> Okafor Esther Chidiebere </li>
                    <li> <i class="fas fa-users"></i> Olaonipekun  Olaitan </li>
                    <li> <i class="fas fa-users"></i> Alick David </li>

                </ul>
            </div>
            
            
        </div>
        <div class="topics">
                <h3>Trending Topics</h3>
                <ul>
                        <li> CSS Grid</li>
                        <li> Start.ng</li>
                        <li> HNG Internship 6</li>
                        
                       
    
                    </ul>
                
            </div>

        
    </div>
    <footer>
        <p> Developed and maintained with  by Team mavin &copy; 2019 </p>
    </footer>
</body>
</html>
