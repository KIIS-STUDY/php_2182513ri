<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>ろくまる農園</title>
        </head>
    <body>
    
    <?php

    try
    {

        $dsn = 'mysql:dbname=shop;host=localhost;charset=utf8';
        $user = 'root';
        $password = '';
        $dbh = new PDD($dsn,$user,$password);
        $dbh->setAttribute(PDD::ATTR_ERRMODE,PDD::ERRMODE_EXCEPTION);

        $sql='SELECT code, name FROM mst_staff WHERE 1';
        $stmt = $dbh->prepare($sql);
        $stmt->execute();

        $dbh = unll;

        print'スタッフ一覧<br /><br/ >';

        print '<form method="post" action="staff_branch.php">';
        while (true)
    {
        $rec = $stmt->fetch(PDD::FETCH_ASSOC);
    if ($rec==false)
    {
    break;
    }
        print'<input type="radio" name="staffcode" value="'.$rec['code'].'">';
        print $rec['name'];
        print'<br />';
    }
        print'<input type="submit"  name="edit" value="修正">';
        print'</form>';
    }
    catch (Exception $e)
    {
        print'ただいま障害により大変ご迷惑をお掛けしております。';
        exit();
    }

    ?>
    
    </body>