<!DOCTYPE html>
<html lang="en">
<head>
     <title>Document</title>
     <link rel="stylesheet" href="mytest.css">
     <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
     <div class="wrapper">
          <header>
               <img src="icon1.png.png" alt="" align="left">
               <div class="SIBtn">
                    <a style="cursor:pointer;" onclick="logout()">&nbsp; Login/Register &nbsp; </a>
               </div>
               <div class="menu">
               <nav>            
                    <a href="#bdy" class="current">Home</a>
                    <a href="OnlineTest\OnlineTest.php" class="current">Test</a>
                    <a href="Practice\Quiz Application with Timer\index.php" class="current">Practice</a>
                    <a href="learn\learn.php" class="current">Learn</a>
                    <a href="contact.php" class="current">Contact</a>
                    <div class="animation start-home"></div>
               </nav>
               </div>
          </header>
          <br>
          <section class="courses">
               <article>
                    <hgroup>
                         <h2>Welcome to MyTest</h2>
                         <h3>Your Online Exam Partner</h3>
                    </hgroup>
                    <br>
                    <p> Let's Create or Conduct Online Examination for Your Prestigious
                         Institute and/or Organization. <br />Let's Start your Awesome
                         Experience of Online Test Creation!! Create your TestYou Profile
                         with Relevant Category, Searchable Name and Effective Description.
                         Please look at Advance Options also to make your Test specific and
                         Search Friendly. <br />Awesome!! Very Useful and Helpful Test
                         Setting that will give the so many options/ Edges to your test in
                         Competitive Market. Test Setting is the Platform where you Conduct
                         and Organize Tests as You Desired. Let???s go through with Each
                         Setting (in General Setting and Advance Setting Tab) and Use
                         Smartly.
                    </p>
               </article>
          </section>
          <aside>
               <section class="contact-details">
                    <h2>Follow us on:</h2>
                    <p>
                    <div class="fa">
                         <a href="#" class="fa fa-facebook"></a> &nbsp;
                         <a href="#" class="fa fa-twitter"></a>&nbsp;
                         <a href="#" class="fa fa-linkedin"></a>&nbsp;
                         <a href="#" class="fa fa-youtube"></a>&nbsp;
                         <a href="#" class="fa fa-instagram"></a>
                    </div>
                    </p>
               </section>
          </aside>
          <footer>
          &copy:2022 MyTest Association
          </footer>
     </div>
     <script>
          function logout(){
               if(confirm("Are You want to log out")){
                    open("mytestHomePage.php","_self");
               }
          }
     </script>
</body>
</html>