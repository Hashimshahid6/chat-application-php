<?php include_once "header.php"; ?>

<body>
    <div class="wrapper">
        <section class="form login">
            <header>Realtime Chat Application</header>
            <form action="" method="post" enctype="multipart/form-data" autocomplete="off">
                <div class="error-text"></div>
                <div class="field input">
                    <label>Email Address</label>
                    <label for=""></label>
                    <input type="text" name="email" placeholder="Enter Your Email" required>
                </div>
                <div class="input field">
                    <input type="password" name="password" placeholder="Enter Your Password" required/>
                    <i class="fas fa-eye"></i>
                </div>
                <div class="field button">
                    <input type="submit" name="submit" value="Continue to Chat">
                </div>
            </form>
            <div class="link">Not yet Signed Up?<a href="index.php"> Signup Now</a></div>
        </section>
    </div>
</body>"