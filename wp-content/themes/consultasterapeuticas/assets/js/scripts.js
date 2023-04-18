// Carrossel Parceiros
var parceiros = document.querySelector('.parceiros-carousel');
var flkty = new Flickity( parceiros, {
  // options
  cellAlign: 'center',
    wrapAround: true,
    pageDots: false
});

var feed = new Instafeed({
    accessToken: 'IGQVJXdEVNZATJxR3cxaVlDM3pkOG9SRHJJLURnM0NDaEo4Um1IQThscUtpSUJ0YWtSYWtVbUE1MnAxR3dSdldqalg5Y3NWRzNwLXYxa2IzZAkFxekt4Rk55dTBCX19XRXVNOWVjSS01OG9rR0xvUlVUYwZDZD',
    limit: 6,
    template: '<div class="insta-cell"><a href="{{link}}" target="_blank"><img title="{{caption}}" src="{{image}}" /></a></div>',
    after: function(){
        // Carrossel Instagram
        var insta = document.querySelector('.insta-carousel');
        var flkty = new Flickity( insta, {
        // options
        cellAlign: 'center',
            wrapAround: true,
            pageDots: false
        });
    }
    });
feed.run();

