<!-- Left Panel -->

    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">

            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="dashboard.php">
                    <?php if ($_SESSION['role'] == 1){
                        echo "GoDeh Admin";
                    }
                    else{
                        echo "GoDeh Driver";
                    }
                    ?></a>
            </div>

            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="<?php echo ($page=="dashboard" ? "active" : ""); ?>">
                        <a href="dashboard.php"> <i class="menu-icon fa fa-dashboard"></i>Dashboard </a>
                    </li>

                    <li class="<?php echo ($page=="drivers" ? "active" : ""); ?>">
                        <a href="drivers.php"> <i class="menu-icon fa fa-eye"></i>Drivers </a>
                    </li>

                    
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside><!-- /#left-panel -->

    <!-- Left Panel -->