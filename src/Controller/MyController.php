<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MyController

{
    /**
     * @Route("/mypage")
     */
    public function mypage(): string
    {
        return 'This is my page';
    }


    /**
     * @Route("/lucky/number")
     */
    public function number(): int
    {
        $number = random_int(0, 100);

        return $number;
    }


    /**
     * @Route("/check_env")
     */

    public function enviroment(): Response
    {
        return new Response(
            $_ENV['APP_ENV']
        );
    }


    public function show_all(): Response
    {

        $servername = "localhost";
        $username = "myuser";
        $password = "hardpass";

        $conn = mysqli_connect($servername, $username, $password);
        $conn->select_db("testdb");

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $query = "SELECT * FROM testtable";

        $result = $conn->query($query);

        if (!$result) {

            return new Response($conn->error);
        }

        while ($row = $result->fetch_assoc()) {
            $myArray[] = $row;
        }


        return new Response(
            '<html><body>' . json_encode($myArray) . '</body></html>'
        );
    }
}