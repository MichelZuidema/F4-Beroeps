<header>
    <div class="container">
        <div id="branding">
            <h1>BEROEPS</h1>
        </div>
        <?php if(isset($_SESSION['id'])): ?>
            <nav>
                <ul>
                    <li><a href="#"><?= $_SESSION['naam']; ?></a></li>
                    <li><a href="../assets/db/logout.php">Logout</a></li>
                </ul>
            </nav>
        <?php endif; ?>
    </div>
</header>