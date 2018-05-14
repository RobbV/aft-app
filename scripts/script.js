"use strict";
// display tour pages script
function displayTourDates(arr) {
    var out = "";
    var i;
  for (i = 0; i < arr.length; i++) {
    out += "<div class='date'><h3>" + arr[i].day + "</h3><div class='month'><h5>" + arr[i].month + "</h5><h5>" + arr[i].year + "</h5></div> <h4>" + arr[i].city + "</h4></div>";
  }
  document.getElementById("tour-dates").innerHTML = out;
}
displayTourDates(myShows);
