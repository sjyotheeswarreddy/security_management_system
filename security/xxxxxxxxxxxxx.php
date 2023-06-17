<?php
    if (mysqli_num_rows($result) > 0) {
        $i = 0;
        while ($row = mysqli_fetch_array($result)) {
?>
<div class="single_user_pil d-flex align-items-center justify-content-between">
    <div class="user_pils_thumb d-flex align-items-center">
        <div class="thumb_34 mr_15 mt-0"><img class="img-fluid radius_50" src="img/customers/1.png" alt=""></div>

        <span class="f_s_14 f_w_400 text_color_11">jyothi</span>
    </div>
    <div class="user_info">
        Customer
    </div>
    <div class="action_btns d-flex">
        <a href="#" class="action_btn mr_10"> <i class="far fa-edit"></i> </a>
        <a href="#" class="action_btn"> <i class="fas fa-trash"></i> </a>
    </div>
</div>
<?php

        }

    }
?>
    

