/**
 * @file
<<<<<<< HEAD
 * Provides interactivity for showing and hiding the primary tabs at mobile widths.
=======
 * Provides interactivity for showing and hiding the tabs at mobile widths.
>>>>>>> 09638ae8e251e46b3c73fc6d7a891f3f2bea958b
 */

((Drupal, once) => {
  /**
<<<<<<< HEAD
   * Initialize the primary tabs.
   *
   * @param {HTMLElement} el
   *   The DOM element containing the primary tabs.
=======
   * Initialize the tabs.
   *
   * @param {HTMLElement} el
   *   The DOM element containing the tabs.
>>>>>>> 09638ae8e251e46b3c73fc6d7a891f3f2bea958b
   */
  function init(el) {
    const tabs = el.querySelector('.tabs');
    const expandedClass = 'is-expanded';
    const activeTab = tabs.querySelector('.is-active');

    /**
<<<<<<< HEAD
     * Determines if primary tabs are expanded for mobile layouts.
=======
     * Determines if tabs are expanded for mobile layouts.
>>>>>>> 09638ae8e251e46b3c73fc6d7a891f3f2bea958b
     *
     * @return {boolean}
     *   Whether the tabs trigger element is expanded.
     */
    function isTabsMobileLayout() {
      return tabs.querySelector('.tabs__trigger').clientHeight > 0;
    }

    /**
<<<<<<< HEAD
     * Controls primary tab visibility on click events.
=======
     * Controls tab visibility on click events.
>>>>>>> 09638ae8e251e46b3c73fc6d7a891f3f2bea958b
     *
     * @param {Event} e
     *   The event object.
     */
    function handleTriggerClick(e) {
      if (!tabs.classList.contains(expandedClass)) {
        e.currentTarget.setAttribute('aria-expanded', 'true');
        tabs.classList.add(expandedClass);
      } else {
        e.currentTarget.setAttribute('aria-expanded', 'false');
        tabs.classList.remove(expandedClass);
      }
    }

    if (isTabsMobileLayout() && !activeTab.matches('.tabs__tab:first-child')) {
      const newActiveTab = activeTab.cloneNode(true);
      const firstTab = tabs.querySelector('.tabs__tab:first-child');
      tabs.insertBefore(newActiveTab, firstTab);
      tabs.removeChild(activeTab);
    }

    tabs
      .querySelector('.tabs__trigger')
      .addEventListener('click', handleTriggerClick);
  }

  /**
<<<<<<< HEAD
   * Initialize the primary tabs.
=======
   * Initialize the tabs.
>>>>>>> 09638ae8e251e46b3c73fc6d7a891f3f2bea958b
   *
   * @type {Drupal~behavior}
   *
   * @prop {Drupal~behaviorAttach} attach
<<<<<<< HEAD
   *   Display primary tabs according to the screen width.
   */
  Drupal.behaviors.primaryTabs = {
    attach(context) {
      once('olivero-tabs', '[data-drupal-nav-primary-tabs]', context).forEach(
        init,
      );
=======
   *   Display tabs according to the screen width.
   */
  Drupal.behaviors.tabs = {
    attach(context) {
      once('olivero-tabs', '[data-drupal-nav-tabs]', context).forEach(init);
>>>>>>> 09638ae8e251e46b3c73fc6d7a891f3f2bea958b
    },
  };
})(Drupal, once);
