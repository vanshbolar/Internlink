<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>INTERNLINK</title>
  <link rel="stylesheet" href="">
   <!-- Bootstrap CDN -->
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
   <link href="https://fonts.googleapis.com/css?family=Merriweather:400,900,900i" rel="stylesheet">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
   <style>
    :root {
    --navbar-bg-color: hsl(0, 0%, 15%);
    --navbar-text-color: hsl(0, 0%, 85%);
    --navbar-text-color-focus: grey;
    --navbar-bg-contrast: hsl(0, 0%, 25%);
  }
  * {
    box-sizing: border-box;
    margin: 0;
    padding: 0;

  }
  body {
    height: 99vh;
    font-family: Arial, Helvetica, sans-serif;
    line-height: 1.6;
    background-color: turquoise;

    background-size: cover;
  }
  .btn{
    float: inline-end;
  }

#dept{
  width: 150px;
  height: 50px;
  background-color: #333;
 }
  .container {
    max-width: 1500px;
    padding-left: 1.4rem;
    padding-right: 1.4rem;
    margin-left:5px;
    margin-right: 10px;

  }
  #navbar {
    --navbar-height: 64px;
    position:absolute;
    height: var(--navbar-height);
    background-color: var(--navbar-bg-color);
    left: 0;
    right: 0;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.15);
   
  }
  .navbar-container {
    display: flex;
    justify-content:space-evenly;
    height: 100%;
    align-items: center;
  }
  .navbar-item {
    margin: 0.4em;
    width: 100%;
  }
  
  .home-link,
  .navbar-link {
    color: var(--navbar-text-color);
    display:flex;
    font-weight: 400;
    font-size: large;
    align-items: center;
    text-decoration: none;
  }
  
  .home-link:is(:focus, :hover) {
    color: var(--navbar-text-color-focus);
    text-decoration: none;
  }
  
  .navbar-link {
    justify-content: center;
    width: 100%;
    padding: 0.4em 0.8em;
    border-radius: 5px;
    
  }
  
  .navbar-link:is(:focus, :hover) {
    color: var(--navbar-text-color-focus);
    background-color: var(--navbar-bg-contrast);
    text-decoration: none;
  }
  .navbar-logo {
    background-color: var(--navbar-text-color-focus);
    border-radius: 50%;
    width: 30px;
    height: 30px;
    margin-right: 0.5em;
  }
  #navbar-toggle {
    cursor: pointer;
    border: none;
    background-color: transparent;
    width: 40px;
    height: 40px;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-direction: column;
  }
  .icon-bar {
    display: block;
    width: 25px;
    height: 4px;
    margin: 2px;
    background-color: var(--navbar-text-color);
  }
  #navbar-toggle:is(:focus, :hover) .icon-bar {
    background-color: var(--navbar-text-color-focus);
  }
  #navbar-toggle[aria-expanded="true"] .icon-bar:is(:first-child, :last-child) {
    position: absolute;
    margin: 0;
    width: 30px;
  }
  #navbar-toggle[aria-expanded="true"] .icon-bar:first-child {
    transform: rotate(45deg);
  }
  #navbar-toggle[aria-expanded="true"] .icon-bar:nth-child(2) {
    opacity: 0;
  }
  #navbar-toggle[aria-expanded="true"] .icon-bar:last-child {
    transform: rotate(-45deg);
  }
  #navbar-menu {
    position: fixed;
    top: var(--navbar-height);
    bottom: 0;
    opacity: 0;
    visibility: hidden;
    left: 0;
    right: 0;
  }
  #navbar-toggle[aria-expanded="true"] + #navbar-menu {
    background-color: rgba(0, 0, 0, 0.4);
    opacity: 1;
    visibility: visible;
  }
  .navbar-links {
    list-style: none;
    position: absolute;
    background-color: var(--navbar-bg-color);
    display: flex;
    flex-direction: column;
    align-items: center;
    left: 0;
    right: 0;
    margin: 1.4rem;
    border-radius: 5px;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.3);
  }
  
  #navbar-toggle[aria-expanded="true"] + #navbar-menu .navbar-links {
    padding: 1em;
  }
  @media screen and (min-width: 700px) {
    #navbar-toggle,
    #navbar-toggle[aria-expanded="true"] {
      display: none;
    }
  
    #navbar-menu,
    #navbar-toggle[aria-expanded="true"] #navbar-menu {
      visibility: visible;
      opacity: 1;
      position: static;
      display: block;
      height: 100%;
    }
  
    .navbar-links,
    #navbar-toggle[aria-expanded="true"] #navbar-menu .navbar-links {
      margin: 0;
      padding: 0;
      box-shadow: none;
      position: static;
      flex-direction: row;
      width: 100%;
      height: 100%;
    }
  }
  
  /**banner**/
  
  .responsive {
    display:inline-flex;
    margin: 100px;
    width: 50%;
    max-width: 400px;
    min-width: 500px;
    position: relative;
    border-radius: 15px;
    overflow: hidden;
    background-image: linear-gradient(to bottom right, #d45ba1, #a784e0);
    background-repeat: no-repeat;
    text-align: left;
    box-shadow: 0 3px 6px rgba(0, 0, 0, 0.16), 0 3px 6px rgba(0, 0, 0, 0.23);
  }
  .responsive.second {
    background-image: linear-gradient(to bottom right, #f4c28e, #e67163);
  }
  .responsive.third {
    background-image: linear-gradient(to bottom right, #589fe5, #74dac4);
  }

  .container-envelope {
    max-width: calc(100%);
    padding: 10px;
    color: #fff;
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    min-height: 300px;
    max-height: 450px;
  }
  .col-xs-12 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 100%;
    -ms-flex: 0 0 100%;
    flex: 0 0 100%;
    max-width: 100%;
    -webkit-align-self: flex-end;
    -ms-flex-item-align: end;
    align-self: flex-end;
  }
  
  @media (min-width: 650px) {
    .col-xs-12 {
      -webkit-align-self: center;
      -ms-flex-item-align: center;
      align-self: center;
    }
    .container-envelope {
      max-width: calc(100% - 200px);
    }
  }
  p {
    clear: both;
    font-family: "Work Sans", Helvetica, sans-serif;
    text-transform: none;
    text-rendering: optimizeLegibility;
    font-weight: 500;
    line-height: 1.15;
    word-wrap: break-word;
    margin: 1em 0 0.5em;
    margin: 0;
    padding: 0;
    color: #0b0101;
    position: relative;
    word-wrap: break-word;
    font-size: 20px;
    text-transform: uppercase;
    margin-bottom: 20px;
  }
  * {
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
  }
  a.more-link {
    background-color: black;
    display: inline-block;
    padding: 12px 18px;
    color: #fff;
    text-decoration: none;
    font: 500 15px "Work Sans", Helvetica, sans-serif;
    line-height: 1.5;
    text-align: center;
    border: none !important;
    position: relative;
    border-radius: 30px;
    text-transform: uppercase;
    -webkit-transition: 0.1s all ease-in-out;
    -moz-transition: 0.1s all ease-in-out;
    -o-transition: 0.1s all ease-in-out;
    transition: 0.1s all ease-in-out;
  }
  a.more-link:hover {
    background-color: rgba(255, 255, 255, 0.5);
    color: #130606;
  }
  svg,
  img {
    fill: rgba(107, 62, 62, 0.1);
    position: absolute;
  }
  img {
    max-width: 50%;
    border-bottom-left-radius: 50%;
  }
  
  .cirle-a {
    bottom: -80px;
    left: -80px;
  }
  .cirle-b {
    top: -30px;
    right: 70%;
  }
  .cirle-c {
    top: -330px;
    right: -300px;
  }
  .cirle-d {
    top: 195px;
    right: 145px;
  }
  img {
    top: 0;
    right: 0;
    width: 100%;
    height: 50%;
  }
  

  h1 {
    text-align: center;
    margin: 30px 15px;
  }
  .link-container {
    text-align: center;
  }
  .link-container a.more-link {
    font-family: "Source Sans Pro", Helvetica, sans-serif;
    background-color: #90b0bf;
    color: #fff;
    display: inline-block;
    margin-right: 5px;
    margin-bottom: 5px;
    line-height: 1.5;
    text-decoration: none;
    text-transform: none;
    font-weight: 400;
    letter-spacing: 1px;
  }

  
  /**footer**/

  @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700;800;900&display=swap");

.footer {
  position: relative;
  width: 100%;
  background: #3586ff;
  min-height: 150px;
  padding: 10px 10px;
  display: flex;
  justify-content: center;
  align-items: center;
  flex-direction: column;
}

.social-icon,
.menu {
  position: relative;
  display: flex;
  justify-content: center;
  align-items: center;
  margin: 10px 0;
  flex-wrap: wrap;
}

.social-icon__item,
.menu__item {
  list-style: none;
}

.social-icon__link {
  font-size: 2rem;
  color: #fff;
  margin: 0 10px;
  display: inline-block;
  transition: 0.5s;
}
.social-icon__link:hover {
  transform: translateY(-10px);
}

.menu__link {
  font-size: 1.2rem;
  color: #fff;
  margin: 0 10px;
  display: inline-block;
  transition: 0.5s;
  text-decoration: none;
  opacity: 0.75;
  font-weight: 300;
}

.menu__link:hover {
  opacity: 1;
}

.footer p {
  color: #fff;
  margin: 15px 0 10px 0;
  font-size: 1rem;
  font-weight: 300;
}

.wave {
  position: absolute;
  top: -100px;
  left: 0;
  width: 100%;
  height: 100px;
  background: url("https://i.ibb.co/wQZVxxk/wave.png");
  background-size: 1000px 100px;
}

.wave#wave1 {
  z-index: 1000;
  opacity: 1;
  bottom: 0;
  animation: animateWaves 4s linear infinite;
}

.wave#wave2 {
  z-index: 999;
  opacity: 0.5;
  bottom: 10px;
  animation: animate 4s linear infinite !important;
}

