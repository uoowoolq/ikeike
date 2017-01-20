window.alert("about");

(function about_main() {
  var obj = document.getElementById("obj");
  TweenMax.fromTo(obj, 1.5, {css: {width: 10, height: 10}}, {css: {width: 100, height: 100}});
})();
