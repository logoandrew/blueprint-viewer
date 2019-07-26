
var bp = document.currentScript.getAttribute('bp');
var page = document.currentScript.getAttribute('page');

var viewer = OpenSeadragon({
  tileSources: [{
    type: "zoomifytileservice",
    width: pages[page].available ? pages[page].width : vars.noPage.width,
    height: pages[page].available ? pages[page].height : vars.noPage.height,
    tilesUrl: pages[page].available ? pages[page].imgFolder : vars.noPage.imgFolder
  }],
  id: bp,
  prefixUrl: vars.prefixUrl,
  showNavigator: vars.showNavigator,
  navigatorAutoFade: vars.navigatorAutoFade,
  useCanvas: vars.useCanvas,
  visibilityRatio: vars.visibilityRatio,
  minZoomLevel: vars.minZoomLevel,
  maxZoomLevel: vars.maxZoomLevel,
  zoomPerClick: vars.zoomPerClick,
  zoomPerScroll: vars.zoomPerScroll
});


$(document).ready(function(){

  $('#dropdown-select').change(function(){
    window.location.href = $(this).val();
  });

});
