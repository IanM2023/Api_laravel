<?php
    namespace App\Services\Geolocation;
    use App\Services\Map\Map;
    use App\Services\Satallite\Satallite;

    class Geolocation
    {

        /**
         * @var MAP
         */
        private $map;

         /**
         * @var Satallite
         */
        private $satallite;

        public function __construct(Map $map, Satallite $satallite)
        {
            $this->map = $map;
            $this->satallite = $satallite;
        }

        public function search(string $name)
        {
            // ...
            $locationInfo = $this->map->findAddress($name);

           return $this->satallite->pinpoint($locationInfo);
        }
    }


?>