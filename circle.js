import ProgressBar from "progressbar.js";
var cir = new ProgressBar.Circle(circle1, {
    strokeWidth: 6,
    easing: "easeInOut",
    duration: 1700,
    color: "#000",
    trailColor: "#eee",
    trailWidth: 1,
    svgStyle: null,
});
cir.animate(1);
var cir = new ProgressBar.Circle(circle2, {
    strokeWidth: 6,
    easing: "easeInOut",
    duration: 1700,
    color: "#000",
    trailColor: "#eee",
    trailWidth: 1,
    svgStyle: null,
});
cir.animate(1);
