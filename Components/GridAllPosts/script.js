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
    this.$filterArtists = $('.filter-artists', this)
    this.$postArtist = $('.grid-item--Artist', this)
    this.$filterPodcasts = $('.filter-podcasts', this)
    this.$postPodcasts = $('.grid-item--Podcast', this)
    this.$filterEvents = $('.filter-events', this)
    this.$postEvents = $('.grid-item--Event', this)
    this.$filterArticles = $('.filter-articles', this)
    this.$postArticles = $('.grid-item--Article', this)
  }

  bindFunctions () {
    this.toggleArtists = this.toggleArtists.bind(this)
    this.togglePodcasts = this.togglePodcasts.bind(this)
    this.toggleEvents = this.toggleEvents.bind(this)
    this.toggleArticles = this.toggleArticles.bind(this)
  }

  bindEvents () {
    this.$filterArtists.on('click', this.toggleArtists)
    this.$filterPodcasts.on('click', this.togglePodcasts)
    this.$filterEvents.on('click', this.toggleEvents)
    this.$filterArticles.on('click', this.toggleArticles)
  }

  toggleArtists (e) {
    this.$postArtist.fadeToggle()
  }

  togglePodcasts (e) {
    this.$postPodcasts.fadeToggle()
  }

  toggleEvents (e) {
    this.$postEvents.fadeToggle()
  }

  toggleArticles (e) {
    this.$postArticles.fadeToggle()
  }
}

window.customElements.define('flynt-grid-all-posts', GridAllPosts, { extends: 'div' })
