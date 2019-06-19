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

var optionTemplate =
"<option value='{{band}}'>{{band}}" +
"</option>";

var template = Handlebars.compile(albumTemplate);
var template2 = Handlebars.compile(optionTemplate);

$( document ).ready(function() {

function callAlbums() {
  $(".albums-container").empty();
  $.ajax({
    url: "albumDatabase.php",
    method: 'GET',
    data: ({
      band: $('.band-select').val(),
      filter: $('.generic-select').val()
    }),
    success: function(data) {
      var albums = JSON.parse(data);
      for (var key in albums) {
        var result = template(albums[key]);
        var result2 = template2(albums[key]);
        $(".albums-container").append(result);
        console.log($('.band-select').val());
        if ($('.band-select').val() == null && $('.generic-select').val() == null) {
          $(".band-select").append(result2);
        }
      }
    },
    error: function() {
      alert("errore");
    }
  });
};

$(".band-select").change(function(){
  callAlbums();
});

$(".generic-select").change(function(){
  callAlbums();
});

callAlbums();

});
