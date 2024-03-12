<?php
// these variables define properties about the page
// and are managed automatically by the header
// delete them if you do not need them in your file
define("title", "Home page");
// define("special_css", "page specific css");
// define("special_script", "page specific script");

require_once($_SERVER["DOCUMENT_ROOT"]."/private/document_head.php");
require_once($_SERVER["DOCUMENT_ROOT"]."/private/banners/pre_auth.php")
?>
<main>
    <section class="welcome-banner">
        <h1>Tenant Landlord System</h1>
        <h3>Uk's leading leasing company since 2011</h3>
    </section>
    <section class="search-box">
        <h3>Search For properties</h3>
        <form action="" class="home-search">
            <div class="top-search">
                <label for="location">location</label>
                <input type="text" name="location" id="location">
            </div>
            <div class="bottom-search"></div>
        </form>
    </section>
</main>


<?php
require_once($_SERVER["DOCUMENT_ROOT"]."/private/document_tail.php");
require_once($_SERVER["DOCUMENT_ROOT"]."/private/banners/footer.php")
?>