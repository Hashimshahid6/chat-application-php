<?php include_once "header.php"; ?>
<body>
    <div class="wrapper">
        <section class="form signup">
            <header>Real Time Chat Application</header>
            <form action="#" method="post" enctype="multipart/form-data" autocomplete="off">
                <div class="error-text"></div>
                <div class="name-details">
                    <div class="field input">
                        <label for="first_name">First Name</label>
                        <input type="text" name="first_name"  id="first_name" required placeholder="First Name"/>
                    </div>
                    <div class="field input">
                        <label for="last_name">Last Name</label>
                        <input type="text" name="last_name"  id="last_name" required placeholder="last Name"/>
                    </div>
                    <div class="field input">
                        <label for="email">Email</label>
                        <input type="email" name="email"  id="email" required placeholder="Email"/>
                    </div>
                    <div class="field input">
                        <label for="password">Enter Password </label>
                        <input type="text" name="password"  id="password" required placeholder="Password"/>
                        <i class="fas fa-eye"></i>
                    </div>
                    <div class="field image">
                        <label>Profile Image</label>
                        <input type="file" accept=".png,.jpg,.jpeg,.gif" name="image" required/>
                    </div>
                    <div class="field button">
                        <input type="submit" name="submit" value="Continue to Chat">
                    </div>
                </div>
            </form>
            <div class="link">Already Signed up? <a href="login.php">Login Now</a></div>
        </section>
    </div>
</body>
</html>