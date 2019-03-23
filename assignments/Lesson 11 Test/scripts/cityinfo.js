// Get the placeholder info and store it in a variable
// <section id="cityinfo"></section> element is used as a placeholder.
    var cityInfo = document.getElementById("cityinfo");

// Get the JSON data and store it in a variable "cityData
    var requestURL = "https://byui-cit230.github.io/towndata.json";
    var request = new XMLHttpRequest();
    request.open("GET", requestURL);
    request.responseType = "json";
    request.send();
    
    request.onload = function() {
      var cityData = request.response;
      displayCityInfo(cityData);
    }
  
/* Extract the data and add it to the page.
The information about the current page is taken from the <title> element.
The first word in the title must be the city name, e.g "Franklin"
*/
    function displayCityInfo(jsonObj) {
      
      // JSON data is stored in an array "towns"
      var towns = jsonObj["towns"];
      
      // This line takes the first word (city name) from the title.
      var currentTown = document.querySelector("title").innerHTML.split(" ")[0];
      
      
      // This loop goes throug the "towns array"
      for (var i = 0; i < towns.length; i++) {
        
        // It checks the town name.
        //If it matches the name in the title it generates the elements with the data for that town.
        if (towns[i].name == currentTown) {
          
          // Element generation.
          var h3 = document.createElement("h3");
          var p1 = document.createElement("p");
          var p2 = document.createElement("p");
          var p3 = document.createElement("p");
          var p4 = document.createElement("p");
          var p5 = document.createElement("p");
          var p6 = document.createElement("p");
          var ul = document.createElement("ul");
          
          // Elements are filled with the data.
          h3.textContent = towns[i].name + " City Information";
          p1.textContent = "This is " + towns[i].name +".";
          p2.textContent = "Our motto is '" + towns[i].motto + "'.";
          p3.textContent =  towns[i].name + " was founded in " + towns[i].yearFounded + ".";
          p4.textContent =  "The current population of " + towns[i].name + " is " + towns[i].currentPopulation + ".";
          p5.textContent =  "The average rainfall here is " + towns[i].averageRainfall + ".";
          p6.textContent =  "Important events:";
          
          var events = towns[i].events;
            
          // This loop extracts the data about event.
          for (var j = 0; j < events.length; j++) {
            var li = document.createElement("li");
            li.textContent = events[j];
            ul.appendChild(li);
          }
          
          // Generated elements are added to the page.
          cityInfo.appendChild(h3);
          cityInfo.appendChild(p1);
          cityInfo.appendChild(p2);
          cityInfo.appendChild(p3);
          cityInfo.appendChild(p4);
          cityInfo.appendChild(p5);
          cityInfo.appendChild(p6);
          cityInfo.appendChild(ul);
                          
        }
        
      }
            
    }