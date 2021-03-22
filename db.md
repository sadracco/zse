# MSQLi
```php
$mysqli = new mysqli("localhost", "user", "password", "database");

$mysqli->host_info() // connection info
$mysqli->query("DROP TABLE IF EXISTS test"); // execution
$mysqli->prepare("INSERT INTO test(id, label) VALUES (?, ?)"); // prepared statement
```

# PDO
```php
$dbh = new PDO('mysql:host=localhost;dbname=test', $user, $pass); // connection
$sth = $dbh->query('SELECT * FROM foo'); // query
```

# SQLite
```php
$db = new SQLite3('db.db', SQLITE3_OPEN_CREATE | SQLITE3_OPEN_READWRITE);

$db->close() // closing connection
$res = $db->query('SELECT * FROM cars'); // query
$version = $db->querySingle('SELECT SQLITE_VERSION()'); // query returinig single value
$db->exec("INSERT INTO cars(name, price) VALUES('Audi', 52642)"); // query without a result
```

# Prepered statements
```php
$st = $mysqli->prepare("INSERT INTO test(id, label) VALUES (?, ?)");

$id = 1;
$label = 'PHP';
$st->bind_param("is", $id, $label);

$st->execute();
```