let map = L.map('compBranch').setView([52.42397, 16.90907], 15);
let marker = L.marker([52.42397, 16.90907]).addTo(map);
L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    maxZoom: 19,
    attribution: '© OpenStreetMap'
}).addTo(map);
