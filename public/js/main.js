document.addEventListener('DOMContentLoaded', function() {
   var elems = document.querySelectorAll('.dropdown-trigger');
   var instances = M.Dropdown.init(elems,{
     coverTrigger: false,
   });
 });

// FUNÇÃO WPP
// $(document).ready(function(){
//    $('.tap-target').tapTarget();
//    $('.tap-target').tapTarget('open');
//  });
//  function closeFeatureDiscovery() {
//    $('.tap-target').tapTarget('close');
//    $('.tap-target').tapTarget('destroy');
//  }

$(document).ready(function(){
   $('.sidenav').sidenav();
 });
       
document.addEventListener('DOMContentLoaded', function() {
   var elems = document.querySelectorAll('.fixed-action-btn');
   var instances = M.FloatingActionButton.init(elems);
 });

// document.addEventListener('DOMContentLoaded', function() {
//  var elems = document.querySelectorAll('.fixed-action-btn');
//  var instances = M.FloatingActionButton.init(elems, {
//    direction: 'left'
//  });
// });
