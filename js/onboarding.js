// js for onboarding flow, includes dependencies for splash.php, signup.php and success.php //

//Get the text entry in a form field (checkListItem) when #button is clicked //

$(document).ready(function() {
    $('#button').click(function();
    var toAdd = $('input[name=checkListItem]').val();
}); 


//Add the input from a text field to a list //

$(document).ready(function() {
    $('moreScholars').click(function() {
    var toAdd = $('input[name=checkListItem]').val();
    $('.list').append('<div id="addScholars">' + toAdd + '</div>');
    });

    //remove element on click //
    $(document).on('click','#addText', function() {
    $(this).remove();
});
    
}); 


