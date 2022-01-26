function hola() {
    alert('hola');
}

function leerPos() {

    if ("geolocation" in navigator) {
     //   alert('la geolocalización está disponible ');
     navigator.geolocation.getCurrentPosition(function(position) {
       // haz_algo(position.coords.latitude, position.coords.longitude);
       var latitude=position.coords.latitude;
       var longitude=position.coords.longitude;
       document.getElementById('latitude').value=latitude;
       document.getElementById('longitude').value=longitude;
       document.getElementById('latitude1').value=latitude;
       document.getElementById('longitude1').value=longitude;
      });
      } else {
        alert('la geolocalización no está disponible ');
      }

}
