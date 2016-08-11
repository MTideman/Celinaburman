
//Menyknappen
document.querySelector( "#nav-toggle" )
  .addEventListener( "click", function() {
    this.classList.toggle( "active" );
  });
  
//Menycurrent
$( "#nav-toggle" ).click(function() {
  $( ".topnav" ).toggleClass( "show" );
});

