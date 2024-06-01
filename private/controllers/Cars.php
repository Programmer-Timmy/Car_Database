<?php

class Cars
{
    /**
     * @param int $limit
     * @return mixed
     */
    public static function getAll(int $limit = 24, string|int $filter = '')
    {
        $filter = '%' . $filter . '%';
        return Database::query("SELECT * FROM autoverzameling JOIN `staat voertuig` ON autoverzameling.staat=`staat voertuig`.id JOIN locatie ON autoverzameling.`huidige_locatie`=locatie.id WHERE `merk` LIKE ? OR `model` LIKE ? OR `Producent` like ? OR `Modelnr` LIKE ?
                                                                                                                                                              ORDER BY Nummer ASC LIMIT $limit", [$filter, $filter, $filter, $filter]);
    }

    /**
     * @param int $id
     * @return object | null | bool
     */
    public static function get(int $id): object|null|bool
    {
        return Database::get('autoverzameling', ['*'], ['`staat voertuig`' => 'autoverzameling.staat=`staat voertuig`.id', 'locatie' => 'autoverzameling.`huidige_locatie`=locatie.id'], ['autoverzameling.ID' => $id]);

    }
}