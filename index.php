<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <!-- Bootstarp CDN-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- GSAP CDN -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.5/gsap.min.js"></script>
    <script src="./three.r123.min.js"></script>
    <script src="./OrbitControls.js"></script>
    <link rel="stylesheet" href="https://use.typekit.net/zjs0dpp.css" />
    <script src="https://cdn.jsdelivr.net/npm/dat.gui@0.7.9/build/dat.gui.min.js"> </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.20.3/TweenMax.min.js"></script>

    <title>Equity Plus</title>
</head>

<body>
    <?php
    $items = array(
        ['t' => 'check', 'i' => 'img/nav grid/1.png'],
        ['t' => 'test', 'i' => 'img/nav grid/2.png'],
        ['t' => 'Aurora', 'i' => 'img/nav grid/3.png'],
        ['t' => 'Angus', 'i' => 'img/nav grid/4.png'],
        ['t' => 'Huitzi', 'i' => 'img/nav grid/5.png'],
        ['t' => 'Huitzi', 'i' => 'img/nav grid/6.png'],
        ['t' => 'Huitzi', 'i' => 'img/nav grid/7.png'],
        ['t' => 'Huitzi', 'i' => 'img/nav grid/8.png'],
        ['t' => 'Huitzi', 'i' => 'img/nav grid/9.png'],


    );
    ?>
    <!-- navbar start -->
    <div class="container">
        <nav class="my-5">
            <div class="row">
                <div class="col-6">
                    <img src="img/logo/Group.svg" alt="Logo" />
                </div>
                <div class="col-6 d-flex gap-5 justify-content-end">
                    <div>
                        <h4> <a href="">Services</a> </h4>
                    </div>
                    <div>
                        <h4> <a href="">Contact</a> </h4>
                    </div>
                    <div>
                        <img width="20" src="img/icons/plus.svg" alt="" />
                    </div>
                </div>
            </div>
        </nav>
    </div>
    <!-- navbar end-->
    <!-- top section start -->
    <section class="top-setcion">
        <div class="container">
            <div class="row">
                <div class="col-12 ">
<div class="content-wrap">
<div class="content">
                        <h1 class="content__title">make your<br>
                            brand thrive.</h1>
                    </div>
   
</div> 
            </div>
            </div>
        </div>
    </section>
    <!-- top section end -->
    <!-- <div class="items"> -->
    <div class="container">
        <div class="row">
            <div class="col-6">
                <div class="header-wrap">
                    <div class="maintext">
                        <h1>being<br>
                            eventful</h1>
                    </div>
                    <div class="subtext">
                        <p>Loremlpsum is simply dummy text of the printing <br>
                            and typesetting industry. Lorem ipsum has been <br>
                            the industry's dummy text,</p>
                    </div>
                </div>



            </div>
            <div class="col-6">
                <div class="header-grid-wrap">
                    <div class="row bg-dark">
                        <?php foreach ($items as $key => $value) { ?>
                            <div class="col-4 item">
                                <svg preserveAspectRatio="xMidYMid slice" viewBox="0 0 500 500">
                                    <defs>
                                        <clipPath id="clip-<?php echo $key ?>">
                                            <circle cx="46.399993896484375" cy="7.162500381469727" fill="#000" r="350px"></circle>
                                        </clipPath>
                                    </defs>
                                    <!-- <text class="svg-text" dy=".3em" x="50%" y="50%"></text> -->
                                    <image height="100%" preserveAspectRatio="xMinYMin slice" width="100%" xlink:href="<?php echo $value['i'] ?>" alt=""></image>

                                    <g clip-path="url(#clip-<?php echo $key ?>)">
                                        <image height="100%" preserveAspectRatio="xMinYMin slice" width="100%" xlink:href="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAkGBxISEhUSEBAVFRUVFRUVFRUVFRUVFRUVFRUWFhUVFRUYHSggGBolHRUVITEhJSkrLi4uFx8zODMtNygtLisBCgoKBQUFDgUFDisZExkrKysrKysrKysrKysrKysrKysrKysrKysrKysrKysrKysrKysrKysrKysrKysrKysrK//AABEIALcBEwMBIgACEQEDEQH/xAAYAAEBAQEBAAAAAAAAAAAAAAAAAQIDB//EACQQAQEBAAECBQUBAAAAAAAAAAABEQIx8CFBUWGhEnGB0eET/8QAFAEBAAAAAAAAAAAAAAAAAAAAAP/EABQRAQAAAAAAAAAAAAAAAAAAAAD/2gAMAwEAAhEDEQA/APagiwExYJAUIsAgAKVNUAAAAFABKLUAoIChFBKigIAAaKCGgBBIoJSKAipoDIQgLC0kLAXVZkAa1dZiyALhAANQFEWAKmKCaAAQUEExQLQoCaYqAmKACNRAIACaogLgmKDCxISg0SEACBAVFTQWKkKBgEAWM1qQFSlAAAKAAAAgaClQgCiAoagAACKAigDBAgKtSKBqxIAqYLQAQFEANWGEBShQEABQBLQAVCoCpRQVAsAgAEKAAEBAygMiRYCw0KA0yoAAKgYAAClSKCiKCUACVRAEUAQAIBAUTFAAAgAAGgzeE9BVByvssIoFVFAi6EBCqALrEjQAgC4qSqC2oAGhACoAFE4759V0FRUAqQKAqLAUSrAANBBUAqs2gMrEAUgAtVnVBdENAElUDVZigoFAEz1UAnv1AAQoLqUAUSU0FRYmgomLAMBMBQLQAoBeYKDkGkoKQ1KDQQBUMAIqaAoALqEAUKWgJKalBdWMrKBSlASUxUA1dRQILAEiqyCiKAIoMf6T1+RbIAyEAOK4hQWKzF0BUNBdSQUFlEUE1UUAgAIuJQVNEBbSIoAUAJFIAqEBUwhQA0AWpoCKYA5a1HPhz9s79mtBrUtCAom9/wAAXVlZwwFtVCgsarEpzv68gaJRJMBq1AoFLAoIUAVm1pKCw1ldBbV1ABUAFiAH1Tc3x6555enh+KtQoBoAgKDlCVIsBZVv2RQFZT6unffQGzUhoKYkUFRUBdNROcBrUp4gKqICiUBUNWglBQF1EBrSJCgoi6AkqkBFhqABIA4a1ABdOnyAAALhgAuqABQAAAIAFAAIAFSAC6aABaACgBBQEKAJeSAAAD//2Q=="></image>
                                        <a style="text-decoration: none;" href="https://www.instagram.com/cp_shibin_/"> <text class="svg-masked-text" dy=".3em" x="50%" y="50%"><?php echo $value['t'] ?></text></a>
                                    </g>
                                </svg>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- </div> -->
    <script src="main.js"></script>
    <script src="app.8c70cdb250160c0d089d.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js" integrity="sha512-pumBsjNRGGqkPzKHndZMaAG+bir374sORyzM3uulLV14lN5LyykqNk8eEeUlUkB3U0M4FApyaHraT65ihJhDpQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</body>

</html>