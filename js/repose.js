jQuery(document).ready(function($) {
  $( '#site-navigation' ).on( 'click', '.menu-toggle', function(e) {
    e.preventDefault();

    $( 'body' ).toggleClass( 'active-secondary' );
  } );

  $( '#secondary' ).on( 'click', '.sidebar-close', function(e) {
    $( 'body' ).removeClass( 'active-secondary' );
  } );
});
