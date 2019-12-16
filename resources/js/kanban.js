console.log("Hello World!");

$(document).ready(function () {
    $('.card').attr('draggable', 'true');

    $('.card-container').on('dragenter', function(e) {
        console.log("ENTERED", e);
    });
    
    $('.card-container').on('dragleave', function(e) {
        console.log("LEFT", e);
    });

    $('.card').on('dragstart', function(e) {
        console.log("TEST", e);
    });
});