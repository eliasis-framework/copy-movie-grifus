/**
 * Copy Movie Grifus · Extensions For Grifus 
 * 
 * @author     Josantonius - hello@josantonius.com
 * @copyright  Copyright (c) 2017
 * @license    GPL-2.0+
 * @link       https://github.com/Josantonius/Copy-Movie-Grifus.git
 * @since      1.0.0
 */

jQuery(document).ready(function($) {

   function copyDataSheet() {

      if ($("#s_right").length !== 0) { return 0; }

      $(".s_right").append(
         '<div id="grifusDataSheet" data-clipboard-text="" class="filtro_y">' +
            '<h3>' + copyMovieGrifus.copy_title + '</h3>' + 
            '<ul class="scrolling mCustomScrollbar _mCS_2 mCS-autoHide mCS_no_scrollbar" style="position: relative; overflow: visible;">' +
               '<div id="mCSB_2" class="mCustomScrollBox mCS-minimal-dark mCSB_vertical mCSB_outside" tabindex="0" style="max-height: none;">' +
                  '<div id="clipboard-button" class="mCSB_container mCS_y_hidden mCS_no_scrollbar_y" style="position:relative; top:0; left:0;" dir="ltr">' +
                     '<li id="copyDataSheet" class="btn">' +
                        '<a>' + copyMovieGrifus.copy_button + '</a>' +
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
      
      var movie = copyMovieGrifus.movie_info;

      var clipboard = movie.the_title + movie.title + movie.published + movie.rated + movie.duration + movie.rating + movie.votes + movie.awards + movie.country + movie.sipnosis + movie.director + movie.stars + movie.cast + movie.genre;

      $("#grifusDataSheet").attr("data-clipboard-text", clipboard);

      new Clipboard("#grifusDataSheet");

      $("#grifusDataSheet").click();
   }

   if ($("#cap1").length || $("#cap3").length) {

      copyDataSheet();
   }
   
});
