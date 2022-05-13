<?php

$user = 'root';
$password = '';

$database = 'gfg';

$servername = 'localhost';
$mysqli = new mysqli(
    $servername,
    $user,
    $password,
    $database
);

if ($mysqli->connect_error) {
    die('Connect Error (' .
        $mysqli->connect_errno . ') ' .
        $mysqli->connect_error);
}

$sql = "SELECT * FROM userdata ORDER BY score DESC ";
$result = $mysqli->query($sql);
$mysqli->close();
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>INTERN PORTAL - RGIPT</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link href="./Style.css" rel="stylesheet" />

</head>

<body>

    <nav class="nav">
        <div class="container">
            <div class="logo">
                <a href="./portfolio/index.html">Your Profile</a>
            </div>
            <div id="mainListDiv" class="main_list">
                <ul class="navlinks">
                    <li><a href="#internship">Internships</a></li>
                    <li><a href="#contact">Contact</a></li>
                    <li><a href="https://www.jobscan.co/" target="blank">Analyser</a></li>
                    <li><a href="../logout.php">Logout</a></li>
                </ul>
            </div>
            <span class="navTrigger">
                <i></i>
                <i></i>
                <i></i>
            </span>
        </div>
    </nav>

    <section class="home">
        <h1 class="home-headline" style="color: white;
  position: absolute;
  top: 30%;
  left: 42%;">WELCOME TO <b>INTERN PORTAL!</b> </h1><div style="position: absolute; top: 40%; left: 40%; font-size: 44px; color:aliceblue;">Rajiv Gandhi Institute of Petroleum Technology</div>
    </section>

    


    <div id="internship" style="height: 100vh;">
        <a href="form.html" style="border-radius: 12px; color: rgb(255, 254, 254); background-color: 
        blueviolet; font-size: 2vh; position: relative; top: 92%; left: 45%; margin: 12px; padding: 12px;">Post A New Internship</a>




