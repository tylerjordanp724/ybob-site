$(document).ready(function(){
    $('select').selectric();
    
    $(this).on("sf:ajaxstart", ".searchandfilter", function(){
        $('select').selectric();
    });
    
});