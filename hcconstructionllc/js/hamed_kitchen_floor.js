$("#hamed_kitchen_floor").on('click', function() {

  $.fancybox.open([
    {
      src  : 'images/gallery/hamed_kitchen_floor/1.jpg',
      opts : {
        caption : 'First caption',
        thumb   : 'images/gallery/hamed_kitchen_floor/thumb/1.jpg'
      }
    },
    {
      src  : 'images/gallery/hamed_kitchen_floor/2.jpg',
      opts : {
        caption : 'Second caption',
        thumb   : 'images/gallery/hamed_kitchen_floor/thumb/2.jpg'
      }
    },
    {
      src  : 'images/gallery/hamed_kitchen_floor/3.jpg',
      opts : {
        caption : 'First caption',
        thumb   : 'images/gallery/hamed_kitchen_floor/thumb/3.jpg'
      }
    },
    {
      src  : 'images/gallery/hamed_kitchen_floor/4.jpg',
      opts : {
        caption : 'Second caption',
        thumb   : 'images/gallery/hamed_kitchen_floor/thumb/4.jpg'
      }
    },
    {
      src  : 'images/gallery/hamed_kitchen_floor/5.jpg',
      opts : {
        caption : 'First caption',
        thumb   : 'images/gallery/hamed_kitchen_floor/thumb/5.jpg'
      }
    },
    
  ], {
    loop : true,
    thumbs : {
      autoStart : true
    }
  });

});