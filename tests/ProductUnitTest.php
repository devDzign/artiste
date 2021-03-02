<?php

namespace App\Tests;

use App\Entity\Category;
use App\Entity\Product;
use App\Entity\User;
use PHPUnit\Framework\TestCase;

class ProductUnitTest extends TestCase
{
    public function testIsTrue(): void
    {
        $product  = new Product();
        $datetime = new \DateTimeImmutable();
        $category = new Category();
        $user     = new User();

        $product
            ->setName('nom')
            ->setHeight(20.20)
            ->setWidth(20.20)
            ->setPrice(20.20)
            ->setOnSale(true)
            ->setDateOFCompletion($datetime)
            ->setDescription('description')
            ->setPortfolio(true)
            ->setSlug('slug')
            ->setFile('file')
            ->addCategory($category)
            ->setUser($user);

        $this->assertEquals('nom', $product->getName());
        $this->assertEquals(20.20, $product->getHeight());
        $this->assertEquals(20.20, $product->getWidth());
        $this->assertEquals(20.20, $product->getPrice());
        $this->assertEquals(true, $product->getOnSale());
        $this->assertEquals($datetime, $product->getDateOFCompletion());
        $this->assertEquals('description', $product->getDescription());
        $this->assertEquals(true, $product->getPortfolio());
        $this->assertEquals('slug', $product->getSlug());
        $this->assertEquals('file', $product->getFile());
        $this->assertContains($category, $product->getCategories());
        $this->assertEquals($user, $product->getUser());
    }

    public function testIsFalse(): void
    {
        $product  = new Product();
        $datetime = new \DateTimeImmutable();
        $category = new Category();
        $user     = new User();

        $product
            ->setName('nom')
            ->setHeight(20.20)
            ->setWidth(20.20)
            ->setPrice(20.20)
            ->setOnSale(true)
            ->setDateOFCompletion($datetime)
            ->setDescription('description')
            ->setPortfolio(true)
            ->setSlug('slug')
            ->setFile('file')
            ->addCategory($category)
            ->setUser($user);


        $this->assertNotEquals('nomaaa', $product->getName());
        $this->assertNotEquals(25.20, $product->getHeight());
        $this->assertNotEquals(25.20, $product->getWidth());
        $this->assertNotEquals(25.20, $product->getPrice());
        $this->assertNotEquals(false, $product->getOnSale());
        $this->assertNotEquals(new \DateTimeImmutable(), $product->getDateOFCompletion());
        $this->assertNotEquals('descriptionaaa', $product->getDescription());
        $this->assertNotEquals(false, $product->getPortfolio());
        $this->assertNotEquals('slugaaaa', $product->getSlug());
        $this->assertNotEquals('fileaaa', $product->getFile());
        $this->assertNotContains(new Category(), $product->getCategories());
        $this->assertNotEquals((new User())->setPhone('aaa'), $product->getUser());
    }
}
