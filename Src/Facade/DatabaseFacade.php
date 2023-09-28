<?php

namespace php\Facade;

use php\Http\DB;

class DatabaseFacade
{
    private ?DB $db;

    public function __construct()
    {
        $this->db = DB::getInstance();
    }

    public function eseguiQuery($query): string
    {
        $query = $this->db->query($query);

        if ($this->db->getError()) {
            return 'Si e presentato un errore con la query: "' . $this->db->getError() . '"';
        }

        return $query;
    }

    public function chiudiConnessione(): string
    {
        $this->db->closeConnection();

        if ($this->db->getError()) {
            return 'Si e presentato un errore con la chiusura: "' . $this->db->getError() . '"';
        }

        return "connessione al databases Chiusa";
    }
}