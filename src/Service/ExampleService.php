<?php

namespace App\Service;

use App\Entity\ExampleEntity;
use App\Repository\ExampleEntityRepository;


class ExampleService
{
    private ExampleEntityRepository $repository;

    public function __construct(ExampleEntityRepository $repository)
    {
        $this->repository = $repository;
    }

    public function getAll(): array
    {
        return $this->repository->findAll();
    }

    public function save(string $name): void
    {
        $entity = new ExampleEntity($name);
        $this->repository->save($entity);
    }

}