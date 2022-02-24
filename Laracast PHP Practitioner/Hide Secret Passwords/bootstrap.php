<?php


$config = require 'config.php';
// 2. fetches configuration//

require 'database/Connection.php';
// 3. forms a database connection//

require 'database/QueryBuilder.php';
// 4. instantiates a query builder and then does the below//


return new QueryBuilder(

    Connection::make($config['database'])
    // 4a. passes in our instance of PDO//

);
