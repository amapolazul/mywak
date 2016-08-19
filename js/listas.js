$("#pais").change(function(){
    var pais = $("#pais option:selected" ).text();
    $.get('/mywak/recursos/paises-y-ciudades.php', { country: pais }, function(data) {
        $("#ciudad").html(data);
    });
});