<section>
            <?php   
            while ($rows = $result->fetch_assoc()) {
            ?>

                <div class="main-box" style="display: flex; flex-direction: column; margin:12px;"  >
                <div class="card" style="width: 15rem; border-radius: 18px;">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRGDkNHwbJRMJoAug_9L-OzUdy5t3DcXWpXzg&usqp=CAU" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $rows['username']; ?></h5>
                        <p class="card-text"><b><?php echo $rows['problems']; ?></b> <br> &nbsp; &nbsp; &nbsp; <?php echo $rows['score']; ?> <br> &nbsp; &nbsp; &nbsp; <?php echo $rows['articles']; ?> &nbsp; &nbsp; &nbsp; <?php echo $rows['value']; ?> </p>
                        <a href="#" class="btn btn-primary">Apply</a>
                    </div>
                </div>
                </div>
            <?php
            }
            ?>
            <div style="display: flex; flex-direction:row; justify-content:space-around;">
            <div class="card" style="width: 18rem; border-radius:20px;">
  <img src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAkGBxEQEhIQEBIVFhAVDw8QDxUQEBAOFRAQFRIWFhUVFRYYHCggGBonHRUVITEiJSorLi4uFx8zODMsNygtLisBCgoKDg0OGhAQGislICUtLi0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLf/AABEIAOEA4QMBIgACEQEDEQH/xAAbAAEAAgMBAQAAAAAAAAAAAAAAAQYEBQcDAv/EAEIQAAIBAgIGBQkFBwMFAAAAAAABAgMRBAUGEiExQVFhcYGR0RMWIjJSkqGxwQcjQmJyM0Nzk7Lh8BSC4jRTY8LS/8QAGwEBAAIDAQEAAAAAAAAAAAAAAAQFAQMGAgf/xAA1EQACAQMABgYKAQUAAAAAAAAAAQIDBBEFEiExQZEUUVJhcaETIjJCgbHB0eHwBhUjM2KS/9oADAMBAAIRAxEAPwDuIAAAAAAAAAAAAPKrVjFNyaSW9t2S7SuZnpthaN1FurL/AMfq+89ndc8ynGO1s20qNSq8U4t+BaCGcxx2n+IndUowprq8pLvez4GixWeYqr69eo+hTnFdysiPK7gt20tKWhK8vaaXxydlq4iEfWlFfqkl8zHlm2GW+vS/m0/E4lJtu72vm3dixqd4+CJcdAR41Hyx9TtqzbDPdiKX82Hie1LGU5erOMv0yi/qcMG3mOmPivMS0BDhUfL8neyTh+GzbEU/2dapHoVSdu69jd4LTnF09k3Govzxs/ejY2RvIPeiLU0HXj7LT8jqoKflunmHqWVWMqcuf7SF+tbfgWjDYqFSOtTmpRe5xakvgSIVIy3Mq61vVovFSLX717jIAB7NIAAAAAAAAAAAAAAAAAABDZh5nmNLDU3UqyUYrtcnyS4sGUnJ4W8ym7fXoKln2m9KjeFC1Wpub/dxfX+Ls7yp6RaVVsU3CN4UdyinZzXOb49W4r5Aq3fCHM6Ky0KsKdf/AJX1f25mfmecV8Q71qjkr3STcYLqithgAghttvLL+EIwjqxWESCAYPQAAAAABIIABJk4HMKtCWtRqSg+OrLY+tbn2mKDKbW1GJRUlhrKOhZDp3GVoYpKL3KpFPVf6l+H5dRdqVVSSlFpxaummmmuhnCDc6P6R1sG9j1qV/ShJ7Olr2WS6V21smUN5oWMsyobH1cPh1fHYdiRJrcnzelioeUpSvwlF7JQfKSNiiennajm5RcW4yWGiQAZMAAAAAAAAAAhsXMPM8wp4anKrUdoxXbJ8EubYMpOTwt54Z3nFLCU3UqPohFb5y5LxOT51m9XF1PKVHs3QivViuS8RnebVMXVdSfVGK3RjyXia8q69d1Hhbjr9HaOjbx15bZvy7l9X9N4gAjloAAAAAASQSLAEAmwAwQASAQAAASCzaJaMyxMlVqprDp9TqPkujm/8XqEHN4Rpr14UIOc3sMrQHKKzqLEKThRWx22eV/Lbiuk6Wjzo0lBKMUlFJKKSsklwR6FtSpqEcI4u8upXNVzax1Lu+pIANhFAAAAAAAAAPhu17/4jk+mWevFVdWD+4ptqHKcuM/Do6y1/aBnXkaXkYP7yqvSa3xpce/d3nMyBd1fcXxOi0LZr/PJd0fq/pzBABCOiAAABILTozohPEWq1bwob1s9Ka6L7l0nqEHN4Rpr3FOhDXqPCK5hMHUrS1KUJTlyir9/JFsyvQCrO0q81TXsxtUl2vcviX3LsupYeOpRgox6Ftb5t72zMRPhaRXtbfkc5cabqz2Ulqrm/sVrCaEYOHrQlUfOpN/KNkbKGQYRbsNS7acZfM2gJCpwW5Iq53VabzKb5mslkOEe/DUf5UV9DAxehuCqfutR86c5R+F7fAsQDpwe9IxG4rQeYza+LOe5l9njW3D1b/lqqz7JLwKhmOW1sPLVq05QfC6un1SWxncTHxWFhVi4VIKUXvUldGidpGXs7Cyt9NVqeyp6y5PmcLBcdKNDJUk6uGvKntcobZSgua9pfHrMXRHReWJkqtVNUE+p1GuC6Ob/AMUL0M9bVwX60hbui6yls8/DHX+7tpGiOjEsVJVKqaw6fU6jXBdHNnUKNGMIqMUlFJKKSskuSFCjGEVGKSiklFJWSS3WR6osqVJU1hHJ3l5O6nrS3cF1fkIkA2kQAAAAAAAAAHnKSV2+G1noarPsRqUnFb5PV7OPh2mi5rKjSlUfBZPUIOclFcSmaSYL/VTlVTtPdG+5xW5Pl/cp9ejKEnGatJb0y+GLjsDCsrTW38LW+JxVvpOcZf3dqbz3rP7u5HWW1x6JKD9kpJBmZhl86Ls9sX6slufgzEL6E4zjrReUWsZKSyiCQWHQzIf9VV1pr7mm05/nlwh49BshFyeEa61aFGm6k9yNpoZosp2xOIj6G+lB/j/NLo5LidFjGx8xVti3blwsehbU6apxwjibq6nc1NefwXBeAABsIwAAAAAAAAB8tHxTgoqySS4JKyR6gAAAAAAAAAAAAAAAAFX0krXqKPsr4vb4FnbKXj6mtUqS5yfcnZFD/IKurbKHaa8tpNsI5qZ6kY4AOLLg+KtGM04ySae9MrWa5NKneVPbDit7j4otBBKt7udCWY7urgbaVaVN7ChwpuTUUrttJJcW3ZI7Lo/lkcLQhSVta2tUftVH6z+nYir5HkNOeKhWSsoXqSjwcrei+ja0+wviR2ujJxq0/TLjs5byBpi89Lq047ltfj+PqSACzKQAAAAEMAkFYqabYWMpRaqXjJxdoLenbmfPnzhOVT3F4klWdw/cZp6RS7SLSCrefOE5VPcXiPPnCcqnuLxM9CuOw+Q6RS7SLSCrefOE5VPcXiPPnCcqnuLxHQrjsPkOkUu0i0gq3nzhOVT3F4jz5wnKp7i8R0K47D5DpFLtItIKt584TlU9xeI8+cJyqe4vEdCuOw+Q6RS7SLSCrefOE5VPcXiPPnCcqnuLxHQrjsPkOkUu0i0g1GTZ9SxeuqWteGrra8VH1r2tt6GbcjyhKD1ZLDNkZKSymAAeT0edV2TfJN/Ao1y641/dz/RL5FJOT/kj9eku6XzX2LPRy2SfgSADmSyABABYtGYejOXNpdiX9zeGr0ejaiulyfxt9DaH0PRcNWzpL/VPntKC4easvEAAnmkAAAAABHFMf+1qfxKn9TMcyMd+1qfxKn9TPA7SHso56W8gEg9GMEAkAYIBIAwQCQBggEgGC2fZxWtiKkPao392S/8Ao6Mcv0ClbGR6YVV8L/Q6gc1pRYuM9yLiyeaXxYABXEsx8avu5/ofyKSXmtG8ZLnFr4FGRyf8kXr0n3P5r7lno97JLwJABzJZAgkAFp0df3K6HJfG/wBTaGk0ZqehKPKV+9f2N2fRNGS1rSk/9V5bCguFirLxAAJxpAAAAAARxTHftan8Sp/UzwPfHftan8Sp/UzwO0h7K8DnnvAAPRgAEAEgEAEgAAEEkBgsOgv/AFlP9NT+lnUjmOgEb4tPlSqP5L6nTjnNKv8Av/BfUtrH/F8QACsJhDKVjaerUnHlJ919hdiq6RUdWrre0k+1bH9Cg/kNLWt4z7L+ZOsJYqNda+RrASQcaW4JIb5mjzLOd8KXbLw8SRbWtS4lqwXi+CIt3eUraGtUfguL8P3YWfIs0pwxEaLl6VROPQpJXV3z2PvLijh9GtKEozi/SjJST/MndHY8px0cRShWjulG7XKS2SXY7nc6OpKhS9FnONvPec5SvndTk5LD4eH36zOABYEgAAAEMkAHM8VodjJTnJRhZznJfeLc5No8/MrGezD34nUAWS0pXSxs5fkh9Bpd/M5f5lYz2Ye/EeZWM9mHvxOoAz/Va/d5/cdBpd/M5f5lYz2Ye/EeZeN9mH8yJ1AD+rV+7z+46DS7+Zy/zKxnsw/mI0OKoOnOVOVtaMnGVndXTs9p2THYlUqc6st0ISk+xXscZq1HKUpPfKTk+tu7LDR91VruTnjC+ZEuqMKeNXJ8gAsyIAAAW/7N6V61afs0ox96X/E6GU77OMNajVqP8dXVXSoLxk+4uJy2kJa1xLuwuRdWixSQABCJANRpFh9anrrfF3/2vY/obc86tNSTi9zTT6mR7qgq9GVJ8V58D3Tm4SUlwKKfGIrxprWm7L59CPnOcTHDSlCW2a9Vc1wb5IqmLxUqstab6lwS6EcVaaLqVZevsSe3r2dX3JV/penbrVh60vJeP2MnMczlV2LZDlz6zXgk6alRhSjqwWEcdWr1K03Oo8sFo0HzxUKnkaj+6qSWq3uhU3LsexdxViTfGTi8oxTqSpyUonckz6KTobpMppYavL7xbKU5P117LftfMutydGSkso6GlVjUjrRJAB6NgAAAAAAAAAANTn2cwwlNzltm7qnDjKXguLPUYuUlGK2sxKSissr/ANoWa2isLF7ZWnV6Ip3iu1q/YUI9sXiZ1ZyqVHecm3J/5wPI6u1t1RpKHPxKOvV9JNyAAJJqABstHMB/qMTSp/h1lOf6I7X37u08VJqEXJ7lt5GYpyaSOmaN4PyOGo036ygpS/VL0n8zaEEnGyk5ScnxOgiklhAAGDIIsSAClfaDk+tFYmC9KCUallvhfZLsb7n0HPzuFWmpJxkrpppp7U01Zo5NpNkzwlZx/dyvKk+ceT6V4EWvD3iov6GH6RbuPiakgkEcrSCSAAfRc9G9MnC1LFNuO6NXa2v18+spRJ6jJxeUbaVadJ5iduoVozipQkpRaunFqSa60exxnK83r4Z3ozaW9xfpRl1plwy7T2DssRTcXxlT9KPuvaviSo14vfsLalfU5bJbH5F2BqsLpFhKvqV4X5Seo+6VjYwrRe6SfU0zankmRkpbnk9AfDmlva7zDxGa4en69anHrnG/de5ky2lvM8i5WMdpthad9TWqS4asXFd8iq5tpjia94wapQ5Qu5Prl4WNUq0YkapeUoccvu/cFzz/AElo4VON9etwhF7v1Ph8zmuZZhUxE3UqyvJ7uCiuCiuCMRslMstFX1CE9WosSe5/TuKurdSqvD2LqJAB1JrAAAB0L7Pss1KcsRJelU2Q6Kae/tfyRTchyuWKrRpL1fWqNfhgt/bw7TrtGmoRjGKtGKUYpcEtiKbS1ziPoVve/wACfZUsvXfDd4/vzPUAFEWYAAAAABBrs8yqGKpOlPY98JcYS4M2RDDWdhiUVJYe44pmGCqUKkqVRWlF9jXBrmjHOs6RZDDFws9lWKfk58nyfNHLcfgqlCbp1Y6s13Nc0+KINSnqeBQ3Ns6Lzw/d54EEkGsigAAEggAAlEAYBLZGqAASCAASCAAfRJ8klxYaWnb+pU2w814dfgz0pdZJ9Uqbk1GKbk2lFLa23uR8xV3ZbW9iS2ts6Lofo15BKvWX3zXoxf7pP/2+R0Va+pQpeki853d5KoUXVlhfE2Gi2SLCUknbys7Sqvp4RXQjekJEnNTnKcnKW9l3GKilFAAHg9AAAAAAAAAENGrzrJaWLhq1F6SvqTXrQfR0dBtQGs7GeZRUlh7jj2d5HWwkrVFeDfoTj6svB9DNYdur0I1IuE4qUWrNSV00UrO9Bt88K+nyc3/TL6PvIk6DW2JU17Bx9antXVx/Pz8Sig9sVhZ0pOFSEoyXCSa7uZ4mkr2sPDAAMGAAAAAAAAAACQAD0wuGnVkoU4uU3uUf82LpN7kmiNfEWlNOlSfGavJr8sfqzoGUZNRwsdWlHa/WlJ3lLrf03G2FFy37ETKFlOptlsRqNF9FY4a1WraVfhxjT6ub6e4tKCJJcYqKwi5p04046sUAAejYAAAAAAAAAAAAAAAAAAYuNwVOtHUqwjOPKS3dXIquZaBU5XdCo4P2Zrykex718S6A8yhGW9GqpQp1PaX78zk+O0TxlL93rrnTev8ADf8AA0tWnKDtOLi+Uk4vuZ3I86lOMtkkmulJml264MhT0bD3ZNHDgdhrZBhZ7ZUKd+aiovvRjy0TwT/crslNfU8Og+s0vRs+El5nJgdYWieC/wCyvfqP6ntT0bwkd2Hp/wC5OfzHoJdZhaOqda8zkKfDibHB5Hiq3qUZtc2tRd8rHXaGFp0/UhGP6YqPyPc9q3XFm2GjV70uS+5zzAaBVJba9SMF7NNa773ZL4lqyrR3D4azhC8/bn6cvBdhuQbY04x3ImU7WlT9lEIkA9kgAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAEMAyjCCAAMsEgGAAAAAAAAAAAAAAAAAAAf/9k=" class="card-img-top" alt="...">
  <div class="card-body" style="font-size: 50px;">
    <h3 class="card-title">JS Developer <br> Google</h3>
    <p class="card-text"></p>
    <a href="#" class="btn btn-primary" style="font-size: 15px;">Apply Here</a>
  </div>
