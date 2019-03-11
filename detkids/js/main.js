jQuery(document).ready(function ($) {

//Создаем объект 'user', который будет содержать информацию Detect.js 
//Вызываем detect.parse() с navigator.userAgent в качестве аргумента
var user = detect.parse(navigator.userAgent);
if (user.browser.family === 'Safari') {
  UIkit.modal('#modal-browser').show();
}
if (user.browser.family === 'Mobile Safari') {
  UIkit.modal('#modal-browser').show();
}

  var carousel = $("#carousel").waterwheelCarousel({
    flankingItems: 2,
    separation: 200,
  });

  $('#prev').bind('click', function () {
    carousel.prev();
    return false
  });

  $('#next').bind('click', function () {
    carousel.next();
    return false;
  });

  var $width = $(window).width();
  if ($width > 960) {
    $("#mygallery").justifiedGallery({
        rowHeight : 50,
    lastRow : 'nojustify',
    captions : false ,
    margins : 60
  });
  }
  if ($width <= 960) {
    $("#mygallery").justifiedGallery({
        rowHeight : 30,
    lastRow : 'nojustify',
    captions : false ,
    margins : 20
  });
  }
  // if ($width <= 640) {
  //   $("#mygallery").justifiedGallery({
  //       rowHeight : 10,
  //   lastRow : 'nojustify',
  //   captions : false ,
  //   margins : 15
  // });
  // }
  


 if (user.device.type === 'Desktop') {
    // - Noel Delgado | @pixelia_me

const nodes = [].slice.call(document.querySelectorAll('ul#prj li'), 0);
const directions  = { 0: 'top', 1: 'right', 2: 'bottom', 3: 'left' };
const classNames = ['in', 'out'].map((p) => Object.values(directions).map((d) => `${p}-${d}`)).reduce((a, b) => a.concat(b));

const getDirectionKey = (ev, node) => {
  const { width, height, top, left } = node.getBoundingClientRect();
  const l = ev.pageX - (left + window.pageXOffset);
  const t = ev.pageY - (top + window.pageYOffset);
  const x = (l - (width/2) * (width > height ? (height/width) : 1));
  const y = (t - (height/2) * (height > width ? (width/height) : 1));
  return Math.round(Math.atan2(y, x) / 1.57079633 + 5) % 4;
}

class Item {
  constructor(element) {
    this.element = element;    
    this.element.addEventListener('mouseover', (ev) => this.update(ev, 'in'));
    this.element.addEventListener('mouseout', (ev) => this.update(ev, 'out'));
  }
  
  update(ev, prefix) {
    this.element.classList.remove(...classNames);
    this.element.classList.add(`${prefix}-${directions[getDirectionKey(ev, this.element)]}`);
  }
}

nodes.forEach(node => new Item(node));
 } 
else{
  $('ul#prj > li:nth-child(1) > a').attr('uk-toggle', 'target:#project-modal1');
  $('ul#prj > li:nth-child(2) > a').attr('uk-toggle', 'target:#project-modal2');
  $('ul#prj > li:nth-child(3) > a').attr('uk-toggle', 'target:#project-modal3');
  $('ul#prj > li:nth-child(4) > a').attr('uk-toggle', 'target:#project-modal4');
  $('ul#prj > li:nth-child(5) > a').attr('uk-toggle', 'target:#project-modal5');
  $('ul#prj > li:nth-child(6) > a').attr('uk-toggle', 'target:#project-modal6');
}



});
