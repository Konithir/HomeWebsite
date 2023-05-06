/* Globals */
var OstatniObraz;
var file1;
var file2;
var file3;
var file4;
//=================JQUERY fade in fade outs=====================================
//==============================================================================
//---------------fade Out when Menu link is clicked-----------------------------
$(document).ready(function(){
    $("#nav").click(function(){
        $("#nav").fadeOut(500);
    });
});

//---------Menu---fadeIn on start-----------------------------------------------
$(document).ready(function () {
    $("#nav").fadeIn(1500);
});
//---------------------Close "Job" Popup----------------------------------------
$(document).ready(function() {
$("#MovieSlider").click(function(){
    $("#MovieSlider").slideToggle(3000);
});
});
//-------------------Open "Job" Popup on start----------------------------------
$(document).ready(function() {
  $("#MovieSlider").slideToggle(3000);
});
//=======================Image Gallery Fuctions=================================
//==============================================================================
//----------Funkcja zmienia obraz w divie "zoom" na ten klikniety------Blender--
$(document).ready(function() {

  $('.imgzoom').click(function() {
    zoom.style.display="block";
    shade.style.display="block";
    var alt = $(this).parent().children().attr("alt").trim();
    OstatniObraz=alt;
    var photo = "Resources/foto"+alt+".png";
    zoom_img.setAttribute("src",photo);
  });
});
//----------Funkcja zmienia obraz w divie "zoom" na ten klikniety----Photoshop--
$(document).ready(function() {

  $('.imgzoomPhotoshop').click(function() {
      zoom.style.display="block";
    shade.style.display="block";
      var alt = $(this).parent().children().attr("alt").trim();
    OstatniObraz=alt;
    var photo = "Resources/Photo"+alt+".png";
    zoom_img.setAttribute("src",photo)
  });
});

//----------------Przycisk w dol------blender-----------------------------------
$(document).ready(function() {

  $('#buttonwlewo').click(function() {
      if(OstatniObraz<8){
    OstatniObraz= OstatniObraz - 1 + 2;
    var photo = "Resources/foto"+OstatniObraz+".png";
    zoom_img.setAttribute("src",photo);
      }
  });
});
//------------Przycisk w w góre---------blender---------------------------------
$(document).ready(function() {

  $('#buttonwprawo').click(function() {
      if(OstatniObraz>1){
    OstatniObraz= OstatniObraz - 1;
    var photo = "Resources/foto"+OstatniObraz+".png";
    zoom_img.setAttribute("src",photo);
      }
  });
});
//------------------------------------------------------------------------------
//----------------Przycisk w dol------photoshop---------------------------------
$(document).ready(function() {

  $('#buttonwprawoPhotoshop').click(function() {
      if(OstatniObraz<2){
    OstatniObraz= OstatniObraz - 1 + 2;
    var photo = "Resources/photo"+OstatniObraz+".png";
    zoom_img.setAttribute("src",photo);
      }
  });
});
//------------Przycisk w w góre---------photoshop-------------------------------
$(document).ready(function() {

  $('#buttonwlewoPhotoshop').click(function() {
      if(OstatniObraz>1){
    OstatniObraz= OstatniObraz - 1;
    var photo = "Resources/photo"+OstatniObraz+".png";
    zoom_img.setAttribute("src",photo);
      }
  });
});
//----------------------Close Button in Zoomed Gallery--------------------------
function Closee(){
    zoom.style.display="none";
    shade.style.display="none";
}
//------------------------------------------------------------------------------
$(document).ready(function() {
$("#shade").click(function(){
    zoom.style.display="none";
    shade.style.display="none";
});
});
//==============================================================================
//==============================================================================
//-----------------------------------------------------------------------------
$(document).ready(function() {
$("#Single").click(function(){
     document.cookie = "Uklad=One; path=/;";
     Uklad1();
});
});
//-----------------------------------------------------------------------------
$(document).ready(function() {
$("#Fourties").click(function(){
    document.cookie = "Uklad=Four; path=/;";
    Uklad4();
});
});
//-----------------------------------------------------------------------------
function Uklad4()
{
   $(".imgzoom").css("width","35vw"); 
    $(".imgzoomPhotoshop").css("width","35vw"); 
}
function Uklad1()
{
    $(".imgzoom").css("width","45vw");
     $(".imgzoomPhotoshop").css("width","45vw");
}
//-----------------------------------------------------------------------------
$('img').on('dragstart', function(event) { event.preventDefault(); });
//----------------------Close Button COOKIES------------------------------------
function CloseCookies(){
    shadecookie.style.display="none";
    cookiepanel.style.display="none";
}
//----------------------Close Button COOKIES------------------------------------
function CreateCookies(){
    shadecookie.style.display="none";
    cookiepanel.style.display="none";
    document.cookie = "Ciacho=True; path=/;";
}
//------------------------------------------------------------------------------
function Exit()
{
    history.back();
}
//------------------------------------------------------------------------------