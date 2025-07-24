mapboxgl.accessToken = 'pk.eyJ1IjoibWFjZmUxNXAiLCJhIjoiY21jNTdudWtwMG14dzJrb2Y3a3g1aXJvZCJ9.z5c2L08b8ybUIGxTA5e3gg'; 

const map = new mapboxgl.Map({
    container: 'map',
    style: 'mapbox://styles/mapbox/streets-v12',
    center: [-74.0128443, 4.9244607],
    zoom: 15,
    pitch: 45,
    bearing: -17,
    antialias: true
});

map.on('load', () => {
    //  3D Buildings
    map.addLayer({
        id: '3d-buildings',
        source: 'composite',
        'source-layer': 'building',
        filter: ['==', 'extrude', 'true'],
        type: 'fill-extrusion',
        minzoom: 15,
        paint: {
            'fill-extrusion-color': '#aaa',
            'fill-extrusion-height': [
                "interpolate", ["linear"], ["zoom"],
                15, 0,
                15.05, ["get", "height"]
            ],
            'fill-extrusion-base': [
                "interpolate", ["linear"], ["zoom"],
                15, 0,
                15.05, ["get", "min_height"]
            ],
            'fill-extrusion-opacity': 0.5
        }
    });

    // Marcador
    new mapboxgl.Marker({ color: "#94c93f" })
        .setLngLat([-74.0128443, 4.9244607])
        .addTo(map);
});
