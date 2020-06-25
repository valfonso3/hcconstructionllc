$("#rooling").on('click', function() {

  $.fancybox.open([
    {
      src  : 'images/gallery/rooling/1.jpg',
      opts : {
        caption : 'First caption',
        thumb   : 'images/gallery/rooling/thumb/1.jpg'
      }
    },
    {
      src  : 'images/gallery/rooling/2.jpg',
      opts : {
        caption : 'Second caption',
        thumb   : 'images/gallery/rooling/thumb/2.jpg'
      }
    },
    {
      src  : 'images/gallery/rooling/3.jpg',
      opts : {
        caption : 'First caption',
        thumb   : 'images/gallery/rooling/thumb/3.jpg'
      }
    },
    {
      src  : 'images/gallery/rooling/4.jpg',
      opts : {
        caption : 'Second caption',
        thumb   : 'images/gallery/rooling/thumb/4.jpg'
      }
    },
    {
      src  : 'images/gallery/rooling/5.jpg',
      opts : {
        caption : 'First caption',
        thumb   : 'images/gallery/rooling/thumb/5.jpg'
      }
    },
    {
      src  : 'images/gallery/rooling/6.jpg',
      opts : {
        caption : 'First caption',
        thumb   : 'images/gallery/rooling/thumb/6.jpg'
      }
    },
  ], {
    loop : true,
    thumbs : {
      autoStart : true
    }
  });

});