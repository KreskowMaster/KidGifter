// Zaczynam na pobraniu wartości formularzy do wpisywania list prezentów

var lista = new Array();

// Kolejnym krokiem jest obsługa kliknięcia przycisku "Dodaj prezent".
// Najpierw go pobieram.

var add = $('#add');

//Następnie obsługuje zdarzenie, w którym użytkownik kliknął ten przycisk. Przy okazji sprawdzam, czy tytuł prezentu nie jest pusty, bo tylko on jest wymagany. Obsługa tego wydarzenia ma 2 kroki. 
//Pierwszy to stworzenie kodu HTML, w którym zawarte są wartości pobranych zmiennych z formularzy. 
//Drugi to wprowadzenie tego do kodu HTML.

add.click(function () {
    var formtitle = $('#formtitle').val();
    var formdesc = $('#formdesc').val();
    var formimg = $('#formimg').val();
    var template = $('.template').clone();
    template.removeClass('template');
    template.find('.image').css('background-image', 'url(' + formimg + ')');
    template.find('.name').text(formtitle);
    template.find('.desc').text(formdesc);

    var list = $('#giftlist');
    list.append(template);

    $('#formtitle, #formdesc, #formimg').val("");

    lista.push({
        formtitle: formtitle,
        formdesc: formdesc,
        formimg: formimg
    });

});



$('#end').click(function () {
    $.post("api.php", {data: lista}, function(data){
        var list_id = data.list_id;
        var password = data.password;
        window.location.href = "list.php?id=" + list_id + "&" + "password=" + password;
    }, "JSON") ;
});
