var section = document.querySelector('section');

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
        if (towns[i].name == "Preston" || towns[i].name == "Soda Springs" || towns[i].name == "Fish Haven") { 

            var myArticle = document.createElement('article');
            var myH2 = document.createElement('h2');
            var myPara1 = document.createElement('p');
            var myPara2 = document.createElement('p');
            var myPara3 = document.createElement('p');
            var myPara4 = document.createElement('p');
            //var myPara5 = document.createElement('p');
            var myImages = document.createElement('img');

            myH2.textContent = towns[i].name;
            myPara1.textContent = towns[i].motto;
            myPara2.textContent = 'Year Founded: ' + towns[i].yearFounded;
            myPara3.textContent = 'Population: ' + towns[i].currentPopulation;
            myPara4.textContent = 'Annual Rainfall: ' + towns[i].averageRainfall + '"';
            //myPara5.textContent = 'Events:' + towns[i].events; 

            if (towns[i].name == 'Preston') {
                myImages.setAttribute('src', 'https://holmes-nicholas.github.io/assignments/lesson-9/images/preston/prestonhome.jpg');
                myImages.setAttribute('alt', 'Preston, ID');
            }
            else if (towns[i].name == 'Soda Springs') {
                myImages.setAttribute('src', 'https://holmes-nicholas.github.io/assignments/lesson-9/images/sodasprings/sodaspringshome.jpg');
                myImages.setAttribute('alt', 'Soda Springs, ID');
            }
            else if (towns[i].name == 'Fish Haven') {
                myImages.setAttribute('src', 'https://holmes-nicholas.github.io/assignments/lesson-9/images/fishhaven/fishhavenhome.jpg');
                myImages.setAttribute('alt', 'Fish Haven, ID');
            }

            myArticle.appendChild(myH2);
            myArticle.appendChild(myPara1);
            myArticle.appendChild(myPara2);
            myArticle.appendChild(myPara3);
            myArticle.appendChild(myPara4);
            //myArticle.appendChild(myPara5);
            myArticle.appendChild(myImages);
            section.appendChild(myArticle);
         } 
    }
}