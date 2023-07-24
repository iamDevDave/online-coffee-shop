<div class="container-fluid padding">
    <div class="row welcome text-center welcome">
        <div class="col-12">
            <h1 class="display-4">Our Cafes</h1>
            </div>
                <input class="form-control mb-3" id="myInput" type="text" placeholder="Search Cafe" style="width:98%;">
            </div>
        </div>
        <hr>
    </div>
</div>

<div class="container text-center padding item-card">
    <div class="row container" id="myItem">
        <?php if(!empty($stores)) { ?>
        <?php foreach($stores as $store) { ?>

        <div class="col-md-6 col-lg-4 d-flex align-items-stretch">
            <div class="card mb-4 shadow-sm" id="myCard">
                <?php $image = $store['img'];?>
                <img class="card-img-top" src="<?php echo base_url().'./public/uploads/cafes/'.$image; ?>">
                <div class="card-body">
                    <h4 class="card-title"><?php echo $store['name']; ?></h4>
                    <p class="card-text mb-0"><?php echo $store['c_name']." Cafe"; ?></p>
                    <p class="card-text mb-0"><?php echo $store['address']; ?></p>
                    <hr>
                    <p class="card-text mb-0"></p>
                    <p class="card-text mb-0">OPENING HOURS</p>
                    <p class="card-text mb-0"><?php echo $store['o_days']; ?></p>
                    <p class="card-text"><?php echo $store['o_hr']; ?> - <?php echo $store['c_hr']; ?></p>
                    <hr>
                    <a href="<?php echo base_url().'item/list/'.$store['cafe_id']; ?>" class="btn btn-primary">View
                        Menu</a>
                </div>


            </div>
        </div>
        <?php } ?>
        <?php } else { ?>
        <h1>No records found</h1>
        <?php } ?>
    </div>
</div>

<script type="text/javascript">

$(document).ready(function() {
    $("#myInput").on("keyup", function() {
        var value = $(this).val().toLowerCase();
        $("#myItem  #myCard").filter(function() {
            $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        });
    });
});

</script>