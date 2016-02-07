<?php namespace HelioQuote\Repositories;
interface ZipCodeRepositoryInterface
{
    public function getAll();
    public function find($id);
}
