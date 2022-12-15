<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <link rel="shortcut icon" href="<?= NAMA_FOLDER ?>images/favicon.png" type="">

  <title> Riter Bakery </title>

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="<?= NAMA_FOLDER ?>css/bootstrap.css" />

  <!--owl slider stylesheet -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
  <!-- nice select  -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/css/nice-select.min.css" integrity="sha512-CruCP+TD3yXzlvvijET8wV5WxxEh5H8P4cmz0RFbKK6FlZ2sYl3AEsKlLPHbniXKSrDdFewhbmBK5skbdsASbQ==" crossorigin="anonymous" />
  <!-- font awesome style -->
  <link href="<?= NAMA_FOLDER ?>css/font-awesome.min.css" rel="stylesheet" />

  <!-- Custom styles for this template -->
  <link href="<?= NAMA_FOLDER ?>css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="<?= NAMA_FOLDER ?>css/responsive.css" rel="stylesheet" />
  <!-- css keranjang -->
  <link href="<?= NAMA_FOLDER ?>css/keranjang.css" rel="stylesheet" />

</head>
<body>
<div class="hero_area">
    <div class="bg-box">
      <img src="<?= NAMA_FOLDER ?>images/kuee.jpg" alt="">
    </div>
    <!-- header section strats -->
    <header class="header_section">
      <div class="container">
        <nav class="navbar navbar-expand-lg custom_nav-container ">
          <a class="navbar-brand" href="index.html">
            <span>
              Riter Bakery
            </span>
          </a>

          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class=""> </span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav  mx-auto ">
            <li class="nav-item">
                <a class="nav-link" href="home">Home </a> 
              </li>
              <li class="nav-item">
                <a class="nav-link" href="menu">Menu </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="tentang">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="register">Register</a>
              </li>

             <li class="nav-item">
                <a class="nav-link" href="komentar">Komentar </a>
              </li>

              <?php

                 if(strcmp(session()->getTempData('role'), 'admin') == 0){

               ?>

              <li class="nav-item">
                <a class="nav-link" href="dashboard">dashboard </a>
              </li>

              <?php } ?>

            </ul>
            <div class="user_option">
              <a href="login" class="user_link">
                <i class="fa fa-user" aria-hidden="true"></i>
              </a>
              <a class="cart_link-active" href="keranjang">
                <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 456.029 456.029" style="enable-background:new 0 0 456.029 456.029;" xml:space="preserve">
                  <g>
                    <g>
                      <path d="M345.6,338.862c-29.184,0-53.248,23.552-53.248,53.248c0,29.184,23.552,53.248,53.248,53.248
                   c29.184,0,53.248-23.552,53.248-53.248C398.336,362.926,374.784,338.862,345.6,338.862z" />
                    </g>
                  </g>
                  <g>
                    <g>
                      <path d="M439.296,84.91c-1.024,0-2.56-0.512-4.096-0.512H112.64l-5.12-34.304C104.448,27.566,84.992,10.67,61.952,10.67H20.48
                   C9.216,10.67,0,19.886,0,31.15c0,11.264,9.216,20.48,20.48,20.48h41.472c2.56,0,4.608,2.048,5.12,4.608l31.744,216.064
                   c4.096,27.136,27.648,47.616,55.296,47.616h212.992c26.624,0,49.664-18.944,55.296-45.056l33.28-166.4
                   C457.728,97.71,450.56,86.958,439.296,84.91z" />
                    </g>
                  </g>
                  <g>
                    <g>
                      <path d="M215.04,389.55c-1.024-28.16-24.576-50.688-52.736-50.688c-29.696,1.536-52.224,26.112-51.2,55.296
                   c1.024,28.16,24.064,50.688,52.224,50.688h1.024C193.536,443.31,216.576,418.734,215.04,389.55z" />
                    </g>
                  </g>
                  <g>
                  </g>
                  <g>
                  </g>
                  <g>
                  </g>
                  <g>
                  </g>
                  <g>
                  </g>
                  <g>
                  </g>
                  <g>
                  </g>
                  <g>
                  </g>
                  <g>
                  </g>
                  <g>
                  </g>
                  <g>
                  </g>
                  <g>
                  </g>
                  <g>
                  </g>
                  <g>
                  </g>
                  <g>
                  </g>
                </svg>
                <span class="sr-only">(current)</span> 
              </a>
              <form class="form-inline">
              </form>
              <a href="" class="order_online">
                Order Online
              </a>
            </div>
          </div>
        </nav>
      </div>
    </header>

