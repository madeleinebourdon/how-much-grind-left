"use strict"
$(document).ready(function () {
    pointsLeft();
})
function pointsLeft() {
    var points = $("#points").val();
    if (points > 2000) { // ignore if points is higher than the maximum
        points = 2000;
    }
    var left = 2000 - points; // how far to the end are we
    var victories = Math.ceil(left / 10); // make victory number +1 if there's a comma
    if (victories > 1 || victories == 0) { // spelling
        victories = victories + " victories";
    } else {
        victories = victories + " victory";
    }

    // insert here something about checking the streak and slightly changing the result, since a high streak match counts for several low streak ones.

    var textLeft = "You need <strong>" + left + "</strong> points before reaching your objective, which corresponds to <strong>" + victories + "</strong> without any streak."

    $("#left").html(textLeft);
}