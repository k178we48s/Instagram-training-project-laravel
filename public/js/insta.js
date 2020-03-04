$(document).ready(function(){
    $('.add_to_favourites').on('submit', function(e) {
        e.preventDefault();
        $.ajaxSetup({
            headers: {
              'X-CSRF-TOKEN': $("input[name='_token']", $(this)).val()
            }
        });
        $.ajax({
            type: 'POST',
            url: 'add_to_favourites',
            data: {
                'link': $("input[name='link']", $(this)).val(),
                'url': $("input[name='url']", $(this)).val(),
            },
            success: function(result) {
                $("input[value='" + result + "'].add_to_favourites").parent().hide();
                $("input[value='" + result + "'].delete_from_favourites").parent().show();
            }
        });
    });

    $('.delete_from_favourites').on('submit', function(e) {
        e.preventDefault();
        $.ajaxSetup({
            headers: {
              'X-CSRF-TOKEN': $("input[name='_token']", $(this)).val()
            }
        });
        $.ajax({
            type: 'POST',
            url: 'delete_from_favourites',
            data: {
                'link': $("input[name='link']", $(this)).val(),
            },
            success: function(result) {
                $("input[value='" + result + "'].delete_from_favourites").parent().hide();
                $("input[value='" + result + "'].add_to_favourites").parent().show();
            }
        });
    });
});

$(document).ajaxSend(function(event, request, settings) {
    $('#loading-indicator').show();
});

$(document).ajaxComplete(function(event, request, settings) {
    $('#loading-indicator').hide();
});