<?php declare(strict_types=1);

    namespace STDW\Contract\Http\Router;


    interface RouteInterface
    {
        /** @return string 
         */
        public function getController(): string;

        /** @return array<string, mixed> 
         */
        public function getVariables(): array;
    }
