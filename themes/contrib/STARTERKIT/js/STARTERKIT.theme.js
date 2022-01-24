/**
 * @file
 * Attaches behaviors for STARTERKIT.
 */

(function ($) {

  'use strict';

  Drupal.behaviors.STARTERKIT = {
    attach: function () {

      $('.product-section').once().wrapInner('<div class="uk-container"></div>');
      $('.reference-section').once().wrapInner('<div class="uk-container"></div>');



    }
  };
})(jQuery);
