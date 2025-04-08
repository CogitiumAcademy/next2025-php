<?php

namespace App\Repository;

use PDO;
use PDOException;
use App\Repository\AbstractRepository;

class CustomerRepository extends AbstractRepository
{
    public function findAll(): array
    {
        try {
            $sql =  'SELECT * 
                        FROM customers A
                        INNER JOIN employees B
                            ON A.salesRepEmployeeNumber = B.employeeNumber
                        ORDER BY A.customerName ASC';
            $cursor = $this->pdo->query($sql);
            $data = $cursor->fetchAll();
            return $data;
        } catch (PDOException $e) {
            die("Erreur : " . $e->getMessage());
        }
    }

    public function findById($id): array
    {
        try {
            $sql =  'SELECT * 
                        FROM customers A
                        INNER JOIN employees B
                            ON A.salesRepEmployeeNumber = B.employeeNumber
                        WHERE customerNumber = :id';
            $cursor = $this->pdo->prepare($sql);
            $cursor->bindValue(':id', $id, PDO::PARAM_INT);
            $cursor->execute();
            $data = $cursor->fetch();
            return $data;
        } catch (PDOException $e) {
            die("Erreur : " . $e->getMessage());
        }
    }
}