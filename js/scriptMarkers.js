(function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='//www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X','auto');ga('send','pageview');


            var customLabel = {
              restaurant: {
                  label: 'R'
              },
              bar: {
                  label: 'B'
              }
          };
      
          function initMap() {
              var map = new google.maps.Map(document.getElementById('map-container-google-2'), {
                  center: new google.maps.LatLng(-3.986796, -79.203225),
                  zoom: 13,
              heading: 90,
              tilt: 45
              });
      
      
              var infoWindow = new google.maps.InfoWindow;
              downloadUrl('http://127.0.0.1/aplicaciones/atractivosturisticos/xml.php', function(data) {
                  var xml = data.responseXML;
                  var markers = xml.documentElement.getElementsByTagName('marker');
                  Array.prototype.forEach.call(markers, function(markerElem) {
                      var idmapa = markerElem.getAttribute('idmapa');
                      var persona = markerElem.getAttribute('persona');
                      var imagen = markerElem.getAttribute('imagen');
                      var descripcion = markerElem.getAttribute('descripcion');
                      var direccion = markerElem.getAttribute('direccion');
                     
                      var point = new google.maps.LatLng(
                          parseFloat(markerElem.getAttribute('lat')),
                          parseFloat(markerElem.getAttribute('lng')));
                      const contentString =
                          '<div id="content">' +
                          '<div id="siteNotice">' +
                          "</div>" +
                          '<center>'+
                          '<h1 id="firstHeading" class="firstHeading">'+ persona +  '</h1>' +
                          '</center>'+
                          '<br>'+
                          '<div id="bodyContent">' +
                          '<br>'+
                          '<a href="./administrator/views/imagenes/' + imagen + ' " target="_blank"><img src="./administrator/views/imagenes/' + imagen + ' " width="350"></a>'+
                          '<br>'+
                          "<p>" + descripcion + "</p>" +
                          "<p>" + direccion + "</p>" +
                          "</p>" +
                          "</div>" +
                          "</div>";
      
      
                      //const image = "img/soldadoss.png";
                      //  var icon = customLabel[codigo] || {};
      
               
      
                      var marker = new google.maps.Marker({
                          map: map,
                          position: point,
                          //icon: image
                      });
                      marker.addListener('click', function() {
                          infoWindow.setContent(contentString);
                          infoWindow.open(map, marker);
                      });
                  });
              });
      
              // Una matriz con las coordenadas de los límites de Bucaramanga, extraídas manualmente de la base de datos GADM
      
             
      }
      
      function downloadUrl(url, callback) {
          var request = window.ActiveXObject ?
              new ActiveXObject('Microsoft.XMLHTTP') :
              new XMLHttpRequest;
          request.onreadystatechange = function() {
              if (request.readyState == 4) {
                  request.onreadystatechange = doNothing;
                  callback(request, request.status);
              }
          };
          request.open('GET', url, true);
          request.send(null);
      }
  
      function doNothing() {}

//------------LECTURA DEL JSON PARA LOS INDICADORES ---------------
      var data;
       
      $(document).ready(function() {
        $.ajax({
          //url: "./assets/js/datos.json",
          url: "http://127.0.0.1/aplicaciones/atractivosturisticos/indicadores.php",
          type: "GET",
          dataType: "json",
          success: function(source){
            data = source;
            mostrarJSON();
          },
          error: function(data){
            alert("ERROR");
          }
        });             
      });
      // Mostrar resultados en div #data
      function mostrarJSON(){
        $("#indicador1").append('<p>' + data['valorTotal']  +  '</p>');
        $("#indicador2").append('<p>' + data['naturales']  +  '</p>');
        $("#indicador3").append('<p>' + data['culturales']  +  '</p>');
        $("#indicador4").append('<p>' + data['Gastronomia']  +  '</p>');
      }