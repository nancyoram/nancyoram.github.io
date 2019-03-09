var high = parseInt(document.getElementById("high").innerHTML);
var low = parseInt(document.getElementById("low").innerHTML);
var s = parseInt(document.getElementById("wind").innerHTML);
var t = (high + low) / 2;

var f = 35.74 + 0.6215 * t - 35.75 * Math.pow(s, 0.16) + 0.4275 * t * Math.pow(s, 0.16);

document.getElementById("chill").innerHTML = Math.round(f);