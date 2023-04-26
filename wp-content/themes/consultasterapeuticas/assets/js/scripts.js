// Carrossel Blog Mobile
var blog = document.querySelector('.blog-carousel');
if (blog != null) {
  var flkty = new Flickity( blog, {
    // options
    cellAlign: 'center',
      wrapAround: true,
      prevNextButtons: false,
      pageDots: true
  });
}

// Carrossel Profissionais Mobile
var profissionais = document.querySelector('.profissionais-carousel');
if (profissionais != null) {
  var flkty = new Flickity( profissionais, {
    // options
    cellAlign: 'center',
      wrapAround: true,
      pageDots: false
  });
}

// Carrossel Parceiros
var parceiros = document.querySelector('.parceiros-carousel');
if (parceiros != null) {
  var flkty = new Flickity( parceiros, {
    // options
    cellAlign: 'center',
      wrapAround: true,
      pageDots: false
  });
}

if(typeof(IG_TOKEN) !== "undefined"){
  var feed = new Instafeed({
      accessToken: IG_TOKEN,
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
}