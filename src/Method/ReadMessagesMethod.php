<?php

namespace App\Method;

use Yoanm\JsonRpcServer\Domain\JsonRpcMethodInterface;


class ReadMessagesMethod implements JsonRpcMethodInterface
{
    public function apply(array $paramList = null)
    {

        $servername = "localhost";
        $username = "myuser";
        $password = "hardpass";

        $conn = mysqli_connect($servername, $username, $password);
        $conn->select_db("testdb");

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $query = "SELECT message FROM testtable WHERE userid = '" . $paramList['user'] . "'";

        $result = $conn->query($query);

        if (!$result) {

            return $conn->error;
        }

        return $result->fetch_row();

        //return $paramList;
    }
}