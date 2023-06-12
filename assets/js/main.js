let VND = new Intl.NumberFormat('vi-VN', {
    style: 'currency',
    currency: 'VND',
});

//upload file image
function uploadFile(inputFile, grid) {
    // Khởi tạo đối tượng FileReader
    const reader = new FileReader();

    // Lắng nghe trạng thái đăng tải tệp
    inputFile.addEventListener("change", (event) => {
        // Lấy thông tin tập tin được đăng tải
        const files = event.target.files;

        // Đọc thông tin tập tin đã được đăng tải
        reader.readAsDataURL(files[0]);

        const getSizeImage = files[0].size;

        if (getSizeImage > 1024 * 800) {
            alert("Chỉ cho phép tải tệp tin nhỏ hơn 800KB");
        }

        else {
            alert("Đăng tải tệp thành công");
            // Lắng nghe quá trình đọc tập tin hoàn thành
            reader.addEventListener("load", (event) => {
                // Lấy chuỗi Binary thông tin hình ảnh
                const img = grid.querySelector('img');

                img.setAttribute("src", event.target.result);
            })
        }
    })
}

// uploadMultipleFile 
function uploadMultipleFile(inputFile, grid) {
    inputFile.addEventListener("change", (event) => {
        // Lấy thông tin tập tin được đăng tải
        const files = event.target.files;

        for (let i = 0; i < files.length; i++) {
            const reader = new FileReader();

            reader.addEventListener('load', function (event) {
                let img = document.createElement('img');

                img.setAttribute('src', event.target.result);

                grid.appendChild(img);
            });

            reader.readAsDataURL(files[i]);
        }
    })
}


function toast({
    title = '',
    message = '',
    type = '',
    duration = 3000 }) {
    const main = document.getElementById('toast-container');
    if (main) {
        const toast = document.createElement('div');
        toast.classList.add('toast-inner', `toast--${type}`);
        const time = duration / 1000;
        toast.style.animation = `slideInLeft ease .3s, fadeOut linear 1s ${time}s forwards`
        toast.innerHTML =
            `
                <div class="toast__icon"><i class="fas fa-check-circle"></i></div>
                <div class="toast__body">
                    <span class="toast__message">${message}</span>
                </div>
                <div class="toast__close"><i class="fas fa-times"></i></div>
                <span class="toast-timer"></span>
            `
        main.appendChild(toast);

        // auto remove toast
        const autoRemove = setTimeout(function () {
            main.removeChild(toast);
        }, duration + 1000)

        // click remove toast
        toast.onclick = function (e) {
            if (e.target.closest('.toast__close')) {
                main.removeChild(toast);
                clearTimeout(autoRemove)
            }
        }
    }
}

function renderCartHeader(listCartProducts) {
    const container  = document.querySelector('.header-cart-menusub');

    if(listCartProducts.length <= 0) {

        container.innerHTML = `<div class="text-center" style="padding: 100px 0">
                                    <img src="./assets/img/order-empty.png" alt="" class="w-50">
                                    <p class="mt-4">Giỏ hàng chưa có sản phẩm nào</p>
                                </div>`;

        document.querySelector('.sum-cart-product').innerText = `Giỏ hàng (0)`;
        
    } else {
        let tongsanpham = 0;
        let tongtien = 0;

        container.innerHTML = '';

        const h6 = document.createElement('h6');
        h6.classList.add('header-cart-menusub__title');
        h6.innerText = 'SẢN PHẨM MỚI THÊM';

        const ul = document.createElement('ul');
        ul.classList.add('header-cart-menusub__list');

        let html = listCartProducts.map((item, index) => {
            let images = item.hinh_anh.split('||');
            tongsanpham++;
    
            tongtien += (item.so_luong * item.don_gia_ban) - (item.so_luong * item.don_gia_ban * 0.1);
    
            return `<li class="header-cart-menusub__item">
                            <a href="" class="header-cart-menusub__link">
                                <img src="./storage/uploads/img/${images[0]}" alt="" class="header-cart-menusub__thumbnail">
                                <div>
                                    <p class="header-cart-menusub__name">${item.ten_sp}</p>
                                    <div class="d-flex align-items-center justify-content-between">
                                        <span class="header-cart-menusub__quantity">x${item.so_luong}</span>
                                        <span class="header-cart-menusub__price">${VND.format(item.don_gia_ban - item.don_gia_ban * 0.1)}</span>
                                    </div>
                                </div>
                            </a>
                    </li>`;
        });
    
        document.querySelector('.sum-cart-product').innerText = `Giỏ hàng (${tongsanpham})`;
        ul.innerHTML = html.join('');

        container.appendChild(h6);
        container.appendChild(ul);

        container.insertAdjacentHTML('beforeend', `<div class="header-cart-menusub__footer">
                                                        <div class="header-cart-menusub__footer-heading">
                                                            <span>Tổng tiền</span>
                                                            <span class="price-total-cart">${VND.format(tongtien)}</span>
                                                        </div>
                                                        <a href="./cart.php" class="header-cart-menusub__footer-link">Xem giỏ hàng</a>
                                                    </div>`)
    }
}