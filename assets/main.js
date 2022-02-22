import './scripts/publicPath'
import 'console-polyfill'
import 'normalize.css/normalize.css'
import './main.scss'
import $ from 'jquery'
import feather from 'feather-icons'
import 'core-js/es/number'
import Swiper, { Navigation, A11y, Autoplay } from 'swiper/swiper.esm'
import 'swiper/swiper-bundle.css'
import smoothscroll from 'smoothscroll-polyfill'
import Macy from 'macy'
import './scripts/scroll.js'

import installCE from 'document-register-element/pony'

Swiper.use([Navigation, A11y, Autoplay])

window.jQuery = $

window.lazySizesConfig = window.lazySizesConfig || {}
window.lazySizesConfig.preloadAfterLoad = true
require('lazysizes')

$(document).ready(function () {
  feather.replace({
    'stroke-width': 1
  })
})

installCE(window, {
  type: 'force',
  noBuiltIn: true
})

function importAll (r) {
  r.keys().forEach(r)
}

smoothscroll.polyfill()

var macy = Macy({
  container: '.posts',
  trueOrder: false,
  waitForImages: false,
  mobileFirst: true,
  margin: 15,
  columns: 4,
  breakAt: {
    1024: 4,
    780: 4,
    400: 1
  }
})

macy.listen()

importAll(require.context('../Components/', true, /\/script\.js$/))
require.resolve('./scripts/scroll.js')
