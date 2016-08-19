$( "#hwyd" ).on("change", function(){
    var str = $("#hwyd option:selected" ).text();
    if(str === 'OTRO'){
        mostrarCampoCual();
    } else {
        esconderCampoCual();
    }
});

function mostrarCampoCual(){
    $("#cual").fadeIn("slow", function(){
        $("#cual").css('display', 'block');
    });
}

function esconderCampoCual(){
    $("#cual").css('display', 'none');
}