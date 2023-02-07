
  // BURGUER MENU ANIMATION  
  
  document.querySelector('.second-button').addEventListener('click', function () {
  
  document.querySelector('.animated-icon2').classList.toggle('open');
  });

  //CAROUSEL ACTION
  var myCarousel = document.querySelector('#carouselExampleControls')
  var myModalEl = document.getElementById('exampleModal')
  
  myModalEl.addEventListener('show.bs.modal', function (event) {
      const trigger = event.relatedTarget
      var bsCarousel = bootstrap.Carousel.getInstance(myCarousel)
      bsCarousel.to(trigger.dataset.bsSlideTo)
  })

