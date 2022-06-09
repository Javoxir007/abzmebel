$("#open").click(function() {
    $("#modal").addClass("open-modal");
    $("#body").addClass("body-hidden-for-modal");
});

$("#close").click(function() {
    $("#modal").removeClass("open-modal");
    $("#body").removeClass("body-hidden-for-modal");
});


/* Modal true send */
/* $("#call").click(function() {
    $("#modal-send").addClass("open-modal-send");
    $("#body").addClass("body-hidden-for-modal-send");
});

$("#close-send").click(function() {
    $("#modal-send").removeClass("open-modal-send");
    $("#body").removeClass("body-hidden-for-modal-send");
}); */

/* inputmask ни ишлатганда якса болади */
/* $(document).ready(function() {
    $('.phone_number').inputmask('(99)-999-9999');
});
 */

/* 
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.inputmask/3.3.4/jquery.inputmask.bundle.min.js"></script>
*/
