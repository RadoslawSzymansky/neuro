<?php get_header(); // Template Name: Kontakt ?>

<header class="header mb">
  <img src="<?php echo get_field('header_img')['url']; ?>" alt="<?php echo get_field('header_img')['alt']; ?>" class="header__img">
  <div class="content">
    <div class="container">
      <div class="label"><?php the_field('header_label'); ?></div>
      <h1 class="title"><?php the_field('header_title'); ?></h1>
    </div>
  </div>
</header>


  <div class="container">
    <div class="contact-top">
      <div class="left">
        <div class="text-section">
          <?php the_field('text_left'); ?>
        </div>
      </div>
      <div class="right">
        <a href="tel:<?php the_field('phone', 'options'); ?>" class="call-us">
            <svg xmlns="http://www.w3.org/2000/svg" width="52.218" height="51.218" viewBox="0 0 52.218 51.218">
              <path id="phone" d="M16.7,45.134,6.2,34.841a20.464,20.464,0,0,1,0-29.353,1.393,1.393,0,0,1,1.943,0L18.64,15.781a1.33,1.33,0,0,1,0,1.906l-3.5,3.431a3.454,3.454,0,0,0,0,4.956L25.635,36.366a3.618,3.618,0,0,0,5.052,0l3.5-3.431a1.393,1.393,0,0,1,1.943,0L46.622,43.228a1.33,1.33,0,0,1,0,1.906,21.443,21.443,0,0,1-29.926,0ZM2.748,20.165a17.772,17.772,0,0,0,5.4,12.771L18.64,43.228a18.666,18.666,0,0,0,25.032.918l-8.515-8.352-2.526,2.478a6.405,6.405,0,0,1-8.939,0L13.2,27.979a6.113,6.113,0,0,1,0-8.768l2.526-2.478L7.21,8.382A17.723,17.723,0,0,0,2.748,20.165ZM30.086,21.71a1.335,1.335,0,0,1-.4-.953V6.2a1.374,1.374,0,0,1,2.748,0V19.409H45.9a1.348,1.348,0,1,1,0,2.7H31.057A1.387,1.387,0,0,1,30.086,21.71Zm9.779-9.851a1.33,1.33,0,0,1,.023-1.906l10-9.57a1.393,1.393,0,0,1,1.943.023A1.33,1.33,0,0,1,51.8,2.312l-10,9.57a1.393,1.393,0,0,1-1.943-.023Z" fill="#00b9f2"/>
            </svg>
            <div class="call-us__right">
              <p><?php the_field('visit', 'options'); ?></p>
              <span><?php the_field('phone', 'options'); ?></span>
            </div>
          </a>
        <?php the_field('text_right'); ?>

        <div class="flex">
          <svg xmlns="http://www.w3.org/2000/svg" width="45.907" height="51" viewBox="0 0 45.907 51">
            <path id="Subtraction_1" data-name="Subtraction 1" d="M-619.1,817A15.881,15.881,0,0,1-635,801.174a15.841,15.841,0,0,1,3.541-9.974,15.938,15.938,0,0,1,9.031-5.5l.328,2.942a12.85,12.85,0,0,0-9.931,12.537A12.924,12.924,0,0,0-619.1,814.06a12.928,12.928,0,0,0,8.625-3.293,12.915,12.915,0,0,0,4.152-7.6h3a15.786,15.786,0,0,1-5.271,9.844A15.906,15.906,0,0,1-619.1,817Zm30.007-3.564h-7.122l-2.949-14.012a1.829,1.829,0,0,0-1.724-1.465h-9.961a5.489,5.489,0,0,1-5.507-4.834l-1.8-16.16-.361-.105a5.577,5.577,0,0,1-4.008-5.318A5.564,5.564,0,0,1-616.955,766a5.565,5.565,0,0,1,5.574,5.543,5.536,5.536,0,0,1-3.42,5.111l-.39.163.951,8.529h10.628v2.94h-10.3l.5,4.517a2.5,2.5,0,0,0,2.557,2.216h9.961a4.779,4.779,0,0,1,4.628,3.8L-593.8,810.5h4.71v2.939Zm-27.861-44.5a2.607,2.607,0,0,0-2.6,2.6,2.607,2.607,0,0,0,2.6,2.6,2.607,2.607,0,0,0,2.606-2.6A2.607,2.607,0,0,0-616.955,768.94Z" transform="translate(635 -766)" fill="#00b9f2"/>
          </svg>
          <div>
            <?php the_field('text_btn'); ?>
          </div>
        </div>

        <a href="#map" class="btn btn--transparent btn--primary">
         <?php pll_e('Poka?? miejsca na mapie'); ?>
        </a>
      </div>
    </div>
  </div>

  <div class="container">
      <div class="contact-form">
        <?php $form_name = '[contact-form-7  title="Formularz_' . pll_current_language() . '"]'; ?>
        <?php echo do_shortcode($form_name); ?>
      </div>
  </div>

  <div class="container">
    <div class="label"><?php the_field('map_label'); ?></div>
    <h2 class="label"><?php the_field('map_title'); ?></h2>
  </div>
  <div class="container container-xl">
    <div id="map" class="map" style="overflow-y: hidden; overflow-x: visible;"></div>
  </div>

  <div>

    </div>


    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDKuQwHcsbQRlWGPAO_7Tc1QAZUgnv-ykg&amp;callback=initMap">
    </script>
