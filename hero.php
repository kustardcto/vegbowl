<?php
function heroSection($smallTitle, $bigTitle, $description, $imagePath) {
    echo '
    <section class="hero-header">
        <div class="hero-container">
            <div class="hero-row">

                <!-- LEFT SIDE — TEXT -->
                <div class="hero-left">
                    <h1 class="small-title">'.$smallTitle.'</h1>
                    <h1 class="big-title">'.$bigTitle.'</h1>
                    <p>'.$description.'</p>
                </div>

                <!-- RIGHT SIDE — IMAGE -->
                <div class="hero-right">
                    <div class="yellow-box">
                        <img src="'.$imagePath.'" class="hero-img" alt="Hero Image">
                    </div>
                </div>

            </div>
        </div>

        <!-- PATTERN STRIP -->
        <div class="hero-pattern"></div>
    </section>
    ';
}
?>