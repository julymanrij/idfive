/* ========================================
// Social Configurations
// ===================================== */

var instagramConfig = {
  get: 'user',
  userId: '1288755802',
  accessToken: '31863373.d8d1d50.272aa08df34a412aa98bcfd58f8e49d1',
  target: 'instagram-feed',
  limit: 1,
  resolution: 'standard_resolution',
  sortBy: 'most-recent',
  template: '<li class="instagram-item"><a class="instagram-item__link" href="{{link}}"><img class="instagram-item__image" src="{{image}}" alt="{{caption}}"/><div class="instagram-item__details"><p class="instagram-item__caption">{{caption}}</p></div></a></li>'
}

var twitterConfig = {
  id: '347099293930377217',
  domId: 'twitter-feed',
  maxTweets: 1,
  enableLinks: true,
  showInteraction: false,
  showUser: false,
  showTime: false,
  lang: 'en',
  customCallback: twitterTemplate,
}


/* ========================================
// Site Functions
// ===================================== */

init();

function init() {

  silkNav();
  heroes();
  harmonicas();
  modals();
  slideshows();
  triggers();
  help();
  halfways();
  scrolling();
  instagram();
  twitter();
  iframes();

}

function heroes() {

  var hero = document.querySelectorAll('.hero > img');

  if(document.body.contains(hero[0])) {

    for(var i = 0; i < hero.length; i++) {

      var image = hero[i].getAttribute('src');
      hero[i].parentNode.style.backgroundImage = 'url(' + image + ')';

    }

  }

}

function harmonicas() {

  harmonica({
    container: '.silk-harmonica--condensed',
    header: '.silk-harmonica__header'
  });

  harmonica({
    container: '.silk-harmonica--expanded',
    header: '.silk-harmonica__header'
  });

}

function slideshows() {

  var swiftSlide = document.querySelectorAll('.swift-slide');

  if(document.body.contains(swiftSlide[0])) {

    for(var i = 0; i < swiftSlide.length; i++) {
      swiftSlide[i].classList.add('swift-slide-' + i);

      swift({
        container: '.swift-slide-' + i,
        elements: 'li',
        prevSymbol: 'chevron-left',
        nextSymbol: 'chevron-right'
      });

    }

  }

}

function modals() {

  silkModal();

}

function triggers() {

  triggerParent({
    trigger: '.site-search__trigger'
  });

  triggerParent({
    trigger: '.nav-tier-switch'
  });

  jQuery('body').on('click', '.callout__share', function() {
    jQuery(this).toggleClass('share-triggered');
  });

}

function help() {

  var help = document.querySelector('.help');
  var helpBackTrigger = document.querySelector('.help__back-trigger');
  var helpLabel = document.querySelector('.help__label');
  var helpListRoot = document.querySelectorAll('.help__root');

  if(document.body.contains(help)) {

    helpBackTrigger.addEventListener('click', showRoot, false);

    for(var i = 0; i < helpListRoot.length; i++) {
      helpListRoot[i].addEventListener('click', showList, false);
    }

  }

  function showRoot() {

    help.classList.remove('showing-list');

    helpLabel.innerHTML = "How Can We Help You?";

    for(var i = 0; i < helpListRoot.length; i++) {
      helpListRoot[i].classList.remove('show-list');
    }

  }

  function showList(event) {

    help.classList.add('showing-list');

    var label = event.currentTarget.children;
    label = label[1].innerHTML;

    helpLabel.innerHTML = label;

    event.currentTarget.classList.add('show-list');

  }

}

function scrolling() {

  window.addEventListener('scroll', checkScrolling, false);

  var offset = window.scrollY;
  var ticking = false;

  var body = document.body;

  function checkScrolling() {

    if (!ticking) {

      window.requestAnimationFrame(function() {

        offset = window.scrollY;

        if(offset > 50) {
          body.classList.add('scrolling');
        } else {
          body.classList.remove('scrolling');
        }

        ticking = false;

      });

    }

    ticking = true;

  }

}

function halfways() {

  halfway({
    element: '.halfway-section',
    offset: 0
  });

}

function instagram() {

  var instagramFeed = document.querySelector('#instagram-feed');

  if(document.body.contains(instagramFeed)) {
    var feed = new Instafeed(instagramConfig);
    feed.run();
  }

}

function twitter() {

  var twitterFeed = document.querySelector('#twitter-feed');

  if(document.body.contains(twitterFeed)) {
    twitterFetcher.fetch(twitterConfig);
  }

}

function iframes() {

  // element that will be wrapped
  var el = document.querySelectorAll('iframe');

  if(el.length) {
    for(var x=0; x < el.length; x++) {

      // create wrapper container
      var wrapper = document.createElement('div');
      wrapper.classList.add('responsive-iframe');

      // insert wrapper before el in the DOM tree
      el[x].parentNode.insertBefore(wrapper, el[x]);

      // move el into wrapper
      wrapper.appendChild(el[x]);

    }
  }

}

function twitterTemplate(tweets) {

  var element = document.getElementById('twitter-feed');
  var i = 0;

  while(i < tweets.length) {
    element.innerHTML += '<li class="twitter-item">' + tweets[i] + '</li>';
    i++;
  }

}
