import $ from 'jquery'

class GridAllPosts extends window.HTMLElement {
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
    this.$filterPodcasts = $('.filter-podcasts', this)
    this.$postPodcasts = $('.grid-item--Podcast', this)
    this.$filterEvents = $('.filter-events', this)
    this.$postEvents = $('.grid-item--Event', this)
    this.$filterArticles = $('.filter-articles', this)
    this.$postArticles = $('.grid-item--Article', this)
    this.$posts = $('.posts', this)
    this.$pagination = $('.pagination', this)
  }

  bindFunctions () {
    this.togglePodcasts = this.togglePodcasts.bind(this)
    this.toggleEvents = this.toggleEvents.bind(this)
    this.toggleArticles = this.toggleArticles.bind(this)
    this.onLoadMore = this.onLoadMore.bind(this)
  }

  bindEvents () {
    this.$filterPodcasts.on('click', this.togglePodcasts)
    this.$filterEvents.on('click', this.toggleEvents)
    this.$filterArticles.on('click', this.toggleArticles)
    this.$.on('click', '[data-action="loadMore"]', this.onLoadMore)
  }

  togglePodcasts (e) {
    this.$postEvents.fadeToggle()
    this.$postArticles.fadeToggle()
    this.$filterPodcasts.toggleClass('filter--active')
  }

  toggleEvents (e) {
    this.$postPodcasts.fadeToggle()
    this.$postArticles.fadeToggle()
    this.$filterEvents.toggleClass('filter--active')
  }

  toggleArticles (e) {
    this.$postPodcasts.fadeToggle()
    this.$postEvents.fadeToggle()
    this.$filterArticles.toggleClass('filter--active')
  }

  onLoadMore (e) {
    e.preventDefault()

    const $target = $(e.currentTarget).addClass('button--disabled')

    const url = new URL(e.currentTarget.href)
    // url.searchParams.append('contentOnly', 1)

    $.ajax({
      url: url
    }).then(
      response => {
        const $html = $(response)
        const $posts = $('.posts', $html)
        const $pagination = $('.pagination', $html)

        this.$posts.append($posts.html())
        this.$pagination.html($pagination.html() || '')
      },
      response => {
        console.error(response)
        $target.removeClass('button--disabled')
      }
    )
  }
}

window.customElements.define('flynt-grid-all-posts', GridAllPosts, { extends: 'div' })
