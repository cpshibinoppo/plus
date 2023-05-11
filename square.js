import ProgressBar from "progressbar.js";
// [1, 2, 3, 4,5,6,7,8,9,10].forEach(function (i) {
    for(var i=1 ; i <= 17; i++){
        var circle = new ProgressBar.Square(".container-" + i, {
            strokeWidth: 6,
            easing: "easeInOut",
            duration: 2400,
            color: "#FFEA82",
            trailColor: "#eee",
            trailWidth: 1,
            svgStyle: null,
        });

        circle.animate(1);
    }
    for(var i=1 ; i <= 14; i++){
        var circle = new ProgressBar.Square(".containertwo-" + i, {
            strokeWidth: 6,
            easing: "easeInOut",
            duration: 2400,
            color: "#FFEA82",
            trailColor: "#eee",
            trailWidth: 1,
            svgStyle: null,
        });
        circle.animate(1);

        var circle3 = new ProgressBar.Square(".container3-" + i, {
            strokeWidth: 6,
            easing: "easeInOut",
            duration: 2400,
            color: "#FFEA82",
            trailColor: "#eee",
            trailWidth: 1,
            svgStyle: null,
        });

        circle3.animate(1);
    }

    // });
