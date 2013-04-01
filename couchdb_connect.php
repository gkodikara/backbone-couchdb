<script src="http://127.0.0.1:5585/_utils/script/json2.js"></script>
<script src="http://127.0.0.1:5585/_utils/script/sha1.js"></script>
<script src="http://127.0.0.1:5585/_utils/script/jquery.js?1.4.2"></script>
<script src="http://127.0.0.1:5585/_utils/script/jquery.couch.js?0.11.0"></script>
<script src="http://127.0.0.1:5585/_utils/script/jquery.dialog.js?0.11.0"></script>

<script type="text/javascript">
$.couch.urlPrefix = "http://127.0.0.1:5585";
$.couch.info({
    success: function(data) {
        console.log(data);
    }
});

</script>