// $(document).ready(function(){
    var games_count = getGamesCountDependsOnResolution();
    // console.log('games-count: ' + games_count);
// });


function getGamesCountDependsOnResolution(type = null) {
    var resolution_width = window.screen.availWidth;
    var limit = 10;
    var rows = 5;
    var col_count = 1;

    return limit;

    if (type == 'table') {
        limit = 20;
    }

    if (resolution_width < 320) {
        col_count = 1;
    }

    if (resolution_width >= 320 && resolution_width <= 575) {
        col_count = 2;
    }
    if (resolution_width > 575 && resolution_width <= 640) {
        col_count = 3;
    }

    if (resolution_width > 640 && resolution_width <= 667) {
        col_count = 4;
    }

    if (resolution_width > 667 && resolution_width <= 768) {
        col_count = 4;
    }

    if (resolution_width > 768 && resolution_width <= 1024) {
        col_count = 5;
    }

    if (resolution_width > 1024 && resolution_width <= 1440) {
        col_count = 6;
    }

    if (resolution_width > 1024 && resolution_width <= 1920) {
        col_count = 7;
    }
    if (resolution_width > 1920 && resolution_width <= 2132) {
        col_count = 8;
    }

    if (resolution_width > 2132 && resolution_width <= 2560) {
        col_count = 9;
    }

    if (resolution_width > 2561 ) {
        col_count = 10;
    }

    rows = Math.floor(limit / col_count);

    return col_count * rows;
}

function clearGames() {
    $('.games-section.all-games .row.games').html('');
}

function getAllGames() {
    var params = {type: 'all'};
    $.extend(params, collectParams());
    var games = applyFilters(params);
    placeGames(games, 'all');
}

function getLiveCasinoGames() {
    var params = {type: 'live-casino'};
    $.extend(params, collectParams());
    var games = applyFilters(params);
    placeGames(games, 'live-casino');
}

function collectParams(default_params) {
    var params = {};

    if (default_params != null) {
        $.extend(params, default_params);
    }

    // here we will get all games which we need to exclude from select
    // var exclude = [];
    // $('.games-section').not('.d-none').find('.game-item').each(function(){
    //     exclude.push($(this).attr('data-game-id'));
    // });
    // $.extend(params, {exclude: exclude});


    // VENDORS - get all checked vendors
    // var vendors = getCheckedVendors();
    // $.extend(params, {vendors: vendors});

    // main menu selected item (choosen game type)

    return params;
}

function applyFilters(params) {

    var api_res;

    var isMobile = false; //initiate as false
    // device detection
    if(/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|ipad|iris|kindle|Android|Silk|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i.test(navigator.userAgent)
        || /1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i.test(navigator.userAgent.substr(0,4))) {
        isMobile = true;
    }
    if (isMobile == true) {
        $.extend(params, {is_mobile: true});
    }

    var checked_types = [];
    $('input[name="type"]:checked').each(function(){
        checked_types.push($(this).val());
    });
    $.extend(params, {types: checked_types});

    $.ajax({
        url: '/games',
        method: 'post',
        dataType: 'json',
        data: params,
        async: false,
        success: function(data) {
            api_res = data;
        }
    });

    return api_res;
}

function getPopularGames(additional_params) {
    var params = {
        type: 'popular'
    }

    $.extend(params, additional_params);
    $.extend(params, collectParams());

    // console.log(params);

    // return false;

    var games = applyFilters(params);


    console.log(games);




    //return false;

    placeGames(games, 'popular');

    //gameActions();

    // if (games.show_more == true) {
    //     $('.games-section.popular-games .row .view-more').removeClass('d-none');
    // } else {
    //     $('.games-section.popular-games .row .view-more').addClass('d-none');
    // }
}

function placeGames(games, type, append = false) {
    var gamesHtml = '';

    if (games.result.length > 0) {
        $.each(games.result,function(index,value){

            var game_item = '<div class="game-item">';

            if (value.iframe_logged == undefined) {
                game_item += '<a href="#" class="game-link js-open-popup" data-touch-popup="choose-game-popup" data-popup="authorization" style="background-image: url(' + value.game_img + ');">';
            } else {
                game_item += '<a href="#" class="game-link js-open-game" data-src="' + value.iframe_logged + '" style="background-image: url(' + value.game_img + ');">';
            }

            game_item += '<div class="overlay">' +
            '<span data-text="Играть бесплатно" class="js-open-game" data-src="' + value.iframe_not_logged + '" data-game-bg="static-bg">Играть бесплатно</span>' +
            '</div>' +
            '</a>' +
            '</div>';

            $(game_item).insertAfter($('.games-list header.' + type + '-games-section'));
        });
    } else {
        gamesHtml = '<div>No Results</div>';
    }
    // $('.games-section.'+type+'-games .row.games img.loader').remove();
    // $('.games-section.'+type+'-games .row.games').append(gamesHtml);

    // if (games.show_more == true) {
    //     $('.games-section.'+type+'-games .view-more').removeClass('d-none');
    // } else {
    //     $('.games-section.'+type+'-games .view-more').addClass('d-none');
    // }
}


console.log($('.games-list header.popular-games-section'));

if ($('header.popular-games-section').is(':visible')) {
    //console.log('getPopularGames');
    getPopularGames({limit: games_count});
}