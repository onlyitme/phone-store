<?php if(isset($commentDT)) {
    foreach ($commentDT as $row){
        $user = $this->model->checkuser(3,$row['idUser']);
        ?>
        <li>
            <div class="comment_container">
                <img alt='' src='http://placehold.it/32x32' class='avatar' height='60' width='60'/>
                <div class="comment-text">
                    <div class="star-rating">
                        <span style="width:80%"></span>
                    </div>
                    <p class="meta">
                        <strong><?=$user['HoTen']?>></strong> &ndash; <time ><?=$row['ThoigianBL']?></time>:
                    </p>
                    <div class="description"><p><?=$row['NoiDungBL']?></p></div>
                </div>
            </div>
        </li>
    <?php    }
} ?>