.wave#wave3 {
  z-index: 1000;
  opacity: 0.2;
  bottom: 15px;
  animation: animateWaves 3s linear infinite;
}

.wave#wave4 {
  z-index: 999;
  opacity: 0.7;
  bottom: 20px;
  animation: animate 3s linear infinite;
}

@keyframes animateWaves {
  0% {
    background-position-x: 1000px;
  }
  100% {
    background-positon-x: 0px;
  }
}

@keyframes animate {
  0% {
    background-position-x: -1000px;
  }
  100% {
    background-positon-x: 0px;
  }
}
/**back to top**/
#myBtn {
  display: none;
  position: fixed;
  bottom: 20px;
  right: 30px;
  z-index: 99;
  font-size: 18px;
  border: none;
  outline: none;
  background-color: red;
  color: white;
  cursor: pointer;
  padding: 15px;
  border-radius: 4px;
}

#myBtn:hover {
  background-color: #555;
}

    </style>
  </head>
<body  >
  
    <!-- start #header -->
    <header id="navbar">
        <nav class="navbar-container container">
          <a href="/" class="home-link">
            <div class="navbar-logo"></div>
            INTERNLINK
          </a>
          <button type="button" id="navbar-toggle" data-toggle="collapse" aria-controls="navbar-menu" aria-label="Toggle menu" aria-expanded="false">
            <span class="icon-bar"></span>
          </button>
          <div id="navbar-menu" aria-labelledby="navbar-toggle">
            <ul class="navbar-links">
              <li class="navbar-item"><a class="navbar-link active-page " href="./index.php">Home</a></li>
              <li class="navbar-item"><a class="navbar-link active-page " href="./about.php">About</a></li>
              <li class="navbar-item"><a class="navbar-link active-page " href="./dashboard.php">Dashboard</a></li>
              <li class="navbar-item"><a class="navbar-link active-page " href="./contact.php">Contact</a></li>
              <li class="navbar-item"><a class="btn btn-danger float-end" href="./logout.php">logout</a></li>
            </ul>
          </div>
        </nav>
      </header>
      <br><br>
      <!-- start #main-site -->
            <!--back to top-->
            <button onclick="topFunction()" id="myBtn" title="Go to top">Back to Top</button>
            <!--back to top-->
      <!-- start categories -->
  
