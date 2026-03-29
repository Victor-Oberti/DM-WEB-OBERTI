var map = L.map('map').setView([48.833472, 2.319915], 13);

L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
    maxZoom: 19,
    attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
}).addTo(map);


let geomCommune = L.geoJSON().addTo(map);

navigator.geolocation.getCurrentPosition(function (position) {
    console.log(position.coords.latitude, position.coords.longitude, position.coords.altitude);
});
 
navigator.geolocation.watchPosition(function (position) {
    console.log(position.coords.latitude, position.coords.longitude, position.coords.altitude);
});


Vue.createApp({
  data() {
    return {
      message: 'Hello Vue !',
    };
  },
}).mount('#app');


// Vue.createApp({
//     data() {
//         return {
//             communes: [],
//             text : ''
//         };
//     },

//     computed :{},

//     methods :{
//         fetch()
//         .then(function(){
//             )

// }).mount();




