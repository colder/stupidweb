<div class="twocols">
    <div class="twocols-left">
      <div class="content">
       <img id="profile" src="/images/profile.jpg" />

       <h2>Contact</h2>
       <h3>E-Mail</h3>
       <p>etienne.kneuss@epfl.ch</p>
       <p>colder@php.net</p>
       <p>ekneuss@gmail.com</p>

       <h3>IRC</h3>
       <p>ekneuss<br />(Freenode, QuakeNet, EFnet)</p>

       <h3>Twitter</h3>
       <p><a href="http://twitter.com/ekneuss" target="_blank">@ekneuss</a></p>
      </div>
    </div>

    <div class="twocols-right">
      <div class="content">
        <h2>Biography</h2>
        <?php
            display_markdown('about/biography');
        ?>

        <div class="publications">
            <h2>Publications</h2>
        <?php
            display_markdown('about/publications');
        ?>
        </div>

        <h2>Recent Git Activity</h2>
        <?php
            $_repos = array("colder/insane");
            require __ROOT__.'/views/github.php';
        ?>
      </div>
    </div>
</div>
