<?php

class FormClient
{

    private function connectionDb()
    {

        $dsn = 'mysql:host=localhosr;dbname=portfolio;charset=utf8';
        $user = 'root';
        $pass = '';

        //FAZ O TRATAMENTO DO PDO Exception
        try {

            $pdo = new PDO($dsn, $user, $pass); //-------- CONEXÃO COM O BANCO

            return $pdo;
        } catch (PDOException $ex) {

            echo 'Erro: ' . $ex->getMessage();
        }
    }

    public function checkRegistration($client)
    {

        $conn = $this->connectionDb();

        $sqlSelect = "SELECT * FROM customers WHERE email = :email OR phone = :phone";

        $stmt = $conn->prepare($sqlSelect);

        $stmt->bindParam(':email', $client['email']);
        $stmt->bindParam(':phone', $client['phone']);

        if ($stmt->execute()) {

            $result = $stmt->fetchAll();

            if (sizeof($result) > 0) {

                return json_encode(array("erro" => false, "mensagem" => "O número de telefone ou email, ja está cadastrado!"));
            } else {

                return $this->clientRegister($client);
            }
        } else {

            json_encode(array("erro" => true, "mensagem" => "Erro ao consultar cliente"));
        }
    }

    private function clientRegister($client)
    {

        $conn = $this->connectionDb();

        $sqlInsert = "INSERT INTO customers(first_name, last_name, email, phone, message, registration_date) VALUES(:firstName, :lastName, :email, :phone, :message, NOW())";

        $stmt = $conn->prepare($sqlInsert);

        $stmt->bindParam(':firstName', $client['firstName']);
        $stmt->bindParam(':lastName', $client['lastName']);
        $stmt->bindParam(':email', $client['email']);
        $stmt->bindParam(':phone', $client['phone']);
        $stmt->bindParam(':message', $client['message']);

        if ($stmt->execute()) {

            return json_encode(array("erro" => false, "mensagem" => "Cliente cadastrado com sucesso"));
        } else {

            return
                json_encode(array("erro" => true, "mensagem" => "Erro ao cadastrar cliente"));
        }
    }
}
