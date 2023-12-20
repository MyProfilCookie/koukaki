// ---------- Section Fade in - Logo ----------
const logoImg = document.querySelector('.logo-image');
setTimeout(function() {
  logoImg.classList.remove('logo-image');
}, (1500));

// ---------- Section  ----------
let posX = 0;
let moveCloud = 0;
  const root = document.documentElement;
  const place = document.querySelector("#place");
// ---------- Title Scroll ----------

// Remove the transition class
const titleStory = document.querySelector('.title-story');
titleStory.classList.remove('title-story');
const titlestudio = document.querySelector('.studio');
titlestudio.classList.remove('studio');
const titlecharacter = document.querySelector('.title-character');
titlecharacter.classList.remove('title-character');
const titleplace = document.querySelector('.title-place');
titleplace.classList.remove('title-place');
const fadeInSection = document.querySelector('.fade-in-section');
fadeInSection.classList.remove('fade-in-section');
const fadeInMove = document.querySelector('.fade-in-move');
fadeInMove.classList.remove('fade-in-move');

function titleObserver(classAnim, classObserve, nameConst){

  // Create the observer :
  const observer = new IntersectionObserver(entries => {
    entries.forEach(entry => {
      // If the element is visible
      if (entry.isIntersecting) {
        // Add the animation class
        nameConst.classList.add(classAnim);
        return;
      }
      // Remove the animation class
      nameConst.classList.remove(classAnim);
    });
  });
  
  // dire à l'observer quel élément observer
  observer.observe(document.querySelector(classObserve));
}

titleObserver('title-story','.observe-story', titleStory);
titleObserver('studio','.observe-studio', titlestudio);
titleObserver('title-character','.observe-character', titlecharacter);
titleObserver('title-place','.observe-place', titleplace);
titleObserver('fade-in-section','.observe-fade-in-section', fadeInSection);
titleObserver('fade-in-move','.observe-fade-in-move', fadeInMove);

// ---------- Burger Menu ----------
console.log("test du script !");
document.addEventListener("DOMContentLoaded", function () {
  script();
});
function script() {
(function($) {
  console.log("script");
  $(".burger-open").click(function() {
    console.log("burger-open-click click");
    $(".burger-menu").animate({ height: "toggle", opacity: "toggle" }, 1000);
    $(".burger-menu").toggleClass("open active");
    $(".burger-close-modal").toggleClass("close active");
  });
  $("a").click(function() {
    if ($(".burger-menu").hasClass("burger active")) {
      $(".burger-menu").animate({ height: "toggle", opacity: "toggle" }, 1000);
      $(".burger-menu").removeClass("burger open active");
      $(".burger-close-modal").removeClass("close active");
    }
  });
})(jQuery);
}




window.addEventListener("scroll", () => {
  // Si on scroll, cela accélère la rotation des fleurs
  // https://www.toutjavascript.com/reference/ref-window.scrolly.php
  var vertical = -1;
  setInterval(function () {
    if (window.scrollY != vertical) {
      vertical = window.scrollY;
      root.style.setProperty("--rotate", "3s");
    } else {
      root.style.setProperty("--rotate", "13s");
    }
  }, 500);
 
  moveClouds();
});  

function moveClouds() {
  const clouds = document.querySelectorAll('.small-cloud, .big-cloud');
  clouds.forEach(cloud => {
  if (isElementInViewport(clouds[0])) {
    console.log("in viewport");
    clouds.forEach((cloud) => {
      cloud.classList.add("animate-cloud");
    });
  } else {
    clouds.forEach((cloud) => {
      cloud.classList.remove("animate-cloud");
    });
  }
});

}

function isElementInViewport(el) {
  var rect = el.getBoundingClientRect();
  return (
    rect.top >= 0 &&
    rect.left >= 0 &&
    rect.bottom <= (window.innerHeight || document. documentElement.clientHeight) &&
    rect.right <= (window.innerWidth || document. documentElement.clientWidth)
  );
}
