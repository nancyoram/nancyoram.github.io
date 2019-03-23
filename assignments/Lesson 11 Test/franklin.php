<!DOCTYPE html>
<html lang="en-us">
<head>
  <title>Franklin City | Weather Sentinel</title>  
  <meta name="description" content="Franklin City Weather Forecast">  
    
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
<body class>

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
    
    <div class="flex1">
      <section>
        <h2>The City of Franklin</h2>
        <figure>
          <img src="images/franklin-small.jpg" alt="Franklin"
               sizes="100vw"
               srcset="images/franklin-small.jpg 600w,
                       images/franklin-medium.jpg 1024w,
                       images/franklin-large.jpg 1280w">
        </figure>
      </section>

      <section class="summary">
        <h3>Weather Summary</h3>

        <div class="flex2">
          <div class="highlow">
            <p>High: <span class="data"><span id="high">90</span>&deg;F</span></p>
            <p>Low: <span class="data"><span id="low">66</span>&deg;F</span></p>
          </div>
          <div class="current">
            <div class="vertical">
              Sunny
            </div>
            <picture>
                <img src="images/sunny.jpg" alt="Sunny" width="70" height="70">
            </picture>
          </div>
          <div class="conditions">
            <p>Precipitation: <span class="data">0%</span></p>
            <p>Wind Speed: <span class="data"><span id="wind">5</span> mph SW</span></p>  
          </div>
          <div>
            <p>Wind Chill: <span class="data"><span id="chill"></span>&deg;</span></p>
          </div>
        </div>
      </section>
    </div>
    
    <section class="forecast">
      <h3>10 Day Forecast</h3>
      <table>
	    <thead>
          <tr>
            <th>Day 1</th>
            <th>Day 2</th>
            <th>Day 3</th>
            <th>Day 4</th>
            <th>Day 5</th>
            <th>Day 6</th>
            <th>Day 7</th>
            <th>Day 8</th>
            <th>Day 9</th>
            <th>Day 10</th>
          </tr>
		</thead>
        <tbody>  
          <tr>
            <td>89&deg;F</td>
            <td>87&deg;F</td>
            <td>78&deg;F</td>
            <td>75&deg;F</td>
            <td>72&deg;F</td>
            <td>72&deg;F</td>
            <td>79&deg;F</td>
            <td>83&deg;F</td>
            <td>85&deg;F</td>
            <td>89&deg;F</td>
          </tr>
		</tbody>
      </table>
    </section>
     
    <section id="cityinfo">
    </section>
      
    <article>
      <h3>Franklin Breaks Record</h3>	
      <div class="flex3">
        <img src="images/franklin-city-news.jpg" alt="City News" width="400">
        <p class="town-article">
          Lorem ipsum dolor sit amet, veri volumus disputationi ne pro, solum integre id usu. Pro ad aperiri diceret intellegat, illud solet deseruisse id vix. His ad partiendo interpretaris, vis ne porro ponderum dignissim. Quo ea laudem docendi concludaturque, utinam ubique facilis pri te. An duo nullam dicunt eligendi. An per accusam pertinax intellegat. Lorem ipsum dolor sit amet, veri volumus disputationi ne pro, solum integre id usu. Pro ad aperiri diceret intellegat, illud solet deseruisse id vix. His ad partiendo interpretaris, vis ne porro ponderum dignissim. Quo ea laudem docendi concludaturque, utinam ubique facilis pri te. An duo nullam dicunt eligendi. An per accusam pertinax intellegat.
        </p>
      </div>
    </article>		  
  
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
  <script src="scripts/windchill.js"></script>
  <script src="scripts/wayfinding.js"></script>
  <script src="scripts/cityinfo.js"></script>

</body>
</html>