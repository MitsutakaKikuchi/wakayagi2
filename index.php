<!DOCTYPE html>
<html lang="ja">

<head>
    <title>日本舞踊 直派分家若柳流</title>
    <?php include('inc/head.php'); ?>
</head>


<body id="Home" class="bg-light bg-img">
    <header class="sticky-top">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand m-auto text-center" href="#Home">
                <img class="h-20 " src="img/logo.png" alt="..." /> <br class="sp "> 日本舞踊 直派分家若柳流</a>


            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav pl-5">
                    <a class="nav-item nav-link active" href="index.php#Home">ホーム</a>
                    <a class="nav-item nav-link" href="about.php">直派分家若柳流について</a>
                    <a class="nav-item nav-link" href="#keiko">お稽古場のご案内</a>
                    <a class="nav-item nav-link"
                        href="https://www.facebook.com/%E6%97%A5%E6%9C%AC%E8%88%9E%E8%B8%8A-%E7%9B%B4%E6%B4%BE%E5%88%86%E5%AE%B6%E8%8B%A5%E6%9F%B3%E6%B5%81-319206524870126">活動の様子</a>
                    <a class="nav-item nav-link" href="#contact">お問い合わせ</a>
                </div>
            </div>
        </nav>
    </header>

    <!-- スライドショー -->
    <div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="w-100" src="img/img-1.jpg" alt="..." />
            </div>

            <div class="carousel-item">
                <img class="w-100" src="img/img-2.jpg" alt="..." />
            </div>

            <div class="carousel-item">
                <img class="w-100" src="img/img-3.jpg" alt="..." />
            </div>
            <div class="carousel-item">
                <img class="w-100" src="img/img-4.jpg" alt="..." />
            </div>

        </div>
    </div>
    <!-- スライドショー -->

    <!-- メインコンテンツ -->
    <div class="container bg-white py-5 my-0">

        <!-- 直派分家若柳流について-->
        <div id="about" class="">
            <a href="about.php" class=" nav-link text-dark">
                <h2 class="text-center pt-3 m-title ">直派分家若柳流について</h2>
            </a>
        </div>

        <div class="row">
            <div class="col-sm-4 col-12">
                <class class="card">
                    <a href="about.php#icon">
                        <img class=" card-img-top" src="img/logo-2.jpg" alt="">
                    </a>
                    <div class="card-body">
                        <a href="about.php#icon" class="nav-link text-dark text-center title ls">紋章</a>

                        <p class="card-text text">若柳流の定紋は、柳とかたばみとで構成されておりまして、当直派分家若柳流におきましては女柳・男柳が仲良く和をもって...</p>
                        <a href="about.php#icon" class="btn btn-primary btn-block text">詳しく見る</a>
                    </div>
                </class>
            </div>

            <div class="col-sm-4 col-12">
                <class class="card">
                    <a href="about.php#original">
                        <img class=" card-img-top" src="img/img-0.jpg" alt="">
                    </a>
                    <div class="card-body">
                        <a href="about.php#original" class="nav-link text-dark text-center title ls">流舞</a>
                        <p class="card-text text">当流オリジナルの演目についてのご紹介</p>
                        <a href="about.php#original" class="btn btn-primary btn-block text">詳しく見る</a>
                    </div>
                </class>
            </div>

            <div class="col-sm-4 col-12">
                <class class="card">
                    <a
                        href="https://www.facebook.com/%E6%97%A5%E6%9C%AC%E8%88%9E%E8%B8%8A-%E7%9B%B4%E6%B4%BE%E5%88%86%E5%AE%B6%E8%8B%A5%E6%9F%B3%E6%B5%81-319206524870126">
                        <img class=" card-img-top" src="img/img-7.jpg" alt="">
                        <!-- <img class=" card-img-top" src="img/img-6.jpg" alt=""> -->
                    </a>
                    <div class="card-body">
                        <h5 class="card-title text-center title ">活動の様子</h5>
                        <p class="card-text text">直派分家若柳流の舞踊公演「扇寿会」や日々の活動の様子についてのご紹介</p>
                        <a href="https://www.facebook.com/%E6%97%A5%E6%9C%AC%E8%88%9E%E8%B8%8A-%E7%9B%B4%E6%B4%BE%E5%88%86%E5%AE%B6%E8%8B%A5%E6%9F%B3%E6%B5%81-319206524870126"
                            class="btn btn-primary btn-block text">詳しく見る</a>
                    </div>
                </class>
            </div>

        </div>
        <!-- cards-->




        <!-- お稽古のご案内 -->
        <div id="keiko" class="">
        <h2 class="text-center my-5 py-3 border-top border-success m-title ">お稽古場のご案内</h2>
            <div class="ml-4">

                <div class="d-flex flex-wrap-reverse">
                    <div class="col-md-6 col-10 p-0 align-self-center p-3 mini-text">
                        <h3 class="m-title">東京 お稽古場</h3>
                        <div class="pb-2">
                            [住所]<br /> 東京都渋谷区元代々木町26-3
                            <br />
                        </div>
                        <div class="pb-2">
                            [Tel]<br /> 03-3460-7612
                            <br />
                        </div>
                        <div class="pb-0">
                            [アクセス]<br /> 小田急小田原線「代々木八幡駅」
                            
                            <br> 東京メトロ千代田線「代々木公園駅」より
                            <br>徒歩５分<br /> 京王バス(渋61・渋63・渋64・渋66)
                            <br> ハチ公バス(春の小川ルート)
                            <br>「代々木八幡駅入口」・「八幡下」より徒歩4分
                            <br />
                            <br />
                        </div>
                    </div>
                    
                    <div class="col-md-6 col-10 p-0 align-self-center">
                        <img class="img-fluid" src="img/keiko-tokyo.jpg" alt="" />
                    </div>
                </div>
                
                <div class="d-flex flex-wrap justify-content-center">
                    <div class="col-md-6 col-10 p-0 align-self-center">
                        <img class="img-fluid" src="img/keiko-morioka.jpg" alt="" />
                    </div>
                    
                    <div class="col-md-6 col-10 p-0 align-self-center p-3 mini-text">
                        <h3 class="m-title">盛岡 お稽古場</h3>
                        <div class="pb-2">
                            [住所]<br /> 岩手県盛岡市東中野22-11
                            <br />
                        </div>
                        <div class="pb-2">
                            [Tel]<br /> 090-6159-0923
                            <br>03-3460-7612<br />
                        </div>
                        <div class="pb-2">
                            [アクセス]<br /> 岩手県交通
                            <br> ​「中野一丁目」停留所より徒歩約5分
                            <br />
                        </div>
                    </div>
                </div>
            </div>
        </div>
            <!-- お稽古のご案内 -->



        <!-- お問い合わせ -->

        <div id="contact" class="">
            <h2 class="text-center border-top border-success pt-3 mt-10 m-title ">お問い合わせ</h2>


            <form class="needs-validation col-8 m-auto " novalidate action="mail.php" method="POST">
                <div class="form-row">

                    <div class="col-12 mb-4 ">
                        <label for="validationCustom01">[お名前(必須)]</label>
                        <input type="text" class="form-control" id="validationCustom01" name="お名前" placeholder="お名前" value=""
                            required>
                        <div class="invalid-feedback">
                            必須項目です
                        </div>
                    </div>

                    <div class="col-12 mb-4">
                        <label for="validationCustom02">[メールアドレス(必須)]</label>
                        <input type="email" class="form-control" id="inputEmail3" name="メールアドレス" placeholder="Email" required>
                        <div class="invalid-feedback">
                            必須項目です
                        </div>
                    </div>

                    <div class="col-12 mb-4 ">
                        <div class="row">
                            <label class="col-form-label pl-3">[性別]</label>
                            <div class="">
                                <div class="form-check pl-5">
                                    <input class="form-check-input"  type="radio" name="性別" value="男" id="gridRadios1"
                                       >
                                    <label class="form-check-label" for="gridRadios1">
                                        男性
                                    </label>
                                </div>
                                <div class="form-check pl-5">
                                    <input class="form-check-input" type="radio" name="性別" value="女" id="gridRadios2">
                                    <label class="form-check-label" for="gridRadios2">
                                        女性
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-row  col-12 pl-2">

                        <label for="validationCustom02">[ご用件]</label>
                        <select name="ご用件" class="custom-select mb-4 " multiple>
                            <option selected   value="お稽古ご希望">お稽古ご希望</option>
                            <option  value="出演依頼">出演依頼</option>
                            <option  value="その他問い合わせ">その他問い合わせ</option>
                        </select>

                    </div>


                    <div class="form-group col-12 mb-4 ">
                        <label for="exampleFormControlTextarea1">[お問い合わせ内容]</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" name="お問い合わせ内容" rows="3" required></textarea>
                        <div class="invalid-feedback">
                            必須項目です
                        </div>
                    </div>


                    <div class="form-group">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="gridCheck" required>
                            <label class="form-check-label" for="gridCheck">
                                送信に同意
                            </label>
                            <div class="invalid-feedback">
                                送信する場合はチェックを入れてください
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary col-12 mt-1">送信</button>
                    </div>



                    <script>
                        // Example starter JavaScript for disabling form submissions if there are invalid fields
                        (function () {
                            'use strict';
                            window.addEventListener('load', function () {
                                // Fetch all the forms we want to apply custom Bootstrap validation styles to
                                var forms = document.getElementsByClassName('needs-validation');
                                // Loop over them and prevent submission
                                var validation = Array.prototype.filter.call(forms, function (form) {
                                    form.addEventListener('submit', function (event) {
                                        if (form.checkValidity() === false) {
                                            event.preventDefault();
                                            event.stopPropagation();
                                        }
                                        form.classList.add('was-validated');
                                    }, false);
                                });
                            }, false);
                        })();
                    </script>






                </div>
            </form>
        </div>
        <!-- お問い合わせ -->

    </div>
    <!-- メインコンテンツ -->
    <?php include('inc/footer_js.php'); ?>
</body>

                    </html>