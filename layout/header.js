document.getElementById('product-menu').addEventListener('click', function(event) {
     event.preventDefault(); // Ngăn chặn hành động mặc định khi nhấp vào liên kết
 
     var submenu = document.getElementById('product-submenu');
     submenu.style.display = submenu.style.display === 'block' ? 'none' : 'block'; // Toggle hiển thị
 });
 
 // Ẩn hộp thoại khi nhấp ra ngoài
 document.addEventListener('click', function(event) {
     var submenu = document.getElementById('product-submenu');
     var isClickInside = document.getElementById('product-menu').contains(event.target);
 
     if (!isClickInside) {
         submenu.style.display = 'none';
     }
 });
 