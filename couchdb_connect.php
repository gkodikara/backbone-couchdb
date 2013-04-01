<!DOCTYPE html>
<html>
  <head>
    <title>CouchDB jQuery Examples</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <script src="/_utils/script/json2.js"></script>
    <script src="/_utils/script/sha1.js"></script>
    <script src="/_utils/script/jquery.js?1.4.2"></script>
    <script src="/_utils/script/jquery.couch.js?0.11.0"></script>
    <script src="/_utils/script/jquery.dialog.js?0.11.0"></script>

	<script type="text/javascript">
		$.couch.urlPrefix = "http://crowdfit.gregkodikara.com:5585";
		$.couch.info({
			success: function(data) {
			    console.log(data);
			}
		});

	</script>


  </head>
  <body>
  </body>
</html>
