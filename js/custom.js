
// Open Modal with button //
$(document).ready(function(){
    // the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
    $('.modal-trigger').leanModal();
  });
  
  //Initializing materialize.js select components
  $(document).ready(function() {
    $('select').material_select();
  });



 $('.datepicker').pickadate({
    selectMonths: true, // Creates a dropdown to control month
    selectYears: 15 // Creates a dropdown of 15 years to control year
  });


// Search Animation Script //

 var input = document.getElementById("theInput"),
    container = document.querySelector(".container");

input.addEventListener("focus", function() {
    container.classList.add("open");
});

input.addEventListener("blur", function() {
    if(!input.value) {
        container.classList.remove("open");
    }
});