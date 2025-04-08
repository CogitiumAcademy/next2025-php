<?php

namespace App\Repository;

use PDO;
use PDOException;

class OrderRepository extends AbstractRepository
{
    public function findAll(): array
    {
        try {
            $sql =  'SELECT A.orderNumber, orderDate, requiredDate, shippedDate, status, customerName, SUM(quantityOrdered * priceEach) AS "total"
                        FROM orders A
                        INNER JOIN customers B
                            ON A.customerNumber = B.customerNumber
                        INNER JOIN orderdetails C
	                        ON C.orderNumber = A.orderNumber
                        GROUP BY C.orderNumber;';
            $cursor = $this->pdo->query($sql);
            $data = $cursor->fetchAll();
            return $data;
        } catch (PDOException $e) {
            die("Erreur : " . $e->getMessage());
        }
        return $data;
    }

    public function findByCustomer($id): array
    {
        try {
            $sql =  'SELECT A.orderNumber, orderDate, requiredDate, shippedDate, status, customerName, SUM(quantityOrdered * priceEach) AS "total"
                        FROM orders A
                        INNER JOIN customers B
                            ON A.customerNumber = B.customerNumber
                        INNER JOIN orderdetails C
	                        ON C.orderNumber = A.orderNumber
                        WHERE A.customerNumber = :id
                        GROUP BY A.orderNumber;';
            $cursor = $this->pdo->prepare($sql);
            $cursor->bindValue(':id', $id, PDO::PARAM_INT);
            $cursor->execute();
            $data = $cursor->fetchAll();
            return $data;
        } catch (PDOException $e) {
            die("Erreur : " . $e->getMessage());
        }
        return $data;
    }
}