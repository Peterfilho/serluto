@if (session()->has('swal_msg'))
  <script>
    notification = @json(session()->pull("swal_msg"));

    swal.fire(notification.title, notification.message, notification.type);
    // Prevent to show notification when browser back
    @php
      session()->forget('swal_msg');
    @endphp

  </script>
@endif
