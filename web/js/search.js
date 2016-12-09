$(document).ready(function () {

    $search_input = $('#search_input');
    $result_search = $('.result_search');
    $list_search = $('.list_search');

    $result_search.hide();

    $search_input.keyup(function () {
        $list_search.html("");
        if ($search_input.val().length > 0) {
            $result_search.show();
            $.ajax({
                type: 'get',
                url: 'http://localhost:8000/search/tutorial/' + $search_input.val(),
                success: function (data) {
                    $list_search.html("");
                    $list_search.append("<li>Resultat trouver: " + data.length + "</li>");

                    for (var i = 0; i < data.length; i++) {
                        if (i < 7) {
                            $list_search.append("<li><a href='/tuto/view/" + data[i].id + "'>" + data[i].title_stu + "</a></li>");
                        }
                    }

                    if (data.length > 6) {
                        $list_search.append("<li><a href='/search/tutorial/view/"+ $search_input.val() +"'>Voir plus de résultat</a></li>");
                    }

                }, error: function (error) {
                    console.log(error);
                }
            });
        } else {
            $result_search.hide();
        }
    });

});