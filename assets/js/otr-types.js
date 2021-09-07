
(function ($) {
  $(window).load(function () {

    // OTR pages - Types
    const tabs = document.querySelector(".otr__tabs");
    const tabButton = document.querySelectorAll(".otr__tabs .btn");
    const contents = document.querySelectorAll(".otr__content > div");

    tabs.onclick = e => {
      const id = e.target.dataset.id;
      if (id) {
        tabButton.forEach(btn => {
          btn.classList.remove("active");
        });
        e.target.classList.add("active");

        contents.forEach(content => {
          content.classList.remove("is-active");
        });
        const element = document.getElementById(id);
        element.classList.add("is-active");
      }
    }

  });
})(jQuery);