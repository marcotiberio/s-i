import $ from 'jquery'

class GridPostsLatest extends window.HTMLElement {
  constructor (...args) {
    const self = super(...args)
    self.init()
    return self
  }

  init () {
    this.$ = $(this)
    this.resolveElements()
    this.bindFunctions()
    this.bindEvents()
  }

  resolveElements () {
    this.$toggle = $('.grid-item', this)
    this.$panel = $('.content-inner-panel', this)
  }

  bindFunctions () {
    this.showPanel = this.showPanel.bind(this)
  }

  bindEvents () {
    this.$toggle.on('click', '[aria-controls]', this.showPanel)
  }

  showPanel (e) {
    const $panel = $(e.currentTarget)

    if ($panel.attr('aria-expanded') === 'true') {
      $panel.attr('aria-expanded', 'false')
      $panel.next().attr('aria-hidden', 'true').slideUp()
    } else {
      $panel.attr('aria-expanded', 'true')
      $panel.next().attr('aria-hidden', 'false').slideDown()
    }
  }
}

window.customElements.define('flynt-grid-posts-latest', GridPostsLatest, { extends: 'div' })
