$(document).ready(function () {
    $('#leerPage').click(function (e) {
        e.preventDefault();
        $.get('../../config/funciones.php',
            function (data) {
                $.each(data, function (index, item) {
                    $('#datePage').html(
                        '<li> ${item.title} -- ${item.content}</li>'
                    );
                });
            }
        )
    });

});

function viewPage(){
    $.ajax({
        type: "GET",
        url: "../../config/funciones.php",
        success: function (res) {
            var js = JSON.parse(res);
            var datos;
            for (let i = 0; i <js.length; i++) {
                
                
            }
            
        }
    });
}
