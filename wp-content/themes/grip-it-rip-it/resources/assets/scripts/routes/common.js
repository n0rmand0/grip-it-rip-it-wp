import $ from "jquery";

export default {
  init() {
    // JavaScript to be fired on all pages
    $(".contact-us__close").click(()=>{
      $(".contact-us").removeClass("is-active");
    })

    $(".contact-us-button").click(
      ()=>{$(".contact-us").addClass("is-active");}
    )

  },
  finalize() {
    // JavaScript to be fired on all pages, after page specific JS is fired
  },
};
