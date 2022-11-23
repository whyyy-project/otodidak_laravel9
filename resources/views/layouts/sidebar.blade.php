<div class="left side-menu">
    <div class="sidebar-inner slimscrollleft">
        <!-- Search form -->
        <form role="search" class="navbar-form" action="?hlm=cari" method="POST">
            <div class="form-group">

                <input type="text" name="id" placeholder="Cari Fasilitas" class="form-control">
                <button type="submit" name="cari" class="btn search-button"><i class="fa fa-search"></i></button>

            </div>
        </form>
        <div class="clearfix"></div>
        <!--- Profile -->
        <div class="profile-info">
            <div class="col-xs-4">
                <a href="./" class="rounded-image profile-image"><img src="images/logounugiri.png"></a>
            </div>
            <div class="col-xs-8">
                <div class="profile-text">Welcome <b>
                        Wahyu
                    </b>
                </div>
            </div>
        </div>
        <div class="clearfix"></div>
        <hr class="divider" />
        <div class="clearfix"></div>

        <div id="sidebar-menu">
            <ul>
                <li class=''>
                    <a href="index.php">
                        <i class='fa fa-home'></i><span>Dashboard</span> </i>
                    </a>
                </li>

                <li class='has_sub'><a href='javascript:void(0);'>
                        <i class='fa fa-book'></i><span>Data Fasilitas</span>
                        <span class="pull-right"><i class="fa fa-angle-down"></i></span></a>
                    <ul>
                        <li><a href='?hlm=gedung'><i class="fa fa-building-o"></i> <span>Fasilitas
                                    Gedung</span></a></li>
                        <li><a href='?hlm=barang'><i class="fa fa-dashboard"></i> <span>Fasilitas
                                    barang</span></a></li>
                    </ul>
                </li>
                <li class=''>
                    <a href="?hlm=riwayat">
                        <i class='fa fa-folder'></i><span>Riwayat Peminjaman</span> </i>
                    </a>
                </li>
            </ul>
        </div>

    </div>
</div>
