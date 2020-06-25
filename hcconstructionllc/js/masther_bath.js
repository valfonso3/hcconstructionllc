$("#masther_bath").on('click', function() {

  $.fancybox.open([
    {
      src  : 'images/gallery/masther_bath/1.jpg',
      opts : {
        caption : 'First caption',
        thumb   : 'images/gallery/masther_bath/thumb/1.jpg'
      }
    },
    {
      src  : 'images/gallery/masther_bath/2.jpg',
      opts : {
        caption : 'Second caption',
        thumb   : 'images/gallery/masther_bath/thumb/2.jpg'
      }
    },
    {
      src  : 'images/gallery/masther_bath/3.jpg',
      opts : {
        caption : 'First caption',
        thumb   : 'images/gallery/masther_bath/thumb/3.jpg'
      }
    },
    {
      src  : 'images/gallery/masther_bath/4.jpg',
      opts : {
        caption : 'Second caption',
        thumb   : 'images/gallery/masther_bath/thumb/4.jpg'
      }
    },
    {
      src  : 'images/gallery/masther_bath/5.jpg',
      opts : {
        caption : 'First caption',
        thumb   : 'images/gallery/masther_bath/thumb/5.jpg'
      }
    },
    {
      src  : 'images/gallery/masther_bath/6.jpg',
      opts : {
        caption : 'First caption',
        thumb   : 'images/gallery/masther_bath/thumb/6.jpg'
      }
    },
    {
      src  : 'images/gallery/masther_bath/7.jpg',
      opts : {
        caption : 'First caption',
        thumb   : 'images/gallery/masther_bath/thumb/7.jpg'
      }
    },
    
  ], {
    loop : true,
    thumbs : {
      autoStart : true
    }
  });

});