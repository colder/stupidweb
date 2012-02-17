        </div>
        <!-- FOOTER -->
        <div id="footer"><span>Last update: 
<?php
    $root = __ROOT__;

    echo `cd $root; git log --pretty=format:'%ar by %an' | head -n1`
?>
</span></div>
    </body>
</html>

