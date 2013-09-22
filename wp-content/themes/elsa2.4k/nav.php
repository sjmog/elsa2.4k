<nav>
    <ul class="row">
        <li class="<?php if (is_page('Blog')) { echo 'darkLink' ;}; ?> large-3 small-10 large-uncentered small-centered columns"><a href="/" class="navItem">Home</a></li>
        <li id="elsaLink" class="<?php if (is_page('Blog')) { echo 'currentItem darkLink' ;}; ?> large-3 small-10 large-uncentered small-centered columns"><a href="/blog" class="navItem">Elsa</a></li>
        <li id="challengeLink" class="<?php if (is_page('The Challenge')) { echo 'currentItem' ;}; ?> <?php if (is_page('Blog')) { echo 'darkLink' ;}; ?> large-3 small-10 large-uncentered small-centered columns"><a href="/challenge" class="navItem">The Challenge</a></li>
        <li class="<?php if (is_page('The Cause')) { echo 'currentItem' ;}; ?> <?php if (is_page('Blog')) { echo 'darkLink' ;}; ?> large-3 small-10 large-uncentered small-centered columns"><a href="/cause" class="navItem">The Cause</a></li>
    </ul>
</nav>