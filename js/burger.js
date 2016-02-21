(function() {

  'use strict';

  document.querySelector('.MD-burger-icon').addEventListener(
    'click',
    function() {
      var child;
      
      child = this.childNodes[1].classList;

      if (child.contains('MD-burger-arrow')) {
        child.remove('MD-burger-arrow');
        child.add('MD-burger-line');
      } else {
        child.remove('MD-burger-line');
        child.add('MD-burger-arrow');
      }

    });

})();
