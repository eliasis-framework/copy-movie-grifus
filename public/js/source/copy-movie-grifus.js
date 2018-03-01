/**
 * Copy Movie Grifus · Extensions For Grifus
 *
 * @author    Josantonius <hello@josantonius.com>
 * @package   eliasis-framework/copy-movie-grifus
 * @copyright 2017 - 2018 (c) Josantonius - Copy Movie Grifus
 * @license   GPL-2.0+
 * @link      https://github.com/eliasis-framework/copy-movie-grifus.git
 * @since     1.0.0
 */

jQuery(document).ready(function($) {

   function copyDataSheet() {

      if ($("#s_right").length !== 0) { return 0; }

      if (typeof eliasis !== 'undefined') {
         var copy_movie_grifus = eliasis;
      } else {
         var copy_movie_grifus = copyMovieGrifus;
      }

      $(".s_right").append(
         '<div id="grifusDataSheet" data-clipboard-text="" class="filtro_y">' +
            '<h3>' + copy_movie_grifus.copy_title + '</h3>' + 
            '<ul class="scrolling mCustomScrollbar _mCS_2 mCS-autoHide mCS_no_scrollbar" style="position: relative; overflow: visible;">' +
               '<div id="mCSB_2" class="mCustomScrollBox mCS-minimal-dark mCSB_vertical mCSB_outside" tabindex="0" style="max-height: none;">' +
                  '<div id="clipboard-button" class="mCSB_container mCS_y_hidden mCS_no_scrollbar_y" style="position:relative; top:0; left:0;" dir="ltr">' +
                     '<li id="copyDataSheet" class="btn">' +
                        '<a>' + copy_movie_grifus.copy_button + '</a>' +
                     '</li>' +
                  '</div>' +
               '</div>' +
               '<div id="mCSB_2_scrollbar_vertical" class="mCSB_scrollTools mCSB_2_scrollbar mCS-minimal-dark mCSB_scrollTools_vertical" style="display: none;">' +
                  '<div class="mCSB_draggerContainer"><div id="mCSB_2_dragger_vertical" class="mCSB_dragger" style="position: absolute; min-height: 50px; height: 0px; top: 0px;" oncontextmenu="return false;">' +
                     '<div class="mCSB_dragger_bar" style="line-height: 50px;"></div>' +
                  '</div>' +
                  '<div class="mCSB_draggerRail"></div>' +
               '</div>' +
            '</ul>' +
         '</div>'
      );
      
      var movie = copy_movie_grifus.movie_info;
      var clipboard = movie.the_title + movie.title + movie.published + movie.rated + movie.duration + movie.rating + movie.votes + movie.awards + movie.country + movie.sipnosis + movie.director + movie.stars + movie.cast + movie.genre;
      $("#grifusDataSheet").attr("data-clipboard-text", clipboard);
      new Clipboard("#grifusDataSheet");
      $("#grifusDataSheet").click();
   }

   if ($("#cap1").length || $("#cap3").length) {
      copyDataSheet();
   }
   
});
