//UA判別
var _ua = (function(u) {
  return {
    Tablet: (u.indexOf("windows") != -1 && u.indexOf("touch") != -1 && u.indexOf("tablet pc") == -1) ||
      u.indexOf("ipad") != -1 ||
      (u.indexOf("android") != -1 && u.indexOf("mobile") == -1) ||
      (u.indexOf("firefox") != -1 && u.indexOf("tablet") != -1) ||
      u.indexOf("kindle") != -1 ||
      u.indexOf("silk") != -1 ||
      u.indexOf("playbook") != -1,
    Mobile: (u.indexOf("windows") != -1 && u.indexOf("phone") != -1) ||
      u.indexOf("iphone") != -1 ||
      u.indexOf("ipod") != -1 ||
      (u.indexOf("android") != -1 && u.indexOf("mobile") != -1) ||
      (u.indexOf("firefox") != -1 && u.indexOf("mobile") != -1) ||
      u.indexOf("blackberry") != -1
  }
})(window.navigator.userAgent.toLowerCase());

//デバイス別 viewport 指定
if (_ua.Mobile) {
  $("meta[name='viewport']").attr('content', 'width=device-width, initial-scale=1');
} else if (_ua.Tablet) {
  $("meta[name='viewport']").attr('content', 'width=1200');
} else {
  $("meta[name='viewport']").attr('content', 'width=1200');
}
