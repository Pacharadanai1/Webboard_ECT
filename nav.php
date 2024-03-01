<nav class="navbar navbar-expand-lg bg-success ">
            <div class="container-fluid">
                <a class="navbar-brand text-white" href="index.php"><i class="bi bi-house-fill"></i>Home</a>
                <ul class="navbar-nav">
                    <?php if (!isset($_SESSION['id'])) { ?>
                        <li class="nav-item">
                            <a class="nav-link text-white" aria-current="page" href="login.php">
                                <i class="bi bi-pencil-square"></i>เข้าสู่ระบบ
                            </a>
                        </li>
                    <?php } else { ?>
                        <li class="nav-item dropdown ">
                            <a class="btn btn-outline-info dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="bi bi-person-circle"></i> <?php echo $_SESSION['username'] ?>
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a class="dropdown-item" href="logout.php">
                                        <i class="bi bi-power"></i>ออกจากระบบ</a>
                                </li>
                        </li>
                    <?php } ?>
                </ul>
            </div>
        </nav>