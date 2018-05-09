import $ from "jquery";

export default {
  init() {
    // JavaScript to be fired on the home page

    // hide all heroes
console.log('gains');
    const fadeIn = ()=>{
      $(".hero__slide--1").removeClass("is-active");
      setTimeout(function () {
        $(".hero__slide--3").addClass("is-active");
      }, 1000);
    }

    setTimeout(function () {
        fadeIn();
    }, 4000);






  },
  finalize() {
    // JavaScript to be fired on the home page, after the init JS
  },
};
