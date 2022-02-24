import $ from 'jquery'

$(document).ready(function () {
  $('.filter-events').click(function (e) {
    $('.grid-item--podcast').fadeToggle()
    $('.grid-item--article').fadeToggle()
    $(this).toggleClass('filter--active')
    if ($(this).is('.filter--active')) {
      $('.grid-item--event').css({ position: 'initial' })
    } else if ($(this).not('.filter--active')) {
      $('.grid-item--event').css({ position: 'absolute' })
    }
  })

  $('.filter-articles').click(function (e) {
    $('.grid-item--event').fadeToggle()
    $('.grid-item--podcast').fadeToggle()
    $('.grid-item--article').css('position', 'static')
    $(this).toggleClass('filter--active')
    if ($(this).is('.filter--active')) {
      $('.grid-item--article').css({ position: 'initial' })
    } else if ($(this).not('.filter--active')) {
      $('.grid-item--article').css({ position: 'absolute' })
    }
  })

  $('.filter-podcasts').click(function (e) {
    $('.grid-item--event').fadeToggle()
    $('.grid-item--article').fadeToggle()
    $(this).toggleClass('filter--active')
    if ($(this).is('.filter--active')) {
      $('.grid-item--podcast').css({ position: 'initial' })
    } else if ($(this).not('.filter--active')) {
      $('.grid-item--podcast').css({ position: 'absolute' })
    }
  })
})