<div class="container px-3 my-5 clearfix">
    <!-- Shopping cart table -->
    <div class="card">
        <div class="card-header">
            <h2> Keranjang </h2>
        </div>
        <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered m-0">
                <thead>
                  <tr>
                    <!-- Set columns width -->
                    <th class="text-center py-3 px-4" style="min-width: 400px;">Nama Produk &amp; Details</th>
                    <th class="text-right py-3 px-4" style="width: 100px;"> Harga </th>
                    <th class="text-center py-3 px-4" style="width: 120px;"> Jumlah </th>
                    <th class="text-right py-3 px-4" style="width: 100px;">Total</th>
                    <th class="text-center align-middle py-3 px-0" style="width: 40px;"><a href="#" class="shop-tooltip float-none text-light" title="" data-original-title="Clear cart"><i class="ino ion-md-trash"></i></a></th>
                  </tr>
                </thead>
                <tbody>
        
                  <tr>
                    <td class="p-4">
                      <div class="media align-items-center">
                        <img src="https://bootdey.com/img/Content/avatar/avatar1.png" class="d-block ui-w-40 ui-bordered mr-4" alt="">
                        <div class="media-body">
                          <a href="#" class="d-block text-dark">Product 1</a>
                          <small>
                            <span class="text-muted">Color:</span>
                            <span class="ui-product-color ui-product-color-sm align-text-bottom" style="background:#e81e2c;"></span> &nbsp;
                            <span class="text-muted">Size: </span> EU 37 &nbsp;
                            <span class="text-muted">Ships from: </span> China
                          </small>
                        </div>
                      </div>
                    </td>
                    <td class="text-right font-weight-semibold align-middle p-4">$57.55</td>
                    <td class="align-middle p-4"><input type="text" class="form-control text-center" value="2"></td>
                    <td class="text-right font-weight-semibold align-middle p-4">$115.1</td>
                    <td class="text-center align-middle px-0"><a href="#" class="shop-tooltip close float-none text-danger" title="" data-original-title="Remove">×</a></td>
                  </tr>
        
                  <tr>
                    <td class="p-4">
                      <div class="media align-items-center">
                        <img src="https://bootdey.com/img/Content/avatar/avatar6.png" class="d-block ui-w-40 ui-bordered mr-4" alt="">
                        <div class="media-body">
                          <a href="#" class="d-block text-dark">Product 2</a>
                          <small>
                            <span class="text-muted">Color:</span>
                            <span class="ui-product-color ui-product-color-sm align-text-bottom" style="background:#000;"></span> &nbsp;
                            <span class="text-muted">Storage: </span> 32GB &nbsp;
                            <span class="text-muted">Warranty: </span> Standard - 1 year &nbsp;
                            <span class="text-muted">Ships from: </span> China
                          </small>
                        </div>
                      </div>
                    </td>
                    <td class="text-right font-weight-semibold align-middle p-4">$1049.00</td>
                    <td class="align-middle p-4"><input type="text" class="form-control text-center" value="1"></td>
                    <td class="text-right font-weight-semibold align-middle p-4">$1049.00</td>
                    <td class="text-center align-middle px-0"><a href="#" class="shop-tooltip close float-none text-danger" title="" data-original-title="Remove">×</a></td>
                  </tr>
        
                  <tr>
                    <td class="p-4">
                      <div class="media align-items-center">
                        <img src="https://bootdey.com/img/Content/avatar/avatar2.png" class="d-block ui-w-40 ui-bordered mr-4" alt="">
                        <div class="media-body">
                          <a href="#" class="d-block text-dark">Product 3</a>
                          <small>
                            <span class="text-muted">Ships from: </span> Germany
                          </small>
                        </div>
                      </div>
                    </td>
                    <td class="text-right font-weight-semibold align-middle p-4">$20.55</td>
                    <td class="align-middle p-4"><input type="text" class="form-control text-center" value="1"></td>
                    <td class="text-right font-weight-semibold align-middle p-4">$20.55</td>
                    <td class="text-center align-middle px-0"><a href="#" class="shop-tooltip close float-none text-danger" title="" data-original-title="Remove">×</a></td>
                  </tr>
        
                </tbody>
              </table>
            </div>
            <!-- / Shopping cart table -->
        
            <div class="d-flex flex-wrap justify-content-between align-items-center pb-4">
              <div class="mt-4">
                <label class="text-muted font-weight-normal">Promocode</label>
                <input type="text" placeholder="ABC" class="form-control">
              </div>
              <div class="d-flex">
                <div class="text-right mt-4 mr-5">
                  <label class="text-muted font-weight-normal m-0">Discount</label>
                  <div class="text-large"><strong>$20</strong></div>
                </div>
                <div class="text-right mt-4">
                  <label class="text-muted font-weight-normal m-0">Total price</label>
                  <div class="text-large"><strong>$1164.65</strong></div>
                </div>
              </div>
            </div>
        
            <div class="float-right">
              <button type="button" class="btn btn-lg btn-default md-btn-flat mt-2 mr-3">Back to shopping</button>
              <button type="button" class="btn btn-lg btn-primary mt-2">Checkout</button>
            </div>
        
          </div>
      </div>
  </div>
    
</body>
</html>