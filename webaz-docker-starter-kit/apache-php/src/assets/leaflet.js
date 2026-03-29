var map = L.map('map').setView([48.833472, 2.319915], 13);

L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
    maxZoom: 19,
    attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
}).addTo(map);

let markersGroup = L.layerGroup().addTo(map);
let bounds = L.latLngBounds();

navigator.geolocation.getCurrentPosition(function (position) {
    console.log(position.coords.latitude, position.coords.longitude, position.coords.altitude);
});
 
navigator.geolocation.watchPosition(function (position) {
    console.log(position.coords.latitude, position.coords.longitude, position.coords.altitude);
});





Vue.createApp({
    data() {
        return {
            choix : 'commence',
            input_lettres : ''
        };
    },

    computed :{
        url(){
            return 'http://localhost:1234/ville2france?choix=' + this.choix + '&input_lettres=' + this.input_lettres
        },
        url1(){
            return 'http://localhost:1234/ville2france?choix=commence&input_lettres=mont'
        },
        url2(){
            return 'http://localhost:1234/ville2france?choix=contient&input_lettres=ker'
        },
        url3(){
            return 'http://localhost:1234/ville2france?choix=termine&input_lettres=ville'
        }
    },

    methods :{
    points(){
        markersGroup.clearLayers();
        console.log(this.url)
        fetch(this.url)
        .then(result => result.json())   
        .then((result) => {
        console.log(result);
        if (result.length === 0 || result === 'error' || result === 'Invalid choice parameter') {
            alert("Aucun résultat trouvé");
            return;
        }
          for (let i = 0; i < result.length; i++) {
            const lon = parseFloat(result[i].lon);
            const lat = parseFloat(result[i].lat);
            const marker = L.marker([lat, lon]);
            marker.bindPopup(result[i].nom);
            markersGroup.addLayer(marker)
            bounds.extend(marker.getLatLng());
          }
          map.fitBounds(bounds);
        })
    },
    preset1(){
        markersGroup.clearLayers();
        console.log(this.url1)
        fetch(this.url1)
        .then(result => result.json())   
        .then((result) => {
        console.log(result);
        if (result.length === 0 || result === 'error' || result === 'Invalid choice parameter') {
            alert("Aucun résultat trouvé");
            return;
        }
          for (let i = 0; i < result.length; i++) {
            const lon = parseFloat(result[i].lon);
            const lat = parseFloat(result[i].lat);
            const marker = L.marker([lat, lon]);
            marker.bindPopup(result[i].nom);
            markersGroup.addLayer(marker)
            bounds.extend(marker.getLatLng());
          }
          map.fitBounds(bounds);
        });
    },
    preset2(){
        markersGroup.clearLayers();
        console.log(this.url2)
        fetch(this.url2)
        .then(result => result.json())   
        .then((result) => {
        console.log(result);
        if (result.length === 0 || result === 'error' || result === 'Invalid choice parameter') {
            alert("Aucun résultat trouvé");
            return;
        }
          for (let i = 0; i < result.length; i++) {
            const lon = parseFloat(result[i].lon);
            const lat = parseFloat(result[i].lat);
            const marker = L.marker([lat, lon]);
            marker.bindPopup(result[i].nom);
            markersGroup.addLayer(marker)
            bounds.extend(marker.getLatLng());
          }
          map.fitBounds(bounds);
        });
    },
    preset3(){
        markersGroup.clearLayers();
        console.log(this.url3)
        fetch(this.url3)
        .then(result => result.json())   
        .then((result) => {
        console.log(result);
        if (result.length === 0 || result === 'error' || result === 'Invalid choice parameter') {
            alert("Aucun résultat trouvé");
            return;
        }
          for (let i = 0; i < result.length; i++) {
            const lon = parseFloat(result[i].lon);
            const lat = parseFloat(result[i].lat);
            const marker = L.marker([lat, lon]);
            marker.bindPopup(result[i].nom);
            markersGroup.addLayer(marker)
            bounds.extend(marker.getLatLng());
          }
          map.fitBounds(bounds);
        });
    }
}
}).mount('#entete');




