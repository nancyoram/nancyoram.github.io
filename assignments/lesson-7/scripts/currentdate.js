var today = new Date();
var day = today.getDay();
var month = today.getMonth() + 1;
var year = today.getFullYear();
var date = today.getDate();

switch (day) {
case 1:
    day = "Monday";
    break;
case 2:
    day = "Tuesday";
    break;
case 3:
    day = "Wednesday";
    break;
case 4:
    day = "Thursday";
    break;
case 5:
    day = "Friday";
    break;
case 6:
    day = "Saturday";
    break;
default:
    day = "Sunday";
}

switch (month) {
case 1:
    month = "January";
    break;
case 2:
    month = "Febuary";
    break;
case 3:
    month = "March";
    break;
case 4:
    month = "April";
    break;
case 5:
    month = "May";
    break;
case 6:
    month = "June";
    break;
case 7:
    month = "July";
    break;
case 8:
    month = "August";
    break;
case 9:
    month = "September";
    break;
case 10:
    month = "October";
    break;
case 11:
    month = "November";
    break;
case 12:
    month = "December";
    break;
}
var displayDate = day + ", " + date + " " + month + " " + year;
document.getElementById("currentDate").innerHTML = displayDate;