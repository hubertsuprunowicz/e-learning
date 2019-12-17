/**
 * Created by Dakruzz on 22.03.2019.
 */

/* load content  */
$(document).on("click", "#classifieds-ajax", function(e) {
    e.preventDefault();
    $.ajax({
        url: "/lessons/page/1",
        type: "GET",
        success: function(data) {
            let content = $(data)
                .find("#content-ajax")
                .html();
            $("#content-ajax").html(content);
        }
    });
});

$(document).on("click", "#active-ajax", function(e) {
    e.preventDefault();
    $.ajax({
        // lesson id
        url: "/lessons/menu/active",
        type: "GET",
        success: function(data) {
            let content = $(data)
                .filter("#content-ajax")
                .html();
            $("#content-ajax").html(content);

            const rating = localStorage.getItem("hideRating");
            if (rating === "true") {
                $("#rating-movie").hide();
            }
        }
    });
});

$(document).on("click", "#add-l-ajax", function(e) {
    e.preventDefault();
    $.ajax({
        url: "/lessons/menu/add",
        type: "GET",
        success: function(data) {
            let content = $(data)
                .filter("#content-ajax")
                .html();
            $("#content-ajax").html(content);
        }
    });
});

$(document).on("click", "#your-l-ajax", function(e) {
    const authorId = $(this).attr("data-index");
    e.preventDefault();
    $.ajax({
        url: "/lessons/menu/" + authorId,
        data: { id: authorId },
        type: "GET",
        _token: "{{ csrf_token() }}",

        success: function(data) {
            let content = $(data)
                .filter("#content-ajax")
                .html();
            $("#content-ajax").html(content);
        }
    });
});

$(document).on("click", "#rating-submit", function(e) {
    e.preventDefault();

    let rating = 0;
    for (let i = 1; i <= 5; i++) {
        if ($("#rating-" + i).is(":checked")) {
            rating = i;
            break;
        }
    }

    const details = $("#details").val();
    const authorID = $(this).attr("data-index");

    $.ajax({
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content")
        },
        url: "/opinions",
        data: { details: details, rating: rating, author_id: authorID },
        type: "POST",
        _token: "{{ csrf_token() }}",
        success: function(data) {
            $("#rating-movie").hide();
            localStorage.setItem("hideRating", "true");
            alert("Thanks for your opinion!");
        },
        error: function(error) {
            console.log(error);
        }
    });
});

/* Lessons menu */
$("#sidebar .navbar-nav a").on("click", function() {
    $("#sidebar .navbar-nav")
        .find("li.active")
        .removeClass("active");
    $(this)
        .parent("li")
        .addClass("active");
});

$(window).scroll(function() {
    /* Lessons Sidebar Sticky Menu */
    $("#topheader").css("margin-top", $(window).scrollTop());
    /* Counter */
    if (
        $(window).scrollTop() < $("#stat-info").position().top + 150 &&
        $(window).scrollTop() > $("#stat-info").position().top - 300
    ) {
        $(".counter-value").each(function() {
            let $this = $(this),
                countTo = $this.attr("data-count");

            $({ countNum: $this.text() }).animate(
                {
                    countNum: countTo
                },
                {
                    duration: 3000,
                    easing: "linear",
                    step: function() {
                        $this.text(Math.floor(this.countNum));
                    },
                    complete: function() {
                        $this.text(this.countNum);
                    }
                }
            );
        });
    }
});

/* Lessons Sidebar */
$(document).ready(function() {
    $("#sidebarCollapse").on("click", function() {
        $("#sidebar").toggleClass("active");
    });
});

//Search for product by JSON
$(document).ready(function() {
    $("#search").keyup(function() {
        $("#result").html("");
        let searchField = $("#search").val();
        let expression = new RegExp(searchField, "i");

        if (searchField !== "") {
            $.getJSON("../products.json", function(data) {
                $.each(data, function(key, value) {
                    if (value.title.search(expression) !== -1)
                        $("#result").append(
                            '<li class="list-group-item link-class">' +
                                value.title +
                                "</li>"
                        );
                });
            });
        }
    });

    $("#result").on("click", "li", function() {
        let click_text = $(this)
            .text()
            .split("|");
        $("#search").val($.trim(click_text[0]));
        $("#result").html("");
    });
});

$(document).on("change", "#unlimitedQty", function() {
    if (this.checked) {
        $("#inputQuantity")
            .prop("disabled", true)
            .val(0);
    } else {
        $("#inputQuantity").prop("disabled", false);
    }
});
