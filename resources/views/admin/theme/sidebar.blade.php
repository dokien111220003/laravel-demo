    <nav id="sidebar">
        <div class="p-4 pt-5">
        <a href="#" class="img logo rounded-circle mb-5" style="background-image: url({{asset('admin/images/logo.jpg')}});"></a>
        <ul class="list-unstyled components mb-5">
            <li class="active">
            <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
            Quản lý tài khoản
            </a>
      <ul class="collapse list-unstyled" id="homeSubmenu">
            <li>
                <a href="{{route('user.index')}}">Tài khoản của tôi</a>
            </li>
            <li>
                <a href="#">Tất cả tài khoản</a>
            </li>
            <li>
                <a href="#">Phân quyền</a>
            </li>
            </ul>
            </li>
            
            <li>
            <a href="#product" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
            Quản lý sản phẩm
            </a>
            <ul class="collapse list-unstyled" id="product">
                <li>
                    <a href="{{route('category.index')}}">Danh mục sản phẩm</a>
                </li>
                <li>
                    <a href="{{route('product.index')}}">Sản phẩm</a>
                </li>
            </ul>
           
            </li>


            <li>
            <a href="#news" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
            Quản lý thông tin
            </a>
            <ul class="collapse list-unstyled" id="news">
                <li>
                    <a href="{{route('category.index')}}">- Danh mục thông tin</a>
                </li>
                <li>
                    <a href="{{route('product.index')}}">- Chi tiết thông tin</a>
                </li>
            </ul>
           
            </li>

            <li>
            <a href="#">Portfolio</a>
            </li>
            <li>
            <a href="#">Contact</a>
            </li>
         </ul>

    <div class="footer">
        <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib.com</a>
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
    </div>

    </div>
</nav>