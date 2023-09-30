<?php
while($row = mysqli_fetch_assoc($sql)){
    $output .= '<a href="#">
                    <div class="content">
                        <img src="php/images/'. $row['img'] .'" alt="">
                        <div class="details">
                            <span>'. $row['fname'] . " " . $row['lname'] .'</span>
                            <p>Essa é uma mensagem teste</p>
                        </div>
                    </div>
                    <div class="status-dot"><i class="fa-solid fa-circle" style="color: #0bb37b"></i></div>
                </a>';
}

?>