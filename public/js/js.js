function autoHeight() {
    $('main').css('min-height', 0);
    $('main').css('min-height', (
      $(document).height() 
      - $('header').height() 
      - $('footer').height()
    ));
  }
  $(document).ready(function() {
    autoHeight();
  });
  $(window).resize(function() {
    autoHeight();
  });



  $('.imagine a').fancybox();
  



  function myMap() {
    var mapOptions = {
        center: new google.maps.LatLng(56.9, 24.1),
        zoom: 10,
        mapTypeId: google.maps.MapTypeId.HYBRID
    }
var map = new google.maps.Map(document.getElementById("map"), mapOptions);
}



$( function() {
$( "#tabss" ).tabs();
});


$( function() {
  $( "#tabsUnkn" ).tabs();
  } );



  $('#msgbutton').click(function(){
    var username = $('#chat-username-input').val();
    var text = $('#chat-text-input').val();
    var data = new Date();
    var html = '<div class="chat-message">'+
        '<h5>' +username+ ' <em> ' +data+ '</em></h5>'+
        '<p>' +text+ '</p>'+
        '</div>';
    $('.chat-Window').append(html);
    $('#chat-text-input').val('');
    });

    // CHAT
// var app = new Vue ({
//     el:'#chat',
//     data: {
//        messages:[
            
//         ],
//        newMessageUsername: "",
//        newMessageText: "",
//         },
//         created:function(){
//             var that = this;
//             $.getJSON('/chat/get-messages', function(resp){
//                 for (var index = 0; index < resp.lenght; index++) {
//                     var element = resp[index];
//                     console.log(element);
//                     var newAdd = {
//                         username: element.username,
//                         text: element.text,
//                         date: element.created_at

//                     }
//                     this.messages.push(newAdd);
//                 }
//             })
//             // console.log('create chat!');
//         },
//         methods: {
//             sendMessage:function(){
//                 var newAdd = {
//                     username: this.newMessageUsername,
//                     text: this.newMessageText,
//                     date: new Date ()  
//                 }
//                 this.messages.push(newAdd);
//                 this.newMessageText ='';
//                 $.post('/chat/save-message', newAdd, function(res){
//                     console.log(res);
//                 });
//             }
//         }
//    });





$('.buttn').click(function(){
    var errors = [];
    $('.errors ul').html('');
    $('.has-error').removeClass('has-error');
    
    if($('input[name="firstName"]').val() == ''){
        errors.push('Enter Name');
        $('input[name="firstName"]').addClass('has-error');
    }
    if($('input[name="lastName"]').val() == ''){
        errors.push('Enter Surname');
        $('input[name="lastName"]').addClass('has-error');
    }
    if($('input[name="username"]').val() == ''){
        errors.push('Enter Username');
        $('input[name="username"]').addClass('has-error');
    }
    if($('input[name="password"]').val() == ''){
        errors.push('Enter Password');
        $('input[name="password"]').addClass('has-error');
    }
    if($('input[name="password"]').val().length < 4){
        errors.push('Password to short, at least 4 symbols');
        $('input[name="password"]').addClass('has-error');
    }
    if($('input[name="password2"]').val() == ''){
        errors.push('Enter Password');
        $('input[name="password2"]').addClass('has-error');
    }
    if($('input[name="password2"]').val() != $('input[name="password"]').val()){ 
        errors.push('Password didnt match');
        $('input[name="password"]').addClass('has-error');
        $('input[name="password2"]').addClass('has-error');
    }
    if($('input[name="phone"]').val() == ''){
        errors.push('Enter Phone');
        $('input[name="phone"]').addClass('has-error');
    }
    if($('input[name="mail"]').val() == ''){
        errors.push('Enter E-mail');
        $('input[name="mail"]').addClass('has-error');
    }
    if($('input[name="address"]').val() == ''){
        errors.push('Enter Address');
        $('input[name="address"]').addClass('has-error');
    }
    // if($('select[name="country"]').val() == 0){
    //     errors.push('Select Country');
    //     $('input[name="country"]').addClass('has-error');
    // }
    if($('select[name="country"]').val() == ''){
        errors.push('Select Country');
        $('input[name="country"]').addClass('has-error');
    }
    if(!$('input[name="agree"]').is(":checked")){
        errors.push('Agree all');
        $('input[name="agree"]').addClass('has-error');
    }
    if(errors.length > 0) {
        for(var index = 0; index < errors.length; index++) {
            var element = errors[index];
            $('.errors ul').append('<li>' + element + '</li>');
        }
        $('.errors').show();
        return false;
    }

});