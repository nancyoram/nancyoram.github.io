var section = document.querySelector('sectionCity');

var requestURL = 'https://byui-cit230.github.io/weather/data/towndata.json';
var request = new XMLHttpRequest();

request.open('GET', requestURL);
request.responseType = 'json';
request.send();
request.onload = function () {
    var towns = request.response;
    showtownsInfo(towns);
}

function showtownsInfo(jsonObj) {
    var towns = jsonObj['towns'];
    for (var i = 0; i < towns.length; i++) {
      if (towns[i].name == "Preston") { 
        for(var j = 0; j < towns[i].events.length; j++){

          console.log(towns[i].events[j]);
            
          var myArticle = document.createElement('article2');
          var myPara1 = document.createElement('p');

          myPara1.textContent = towns[i].events[j];
          
          myArticle.appendChild(myPara1);
          section.appendChild(myArticle);
        }
      } 
    }
}