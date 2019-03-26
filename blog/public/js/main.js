/**
 * Created by Dakruzz on 22.03.2019.
 */



/* load content  */
$(document).on('click','#classifieds-ajax', function(){
    $.ajax({
        url: '/courses/GetContent',
        type: "GET", //
        success: function(data){
            $data = $(data);
            $('#content-ajax').fadeOut().html($data).fadeIn();
        }
    });
});

$(document).on('click','#your-ajax', function(){
    $.ajax({
        url: '/courses/active',
        type: "GET", //
        success: function(data){
            $data = $(data);
            $('#content-ajax').html($data);
        }
    });
});

$(document).on('click','#about-ajax', function(){
    $.ajax({
        url: '/courses/GetContent',
        type: "GET",
        success: function(data){
            $data = $(data);
            $('#content-ajax').html($data);
        }
    });
});


$( '#sidebar .navbar-nav a' ).on( 'click', function () {
    $( '#sidebar .navbar-nav' ).find( 'li.active' ).removeClass( 'active' );
    $( this ).parent( 'li' ).addClass( 'active' );
});



/* Counter */
let a = 0;
$(window).scroll(function() {

    let oTop = $('#counter').offset().top - window.innerHeight;
    if (a == 0 && $(window).scrollTop() > oTop) {
        $('.counter-value').each(function() {
            let $this = $(this),
                countTo = $this.attr('data-count');
            $({
                countNum: $this.text()
            }).animate({
                    countNum: countTo
                },

                {
                    duration: 3000,
                    easing: 'swing',
                    step: function() {
                        $this.text(Math.floor(this.countNum));
                    },
                    complete: function() {
                        $this.text(this.countNum);
                        //alert('finished');
                    }

                });
        });
        a = 1;
    }

});


/* Sidebar */
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
            $.getJSON('products.json', function(data){
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