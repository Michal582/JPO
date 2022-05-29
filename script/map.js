let map = L.map('compBranch').setView([52.4634, 16.9183], 15);
let marker = L.marker([52.46346, 16.9183]).addTo(map);
L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    maxZoom: 19,
    attribution: '© OpenStreetMap'
}).addTo(map);
