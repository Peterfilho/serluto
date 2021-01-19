@if (session()->has('swal_confirm_msg'))
<script>
notification = @json(session()->pull("swal_confirm_msg"));
console.log("chegamos aqui");
  Swal.fire(
    notification.title,
    notification.text,
    notification.icon,
    notification.showCancelButton,
    notification.confirmButtonColor,
    notification.cancelButtonColor,
    notification.confirnButtonText
);
// Prevent to show notification when browser back
  @php
    session()->forget('swal_confirm_msg');
  @endphp

</script>
@endif
