




[].forEach(( pin ) => {
  new google.maps.Marker({
      position: new google.maps.LatLng(pin.lat, pin.lng),
      icon: 'http://neuro.sodova.com/wp-content/uploads/2021/10/pin.png',
      map: map
  });
})
