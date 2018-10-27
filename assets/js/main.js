"use strict"

$(document).ready(function () {
    timer();
    $("#estimate").on("click", function () {
        pointsLeft()
    });
    tooltips();
})

// how much time until ladder reset
function timer() {
    var x = setInterval(function () {
        var countDownDate = new Date("October 30, 2018 01:00:00").getTime();
        var now = new Date().getTime();
        var distance = countDownDate - now;

        var days = Math.floor(distance / (1000 * 60 * 60 * 24));
        var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        var seconds = Math.floor((distance % (1000 * 60)) / 1000);


        $("#js").html("There are <strong>" + days + " days, " + hours + " hours, " + minutes + " minutes and " + seconds + " seconds</strong> left before the next reset. ");

        if (distance < 0) { // If the countdown is finished, write something
            clearInterval(x);
            $("#js").html("The ladder was reset, but this page hasn't been updated yet!");
        }
    }, 1000); // 1000 = update every second
}

// how many points to the top of the ladder
function pointsLeft() {
    var countDownDate = new Date("October 30, 2018 01:00:00").getTime();
    var now = new Date().getTime();
    var distance = countDownDate - now;

    var days = Math.floor(distance / (1000 * 60 * 60 * 24));


    var points = $("#points").val();
    if (points > 2000) { // ignore if "points" is higher than the end of the ladder
        points = 2000;
    }
    var left = 2000 - points; // how far to the end are we
    var victory = Math.ceil(left / 10); // make victory number +1 if there's a comma
    var victories;
    if (victory > 1 || victories == 0) { // spelling
        victories = victory + " victories";
    } else {
        victories = victory + " victory";
    }

    // insert here something about checking the streak and slightly changing the result, since a high streak match counts for several low streak ones.


    var times = victory / (days - 1);

    var textLeft = "<p>You need <strong>" + left + "</strong> more points before reaching your objective, which corresponds to <strong>" + victories + "</strong> without any streak.</p><p>This means that if you played everyday, you would have to win <strong>" + times + " times a day</strong>, excluding today.</p>"

    $("#answer").html("<div id='left'>" + textLeft + "</div>");
}

// bootstrap tooltips
function tooltips() {
    $('.tooltip-img').tooltip();
}

// button to show the filters
$("#filter-btn").on("click", function() {
    $(".long-filters").toggle(1000);
})

// $("#filter-btn").click(function(){
//     $(".long-filters").slideToggle(1000);
// });

// filters on the "current prizes" page
$("#tiers input").change(function() { // when inputs inside of "tiers" change value
    if ($('#tier1').is(':checked')) {
        $(".tier1").show();
    } else {
        $(".tier1").hide();
    }

    if ($('#tier2').is(':checked')) {
        $(".tier2").show();
    } else {
        $(".tier2").hide();
    }

    if ($('#tier3').is(':checked')) {
        $(".tier3").show();
    } else {
        $(".tier3").hide();
    }


    $("#tiers input:checked").each(function() { // for everything checked
        //$("ul#nav li." + $(this).val() + "").show();
        
    });
    $("#tiers input:not(:checked)").each(function() { // for everything not checked
        //$("ul#nav li." + $(this).val() + "").hide();
        
    });
});