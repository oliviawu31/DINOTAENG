<!DOCTYPE html>
<html lang="en">

<head>
    <title>DINOTAENG</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="./imgs/index/01-logo.ico" type="image/x-icon" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/2.2.2/css/dataTables.dataTables.css" />
    <style>
    body {
        background-color: antiquewhite;
    }

    .navbar {
        background-color: rgb(130, 76, 23);
        height: 40px;
        opacity: 0.8;
        z-index: 1050;
        /* 設置更高的層級，保證它在其他元素之上 */
    }

    .nav-link {
        color: antiquewhite;
    }

    /* 設定carousel高度 */
    .carousel-item img {
        width: 100%;
        /* 圖片寬度填滿容器 */
        height: 100%;
        /* 圖片高度填滿容器 */
        object-fit: cover;
        /* 保持圖片比例並裁切 */
    }

    #demo {
        width: 500px;
        /* 設定寬度為500px */
        height: 500px;
        /* 設定高度為500px */
        margin: 0;
        /* 使carousel居中 */
    }

    .knit {
        width: 500px;
        /* 設定寬度為500px */
        height: 500px;
        /* 設定高度為500px */
    }

    span,
    h5,
    hr {
        color: rgb(130, 76, 23);
        font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
    }

    a {
        text-decoration: none;
    }
    </style>
</head>



<body>
    <!-- navbar -->
    <div class="container-fluid">
        <div class="row">
            <!-- navbar bobo的logo 咖啡色 -->
            <nav class="navbar navbar-expand-sm fixed-top">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#">
                        <img src="./imgs/index/logo.jpg" class="rounded-circle" width="30px" height="30px" alt="bobo">
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapsibleNavbar">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="collapsibleNavbar">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link " href="./about.html">ABOUT</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link " href="./shop.html">SHOP</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link " href="./stories.html">STORIES</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link " href="./characters.html">CHARACTERS</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">MY
                                    ACCOUNT</a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">LOGIN</a></li>
                                    <li><a class="dropdown-item" href="#">ORDER</a></li>
                                    <li><a class="dropdown-item" href="#">CART</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>

        </div>
        <div class="row justify-content-center fixed-top">
            <div class="col-5 mt-5">
            </div>
            <div class="col-6 mt-5">
                <a href="./index.html" class="fixed-icon ">
                    <img src="./imgs/index/marshmallow.png" width="80px" alt="marshmallow">
                </a>
            </div>
        </div>
    </div>

    <!-- 空白欄 -->
    <div class="container mt-5">
        <div class="row">
            <div class="col"></div>
        </div>
    </div>


    <div class="container mt-5 mb-5">
        <h2>Hover Rows</h2>
        <p>The .table-hover class enables a hover state (grey background on mouse over) on table rows:</p>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>Firstname</th>
                    <th>Lastname</th>
                    <th>Email</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>John</td>
                    <td>Doe</td>
                    <td>john@example.com</td>
                </tr>
                <tr>
                    <td>Mary</td>
                    <td>Moe</td>
                    <td>mary@example.com</td>
                </tr>
                <tr>
                    <td>July</td>
                    <td>Dooley</td>
                    <td>july@example.com</td>
                </tr>
            </tbody>
        </table>
    </div>


    <!-- 空白欄 -->
    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col"></div>
        </div>
    </div>


    <!-- FOOTER -->
    <hr>
    <footer>

        <div class="container-fluid bd-footer py-4 ">
            <div class="row justify-content-center">
                <div class="col-3 mb-3 text-center">
                    <a href="https://www.dinotaeng.com/"
                        class="d-inline-flex align-items-center mb-2  text-decoration-none">
                        <img src="./imgs/index/logo2.jpg" width="40px" height="40px" alt="bobo">
                        <span class="fs-5 ms-3 ">DINOTAENG</span>
                    </a>
                    <!-- <ul class="list-unstyled small text-muted mt-0 ms-5">
                        <li>Designed by olivia.</li>
                    </ul> -->
                </div>
                <div class="col-3 mb-3 text-center">
                    <h5>Reference</h5>
                    <ul class="list-unstyled small ">
                        <li><a href="https://dinotaeng.com/">Official Website</a></li>
                    </ul>
                </div>

                <div class="col-3 mb-3 text-center">
                    <h5>Follow Us</h5>
                    <a href="https://www.instagram.com/dinotaeng/" target="_blank">
                        <img src="./imgs/index/Instagram.png" width="30px" height="30px" alt="Instagram">
                    </a>
                    <a href="https://www.facebook.com/dinotaeng.official/?locale=zh_TW" target="_blank" class="ms-3">
                        <img src="./imgs/index/facebook.png" width="30px" height="30px" alt="Facebook">
                    </a>
                </div>

                <!-- <div class="col-3"></div> -->

            </div>
        </div>
    </footer>






</body>

</html>