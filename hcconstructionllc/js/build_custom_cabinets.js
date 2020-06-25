$("#build_custom_cabinets").on('click', function() {

  $.fancybox.open([
    {
      src  : 'images/gallery/build_custom_cabinets/1.jpg',
      opts : {
        caption : 'First caption',
        thumb   : 'images/gallery/build_custom_cabinets/thumb/1.jpg'
      }
    },
    {
      src  : 'images/gallery/build_custom_cabinets/2.jpg',
      opts : {
        caption : 'Second caption',
        thumb   : 'images/gallery/build_custom_cabinets/thumb/2.jpg'
      }
    },
    {
      src  : 'images/gallery/build_custom_cabinets/3.jpg',
      opts : {
        caption : 'First caption',
        thumb   : 'images/gallery/build_custom_cabinets/thumb/3.jpg'
      }
    },    
  ], {
    loop : true,
    thumbs : {
      autoStart : true
    }
  });

});