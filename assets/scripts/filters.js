import $ from 'jquery'

$(document).ready(function () {
  $('.filter-events').click(function (e) {
    $('.grid-item--Podcast').fadeToggle()
    $('.grid-item--Article').fadeToggle()
    $(this).toggleClass('filter--active')
  })

  $('.filter-articles').click(function (e) {
    $('.grid-item--Event').fadeToggle()
    $('.grid-item--Podcast').fadeToggle()
    $(this).toggleClass('filter--active')
  })

  $('.filter-podcasts').click(function (e) {
    $('.grid-item--Event').fadeToggle()
    $('.grid-item--Article').fadeToggle()
    $(this).toggleClass('filter--active')
  })
})
