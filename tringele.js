import ProgressBar from "progressbar.js";
var Shape = ProgressBar.Shape;
var utils = ProgressBar.utils;

var Triangle = function Triangle(container, options) {
    this._pathTemplate =
        "M 50,{center} L 100,{bottomCenter}" +
        " L 0,{bottomCenter} L 50,{center}";
    Shape.apply(this, arguments);
};

Triangle.prototype = new Shape();
Triangle.prototype.constructor = Triangle;

Triangle.prototype._pathString = function _pathString(opts) {
    return utils.render(this._pathTemplate, {
        center: opts.strokeWidth / 6,
        bottomCenter: 100 - opts.strokeWidth / 2,
    });
};

Triangle.prototype._trailString = function _trailString(opts) {
    return this._pathString(opts);
};
// --------------------------------------------------

// Using Triangle
var bar = new Triangle("#triangle1", {
    strokeWidth: 6,
    easing: "easeInOut",
    duration: 2000,
    color: "#FFEA82",
    trailColor: "#eee",
    trailWidth: 1,
    svgStyle: null,
});

bar.animate(1.0);
var bar = new Triangle("#triangle2", {
    strokeWidth: 6,
    easing: "easeInOut",
    duration: 2000,
    color: "#FFEA82",
    trailColor: "#eee",
    trailWidth: 1,
    svgStyle: null,
});

bar.animate(1.0);
var bar = new Triangle("#triangle3", {
    strokeWidth: 6,
    easing: "easeInOut",
    duration: 2000,
    color: "#FFEA82",
    trailColor: "#eee",
    trailWidth: 1,
    svgStyle: null,
});

bar.animate(1.0);
var bar = new Triangle("#triangle31", {
    strokeWidth: 6,
    easing: "easeInOut",
    duration: 2000,
    color: "#FFEA82",
    trailColor: "#eee",
    trailWidth: 1,
    svgStyle: null,
});

bar.animate(1.0);
var bar = new Triangle("#triangle32", {
    strokeWidth: 6,
    easing: "easeInOut",
    duration: 2000,
    color: "#FFEA82",
    trailColor: "#eee",
    trailWidth: 1,
    svgStyle: null,
});

bar.animate(1.0);
var bar = new Triangle("#triangle33", {
    strokeWidth: 6,
    easing: "easeInOut",
    duration: 2000,
    color: "#FFEA82",
    trailColor: "#eee",
    trailWidth: 1,
    svgStyle: null,
});

bar.animate(1.0);
var bar = new Triangle("#triangle34", {
    strokeWidth: 6,
    easing: "easeInOut",
    duration: 2000,
    color: "#FFEA82",
    trailColor: "#eee",
    trailWidth: 1,
    svgStyle: null,
});

bar.animate(1.0);
