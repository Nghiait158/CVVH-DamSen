const menuMap = document.getElementById('menuMap');
const overlay = document.getElementById('overlay');

menuMap.addEventListener('click', function() {
  const svgElement = menuMap.querySelector('svg');
  if (overlay.classList.contains('hidden')) {
    overlay.classList.remove('hidden');
    overlay.classList.add('visible');
    menuMap.classList.add('active');
    svgElement.outerHTML = `<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
      <path d="M2 2L18 18M18 2L2 18" stroke="#EC008C" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/>
    </svg>`;
  } else {
    overlay.classList.remove('visible');
    setTimeout(() => {
      overlay.classList.add('hidden');
    }, 500); // Time should match the duration of the transition
    menuMap.classList.remove('active');
    svgElement.outerHTML = `<svg xmlns="http://www.w3.org/2000/svg" width="26" height="20" viewBox="0 0 26 20" fill="none">
      <path d="M2.5 10H23.5M2.5 2.5H23.5M2.5 17.5H13" stroke="#EC008C" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/>
    </svg>`;
  }
});




document.querySelectorAll('.area-item').forEach(item => {
    item.addEventListener('click', function() {
        // Xóa màu nền của đường kẻ
        const line = document.querySelector('.line');
        line.style.width = '0'; // Reset chiều rộng về 0

        // Lấy chiều rộng của phần tử văn bản hiện tại
        const itemWidth = this.offsetWidth;
        const itemLeft = this.offsetLeft;

        // Cập nhật đường kẻ để hiển thị màu nền
        line.style.width = `${itemWidth}px`;
        line.style.left = `${itemLeft}px`;
        line.style.backgroundColor = '#EC008C'; // Màu khi chọn

        // Đặt lại màu nền về mặc định sau một khoảng thời gian
        setTimeout(() => {
            line.style.backgroundColor = 'rgba(238, 205, 224, 1)'; // Quay lại màu mặc định
        }, 1000);
    });
});




document.addEventListener("DOMContentLoaded", function() {
    // Lấy các phần tử cần thiết
    const areaItems = document.querySelectorAll(".area-item");
    const listLocations = {
        "Trò chơi": document.querySelector(".list-location-TroChoi"),
        "Vườn thú": document.querySelector(".list-location-VuonThu"),
        "Cảnh đẹp": document.querySelector(".list-location-CanhDep"),
        "Sân khấu": document.querySelector(".list-location-SanKhau"),
        "Giáo dục trải nghiệm": document.querySelector(".list-location-GiaoDuc"),
        "Ẩm thực": document.querySelector(".list-location-AmThuc")
    };

    // Thêm lớp hidden ban đầu cho tất cả các danh sách
    Object.values(listLocations).forEach(location => location.classList.add("hidden"));

    // Thêm sự kiện click cho từng mục
    areaItems.forEach(function(item) {
        item.addEventListener("click", function() {
            // Ẩn tất cả các phần tử danh sách vị trí
            Object.values(listLocations).forEach(location => location.classList.add("hidden"));

            // Hiển thị phần tử tương ứng
            const selectedLocation = listLocations[item.textContent];
            if (selectedLocation) {
                selectedLocation.classList.remove("hidden");
            }
        });
    });
});