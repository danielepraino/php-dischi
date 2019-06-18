var $ = require("jquery");
var Handlebars = require('handlebars');

//ho visto sulla documentazione questo metodo e l'ho voluto testare, figo!
//https://www.npmjs.com/package/handlebars
var albumTemplate =
"<div class='album'>" +
  "<div class='cover'>" +
    "<img src='{{img}}' alt='{{title}}'>" +
  "</div>" +
  "<div class='info'>" +
    "<h3>{{title}}</h3>" +
    "<p>" +
      "<span>{{band}}<br></span>" +
    "{{release}}</p>" +
  "</div>" +
"</div>";

var template = Handlebars.compile(albumTemplate);

$( document ).ready(function() {

  $.ajax({
    url: "http://localhost:8888/45-php-dischi/php-dischi_v2/albumDatabase.php",
    method: 'GET',
    success: function(data) {
      var albums = JSON.parse(data);
      for (var key in albums) {
        var result = template(albums[key]);
        $(".albums-container").append(result);
      }
    },
    error: function() {
      alert("errore");
    }
  });

});
