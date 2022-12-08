<div class="app horizontal-menu app-auth-sign-up align-content-stretch d-flex flex-wrap justify-content-end">
    <div class="app-auth-background">

    </div>
    <div class="app-auth-container">
        <div class="logo">
            <h3>Sign Up</h3>
        </div>
        <p class="auth-description">Please enter your credentials to create an account.<br>Already have an account? <a href="<?php echo route_to('signIn'); ?>">Sign In</a></p>

        <div class="auth-credentials m-b-xxl">
            <label for="signUpUsername" class="form-label">Nama Pengelola</label>
            <input type="email" class="form-control m-b-md" id="signUpUsername" aria-describedby="signUpUsername" placeholder="Enter username">

            <label for="signUpEmail" class="form-label">Email</label>
            <input type="email" class="form-control m-b-md" id="signUpEmail" aria-describedby="signUpEmail" placeholder="example@neptune.com">
            <label for="signUpEmail" class="form-label">Kontak</label>
            <input type="email" class="form-control m-b-md" id="signUpEmail" aria-describedby="signUpEmail" placeholder="628123456789">

            <label for="signUpPassword" class="form-label">Password</label>
            <input type="password" class="form-control" id="signUpPassword" aria-describedby="signUpPassword" placeholder="&#9679;&#9679;&#9679;&#9679;&#9679;&#9679;&#9679;&#9679;">
            <div id="emailHelp" class="form-text">Password must be minimum 8 characters length*</div>
            <label for="signUpPassword" class="form-label">Verifikasi Password</label>
            <input type="password" class="form-control" id="signUpPassword" aria-describedby="signUpPassword" placeholder="&#9679;&#9679;&#9679;&#9679;&#9679;&#9679;&#9679;&#9679;">
            <div id="emailHelp" class="form-text">Password must be minimum 8 characters length*</div>
        </div>

        <div class="auth-submit">
            <a href="#" class="btn btn-success" id="btn-sign">Sign Up</a>
        </div>
        <div class="divider"></div>
        <div class="auth-alts">
            <a href="#" class="auth-alts-google"></a>
            <a href="#" class="auth-alts-facebook"></a>
            <a href="#" class="auth-alts-twitter"></a>
        </div>
    </div>
</div>