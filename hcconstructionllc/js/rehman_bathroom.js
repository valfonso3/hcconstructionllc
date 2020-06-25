$("#rehman_bathroom").on('click', function() {

  $.fancybox.open([
    {
      src  : 'images/gallery/rehman_bathroom/1.jpg',
      opts : {
        caption : 'First caption',
        thumb   : 'images/gallery/rehman_bathroom/thumb/1.jpg'
      }
    },
    {
      src  : 'images/gallery/rehman_bathroom/2.jpg',
      opts : {
        caption : 'Second caption',
        thumb   : 'images/gallery/rehman_bathroom/thumb/2.jpg'
      }
    },
    {
      src  : 'images/gallery/rehman_bathroom/3.jpg',
      opts : {
        caption : 'First caption',
        thumb   : 'images/gallery/rehman_bathroom/thumb/3.jpg'
      }
    },
    {
      src  : 'images/gallery/rehman_bathroom/4.jpg',
      opts : {
        caption : 'Second caption',
        thumb   : 'images/gallery/rehman_bathroom/thumb/4.jpg'
      }
    },
    {
      src  : 'images/gallery/rehman_bathroom/5.jpg',
      opts : {
        caption : 'First caption',
        thumb   : 'images/gallery/rehman_bathroom/thumb/5.jpg'
      }
    },
    {
      src  : 'images/gallery/rehman_bathroom/6.jpg',
      opts : {
        caption : 'First caption',
        thumb   : 'images/gallery/rehman_bathroom/thumb/6.jpg'
      }
    },
  ], {
    loop : true,
    thumbs : {
      autoStart : true
    }
  });

});