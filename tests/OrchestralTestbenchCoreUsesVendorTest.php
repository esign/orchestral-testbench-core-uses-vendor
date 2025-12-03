<?php

namespace Esign\OrchestralTestbenchCoreUsesVendor\Tests;

use Illuminate\Foundation\Auth\User;
use Illuminate\Foundation\Testing\LazilyRefreshDatabase;
use Orchestra\Testbench\Attributes\UsesVendor;
use Orchestra\Testbench\Attributes\WithMigration;
use PHPUnit\Framework\Attributes\Test;

#[WithMigration]
final class OrchestralTestbenchCoreUsesVendorTest extends TestCase
{
    use LazilyRefreshDatabase;

    #[Test]
    public function it_can_interact_with_models(): void
    {
        $this->expectNotToPerformAssertions();

        User::query()->get();
    }

    #[Test]
    #[UsesVendor]
    public function it_can_interact_with_models_while_using_the_uses_vendor_attribute(): void
    {
        $this->expectNotToPerformAssertions();

        User::query()->get();
    }
}