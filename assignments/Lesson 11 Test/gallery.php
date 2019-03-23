<!DOCTYPE html>
<html lang="en-us">
<head>
  <title>Gallery | Weather Sentinel</title>
  <meta name="description" content="Picture Gallery">  
    
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="author" content="Vladislovas Karalius">
  <!-- external style references in the proper cascading order -->    
  <link href="https://fonts.googleapis.com/css?family=Ubuntu:regular,italic,bold" rel="stylesheet">  <!-- Google API font reference -->
  <link href="styles/normalize.css" rel="stylesheet"> <!-- normalize useragent/browser defaults -->
  <link href="styles/main.css" rel="stylesheet">    <!-- default styles - small/phone views -->
  <link href="styles/medium.css" rel="stylesheet">  <!-- medium/tablet views -->
  <link href="styles/large.css" rel="stylesheet">   <!-- large/wide/desktop views -->
  
</head>
<body>

  <header>  
    
    <a href="index.php"><img src="images/logo.png" alt="Weather Sentinel Logo"></a>
    <h1>Weather Sentinel</h1>
    <div class="subheading">We watch the weather for you.</div>
  
  </header>

  <!-- site navigation use placeholder references -->
  <nav class="fixed">
    
    <button onclick="toggleNavMenu()">&#9776;</button>
    <ul class="topnav" id="hamburger">
    	<li><a href="index.php">Home</a></li>
    	<li><a href="franklin.php">Franklin</a></li>
    	<li><a href="greenville.php">Greenville</a></li>
    	<li><a href="springfield.php">Springfield</a></li>
    	<li><a href="stormcenter.php">Storm Center</a></li>
    	<li><a href="gallery.php">Gallery</a></li>
    </ul>		
 		
  </nav>
    
  <main>
    <h2>Gallery</h2>
    
    <div class="grid">
      
      <figure>
        <img src="images/weather-1.jpg" alt="Lorem ipsum dolor sit amet">
        <figcaption>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</figcaption>
      </figure>

      <figure>
        <img src="images/weather-2.jpg" alt="Sed gravida eros eget">
        <figcaption>Sed gravida eros eget est egestas lobortis.</figcaption>
      </figure>
      
      <figure>
        <img src="images/weather-3.jpg" alt="Nullam sed ipsum">
        <figcaption>Nullam sed ipsum facilisis, sodales orci nec, interdum tellus.</figcaption>
      </figure>
      
      <figure>
        <img src="images/weather-4.jpg" alt="Mauris eget elit efficitur">
        <figcaption>Mauris eget elit efficitur, faucibus libero eget, semper nisl.</figcaption>
      </figure>
      
      <figure>
        <img src="images/weather-5.jpg" alt="Integer non lorem">
        <figcaption>Integer non lorem ut felis mattis placerat vel eget enim.</figcaption>
      </figure>
      
      <figure>
        <img src="images/weather-6.jpg" alt="Curabitur efficitur justo">
        <figcaption>Curabitur efficitur justo et neque ultricies, dapibus porttitor orci sollicitudin.</figcaption>
      </figure>
      
    </div>
    
    
  </main>
    
  <footer>  
    
    <aside>
      <p>Vladislovas Karalius, Lithuania</p>
      <p><a href="mailto:vladislovas.karalius@gmail.com?Subject=Weather%20Sentinel">vladislovas.karalius@gmail.com</a></p>
    </aside>
    <p class="footer-bar">&copy;2017 All Rights Reserved | Weather Sentinel | 
      <span>Saturday, 23 March 2019</span></p>
  
  </footer>

  <script src="scripts/hamburger.js"></script>
  <script src="scripts/wayfinding.js"></script>

</body>
</html>