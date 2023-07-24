<div id="slides" class="carousel slide carousel-cus" data-ride="carousel">
    <ul class="carousel-indicators">
        <li data-target="#slides" data-slide-to="0" class="active"></li>
        <li data-target="#slides" data-slide-to="1"></li>
        <li data-target="#slides" data-slide-to="2"></li>
    </ul>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="<?php echo base_url().'public/front/img/jessica.jpg';?>" alt="FriesBrgrImg">
            <div class="carousel-caption text-left">
                <h1 class="display-2">Coffee?!</h1>
                <h3>Good, we are here to serve you</h3>
                <a href="<?php echo base_url().'cafes/index'?>" class="btn btn-outline-light btn-lg">Order Now</a>
                <a href="<?php echo base_url().'cafes/index'?>" class="btn btn-primary btn-lg">View Menu</a>
            </div>
        </div>
        <div class="carousel-item">
            <img src="<?php echo base_url().'public/front/img/3604334.jpg';?>" alt="Spaghetti">
            <div class="carousel-caption text-right">
                <h1 class="display-2">Coffee?!</h1>
                <h3>Good, we are here to serve you</h3>
                <a href="<?php echo base_url().'cafes/index'?>" class="btn btn-outline-light btn-lg">Order Now</a>
                <a href="<?php echo base_url().'cafes/index'?>" class="btn btn-primary btn-lg">View Menu</a>
            </div>
        </div>
        <div class="carousel-item">
            <img src="<?php echo base_url().'public/front/img/4477349.jpg';?>" alt="corn">
            <div class="carousel-caption text-right">
                <h1 class="display-2">Coffee?!</h1>
                <h3>Good, we are here to serve you</h3>
                <a href="<?php echo base_url().'cafes/index'?>" class="btn btn-outline-light btn-lg">Order Now</a>
                <a href="<?php echo base_url().'cafes/index'?>" class="btn btn-primary btn-lg">View Menu</a>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid padding">
    <div class="row text-center welcome">
        <div class="col-12">
            <h1 class="display-4">Easy 3 Steps To Follow</h1>
        </div>
        <hr>
        <div class="col-12">
            <p class="lead">The easiest way to your Order. Coffee Ordering System provides fresh delivery
                with in the 30 minutes and provide free Coffee if order is not on time. So don't wait and start ordering right now!</p>
        </div>
    </div>
</div>
<div class="container-fluid padding">
    <div class="row text-center padding">
        <div class="col-xs-12 col-sm-6 col-md-4">
            <i class="fas fa-building fa-6x"></i>
            <h3>Choose A cafe</h3>
            <p>First thing you can do is choose from our cafe partners easily!</p>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-4">
            <i class="fas fa-bullseye"></i>
            <h3>Choose A Tasty item</h3>
            <p>We've got you covered with menus from over various delivery cafe online!</p>
        </div>
        <div class="col-sm-12 col-md-4">
        <i class="fas fa-clipboard-check"></i>
            <h3>Pick Up or Delivery</h3>
            <p>After all, the item gets delivered or you can pick it up as per your choices!</p>
        </div>
    </div>
    <hr class="my-4">
</div>
<div class="container-fluid padding">
    <div class="row welcome text-center welcome">
        <div class="col-12">
            <h1 class="display-4">Most Popular items</h1>
        </div>
        <hr>
    </div>
</div>
<div class="container-fluid padding item-card">
    <div class="row">
        <?php if(!empty($items)) { ?>
        <?php foreach($items as $item) { ?>
        <div class="col-md-6 col-lg-4 d-flex align-items-stretch">
            <div class="card mb-4 shadow-sm">
                <?php $image = $item['img'];?>
                <img class="card-img-top" src="<?php echo base_url().'./public/uploads/items/'.$image; ?>">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <h4 class="card-title"><?php echo $item['name']; ?></h4>
                        <h4 class="text-muted"><b>₹<?php echo $item['price']; ?></b></h4>
                    </div>
                    <p class="card-text"><?php echo $item['about']; ?></p>
                    <a href="<?php echo base_url().'item/addToCart/'.$item['i_id']; ?>" class="btn btn-primary"><i
                            class="fas fa-cart-plus"></i> Add to
                        Cart</a>
                </div>
            </div>
        </div>
        <?php } ?>
        <?php } else { ?>
        <div class="jumbotron">
            <h1>No records found</h1>
        </div>
        <?php } ?>
    </div>
    <hr class="my-4">
</div>

