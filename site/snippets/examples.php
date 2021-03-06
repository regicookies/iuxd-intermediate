<?php
/**
 * Snippets are a great way to store code snippets for reuse or to keep your templates clean.
 * in loops or simply to keep your templates clean.
 * This intro snippet is reused in multiple templates. While it does not contain much code,
 * it helps to keep your code DRY and thus facilitate maintenance when you have to make changes.
 * More about snippets: https://getkirby.com/docs/guide/templates/snippets
 */
?>

<div class="workexamples">

    <div class="title">
        <h3>WORK EXAMPLES</h3>
        <span></span>
    </div>

    <div id="works"></div>

    <div class="row">
        <div class="col-md-4 col-sm-12">
            <div class="work">
                <div class="zoom">
                    <div class="work-image-1"></div>
                </div>
                <h2><a href="<?= $page->linkexample1()->kirbyurl() ?>">Tap Table App</a></h2>
                <p>By Arun Thangavel</p>
            </div>
        </div>
        <div class="col-md-4 col-sm-12">
            <div class="work">
                <div class="zoom">
                    <div class="work-image-2"></div>
                </div>
                <h2><a href="<?= $page->linkexample2()->kirbyurl() ?>">Apple Music</a></h2>
                <p>By Keith Alva</p>
            </div>
        </div>
        <div class="col-md-4 col-sm-12">
            <div class="work">
                <div class="zoom">
                    <div class="work-image-3"></div>
                </div>
                <h2><a href="<?= $page->linkexample3()->kirbyurl() ?>">Tralley</a></h2>
                <p>By Sabine Schwarzkopf</p>
            </div>
        </div>
    </div>

</div>