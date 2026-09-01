<?php declare(strict_types=1);

    namespace STDW\Contract\Http\Router;

    use STDW\Contract\Http\RequestInterface;


    interface RouteInterface
    {
        /**
         * @param RequestInterface $request 
         * @return null|RouteInterface 
         */
        public function match(RequestInterface $request): ?RouteInterface;
    }