<div class="container pt-5 my-5 z-depth-1">
  <section class="p-md-3 mx-md-5 text-lg-left">
    <h2 class="text-center font-weight-bold mb-4 pb-1">Happy Coustomer</h2>
    
    <div class="row">
      <div class="col-lg-4 col-sm-6 mb-5">
        <div class="row d-flex align-items-center">
          <div
            class="col-5 avatar w-100 white d-flex justify-content-center align-items-center"
          >
            <img
              src="https://mdbootstrap.com/img/Photos/Avatars/img%20(9).jpg"
              class="img-fluid rounded-circle z-depth-1"
            />
          </div>
          <div class="col-7">
            <h6 class="font-weight-bold pt-2">Alan Turing</h6>
            <p class="text-muted">
            “Favourite Coffee shop in city”
            </p>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-sm-6 mb-5">
        <div class="row d-flex align-items-center">
          <div
            class="col-5 avatar w-100 white d-flex justify-content-center align-items-center"
          >
            <img
              src="https://mdbootstrap.com/img/Photos/Avatars/img%20(32).jpg"
              class="img-fluid rounded-circle z-depth-1"
            />
          </div>
          <div class="col-7">
            <h6 class="font-weight-bold pt-2">Tom Johnson</h6>
            <p class="text-muted">
            “Great Coffee”
            </p>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-sm-6 mb-5">
        <div class="row d-flex align-items-center">
          <div
            class="col-5 avatar w-100 white d-flex justify-content-center align-items-center"
          >
            <img
              src="https://mdbootstrap.com/img/Photos/Avatars/img%20(3).jpg"
              class="img-fluid rounded-circle z-depth-1"
            />
          </div>
          <div class="col-7">
            <h6 class="font-weight-bold pt-2">Alax Laurie</h6>
            <p class="text-muted">
            “Fast Dilivery,good price coffee”
            </p>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-sm-6 mb-5">
        <div class="row d-flex align-items-center">
          <div
            class="col-5 avatar w-100 white d-flex justify-content-center align-items-center"
          >
            <img
              src="https://mdbootstrap.com/img/Photos/Avatars/img%20(2).jpg"
              class="img-fluid rounded-circle z-depth-1"
            />
          </div>
          <div class="col-7">
            <h6 class="font-weight-bold pt-2">Nathalie Fry</h6>
            <p class="text-muted">
            “i Love This shop spacial tea”
            </p>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-sm-6 mb-5">
        <div class="row d-flex align-items-center">
          <div
            class="col-5 avatar w-100 white d-flex justify-content-center align-items-center"
          >
            <img
              src="https://mdbootstrap.com/img/Photos/Avatars/img%20(7).jpg"
              class="img-fluid rounded-circle z-depth-1"
            />
          </div>
          <div class="col-7">
            <h6 class="font-weight-bold pt-2">Ella Stone</h6>
            <p class="text-muted">
            “Magic cafe 'n' gusty sweets”
            </p>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-sm-6 mb-5">
        <div class="row d-flex align-items-center">
          <div
            class="col-5 avatar w-100 white d-flex justify-content-center align-items-center"
          >
            <img
              src="https://mdbootstrap.com/img/Photos/Avatars/img%20(25).jpg"
              class="img-fluid rounded-circle z-depth-1"
            />
          </div>
          <div class="col-7">
            <h6 class="font-weight-bold pt-2">Lara Croft</h6>
            <p class="text-muted">
            “Best coffee ever !”
            </p>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-sm-6 mb-5">
        <div class="row d-flex align-items-center">
          <div
            class="col-5 avatar w-100 white d-flex justify-content-center align-items-center"
          >
            <img
              src="https://mdbootstrap.com/img/Photos/Avatars/img%20(8).jpg"
              class="img-fluid rounded-circle z-depth-1"
            />
          </div>
          <div class="col-7">
            <h6 class="font-weight-bold pt-2">Billy Turner</h6>
            <p class="text-muted">
            “Great Latte, Frindly Service, Nice Treats”
            </p>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-sm-6 mb-5">
        <div class="row d-flex align-items-center">
          <div
            class="col-5 avatar w-100 white d-flex justify-content-center align-items-center"
          >
            <img
              src="https://mdbootstrap.com/img/Photos/Avatars/img%20(19).jpg"
              class="img-fluid rounded-circle z-depth-1"
            />
          </div>
          <div class="col-7">
            <h6 class="font-weight-bold pt-2">Caroline Thompson</h6>
            <p class="text-muted">
            “Lovely coffee shop-site”
            </p>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-sm-6 mb-5">
        <div class="row d-flex align-items-center">
          <div
            class="col-5 avatar w-100 white d-flex justify-content-center align-items-center"
          >
            <img
              src="https://mdbootstrap.com/img/Photos/Avatars/img%20(11).jpg"
              class="img-fluid rounded-circle z-depth-1"
            />
          </div>
          <div class="col-7">
            <h6 class="font-weight-bold pt-2">Anna Polkovsky</h6>
            <p class="text-muted">
            “Coffee morning”
            </p>
          </div>
        </div>
      </div>
  </section>
</div>
<hr class="my-4">
<div class="container-fluid padding">
    <div class="row text-center padding">
        <div class="col-12">
            <h2>Connect With Us</h2>
        </div>
        <div class="col-12 social padding">
            <a href=""><i class="fab fa-facebook"></i></a>
            <a href=""><i class="fab fa-twitter"></i></a>
            <a href=""><i class="fab fa-google-plus-g"></i></a>
            <a href=""><i class="fab fa-instagram"></i></a>
            <a href=""><i class="fab fa-youtube"></i></a>
        </div>
    </div>
</div>

