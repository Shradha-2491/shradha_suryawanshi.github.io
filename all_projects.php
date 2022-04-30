<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.15.3/css/all.css"
      integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk"
      crossorigin="anonymous"
    />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
      integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l"
      crossorigin="anonymous"
    />
    <script
      src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
      integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
      integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js"
      integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF"
      crossorigin="anonymous"
    ></script>
    <style>
      .scrollbar::-webkit-scrollbar {
        display: none;
      }
      .backg {
        background-color: rgb(129, 6, 211);
      }
      .card:hover{
        transform: scale(1.05);
        box-shadow: 0 10px 20px rgba(0,0,0,.12), 0 4px 8px rgba(0,0,0,.06);
      }
    </style>
    <title>Shradha Suryawanshi</title>
    <link rel = "icon" href = 
    "Logo/s_icon.png" 
            type = "image/x-icon">
  </head>
  <body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-sm fixed-top bg-light">
      <div class="container my-2">
        <a href="index.htm" class="navbar-brand text-dark font-weight-bold"
          >Shradha</a
        >
        <button
          class="btn btn-outline-dark ml-auto"
          onclick="location.href= 'contact_me.php';"
        >
          Contact Me
        </button>
        <button
          class="navbar-toggler"
          data-toggle="collapse"
          data-target="#Nav"
        >
          <span class="fas fa-bars text-dark"></span>
        </button>
        <div class="collapse navbar-collapse flex-grow-0" id="Nav">
          <div class="navbar-nav">
            <a
              href="all_projects.php"
              class="nav-link nav-item text-dark mx-3 my-auto"
            >
              Projects
            </a>
          </div>
        </div>
        <div class="collapse navbar-collapse flex-grow-0" id="Nav">
          <div class="navbar-nav">
            <a href="recommendation.php" class="nav-link nav-item text-dark mx-3 my-auto">
              Write Recommendation
            </a>
          </div>
        </div>
      </div>
    </nav>

    <div class="container text-center" style="margin-top: 100px">
      <h1 class="font-weight-light">
        <span class="text-info">All</span> My
        <span class="text-info">Project</span>
      </h1>
      <div class="row my-5 pt-3">
        <div class="col-12 col-md-4 my-2">
          <div class="card shadow h-100">
            <img
              src="Logo/Computer1 (1).jpg"
              alt="Image"
              class="card-img-top"
            />
            <div class="card-body">
              <h4 class="card-title">Simple Food Ordering App Design</h4>
              <p class="card-text">Simple Project give understanding of basic concept of Android App Development</p>
              <a href="https://github.com/Shradha-2491/Simple_Food_Ordering_App_Design" class="stretched-link" target="_blank" rel="noreferrer noopener"></a>
            </div>
          </div>
        </div>
        <div class="col-12 col-md-4 my-2">
          <div class="card shadow h-100">
            <img
              src="Logo/Computer1 (2).jpg"
              alt="Image"
              class="card-img-top"
            />
            <div class="card-body">
              <h4 class="card-title">Health App</h4>
              <p class="card-text">This is my project about Health app.</p>
              <a href="https://github.com/Shradha-2491/HealthApp" class="stretched-link"  target="_blank" rel="noreferrer noopener"></a>
            </div>
          </div>
        </div>
        <div class="col-12 col-md-4 my-2">
          <div class="card shadow h-100">
            <img
              src="Logo/Computer1 (3).jpg"
              alt="Image"
              class="card-img-top"
            />
            <div class="card-body">
              <h4 class="card-title">Developing Responsive Layouts using Bootstrap</h4>
              <p class="card-text">This is my project about responsive layout</p>
              <a href="https://github.com/Shradha-2491/Developing_Responsive_Layouts_using_Bootstrap" class="stretched-link" target="_blank" rel="noreferrer noopener"></a>
            </div>
          </div>
        </div>
      </div>

      <div class="row my-5 pt-3">
        <div class="col-12 col-md-4 my-2">
          <div class="card shadow h-100">
            <img
              src="Logo/Computer1 (1).jpg"
              alt="Image"
              class="card-img-top"
            />
            <div class="card-body">
              <h4 class="card-title">Tic Tac Toe</h4>
              <p class="card-text">'Tic Tac Toe' is an 2D Game App played between two player.</p>
              <a href="https://github.com/Shradha-2491/TicTacToe" class="stretched-link" target="_blank" rel="noreferrer noopener"></a>
            </div>
          </div>
        </div>
        <div class="col-12 col-md-4 my-2">
          <div class="card shadow h-100">
            <img
              src="Logo/Computer1 (2).jpg"
              alt="Image"
              class="card-img-top"
            />
            <div class="card-body">
              <h4 class="card-title">Calculator</h4>
              <p class="card-text">This is my project on calculator</p>
              <a href="https://github.com/Shradha-2491/Calculator" class="stretched-link" target="_blank" rel="noreferrer noopener"></a>
            </div>
          </div>
        </div>
        <div class="col-12 col-md-4 my-2">
          <div class="card shadow h-100">
            <img
              src="Logo/Computer1 (3).jpg"
              alt="Image"
              class="card-img-top"
            />
            <div class="card-body">
              <h4 class="card-title">My Travel Guide</h4>
              <p class="card-text">My Android App development project My Travel Guide.</p>
              <a href="https://github.com/Shradha-2491/My_Travel_Guide" class="stretched-link" target="_blank" rel="noreferrer noopener"></a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Footer Section -->
    <footer>
      <div class="container-fluid text-center align-items-center backg">
        <div class="py-5 text-light">
          <h2>Open to work</h2>
          <button
            class="btn btn-outline-light btn-md mt-2"
            onclick="location.href= 'contact_me.php';"
          >
            Contact Me
          </button>
        </div>
        <div class="row">
          <div class="col-12 col-md-4 py-3">
            <h5 class="text-warning">More Links</h5>
            <a href="index.htm" class="text-light d-block">Home</a>
            <a href="contact_me.php" class="text-light d-block">Contact me</a>
            <a href="recommendation.php" class="text-light"
              >Write a recommendation <i class="fab fa-gratipay"></i
            ></a>
          </div>
          <div class="col-12 col-md-4 text-light text-justify py-3">
            <p>
              I am Computer Science and Engineering student. Currently, pursuing
              B. Tech Degree from SGGSIE&T, Nanded. I have gone through various
              courses and gain various skill and knowledge. My studies have
              provided me knowledge in the use of computer. I have learn
              different programming languages from my university and different
              organization and company. My key Skills includes: Python, Java, C,
              HTML 5 and Data Structure.
            </p>
          </div>
          <div class="col-12 col-md-4 py-3">
            <h5 class="text-warning pb-3">Social Media</h5>
            <a
              href="https://www.linkedin.com/in/shradha-suryawanshi-463351210/"
              class="text-light h1 d-block"
              target="_blank"
              rel="noreferrer noopener"
              ><i class="fab fa-linkedin"></i
            ></a>
            <a
              href="https://github.com/Shradha-2491"
              class="text-light h1 d-block"
              target="_blank"
              rel="noreferrer noopener"
              ><i class="fab fa-github-square"></i
            ></a>
            <a
              href="https://www.facebook.com/shradha.suryawanshi.969/"
              class="text-light h1"
              target="_blank"
              rel="noreferrer noopener"
              ><i class="fab fa-facebook-square"></i
            ></a>
          </div>
        </div>

        <div class="text-warning py-3">
          <p>Copyright © Shradha Suryawanshi 2021</p>
        </div>
      </div>
    </footer>
  </body>
</html>
