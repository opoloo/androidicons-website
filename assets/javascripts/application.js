// Generated by CoffeeScript 1.7.1
(function() {
  var app, icons;

  $(document).ready(function() {
    $(".res").html($(window).width() + "x" + $(window).height());
    $(window).resize(function() {
      return $(".res").html($(window).width() + "x" + $(window).height());
    });
    app.init();
    return icons.init();
  });

  app = {
    init: function() {
      return this.bind_events();
    },
    bind_events: function() {
      return $(document).on("click", ".btn-preview", function(e) {
        e.preventDefault();
        $(".preview-box, .wrapper").fadeToggle("fast");
        $("body").scrollTop(0);
        return $("html,body").scrollTop(0);
      });
    }
  };

  icons = {
    current: 1,
    count: 0,
    orig_header_height: 0,
    start: true,
    init: function() {
      this.count = $(".icons svg").length;
      this.orig_header_height = $(".header").outerHeight();
      if (this.orig_header_height < $(window).height()) {
        this.resize_header();
      } else {
        $(".icons").css("transform", "translateX(0) translateY(0)").css("top", "0").css("left", "0");
      }
      return setTimeout(function() {
        return icons.draw();
      }, 500);
    },
    resize_header: function() {
      return $(".header").css("height", $(window).height());
    },
    draw: function() {
      setTimeout(function() {
        return $(".icons svg:nth-child(" + icons.current + ")").attr("class", "");
      }, 6000);
      $(".icons svg:nth-child(" + this.current + ")").attr("class", "draw");
      this.current++;
      if (this.current > this.count) {
        this.current = 1;
      }
      return setTimeout(function() {
        icons.draw();
        if (icons.start) {
          icons.start = false;
          return $(".header").animate({
            height: icons.orig_header_height
          }, 500);
        }
      }, 6000 * 0.75);
    }
  };

}).call(this);
