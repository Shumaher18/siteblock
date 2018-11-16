//
// var global_opened_object = {};
//
// function showHide(obj){
//   obj = obj || null;
//   if(obj){
//     var action_item_id = obj.getAttribute('data-item');
//     var action_item_obj = document.getElementById(action_item_id);
//     if(action_item_obj.className == 'shown'){
//       action_item_obj.className = 'hidden';
//     }else{
//       action_item_obj.className = 'shown';
//       global_opened_object = action_item_obj;
//     }
//   }else{
//     global_opened_object.className = 'hidden';
//   }
//
// }
//
// document.body.addEventListener('click', function(event){
//   var asd = {};
//   asd = event.target;
//   console.log(asd);
//   //console.log(global_opened_object);
//   if(event.target.parentNode!=global_opened_object&&!event.target.getAttribute('data-item')) showHide(null);
// });
//
$(document).ready(function(){
  $('.popup .close_window, .overlay').click(function (){
    $('.popup, .overlay').css({'opacity':'0', 'visibility':'hidden'});
  });
  $('a.open_window').click(function (e){
    $('.popup, .overlay').css({'opacity':'1', 'visibility':'visible'});
    e.preventDefault();
  });
});
