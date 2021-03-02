<?php

namespace App\Tests;

use App\Entity\Category;
use App\Entity\User;
use PHPUnit\Framework\TestCase;

class CategoryUnitTest extends TestCase
{
    public function testIsTrue(): void
    {
        $category = (new Category())
            ->setName('Category')
            ->setDescription('My Super category')
            ->setSlug('category')
        ;

        $this->assertEquals('Category', $category->getName());
        $this->assertEquals('My Super category', $category->getDescription());
        $this->assertEquals('category', $category->getSlug());

    }


    public function testIsFalse(): void
    {
        $category = (new Category())
            ->setName('Category')
            ->setDescription('My Super category')
            ->setSlug('category')
        ;

        $this->assertNotEquals('Categorya', $category->getName());
        $this->assertNotEquals('My Super categoryaa', $category->getDescription());
        $this->assertNotEquals('categoryaa', $category->getSlug());

    }

}
