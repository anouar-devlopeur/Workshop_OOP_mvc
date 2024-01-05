<nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-3">
    <div class="container">
        <a class="navbar-brand" href="<?php echo URLROOT; ?>"><?php echo SITENAME; ?></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="<?php echo URLROOT; ?>/Pages/login">client</a>
                </li>
                <li class="nav-item ">
                    <form action="<?php echo URLROOT; ?>/UserController/LogOut" method="post">
                        <button type="submit" class="btn nav-link" name="logOut">Log Out</button>
                    </form>


                </li>

            </ul>

            </ul>
        </div>
    </div>
</nav>