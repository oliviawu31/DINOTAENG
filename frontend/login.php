<!DOCTYPE html>
<html lang="en">

<head>
    <title>DINOTAENG</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="../imgs/index/01-logo.ico" type="image/x-icon" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
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

    ::placeholder {
        font-size: 12px;
        /* 縮小 placeholder 字體大小 */
        color: #6c757d;
        /* 調整顏色 */
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
                        <img src="../imgs/index/logo.jpg" class="rounded-circle" width="30px" height="30px" alt="bobo">
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
                <a href="../index.html" class="fixed-icon ">
                    <img src="../imgs/index/marshmallow.png" width="80px" alt="">
                </a>
            </div>
        </div>
    </div>

    <!-- 固定棉花糖圖標 -->
    <!-- <div class="container-fluid">
    </div> -->


    <!-- 棉花糖底下空白欄位 -->
    <div class="container">
        <div class="row">
            <div class="col mt-5 mb-3"></div>
        </div>
    </div>

    <!-- 輸入欄位 -->
    <div class="container mt-5 ">
        <div class="row">
            <div class="col-4">
                <!-- 空白欄位 -->
            </div>

            <div class="col-4 mt-5 bg-light p-4 rounded-4">
                <form action="../api/login.php" method="post">
                    <div class="mb-3 mt-5 ms-5 me-5">
                        <label for="username" class="form-label"></label>
                        <input type="username" class="form-control" id="add" placeholder="ID" name="email">
                    </div>
                    <div class="mt-4">
                        <!-- 空白欄=>id pw中間間距 -->
                    </div>
                    <div class="mb-5 ms-5 me-5">
                        <input type="password" class="form-control" id="pw" placeholder="PASSWORD" name="pwd">
                    </div>
                    <div class="d-flex justify-content-center">
                        <button type="submit" class="btn btn-outline-secondary mb-5 ms-5 me-5 w-100">LOGIN</button>
                    </div>

                    <div class="mb-5" style="display: flex; justify-content: space-around; font-size:12px">
                        <a href="">Forgot your id or password?</a>
                        <a href="reg.php">Creat Account</a>
                    </div>

                </form>
            </div>
        </div>
        <div class="col-3">
            <!-- 空白欄位 -->
        </div>
        <div class="col-4">
            <!-- 空白欄位 -->
        </div>
    </div>


    <!-- form底下空白欄位 -->
    <div class="container">
        <div class="row">
            <div class="col mt-3 mb-5"></div>
        </div>
    </div>

    <!-- form底下空白欄位 -->
    <div class="container">
        <div class="row">
            <div class="col mt-3 mb-5"></div>
        </div>
    </div>


    <!-- FOOTER -->
    <hr>
    <footer>
        <div class="container-fluid bd-footer py-4 mt-3">
            <div class="row justify-content-center">
                <div class="col-3 mb-3 text-center">
                    <a href="https://www.dinotaeng.com/"
                        class="d-inline-flex align-items-center mb-2  text-decoration-none">
                        <img src="../imgs/index/logo2.jpg" width="40px" height="40px" alt="bobo">
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
                        <img src="../imgs/index/Instagram.png" width="30px" height="30px" alt="Instagram">
                    </a>
                    <a href="https://www.facebook.com/dinotaeng.official/?locale=zh_TW" target="_blank" class="ms-3">
                        <img src="../imgs/index/facebook.png" width="30px" height="30px" alt="Facebook">
                    </a>
                </div>

                <!-- <div class="col-3"></div> -->

            </div>
        </div>
    </footer>

    <!-- 彈出視窗 -->
    <!-- Modal HTML -->
    <div class="modal fade" id="welcomeModal" tabindex="-1" aria-labelledby="welcomeModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="welcomeModalLabel">Welcome to DINOTAENG</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    We're glad to have you here! Enjoy browsing our website.
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-success">
                        <a href="./shop.html" style="color: white; text-decoration: none;">Go to Shop</a>
                    </button>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <script>
    function login() {
        let user = {
            acc: $("#acc").val(),
            pw: $("#pw").val(),
        }
    }
    </script>



</body>

</html>