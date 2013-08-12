$('#comment_form').hide();

$('#comment_link').click(function(){
    $('#comment_form').slideToggle();
    return false;
})
$('#submit').hide();

$('#hide').click(function(){
    $('.text_error').empty();
    $('.name_error').empty();

    if($('#news').val().length > 0 && $('#user').val().length > 0 ){
        $('#submit').click();

    }if($('#news').val().length <= 0){
        $('.text_error').text('Message can not be empty')
    }
    if($('#user').val().length <= 0){
        $('.name_error').text('Please enter your name')

    }
    return false;
})