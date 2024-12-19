<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LANDING | PAGE</title>
    <link rel="stylesheet" href="index.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/5b1289521d.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script> 
        $(document).ready(function(){
            $("#flip").click(function(){
                $("#panel").slideToggle("slow");
            });
        });
    </script>
    
</head>
<style> 
#panel, #flip {
  padding: 7px;
  text-align: center;
  background-color: white;
  border: solid 1px #c3c3c3;
}

#panel {
  padding: 20px;
  display: none;
}
</style>
<body>
    <nav>
        <img src="7671277_1627.jpg" width="60px" height="60px">
        <ul class="nav justify-content-center">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="index.php">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#about">About</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#service">Service</a>
            </li>
            <!-- <li class="nav-item">
                <a class="nav-link disabled" >Service</a>
            </li> -->
        </ul>
        <p class="welcome">Welcome | <span id="username"></span> </p>
    </nav>
    <!-- <div id="flip">Click to slide down panel</div>
    <div id="panel">Hello world!</div> -->

    <main>
        <h2>Unleash Your Productivity Potential   : Empower Your Journey with the Ultimate Task List Mastery</h2>
        <a href="frameset.php">
            <input type="button" value="Get Started">
        </a>
        <img src="18151572_5961108-removebg-preview.png" >
    </main>

    <section id="about">
        <div id="about-us" data-aos="zoom-in">
            <h3>About Us</h3>
            <p class="ringkasan" data-aos="fade-left"> Information System'22 </p>
            <div class="konten-isi" data-aos="fade-right">
              <p>we from a group of ten will create a web project for a task list, on the website there are various varied functions and of course there is a create read update delete operation.</p>
            </div>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#06a7f2" fill-opacity="1" d="M0,256L48,234.7C96,213,192,171,288,133.3C384,96,480,64,576,90.7C672,117,768,203,864,213.3C960,224,1056,160,1152,117.3C1248,75,1344,53,1392,42.7L1440,32L1440,0L1392,0C1344,0,1248,0,1152,0C1056,0,960,0,864,0C768,0,672,0,576,0C480,0,384,0,288,0C192,0,96,0,48,0L0,0Z"></path></svg>
        </div>
    </section>

    <div class="service" id="service">
        <div class="tittle" data-aos="fade-up">
            <h2>Our Service</h2><br>
        </div>

        <div class="box">

            <div class="card" data-aos="fade-right">
                <i class="fa-solid fa-calendar-plus"></i>
                <h5><span>Create</span> Task</h5>
                <div class="pra">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure a repellendus modi nihil, maiores quisquam provident quaerat libero accusamus nobis Lorem ipsum dolor sit amet consectetur adipisicing elit. A, illo.</p>
                </div>
            </div>

            <div class="card" data-aos="fade-down">
                <i class="fa-sharp fa-solid fa-pen-to-square"></i>
                <h5>Update<span> Task</span></h5>
                <div class="pra">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure a repellendus modi nihil, maiores quisquam provident quaerat libero accusamus nobis Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima, saepe!</p>
                </div>
            </div>

            <div class="card" data-aos="fade-left">
                <i class="fa-sharp fa-solid fa-trash"></i>
                <h5>Delete <span> Task</span></h5>
                <div class="pra">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure a repellendus modi nihil, maiores quisquam provident quaerat libero accusamus nobis Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo, tenetur.</p>
                </div>
            </div>
        </div>
    </div>
    <div id="flip"> Our Contact Number (click)</div>
    <div id="panel">+62 856-0495-3454 <br> +62 813-2458-7225 </div>
    <script>
        var username = localStorage.getItem("username");
        document.getElementById("username").textContent = username;
    </script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>
</html>