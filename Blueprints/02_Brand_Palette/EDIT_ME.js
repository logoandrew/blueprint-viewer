/*

ONLY CHANGE THE FOLLOWING VARIABLES:
------------------------------------

AVAILABLE: If a page in the blueprint is blank (e.g. there are no
Customs on page 5), mark available as false; otherwise, it should
be true. (If false: width, height, and imgFolder don't matter; the
system will use the 'unavailable' folder/img.)

WIDTH & HEIGHT: The width and height of the original jpg/png file in
pixels. These must be exact for the system to work properly!

IMGFOLDER: Name/Location of folder generated by Zoomify.

*/

var pages = {
  page1: {
    available: true,
    width: 25600,
    height: 20888,
    imgFolder: "./img/page02v1/",
  },
  page2: {
    available: false,
    width: 25600,
    height: 16721,
    imgFolder: "./img/page03v1/",
  },
  page3: {
    available: true,
    width: 9708,
    height: 32000,
    imgFolder: "./img/page04v1/",
  },
  page4: {
    available: true,
    width: 8433,
    height: 32000,
    imgFolder: "./img/page05v1/",
  },
  page5: {
    available: true,
    width: 19200,
    height: 8549,
    imgFolder: "./img/page06v1/",
  },
  page6: {
    available: false,
    width: 6320,
    height: 32000,
    imgFolder: "./img/page07v1/",
  },
  page7: {
    available: true,
    width: 25600,
    height: 21064,
    imgFolder: "./img/page08v1/",
  },
  page8: {
    available: true,
    width: 17317,
    height: 32000,
    imgFolder: "./img/page09v1/",
  },
};
