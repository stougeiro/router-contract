<?php declare(strict_types=1);

    namespace STDW\Contract\Http\Router;


    interface RouteCollectionInterface
    {
        /**
         * @param string $file 
         * @return void 
         */
        public function load(string $file): void;

        /**
         * @param string $name 
         * @param array<string, mixed> $vars 
         * @return string 
         */
        public function generate(string $name, array $vars = []): string;

        /** @return array<string, mixed>
         */
        public function all(): array;
    }
