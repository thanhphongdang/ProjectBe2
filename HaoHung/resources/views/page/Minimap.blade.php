<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Filter Showroom</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link rel="stylesheet" href="style.css" />
    <style>
        html, body {
      height: 100%;
      margin: 0;
      padding: 0;
      display: flex;
      flex-direction: column;
    }

    body > main {
      flex: 1;
    }

    * { margin: 0; padding: 0; box-sizing: border-box; font-family: sans-serif; }
    body { background-color: #f8f8f8; color: #333; }

    /* Navbar */
    .navbar { background-color: #000; padding: 10px 20px; }
    .nav-list { list-style: none; display: flex; align-items: center; justify-content: space-between; flex-wrap: wrap; }
    .nav-list li { margin: 5px 10px; }
    .nav-list a { color: white; text-decoration: none; font-weight: bold; }
    .nav-list input[type="text"] { padding: 5px; border-radius: 4px; border: none; }
    .nav-list button { padding: 5px 10px; margin-left: 5px; border: none; background-color: white; border-radius: 4px; cursor: pointer; }
        body { background-color: #f8f8f8; }
        .map-container { display: flex; gap: 30px; padding: 20px; flex-wrap: wrap; }
        .dropdowns { display: flex; gap: 20px; flex-wrap: wrap; margin-bottom: 20px; }
        .dropdown-group { flex: 1; min-width: 200px; }
        .search-btn { padding: 10px 20px; background-color: #f44336; color: white; border: none; border-radius: 6px; margin-top: 32px; }
        iframe { border-radius: 8px; }

        /* Footer */
    .footer {
      background: linear-gradient(to right, #131313, #131313);
      padding: 40px 20px;
      width: 100vw;
      color: white;
    }
    </style>
</head>
<body>

<!-- Navbar -->
<nav class="navbar">
    <ul class="nav-list">
      <li><a href="{{ route('product') }}">Home</a></li>
      <li><a href="#">Categories</a></li>
      <li><a href="{{ route('makeappointment') }}">Make an Appointment</a></li>
      <li><a href="#">Shopping Cart</a></li>
      <li><a href="{{ route('map') }}">Map</a></li>
      <li><a href="#">Customer Support</a></li>
      <li><a href="#">Introduce</a></li>
      <li>
        <input type="text" placeholder="Search...">
        <button>🔍</button>
      </li>
    </ul>
  </nav>

<div class="container mt-4">

    <form method="POST" action="{{ route('map.search') }}">
        @csrf
        <div class="dropdowns">
            <div class="dropdown-group">
                <label for="region">KHU VỰC</label>
                <select id="region" name="region_id" class="form-control" onchange="updateDistricts()">
                    <option value="">Chọn khu vực</option>
                    <option value="south">Khu vực miền Nam</option>
                    <option value="north">Khu vực miền Bắc</option>
                </select>
            </div>

            <div class="dropdown-group">
                <label for="district">QUẬN / HUYỆN</label>
                <select id="district" name="district" class="form-control">
                    <option value="">Chọn Quận Huyện</option>
                </select>
            </div>

            <div class="dropdown-group">
                <label for="agency">LOẠI ĐẠI LÝ</label>
                <select id="agency" name="agency_type" class="form-control">
                    <option value="">Chọn loại đại lý</option>
                    <option value="Bán xe hơi">Bán xe hơi</option>
                    <option value="Bảo dưỡng">Bảo dưỡng</option>
                </select>
            </div>

            <div>
                <button type="submit" class="search-btn">Tìm kiếm</button>
            </div>
        </div>
    </form>

    <hr>

    <div class="map-container">
        <div class="map-left" style="flex: 1; min-width: 300px;">
            @if(isset($agencies) && count($agencies))
                <iframe id="mainMap"
                        src="{{ $agencies[0]->google_map_embed }}"
                        width="100%" height="300" style="border:0;" allowfullscreen loading="lazy">
                </iframe>
            @else
                <iframe id="mainMap"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.3725255854763!2d106.70042307467618!3d10.78291125910425!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752f3d9c5bb7d3%3A0x253ab87c037c89e3!2zVHLGsOG7nW5nIMSQ4bqhaSBI4buNYyBIQ00!5e0!3m2!1svi!2s!4v1715132955441!5m2!1svi!2s"
                        width="100%" height="300" style="border:0;" allowfullscreen loading="lazy">
                </iframe>
            @endif
        </div>
    
        <div class="map-right" style="flex: 1; min-width: 300px;">
            @if(isset($agencies))
                @forelse($agencies as $agency)
                    <div class="card mb-3 shadow-sm border-0 agency-card"
                         data-map-url="{!! e($agency->google_map_embed) !!}"
                         style="cursor: pointer;">
                        <div class="card-body">
                            <h5 class="card-title text-danger">
                                <i class="fas fa-store me-2"></i>{{ $agency->name }}
                            </h5>
                            <p class="card-text mb-1"><strong>📍 Địa chỉ:</strong> {{ $agency->address }}</p>
                            <p class="card-text"><strong>🏷️ Loại:</strong> {{ $agency->type }}</p>
                        </div>
                    </div>
                @empty
                    <div class="alert alert-warning">Không tìm thấy showroom phù hợp.</div>
                @endforelse
            @endif
        </div>
    </div>        

</div>

<!-- Footer -->
<footer class="footer text-white">
    <p class="text-end me-4">Hotline 📞 1800 9031</p>
    <div class="container">
      <h4 class="text-uppercase fw-bold mb-4 text-white">THÔNG TIN LIÊN HỆ</h4>
      <div class="row">
        <div class="col-md-4 mb-3">
          <h5 class="text-white">⏰ Thời gian mở cửa</h5>
          <p style="color: #ff4d4d; font-size: 1.2rem; margin-bottom: 0;"><strong>07:30 – 20:00</strong></p>
          <p style="color: #ccc;">Mở cửa tất cả các ngày trong tuần kể cả ngày lễ</p>
        </div>
        <div class="col-md-4 mb-3">
          <h5 class="text-white">🏢 VĂN PHÒNG MIỀN BẮC</h5>
          <p><strong>Trụ sở:</strong> Số 2287 Đường Hùng Vương, Phường Nông Trang, Thành phố Việt Trì, Tỉnh Phú Thọ</p>
          <p><strong>📞:</strong> 1900 555 555</p>
        </div>
        <div class="col-md-4 mb-3">
          <h5 class="text-white">🏢 VĂN PHÒNG MIỀN NAM</h5>
          <p><strong>Trụ sở:</strong> Lô 8A, Đường Đồng Khởi, Phường Tân Hiệp, Thành phố Biên Hòa, Tỉnh Đồng Nai</p>
          <p><strong>📞:</strong> 1800 6653</p>
        </div>
      </div>
      <hr style="border-color: rgba(255,255,255,0.4);">
      <div class="d-flex align-items-center justify-content-center">
        <h3 class="text-center">Cảm ơn quý khách hàng đã tin tưởng, ủng hộ, tin cậy và sử dụng dịch vụ của cửa hàng chúng tôi!</h3>
      </div>
    </div>
  </footer>

<script>
    function updateDistricts() {
        const region = document.getElementById("region").value;
        const district = document.getElementById("district");

        // Danh sách quận/huyện theo khu vực
        const districtsByRegion = {
            south: [
                "Hồ Chí Minh",
                "Đồng Nai",
                "Tây Ninh",
                "Bình Dương"
            ],
            north: [
                "Hà Nội",
                "Phú Thọ",
                "Hải Phòng",
                "Bắc Ninh"
            ]
        };

        district.innerHTML = "<option value=''>Chọn Quận Huyện</option>";

        if (districtsByRegion[region]) {
            districtsByRegion[region].forEach(function (item) {
                const option = document.createElement("option");
                option.value = item;
                option.text = item;
                district.appendChild(option);
            });
        }
    }
</script>

<script>
    function changeMap(mapUrl) {
        console.log("changeMap called with URL:", mapUrl);
        if (!mapUrl) {
            alert("Map URL is empty or invalid.");
            return;
        }
        const iframe = document.getElementById('mainMap');
        if (iframe) {
            iframe.src = mapUrl;
        } else {
            console.error("Iframe with id 'mainMap' not found.");
            alert("Map iframe not found on the page.");
        }
    }

    document.addEventListener('DOMContentLoaded', function () {
        const cards = document.querySelectorAll('.agency-card');
        cards.forEach(card => {
            card.addEventListener('click', function () {
                const mapUrl = this.getAttribute('data-map-url');
                console.log('Agency card clicked, map URL:', mapUrl);
                changeMap(mapUrl);
            });
        });
    });
</script>

</body>
</html>