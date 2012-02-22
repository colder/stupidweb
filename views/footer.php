    </div>
    <!-- FOOTER -->
    <div id="footer"><span>Last update: <?php $root = __ROOT__; echo `cd $root; git log --pretty=format:'%ar by %an' | head -n1` ?> </span></div>
    <script src="/js/highlight.pack.js"></script>
    <script src="/js/jquery-1.7.1.min.js"></script>
    <script src="/js/jquery-ui-1.8.17.custom.min.js"></script>
    <script type="text/javascript">
       hljs.tabReplace = '    '; // 4 spaces
       hljs.initHighlightingOnLoad();

<?php
    if (isAdmin()) {
?>
       $(document).ready(function() {
            $( "#dialog-edit" ).dialog({
                autoOpen: false,
                height: 680,
                width: 850,
                modal: true,
                buttons: {
                    "Save": function() {
                        $.ajax({
                            url : "/ajax/admin-save-markdown.php",
                            data : {
                                "path"    : $("#dialog-edit").attr("path"),
                                "content" : $("#dialog-edit-content").val()
                            },
                            dataType: "json",
                            success : function (data) {
                                var path = $("#dialog-edit").attr("path");
                                $(".markdown[path=\""+path+"\"]").html(data.content);
                                $("#dialog-edit").dialog("close");
                                
                            }
                        });
                    },
                    Cancel: function() {
                        $( this ).dialog( "close" );
                    }
                },
            });

            $(".markdown").each(function() {
                $(this).addClass("admin-edit");
                $(this).click(function () {
                    var path = $(this).attr("path");
                    $.ajax({
                        url : "/ajax/admin-load-markdown.php",
                        data : {"path": path },
                        dataType: "json",
                        success : function (data) {
                            $("#dialog-edit").attr("path", path);
                            $("#dialog-edit-content").html(data.content);
                            $("#dialog-edit").dialog("open");
                        }
                    });
                });
            });
       });
<?php
    }
?>
    </script>
    <div id="dialog-edit" title="Edit Content">
        <form>
        <fieldset>
            <textarea name="content" id="dialog-edit-content"class="text ui-widget-content ui-corner-all"></textarea>
        </fieldset>
        </form>
    </div>
  </body>
</html>

