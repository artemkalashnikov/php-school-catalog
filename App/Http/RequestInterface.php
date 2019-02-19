<?php

namespace App\Http;

interface RequestInterface
{
    public function getQueryParams();

    public function getPostData();

    public function getMethod();

    public function getPath();
}
