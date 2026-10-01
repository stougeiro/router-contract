<?php declare(strict_types=1);

    namespace STDW\Contract\Http\Router;


    interface RouteInterface
    {
        /** @return string
         */
        public function getUri(): string;

        /** @return string
         */
        public function getMap(): string;

        /** @return string
         */
        public function getController(): string;

        /** @return array<string, mixed>
         */
        public function getVariables(): array;

        /**
         * @return array{
         *   uri: string,
         *   map: string,
         *   controller: string,
         *   variables: array<string, mixed>
         * }
         */
        public function getData(): array;
    }
