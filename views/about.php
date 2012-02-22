<div class="twocols">
    <div class="twocols-left">
      <div class="content">
       <img id="profile" src="/images/profile.jpg" />

       <h2>Contact</h2>
        <?php
            display_markdown('about/contact');
        ?>
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
            $_repos = array("colder/insane", "colder/stupidweb");
            require __ROOT__.'/views/github.php';
        ?>
      </div>
    </div>
</div>
