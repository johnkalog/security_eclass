<script>
var mysql = require('mysql');

var con = mysql.createConnection({
  host: "localhost",
  user: "root",
  password: "csec",
  database: "eclass"
});

con.connect(function(err) {
  if (err) throw err;
  con.query("SELECT * FROM user", function (err, result, fields) {
    if (err) throw err;
    console.log(result);
  });
});
</script>
