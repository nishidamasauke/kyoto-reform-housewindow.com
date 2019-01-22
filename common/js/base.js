window.requestAnimFrame = (function(callback) {
  return window.requestAnimationFrame || window.webkitRequestAnimationFrame || window.mozRequestAnimationFrame || window.oRequestAnimationFrame || window.msRequestAnimationFrame || function(callback) {
    return window.setTimeout(callback, 1000 / 60);
  };
})();
window.cancelAnimFrame = (function(_id) {
  return window.cancelAnimationFrame || window.cancelRequestAnimationFrame || window.webkitCancelAnimationFrame || window.webkitCancelRequestAnimationFrame || window.mozCancelAnimationFrame || window.mozCancelRequestAnimationFrame || window.msCancelAnimationFrame || window.msCancelRequestAnimationFrame || window.oCancelAnimationFrame || window.oCancelRequestAnimationFrame || function(_id) { window.clearTimeout(id); };
})();
// AnchorLink
var AnchorLink = function() {
  this._targets = document.querySelectorAll('.js_archorlink');
  if (!this._targets.length) return;
  this.init();
}
AnchorLink.prototype = {
  init: function() {
    var i = 0 | 0;
    for (i = 0; i < this._targets.length; i = (i + 1) | 0) {
      this._targets[i].addEventListener('click', this.onClickHD, false);
    };
  },
  onClickHD: function(e) {
    var _hash = e.currentTarget.getAttribute('href').replace('#', '');
    if (_hash != '') {
      var _target = document.getElementById(_hash) || document.querySelector('.' + _hash);
      var _offset, _loc;
      _loc = window.location.pathname;
      if (window.innerWidth > 768) {
        Velocity(document.getElementById(_hash), 'scroll', { duration: 800, offset: 0, delay: 0, easing: 'easeInOutSine' });
      } else {
        m.close();
        var h = document.getElementById('header').scrollHeight;
        Velocity(document.getElementById(_hash), 'scroll', { duration: 800, offset: -h, delay: 0, easing: 'easeInOutSine', mobileHA: false });
      }
      e.preventDefault();
    }
  }
}
// ChangeSrc
var ChangeSrc = function() {
  this.loca = window.location.hash;
  this.top_page = document.getElementById('mv');
  this.changeHref = document.querySelectorAll('.js_archorlink');
  for (i = 0; i < this.changeHref.length; i = i + 1) {
    if (this.top_page) {
      this.changeHref[i].href = this.changeHref[i].getAttribute('href').replace('/#', '#');
    } else {
      this.changeHref[i].href = this.changeHref[i].getAttribute('href').replace('#', '/#');
    }
  };
}
// Menusp
var Menusp = function() {
  m = this;
  m._hamburger = document.getElementById('menu_icon');
  m._menu = document.querySelector('.nav');
  m._body = document.querySelector('body');
  m.txt = document.querySelectorAll('.menu_icon_wr i');
  m.str1 = 'メニュー';
  m.str2 = '閉じる';
  m._flag = true;
  m.wH = null;
  m.hHeader = null;
  if (!m._hamburger) return;
  m.init();
}
// Menusp
var Menusp = function() {
  m = this;
  m._hamburger = document.getElementById('menu_icon');
  m._menu = document.getElementById('header_nav');
  m._body = document.querySelector('body');
  m.txt = document.querySelector('.menu_icon_wr i');
  m.str1 = 'メニュー';
  m.str2 = '閉じる';
  m._flag = true;
  m.wH = null;
  m.hHeader = null;
  if (!m._hamburger) return;
  m.init();
}
Menusp.prototype = {
  init: function() {
    window.addEventListener('load', function() { m.Handl() }, true);
    window.addEventListener('resize', function() { m.resize() }, true);
  },
  Handl: function() {
    m.close();
    m._hamburger.addEventListener('click', function() { m.onClick() }, false);
  },
  onClick: function() {
    m.wH = window.innerHeight;
    m.hHeader = document.querySelector('.header').offsetHeight;
    if (m._flag) {
      m._menu.classList.add('active');
      m._hamburger.classList.add('active');
      m._body.style.overflow = 'hidden';
      m._flag = false;
      m._menu.style.height = (m.wH - m.hHeader) + 'px';
      m.txt.innerHTML = '';
      m.txt.innerHTML = m.str2;
    } else {
      m.close();
    }
  },
  close: function() {
    m._body.style.overflow = '';
    m._menu.classList.remove('active');
    m._hamburger.classList.remove('active');
    m._menu.removeAttribute("style");
    m._flag = true;
    m.txt.innerHTML = '';
    m.txt.innerHTML = m.str1;
  },
  resize: function() {
    if (m._hamburger.classList.contains('active')) {
      if (window.innerWidth > 768) {
        m._hamburger.classList.remove('active');
        m._menu.classList.remove('active');
        document.body.style.overflow = 'auto';
        m._menu.style.height = 'auto';
        //document.body.style.paddingTop = document.querySelector('.header').clientHeight + 'px';
        m._menu.style.top = 0;
        m._menu.style.height = 'auto';
      } else {
        m._menu.style.height = window.innerHeight - document.querySelector('.header').clientHeight + 'px';
        m._menu.style.top = document.querySelector('.header').clientHeight - 1 + 'px';
      }
    } else {
      if (window.innerWidth < 769) {
        m._menu.style.height = 0;
      } else {
        m._menu.style.height = 'auto';
      }
    }
  }
}
var backToTop = function() {
  this._backtt = document.getElementById('back_top');
  if (!this._backtt) return;
  this.init();
}
backToTop.prototype = {
  init: function() {
    this._backtt.addEventListener('click', this.onClickHD, false);
  },
  onClickHD: function() {
    Velocity(document.body, 'scroll', { duration: 1000, delay: 0, easing: 'easeInOutSine', mobileHA: false });
  }
}
var Sticky = (function() {
  function Sticky() {
    var s = this;
    this._target = document.getElementById('header');
    this._mobile = document.getElementById('header_nav');
    this.flg;
    this._for_sp = function(top) {
      if (top > 0) {
        document.body.style.paddingTop = s._target.clientHeight + 'px';
        s._target.classList.add('fixed');
      } else {
        document.body.style.paddingTop = 0;
        s._target.classList.remove('fixed');
      }
    }
    this._for_pc = function(top) {
      if (top >= s.flg) {
        document.body.style.paddingTop = s._mobile.clientHeight + 'px';
        s._target.classList.add('fixed');
      } else {
        document.body.style.paddingTop = 0;
        s._target.classList.remove('fixed');
      }
    }
    this.handling = function() {
      var _top = document.documentElement.scrollTop || document.body.scrollTop;
      if (window.innerWidth < 769) {
        s._for_sp(_top);
      } else {
        s.flg = s._target.querySelector('.header_mid').clientHeight;
        s._for_pc(_top);
      }
    }
    window.addEventListener('scroll', s.handling, false);
    window.addEventListener('resize', s.handling, false);
    this.handling();
  }
  return Sticky;
})();
// cloneContact
var cloneContact = function() {
  cl = this;
  cl.contact = document.querySelector('#header_mid_listlink');
  if (!cl.contact) return;
  cl.init();
}
cloneContact.prototype = {
  init: function() {
    cl.handle();
    window.addEventListener('resize', cl.handle, false);
  },
  handle: function() {
    if (window.innerWidth < 769) {
      var cln = cl.contact.cloneNode(true);
      var nav = document.querySelector('.header_nav #header_mid_listlink');
      if (!nav) {
        document.getElementById("menu").appendChild(cln);
      }
    } else {
      var ct = document.querySelector('.header_nav #header_mid_listlink');
      if (ct) {
        ct.parentNode.removeChild(ct);
      }
    }
  }
}
window.addEventListener('DOMContentLoaded', function() {
  if (window.jQuery) window.Velocity = window.jQuery.fn.velocity;
  new backToTop();
  // new PageTop();
  // new Anchor();
  new Sticky();
  new Menusp();
  new cloneContact();
  new ChangeSrc();
  // scroll left header
  if (window.innerWidth > 768) {
    window.addEventListener('scroll', function(e) {
      if (document.querySelector('.header').classList.contains('fixed')) {
        var sc = window.pageXOffset || document.documentElement.scrollLeft;
        document.querySelector('#header_nav').style.left = -sc + 'px';
      } else {
        document.querySelector('#header_nav').style.left = 0;
      }
    });
  }
});
window.addEventListener('load', function() {
  new AnchorLink();
});
/* images pc <---> sp */
(function() {
  var PicturePolyfill = (function() {
    function PicturePolyfill() {
      var _this = this;
      this.pictures = [];
      this.onResize = function() {
        var width = document.body.clientWidth;
        for (var i = 0; i < _this.pictures.length; i = (i + 1)) {
          _this.pictures[i].update(width);
        };
      };
      if ([].includes) return;
      var picture = Array.prototype.slice.call(document.getElementsByTagName('picture'));
      for (var i = 0; i < picture.length; i = (i + 1)) {
        this.pictures.push(new Picture(picture[i]));
      };
      window.addEventListener("resize", this.onResize, false);
      this.onResize();
    }
    return PicturePolyfill;
  }());
  var Picture = (function() {
    function Picture(node) {
      var _this = this;
      this.update = function(width) {
        width <= _this.breakPoint ? _this.toSP() : _this.toPC();
      };
      this.toSP = function() {
        if (_this.isSP) return;
        _this.isSP = true;
        _this.changeSrc();
      };
      this.toPC = function() {
        if (!_this.isSP) return;
        _this.isSP = false;
        _this.changeSrc();
      };
      this.changeSrc = function() {
        var toSrc = _this.isSP ? _this.srcSP : _this.srcPC;
        _this.img.setAttribute('src', toSrc);
      };
      this.img = node.getElementsByTagName('img')[0];
      this.srcPC = this.img.getAttribute('src');
      var source = node.getElementsByTagName('source')[0];
      this.srcSP = source.getAttribute('srcset');
      this.breakPoint = Number(source.getAttribute('media').match(/(\d+)px/)[1]);
      this.isSP = !document.body.clientWidth <= this.breakPoint;
      this.update();
    }
    return Picture;
  }());
  new PicturePolyfill();
}());