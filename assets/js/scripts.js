(function ($) {
  var btn = $("#to-top");
  $(window).scroll(function () {
    if ($(window).scrollTop() > 800) {
      btn.addClass("show");
      topBtnPosition();
    } else {
      btn.removeClass("show");
    }
  });

  function topBtnPosition() {
    let height = 60;
    let aff_bottom_cta = $(".aff-bottom-cta");
    if (aff_bottom_cta.length && aff_bottom_cta.hasClass("is-visible")) {
      height = aff_bottom_cta.height() + 40;
    }
    btn.css({ bottom: height });
  }

  btn.on("click", function (e) {
    e.preventDefault();
    $("html, body").animate({ scrollTop: 0 }, "300");
  });

  $(document).ajaxComplete(function (event, xhr, settings) {
    // reload after add review
    if (settings.data && settings.data.indexOf("action=review_form") !== -1) {
      window.location.reload();
    }
  });

  $(".aff-bottom-close").on("click", function () {
    $(".aff-bottom-cta").remove();
  });

  $(window).on("resize", function () {
    topBtnPosition();
  });

  $(document).on("click", function () {
    topBtnPosition();
  });

  // compare gallery
  let compare_gallery = new SimpleLightbox("a.compare-gallery");
  let ctaBlock = $("#compare_cta_block");
  if (ctaBlock.length) {
    function setBannerHtml(e) {
      let botLink = JSON.parse(e.target.dataset.botLink);

      if (botLink.title && botLink.title !== "") {
        ctaBlock.removeClass("hide").addClass("is-visible");
        ctaBlock
          .find("#compare_cta_icon a")
          .attr("href", botLink.link.url)
          .html('<img src="' + botLink.logo + '">');
        ctaBlock
          .find("#compare_cta_name")
          .html(
            '<a href="' +
              botLink.link.url +
              '" target="_blank">' +
              botLink.title +
              "</a>"
          );
        ctaBlock
          .find("#compare_cta_cta")
          .html(
            '<a href="' +
              botLink.link.url +
              '" target="_blank" class="button">' +
              botLink.btn +
              "</a>"
          );
      }
    }

    compare_gallery.on("shown.simplelightbox", function (e) {
      setBannerHtml(e);
    });

    compare_gallery.on("nextDone.simplelightbox", function (e) {
      setBannerHtml(e);
    });

    compare_gallery.on("prevDone.simplelightbox", function (e) {
      setBannerHtml(e);
    });

    compare_gallery.on("close.simplelightbox", function () {
      ctaBlock.addClass("hide").removeClass("is-visible");
    });
  }

  $(".load-more-btn").click(function (e) {
    e.preventDefault();

    var button = $(this),
      settings = $(this).data("settings"),
      data = {
        action: "aff_loadmore",
        settings: settings,
        page: button.attr("data-page"),
      };

    $.ajax({
      url: theme_params.ajaxurl,
      data: data,
      type: "POST",
      beforeSend: function () {
        button.text(theme_params.texts.loading);
      },
    }).done(function (response) {
      button.text(theme_params.texts.loadmore);
      $("." + settings.section + " ." + settings.grid).append(response.html);
      response.hide_btn ? button.hide() : button.show();
      button.attr("data-page", response.page);
    });
  });

  $(".items-list-more span").on("click", function () {
    $(this).closest(".item").toggleClass("open");
  });

  $(".js-wpml-ls-item-toggle").on("click", function () {
    $(this).toggleClass("wpml-open");
  });
  jQuery(".footer-logos-inner img").each(function (index, element) {
    let scrImagev = jQuery(this).attr("src");
    let dev = scrImagev.indexOf("DMCA");

    if (dev > 0) {
      jQuery(this).addClass("dmca-badge");
    }
  });
})(jQuery);
