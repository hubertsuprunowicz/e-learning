/**
 * Created by Dakruzz on 22.03.2019.
 */

/* load content  */
$(document).on('click','#classifieds-ajax', function(e){
    e.preventDefault();
    $.ajax({
        url: '/lessons/page/1',
        type: "GET", //
        success: function(data){
            let content = $(data).find('#content-ajax').html();
            $("#content-ajax").html(content);
        }
    });
});

$(document).on('click','#active-ajax', function(e){
    e.preventDefault();
    $.ajax({
        url: '/lessons/active',
        type: "GET", //
        success: function(data){
            let content = $(data).filter('#content-ajax').html();
            $("#content-ajax").html(content);
        }
    });
});

$(document).on('click','#add-l-ajax', function(e){
    e.preventDefault();
    $.ajax({
        url: '/lessons/add',
        type: "GET",
        success: function(data){
            let content = $(data).filter('#content-ajax').html();
            $('#content-ajax').html(content);
        }
    });
});

$(document).on('click','#your-l-ajax', function(e){
    const author_id = $(this).attr('data-index');
    e.preventDefault();
    $.ajax({
        url: '/lessons/yours/'+author_id,
        data: {'id': author_id},
        type: "GET",
        _token: '{{ csrf_token() }}',
        success: function(data){
            let content = $(data).filter('#content-ajax').html();
            $('#content-ajax').html(content);
        }, error: function () {
            window.location.href = "/";
        }
    });
});




/* Lessons menu */
$( '#sidebar .navbar-nav a' ).on( 'click', function () {
    $( '#sidebar .navbar-nav' ).find( 'li.active' ).removeClass( 'active' );
    $( this ).parent( 'li' ).addClass( 'active' );
});




$(window).scroll(function () {

    /* Lessons Sidebar Sticky Menu */
    $('#topheader').css('margin-top', $(window).scrollTop() );;

    /* Counter */
    if( ($(window).scrollTop() < $('#stat-info').position().top + 150) &&
        ($(window).scrollTop() > $('#stat-info').position().top - 300)) {
        $('.counter-value').each(function() {
            let $this = $(this),
                countTo = $this.attr('data-count');

            $({ countNum: $this.text()}).animate({
                countNum: countTo
            },{
                duration: 3000,
                easing:'linear',
                step: function() {
                    $this.text(Math.floor(this.countNum));
                },
                complete: function() {
                    $this.text(this.countNum);
                }

            });
        });
    }
});



/* Lessons Sidebar */
$(document).ready(function () {

    $('#sidebarCollapse').on('click', function () {
        $('#sidebar').toggleClass('active');
    });

});


//Search for product by JSON
$(document).ready(function(){

    $('#search').keyup(function(){
        $('#result').html('');
        let searchField = $('#search').val();
        let expression = new RegExp(searchField, "i");

        if(searchField !== '') {
            $.getJSON('../products.json', function(data){
                $.each(data, function(key, value){
                    if(value.title.search(expression) !== -1)
                        $('#result').append('<li class="list-group-item link-class">'+value.title+'</li>');
                });
            })
        }
    });

    $('#result').on('click', 'li', function() {
        let click_text = $(this).text().split('|');
        $('#search').val($.trim(click_text[0]));
        $("#result").html('');
    });
});





window.onload = function () {
    let chart = new CanvasJS.Chart("chartContainer", {
        theme: "light1",
        animationEnabled: false,
        title:{
            text: "User statistics"
        },
        data: [
            {
                type: "column",
                dataPoints: [
                    { label: "lorem",  y: 10  },
                    { label: "lorem", y: 15  },
                    { label: "lorem", y: 25  },
                    { label: "lorem",  y: 30  },
                    { label: "lorem",  y: 28  }
                ]
            }
        ]
    });
    chart.render();
};