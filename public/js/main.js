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
//
// function deleteConfirmation(id) {
//
//   swal.fire({
//     title: "Excluir?",
//     text: "Isso não poderá ser desfeito!",
//     icon: "warning",
//     showCancelButton: !0,
//     confirmButtonText: "Sim, excluir!",
//     cancelButtonText: "Não, cancelar!",
//     reverseButtons: !0
//   }).then(function (e) {
//     if (e.value === true) {
//       var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
//       console.log(CSRF_TOKEN)
//
//       $.ajax({
//         type: 'DELETE',
//         url: $this.data('url'),
//         data: {_token: CSRF_TOKEN},
//         dataType: 'JSON',
//         success: function (results) {
//
//           if (results.success === true) {
//             swal("Done!", results.message, "success");
//           } else {
//             swal("Error!", results.message, "error");
//           }
//         }
//       });
//
//     } else {
//       e.dismiss;
//     }
//
//   }, function (dismiss) {
//     return false;
//   })
// }
