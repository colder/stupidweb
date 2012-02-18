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
       <p>ekneuss (Freenode, QuakeNet, EFnet)</p>

       <h3>Twitter</h3>
       <p><a href="http://twitter.com/ekneuss" target="_blank">@ekneuss</a></p>
      </div>
    </div>

    <div class="twocols-right">
      <div class="content">
        <h2>Biography</h2>
        <?php
            echo Markdown(file_get_contents(__ROOT__.'/contents/about/biography'));
        ?>

        <div class="publications">
            <h2>Publications</h2>
        <?php
            echo Markdown(file_get_contents(__ROOT__.'/contents/about/publications'));
        ?>
        </div>

        <h2>Recent activity</h2>
      </div>
    </div>
</div>