</div>
<div class="card" style="width: 18rem; border-radius:20px;">
  <img src="data:image/jpeg;base64,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" class="card-img-top" alt="...">
  <div class="card-body" style="font-size: 50px;">
    <h3 class="card-title">SDE <br> Amazon</h3>
    <p class="card-text"></p>
    <a href="#" class="btn btn-primary" style="font-size: 15px;">Apply Here</a>
  </div>
</div>
<div class="card" style="width: 18rem; border-radius:20px;">
  <img src="data:image/jpeg;base64,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" class="card-img-top" alt="...">
  <div class="card-body"style="font-size: 50px;">
    <h3 class="card-title">Full Stack Developer <br> Flipkart</h3>
    <p class="card-text"></p>
    <a href="#" class="btn btn-primary" style="font-size: 15px;">Apply Here</a>
  </div>
</div>
<div class="card" style="width: 18rem; border-radius:20px;">
  <img src="data:image/jpeg;base64,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" class="card-img-top" alt="...">
  <div class="card-body" style="font-size: 50px;">
    <h3 class="card-title">ML Engineer <br> Apple</h3>
    <p class="card-text"></p>
    <a href="#" class="btn btn-primary" style="font-size: 15px;">Apply Here</a>
  </div>
</div>
            </div>
    </section>


    </div>


    <div class="contact-container" id="contact">
        <div class="left-col">
            <!-- <img class="logo" src="..." /> -->
        </div>
        <div class="right-col">
            <div class="theme-switch-wrapper">
                <label class="theme-switch" for="checkbox">
                    <input type="checkbox" id="checkbox" />
                    <div class="slider round"></div>
                </label>
                <div class="description" style="font-size: 13px; color: white; font-weight: bolder;">Dark Mode</div>
            </div>

            <h1>Contact us</h1>
            <p>Ask Your Queries Here!</p>

            <form id="contact-form" method="post" action="insert1.php">
                <label for="name">Full name</label>
                <input type="text" id="name" name="name" placeholder="Your Full Name" required>
                <label for="email">Email Address</label>
                <input type="email" id="email" name="email" placeholder="Your Email Address" required>
                <label for="message">Message</label>
                <textarea rows="6" placeholder="Your Message" id="message" name="message" required></textarea>
                <!-- <button type="submit" id="submit" value="Submit" name="submit">Send</button> -->
                <input type="submit" value="Submit">

            </form>
            <div id="error"></div>
            <div id="success-msg"></div>
        </div>
    </div>

    <!-- Jquery needed -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <!-- <script src="js/scripts.js"></script> -->

    <!-- Function used to shrink nav bar removing paddings and adding black background -->
    <script>
        $(window).scroll(function() {
            if ($(document).scrollTop() > 50) {
                $('.nav').addClass('affix');
                console.log("OK");
            } else {
                $('.nav').removeClass('affix');
            }
        });
    </script>
</body>
<script src="script.js"></script>
<script>
    $('.navTrigger').click(function () {
    $(this).toggleClass('active');
    console.log("Clicked menu");
    $("#mainListDiv").toggleClass("show_list");
    $("#mainListDiv").fadeIn();

});

</script>

</html>