<script>

<?php
$maps = array();
if( have_rows('maps') ):
  while ( have_rows('maps') ) : the_row();
          $maps[] = get_sub_field('pin');
  endwhile;
endif;
?>
  <?php
$php_array = $maps;
$js_array = json_encode($php_array);
echo "const PINS = ". $js_array . ";\n";
?>

console.log('PINY',PINS);

  document.addEventListener('DOMContentLoaded', () => {
  function initMap() {
    var map = new google.maps.Map(document.getElementById('map'), {
        center: { lat: +PINS[0].lat, lng: +PINS[0].lng },
        zoom: 15,
        disableDefaultUI: false,
        mapTypeControl: false,
        scaleControl: false,
        zoomControl: false,
        fullscreenControl: false,
        streetViewControl: false,
        styles: [
            {
              "elementType": "geometry",
              "stylers": [
                {
                  "color": "#f5f5f5"
                }
              ]
            },
            {
              "elementType": "labels.icon",
              "stylers": [
                {
                  "visibility": "off"
                }
              ]
            },
            {
              "elementType": "labels.text.fill",
              "stylers": [
                {
                  "color": "#616161"
                }
              ]
            },
            {
              "elementType": "labels.text.stroke",
              "stylers": [
                {
                  "color": "#f5f5f5"
                }
              ]
            },
            {
              "featureType": "administrative.land_parcel",
              "elementType": "labels.text.fill",
              "stylers": [
                {
                  "color": "#bdbdbd"
                }
              ]
            },
            {
              "featureType": "poi",
              "elementType": "geometry",
              "stylers": [
                {
                  "color": "#eeeeee"
                }
              ]
            },
            {
              "featureType": "poi",
              "elementType": "labels.text.fill",
              "stylers": [
                {
                  "color": "#757575"
                }
              ]
            },
            {
              "featureType": "poi.park",
              "elementType": "geometry",
              "stylers": [
                {
                  "color": "#e5e5e5"
                }
              ]
            },
            {
              "featureType": "poi.park",
              "elementType": "labels.text.fill",
              "stylers": [
                {
                  "color": "#9e9e9e"
                }
              ]
            },
            {
              "featureType": "road",
              "elementType": "geometry",
              "stylers": [
                {
                  "color": "#ffffff"
                }
              ]
            },
            {
              "featureType": "road.arterial",
              "elementType": "labels.text.fill",
              "stylers": [
                {
                  "color": "#757575"
                }
              ]
            },
            {
              "featureType": "road.highway",
              "elementType": "geometry",
              "stylers": [
                {
                  "color": "#dadada"
                }
              ]
            },
            {
              "featureType": "road.highway",
              "elementType": "labels.text.fill",
              "stylers": [
                {
                  "color": "#616161"
                }
              ]
            },
            {
              "featureType": "road.local",
              "elementType": "labels.text.fill",
              "stylers": [
                {
                  "color": "#9e9e9e"
                }
              ]
            },
            {
              "featureType": "transit.line",
              "elementType": "geometry",
              "stylers": [
                {
                  "color": "#e5e5e5"
                }
              ]
            },
            {
              "featureType": "transit.station",
              "elementType": "geometry",
              "stylers": [
                {
                  "color": "#eeeeee"
                }
              ]
            },
            {
              "featureType": "water",
              "elementType": "geometry",
              "stylers": [
                {
                  "color": "#c9c9c9"
                }
              ]
            },
            {
              "featureType": "water",
              "elementType": "labels.text.fill",
              "stylers": [
                {
                  "color": "#9e9e9e"
                }
              ]
            }
          ]
    });

    PINS.forEach(( pin ) => {
      new google.maps.Marker({
          position: new google.maps.LatLng(+pin.lat, +pin.lng),
          icon: 'http://neuro.sodova.com/wp-content/uploads/2021/10/pin.png',
          map: map
      });
    })
  }
  initMap();
})
</script>
<?php get_footer(); ?>
