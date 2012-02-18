        </div>
        <!-- FOOTER -->
        <div id="footer"><span>Last update: 
<?php
    $root = __ROOT__;

    echo `cd $root; git log --pretty=format:'%ar by %an' | head -n1`
?>
</span></div>
    <script src="/js/highlight.pack.js"></script>
    <script type="text/javascript">
       hljs.tabReplace = '    '; // 4 spaces
       hljs.initHighlightingOnLoad();
    </script>
    </body>
</html>

