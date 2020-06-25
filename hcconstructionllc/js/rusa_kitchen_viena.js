$("#rusa_kitchen").on('click', function() {

  $.fancybox.open([
    {
      src  : 'images/gallery/rusa_kitchen_viena/1.jpg',
      opts : {
        caption : 'First caption',
        thumb   : 'images/gallery/rusa_kitchen_viena/thumb/1.jpg'
      }
    },
    {
      src  : 'images/gallery/rusa_kitchen_viena/2.jpg',
      opts : {
        caption : 'Second caption',
        thumb   : 'images/gallery/rusa_kitchen_viena/thumb/2.jpg'
      }
    },
    {
      src  : 'images/gallery/rusa_kitchen_viena/3.jpg',
      opts : {
        caption : 'First caption',
        thumb   : 'images/gallery/rusa_kitchen_viena/thumb/3.jpg'
      }
    },
    {
      src  : 'images/gallery/rusa_kitchen_viena/4.jpg',
      opts : {
        caption : 'Second caption',
        thumb   : 'images/gallery/rusa_kitchen_viena/thumb/4.jpg'
      }
    },
    {
      src  : 'images/gallery/rusa_kitchen_viena/5.jpg',
      opts : {
        caption : 'First caption',
        thumb   : 'images/gallery/rusa_kitchen_viena/thumb/5.jpg'
      }
    },
    {
      src  : 'images/gallery/rusa_kitchen_viena/6.jpg',
      opts : {
        caption : 'First caption',
        thumb   : 'images/gallery/rusa_kitchen_viena/thumb/6.jpg'
      }
    },
    {
      src  : 'images/gallery/rusa_kitchen_viena/7.jpg',
      opts : {
        caption : 'Second caption',
        thumb   : 'images/gallery/rusa_kitchen_viena/thumb/7.jpg'
      }
    },
  ], {
    loop : true,
    thumbs : {
      autoStart : true
    }
  });

});