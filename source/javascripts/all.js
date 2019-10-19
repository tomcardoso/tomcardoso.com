//= require_tree .

(function init(root) {

  document.addEventListener("DOMContentLoaded", function(event) {
    var height = root.outerHeight;
    var elHeight = document.querySelector('div').getBoundingClientRect().height;

    document.querySelector('div').style.position = "absolute";
    document.querySelector('div').style.top = ((height / 2) - elHeight) + "px";

  });

})(typeof window !== "undefined" ? window : this);
