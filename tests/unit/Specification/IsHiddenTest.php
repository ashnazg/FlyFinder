<?php
/**
 * This file is part of phpDocumentor.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @copyright 2010-2015 Mike van Riel<mike@phpdoc.org>
 * @license   http://www.opensource.org/licenses/mit-license.php MIT
 * @link      http://phpdoc.org
 */

namespace Flyfinder\Specification;

use PHPUnit\Framework\TestCase;
use Mockery as m;

/**
 * Test case for IsHidden
 * @coversDefaultClass Flyfinder\Specification\IsHidden
 */
class IsHiddenTest extends TestCase
{
    /** @var IsHidden */
    private $fixture;

    /**
     * Initializes the fixture for this test.
     */
    public function setUp()
    {
        $this->fixture = new IsHidden();
    }

    public function tearDown()
    {
        m::close();
    }

    /**
     * @covers ::isSatisfiedBy
     */
    public function testIfSpecificationIsSatisfied()
    {
        $this->assertTrue($this->fixture->isSatisfiedBy(['basename' => '.test']));
    }

    /**
     * @covers ::isSatisfiedBy
     */
    public function testIfSpecificationIsNotSatisfied()
    {
        $this->assertFalse($this->fixture->isSatisfiedBy(['basename' => 'test']));
    }
}
