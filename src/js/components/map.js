import $ from 'jquery';

$(document).ready(function() {
  const _simpleMap = function() {
    var $maps = $(".ymap-coords");
    if ($maps) {
      ymaps.ready(function() {
        var myMap;

        $maps.each(function(i, el) {
          var yProjects = [];
          var placeMark;

          myMap = new ymaps.Map(el, {
            center: [el.dataset.lat, el.dataset.lng],
            zoom: el.dataset.zoom,
            type: "yandex#map",
            behaviors: ["default", "scrollZoom"]
          });
          // myMap.balloon.open([el.dataset.lat, el.dataset.lng], {
          //   contentHeader: el.dataset.desc,
          //   contentBody: '',
          //   contentFooter: el.dataset.adress,
          // }, {
          //   closeButton: false
          // });

          placeMark = new ymaps.Placemark(
            [el.dataset.lat, el.dataset.lng],
            {
              balloonContent: el.dataset.ballon,
              balloonCloseButton: true,
              hideIconOnBalloonOpen: true
            },
            {
              preset: "islands#circleDotIcon",
              iconColor: "#333"
            }
          );

          myMap.geoObjects.add(placeMark);
        });
      });
    }
  };

  _simpleMap();
});
