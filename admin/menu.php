<li class="active">
    <a href="">
        <span class="isw-fullscreen"></span><span class="text">Danh mục tùy chọn</span>
    </a>
</li>
<li class="openable">
    <a href="">
        <span class="isw-list"></span><span class="text">Sản phẩm</span>
    </a>
    <ul>
        <li>
            <a href="index.php?page=product_show">
                <span class="icon-th-large"></span><span class="text">Danh sách sản phẩm</span>
            </a>                  
        </li>          
        <li>
            <a href="index.php?page=add_product">
                <span class="icon-pencil"></span><span class="text">Thêm sản phẩm</span>
            </a>                  
        </li>                                        
    </ul>                
</li>                                                                                                                                           
<li class="openable">
    <a href="">
        <span class="isw-list"></span><span class="text">Loại sản phẩm</span>                    
    </a>
    <ul>
        <li>
            <a href="index.php?page=product_categories">
                <span class="icon-th-large"></span><span class="text">Danh sách loại sản phẩm</span>
            </a>
        </li>
        <li>
            <a href="index.php?page=add_categories">
                <span class="icon-pencil"></span><span class="text">Thêm loại sản phẩm</span>
            </a>
        </li>                    
    </ul>
</li> 
<li class="openable">
    <a href="">
        <span class="isw-list"></span><span class="text">Nhà sản xuất</span>                    
    </a>
    <ul>
        <li>
            <a href="index.php?page=manufacturers_show">
                <span class="icon-th-large"></span><span class="text">Danh sách nhà sản xuất</span>
            </a>
        </li>
        <li>
            <a href="index.php?page=add_manufacturers">
                <span class="icon-pencil"></span><span class="text">Thêm nhà sản xuất</span>
            </a>
        </li>                    
    </ul>
</li> 
<li class="openable">
    <a href="">
        <span class="isw-list"></span><span class="text">Quảng cáo</span>                    
    </a>
    <ul>
        <li>
            <a href="index.php?page=show_adv">
                <span class="icon-th-large"></span><span class="text">Danh sách quảng cáo</span>
            </a>
        </li>
        <li>
            <a href="index.php?page=add_adv">
                <span class="icon-pencil"></span><span class="text">Thêm quảng cáo</span>
            </a>
        </li>                    
    </ul>
</li> 
<li class="openable">
    <a href="">
        <span class="isw-list"></span><span class="text">Banner-Logo</span>                    
    </a>
    <ul>
        <li>
            <a href="index.php?page=show_banner_logo">
                <span class="icon-th-large"></span><span class="text">Danh sách banner-logo</span>
            </a>
        </li>
        <li>
            <a href="index.php?page=add_banner_logo">
                <span class="icon-pencil"></span><span class="text">Thêm banner-logo</span>
            </a>
        </li>                    
    </ul>
</li> 
<li class="openable">
    <a href="">
        <span class="isw-list"></span><span class="text">Thông tin quản trị viên</span>                    
    </a>
    <ul>
        <li>
            <a href="index.php?page=show_admin">
                <span class="icon-th-large"></span><span class="text">Danh sách quản trị viên</span>
            </a>
        </li>
        <?php
        include('check_admin.php');
        if ($_SESSION["author"] == 1) {
        echo "<li>
        <a href = 'index.php?page=add_admin'>
        <span class = 'icon-pencil'></span><span class = 'text'>Thêm quản trị viên</span>
        </a></li>";
        }
        ?>
    </ul>
</li> 
<li class="openable">
    <a href="">
        <span class="isw-list"></span><span class="text">Thông tin công ty</span>                    
    </a>
    <ul>
        <li>
            <a href="index.php?page=show_info">
                <span class="icon-th-large"></span><span class="text">Danh sách thông tin</span>
            </a>
        </li>
        <li>
            <a href="index.php?page=add_info">
                <span class="icon-pencil"></span><span class="text">Thêm thông tin</span>
            </a>
        </li>                    
    </ul>
</li> 