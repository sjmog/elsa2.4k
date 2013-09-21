<nav>
    <ul class="row">
        <li class="large-3 small-10 large-uncentered small-centered columns"><a href="/" class="navItem">Home</a></li>
        <li id="elsaLink" class="<?php if (is_page('Hello')) { echo 'currentItem' ;}; ?> large-3 small-10 large-uncentered small-centered columns"><a href="/blog" class="navItem">Elsa</a></li>
        <li id="challengeLink" class="<?php if (is_page('2,400 Miles')) { echo 'currentItem' ;}; ?> large-3 small-10 large-uncentered small-centered columns"><a href="/challenge" class="navItem">The Challenge</a></li>
        <li class="<?php if (is_page('90%')) { echo 'currentItem' ;}; ?> large-3 small-10 large-uncentered small-centered columns"><a href="/cause" class="navItem">The Cause</a></li>
    </ul>
</nav>