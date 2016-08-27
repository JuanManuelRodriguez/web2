$(document).ready(function(){
    var count=0;
    var inputCreated;
    $('.create-input').on('click',function(){
        inputCreated = $('<input/>', {
            'name' : 'inputN['+count+']',
        });
        $('.formulario').append(inputCreated);
        count++;
    });
    $(".formulario").submit(function(){
        event.preventDefault();
        var data = $(this).serialize();
        console.log(data);
        $.post("prac1-ejer4.php",data,function(response) {
            $(".result").html(response);
        });
    });
});
