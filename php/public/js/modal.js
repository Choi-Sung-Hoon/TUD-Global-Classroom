$(document).ready(function () {

    //Display modal when clicking the button
    $('.adventure-button').on('click', function () {
        $('.adventure-modal').css('display', 'block');
    });

    //Close modal when clicking outside the modal
    $('.adventure-modal').on('click', function () {
        $('.adventure-modal').css('display', 'none');
    });

    // //Click handlers for modal buttons.
    // $('.outdoor').click(function (e) {
    //     console.log("Outdoor");
    //     $(location).attr('href','/events.php');
    //     e.stopPropagation();
    // });
    // $('.indoor').click(function (e) {
    //     console.log("Indoor");
    //     $(location).attr('href','/events.php');
    //     e.stopPropagation();
    // });

});
