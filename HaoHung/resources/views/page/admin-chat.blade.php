<!DOCTYPE html>
<html lang="en" dir="ltr">


<!-- Mirrored from andit.co/projects/html/andshop/andshop-dashboard/user-list.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 20 Mar 2025 12:09:19 GMT -->

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta name="description" content="Andshop - Admin Dashboard HTML Template.">

  <title>ADMIN</title>

  <!-- GOOGLE FONTS -->
  <link rel="preconnect" href="https://fonts.googleapis.com/">
  <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;300;400;500;600;700;800&amp;family=Poppins:wght@300;400;500;600;700;800;900&amp;family=Roboto:wght@400;500;700;900&amp;display=swap"
    rel="stylesheet">

  <link href="{{ asset('assets/css/materialdesignicons.min.css') }}" rel="stylesheet" />
  <!-- PLUGINS CSS STYLE -->
  <link href="{{ asset('assets/plugins/simplebar/simplebar.css') }}" rel="stylesheet" />

  <!-- Data Tables -->
  <link href='{{ asset('assets/plugins/data-tables/datatables.bootstrap5.min.css') }}' rel='stylesheet'>
  <link href='{{ asset('assets/plugins/data-tables/responsive.datatables.min.css') }}' rel='stylesheet'>

  <!-- custom css -->
  <link id="style.css" rel="stylesheet" href="{{ asset('assets/css/style.css') }}" />

  <!-- FAVICON -->
  <link href="{{ asset('assets/img/favicon.png') }}" rel="shortcut icon" />
</head>
<style>
  .chat-container {
  border: 1px solid #ccc;
  max-width: 1500px;
  margin: 0 auto;
  display: flex;
  flex-direction: column;
  height: 80vh;
}

.chat-box {
  flex: 1;
  overflow-y: auto;
  padding: 10px;
  background: #f5f5f5;
}

.message-wrapper {
  margin: 5px 0;
  display: flex;
}

.from-admin {
  justify-content: flex-end;
}

.from-customer {
  justify-content: flex-start;
}

.message {
  background: #e0f7fa;
  padding: 10px;
  border-radius: 10px;
  max-width: 90%;
}

.chat-input {
  display: flex;
  padding: 10px;
  background: #fff;
  border-top: 1px solid #ccc;
}

.chat-input input {
  flex: 1;
  margin-right: 10px;
  padding: 8px;
}

</style>

<body class="ec-header-fixed ec-sidebar-fixed ec-sidebar-dark ec-header-light" id="body">


  @include('outside.header')

  <!-- Sidebar / Navb    views

roar -->
  @include('outside.navbar')


  
    @section('content')
        <main class="main-content">
            <div class="wrapper">
                <div class="ec-page-wrapper">
                    <div class="ec-content-wrapper">
                        <div class="content">
                             <div class="chat-container" style="flex-direction: row;">
                              <!-- Cột danh sách khách hàng -->
                             <div style="width: 300px; border-right: 1px solid #ccc; overflow-y: auto;">
                             <h4 style="padding: 10px;">Khách hàng</h4>
                            <ul style="list-style: none; padding: 0;">
                               @foreach($customers as $customer)
                             <li style="padding: 10px; border-bottom: 1px solid #eee;">
                            <a href="{{ route('chat.admin', ['customer_id' => $customer->id]) }}">
                               {{ $customer->name ?? 'Khách hàng #'.$customer->id }}
                             </a>
                             </li>
                            @endforeach
                            </ul>
                         </div>

  <!-- Cột nội dung chat -->
  <div style="flex: 1; display: flex; flex-direction: column;">
    <div class="chat-box" id="chat-box">
      @forelse ($messages as $msg)
        <div class="message-wrapper {{ $msg->sender_id === auth()->id() ? 'from-admin' : 'from-customer' }}">
          <div class="message">
            {{ $msg->message }}
          </div>
        </div>
      @empty
        <em style="padding: 10px;">Chưa có tin nhắn nào với khách hàng này.</em>
      @endforelse
    </div>

    @if ($selectedCustomer)
    <form action="{{ route('chat.admin.send') }}" method="POST" class="chat-input">
      @csrf
      <input type="hidden" name="receiver_id" value="{{ $selectedCustomer->id }}">
      <input type="text" name="message" placeholder="Nhập tin nhắn..." required>
      <button type="submit">Gửi</button>
    </form>
    @endif
  </div>
</div>

                        </div>
                    </div>
                </div>
            </div>
        </main>
    @endsection
  
  @include('outside.footer')
  <!-- Common Javascript -->
  <script src="{{ asset('assets/plugins/jquery/jquery-3.5.1.min.js') }}"></script>
  <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('assets/plugins/simplebar/simplebar.min.js') }}"></script>
  <script src="{{ asset('assets/plugins/jquery-zoom/jquery.zoom.min.js') }}"></script>
  <script src="{{ asset('assets/plugins/slick/slick.min.js') }}"></script>

  <!-- Data Tables -->
  <script src='{{ asset('assets/plugins/data-tables/jquery.datatables.min.js') }}'></script>
  <script src='{{ asset('assets/plugins/data-tables/datatables.bootstrap5.min.js') }}'></script>
  <script src='{{ asset('assets/plugins/data-tables/datatables.responsive.min.js') }}'></script>
  <script src="{{ asset('assets/plugins/options-sidebar/optionswitcher.js') }}"></script>

  <!-- custom js -->
  <script src="{{ asset('assets/js/custom.js') }}"></scrip
      <script>
      window.onload = function () {
        const chatBox = document.getElementById("chat-box");
        chatBox.scrollTop = chatBox.scrollHeight;
      };
  </script>
</body>

</html>