<?php

namespace App\Repository;

use PDOException;

class DashboardRepository extends AbstractRepository
{
    public function CountAll(): array
    {
        try {
            $sql =  'SELECT
                    (SELECT COUNT(*) FROM employees) AS CountEmployees,
                    (SELECT COUNT(*) FROM customers) AS CountCustomers,
                    (SELECT COUNT(*) FROM products) AS CountProducts,
                    (SELECT COUNT(*) FROM orders) AS CountOrders;';
            $cursor = $this->pdo->query($sql);
            $data = $cursor->fetchAll();
            return $data;
        } catch (PDOException $e) {
            die("Erreur : " . $e->getMessage());
        }
        return $data;
    }
}