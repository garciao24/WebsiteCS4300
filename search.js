
var a = new Array( 100 ); 
for ( var i = 0; i < a.length; ++i ) 
{
   a[ i ] = 2 * i;                  
} 
function buttonPressed()
{
   var inputVal = document.http://localhost/phpmyadmin/sql.php?server=1&db=covid+links&table=links&pos=0( "inputVal" );
   var result = document.getElementById( "result" );
   var searchKey = parseInt( inputVal.value );
   var element = a.indexOf( searchKey );

   if ( element != -1 )
   {
      result.innerHTML = "Found value in element " + element;
   } 
   else
   {
      result.innerHTML = "Value not found";
   } 
}
function start()
{
   var searchButton = document.getElementById( "searchButton" );
   searchButton.addEventListener( "click", buttonPressed, false );
}
window.addEventListener( "load", start, false );
