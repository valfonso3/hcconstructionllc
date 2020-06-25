$("#bathrooms").on('click', function() {

  $.fancybox.open([
    {
      src  : 'images/gallery/bathrooms/1.jpg',
      opts : {
        caption : 'First caption',
        thumb   : 'images/gallery/bathrooms/thumb/1.jpg'
      }
    },
    {
      src  : 'images/gallery/bathrooms/2.jpg',
      opts : {
        caption : 'Second caption',
        thumb   : 'images/gallery/bathrooms/thumb/2.jpg'
      }
    },
    {
      src  : 'images/gallery/bathrooms/3.jpg',
      opts : {
        caption : 'First caption',
        thumb   : 'images/gallery/bathrooms/thumb/3.jpg'
      }
    },
    {
      src  : 'images/gallery/bathrooms/4.jpg',
      opts : {
        caption : 'Second caption',
        thumb   : 'images/gallery/bathrooms/thumb/4.jpg'
      }
    },
    {
      src  : 'images/gallery/bathrooms/5.jpg',
      opts : {
        caption : 'Second caption',
        thumb   : 'images/gallery/bathrooms/thumb/5.jpg'
      }
    },
    {
      src  : 'images/gallery/bathrooms/6.jpg',
      opts : {
        caption : 'Second caption',
        thumb   : 'images/gallery/bathrooms/thumb/6.jpg'
      }
    },
    {
      src  : 'images/gallery/bathrooms/7.jpg',
      opts : {
        caption : 'Second caption',
        thumb   : 'images/gallery/bathrooms/thumb/7.jpg'
      }
    },
    {
      src  : 'images/gallery/bathrooms/8.jpg',
      opts : {
        caption : 'Second caption',
        thumb   : 'images/gallery/bathrooms/thumb/8.jpg'
      }
    },
    {
      src  : 'images/gallery/bathrooms/9.jpg',
      opts : {
        caption : 'Second caption',
        thumb   : 'images/gallery/bathrooms/thumb/9.jpg'
      }
    },
    {
      src  : 'images/gallery/bathrooms/10.jpg',
      opts : {
        caption : 'Second caption',
        thumb   : 'images/gallery/bathrooms/thumb/10.jpg'
      }
    },
  ], {
    loop : true,
    thumbs : {
      autoStart : true
    }
  });

});