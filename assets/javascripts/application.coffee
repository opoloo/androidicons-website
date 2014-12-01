$(document).ready ->
  $(".res").html($(window).width() + "x" + $(window).height())
  $(window).resize ->
    $(".res").html($(window).width() + "x" + $(window).height())

  app.init()
  icons.init()

app =
  init: ->
    @bind_events()

  bind_events: ->
    $(document).on "click", ".btn-preview", (e) ->
      e.preventDefault()
      $(".preview-box, .wrapper").fadeToggle("fast")
      $("body").scrollTop(0)
      $("html,body").scrollTop(0)

icons =
  current: 1
  count: 0
  orig_header_height: 0
  start: true

  init: ->
    @count = $(".icons svg").length
    @orig_header_height = $(".header").outerHeight()
    if @orig_header_height < $(window).height()
      @resize_header()
    else
      $(".icons")
        .css("transform", "translateX(0) translateY(0)")
        .css("top", "0")
        .css("left", "0")
    setTimeout(->
      icons.draw()
    , 500)

  resize_header: ->
    $(".header").css("height", $(window).height())

  draw: ->
    setTimeout(->
      $(".icons svg:nth-child("+icons.current+")").attr("class", "")
    , 6000)
    $(".icons svg:nth-child("+@current+")").attr("class", "draw")
    @current++
    if @current > @count
      @current = 1
    setTimeout(->
      icons.draw()
      if icons.start
        icons.start = false
        $(".header").animate
          height: icons.orig_header_height
        , 500
    , 6000 * 0.75)