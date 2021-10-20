<?php

// https://github.com/exercism/php/blob/7e2a5b39e73f62c1c6fa08d04b46ce7c705eaa34/exercises/practice/acronym/AcronymTest.php

namespace Tests;

use App\Bowling;

class BowlingTest extends \PHPUnit\Framework\TestCase
{
    /** @var Bowling */
    private $bowling;

    public function setUp(): void
    {
        $this->bowling = new Bowling();

        $this->markTestSkipped();
    }

    public function testShouldBeAbleToScoreAGameWithAllZeros(): void
    {
        $this->rollMany(20, 0);

        $this->assertEquals(0, $this->bowling->score());
    }

    public function testShouldBeAbleToScoreAGameWithNoStrikesOrSpares(): void
    {
        $this->bowling->roll(3);
        $this->bowling->roll(6);
        $this->bowling->roll(3);
        $this->bowling->roll(6);
        $this->bowling->roll(3);
        $this->bowling->roll(6);
        $this->bowling->roll(3);
        $this->bowling->roll(6);
        $this->bowling->roll(3);
        $this->bowling->roll(6);
        $this->bowling->roll(3);
        $this->bowling->roll(6);
        $this->bowling->roll(3);
        $this->bowling->roll(6);
        $this->bowling->roll(3);
        $this->bowling->roll(6);
        $this->bowling->roll(3);
        $this->bowling->roll(6);
        $this->bowling->roll(3);
        $this->bowling->roll(6);

        $this->assertEquals(90, $this->bowling->score());
    }

    public function testASpareFollowedByZerosIsWorthTenPoints(): void
    {
        $this->bowling->roll(6);
        $this->bowling->roll(4);
        $this->rollMany(18, 0);

        $this->assertEquals(10, $this->bowling->score());
    }

    public function testPointsScoredInTheRollAfterASpareAreCountedTwice(): void
    {
        $this->bowling->roll(6);
        $this->bowling->roll(4);
        $this->bowling->roll(3);
        $this->rollMany(17, 0);

        $this->assertEquals(16, $this->bowling->score());
    }

    public function testConsecutiveSparesEachGetAOneRollBonus(): void
    {
        $this->bowling->roll(5);
        $this->bowling->roll(5);
        $this->bowling->roll(3);
        $this->bowling->roll(7);
        $this->bowling->roll(4);
        $this->rollMany(15, 0);

        $this->assertEquals(31, $this->bowling->score());
    }

    public function testASpareInTheLastFrameGetsAOneRollBonusThatIsCountedOnce(): void
    {
        $this->rollMany(18, 0);
        $this->bowling->roll(7);
        $this->bowling->roll(3);
        $this->bowling->roll(7);

        $this->assertEquals(17, $this->bowling->score());
    }

    public function testAStrikeEarnsTenPointsInFrameWithASingleRoll(): void
    {
        $this->bowling->roll(10);
        $this->rollMany(18, 0);

        $this->assertEquals(10, $this->bowling->score());
    }

    public function testPointsScoredInTheTwoRollsAfterAStrikeAreCountedTwiceAsABonus(): void
    {
        $this->bowling->roll(10);
        $this->bowling->roll(5);
        $this->bowling->roll(3);
        $this->rollMany(16, 0);

        $this->assertEquals(26, $this->bowling->score());
    }

    public function testConsecutiveStrikesEachGetTheTwoRollBonus(): void
    {
        $this->bowling->roll(10);
        $this->bowling->roll(10);
        $this->bowling->roll(10);
        $this->bowling->roll(5);
        $this->bowling->roll(3);
        $this->rollMany(12, 0);

        $this->assertEquals(81, $this->bowling->score());
    }

    public function testAStrikeInTheLastFrameGetsATwoRollBonusThatIsCountedOnce(): void
    {
        $this->rollMany(18, 0);
        $this->bowling->roll(10);
        $this->bowling->roll(7);
        $this->bowling->roll(1);

        $this->assertEquals(18, $this->bowling->score());
    }

    public function testRollingASpareWithTheTwoRollBonusDoesNotGetABonusRoll(): void
    {
        $this->rollMany(18, 0);
        $this->bowling->roll(10);
        $this->bowling->roll(10);
        $this->bowling->roll(10);

        $this->assertEquals(30, $this->bowling->score());
    }

    public function testAStrikeWithTheOneRollBonusAfterASpareInTheLastFrameDoesNotGetABonus(): void
    {
        $this->rollMany(18, 0);
        $this->bowling->roll(7);
        $this->bowling->roll(3);
        $this->bowling->roll(10);

        $this->assertEquals(20, $this->bowling->score());
    }

    public function testStrikesWithTheTwoRollBonusDoNotGetBonusRolls(): void
    {
        $this->rollMany(18, 0);
        $this->bowling->roll(10);
        $this->bowling->roll(7);
        $this->bowling->roll(3);

        $this->assertEquals(20, $this->bowling->score());
    }

    public function testAllStrikesIsAPerfectGame(): void
    {
        $this->rollMany(12, 10);

        $this->assertEquals(300, $this->bowling->score());
    }

    public function testRollsCanNotScoreNegativePoints(): void
    {
        $this->expectException(Exception::class);

        $this->bowling->roll(-1);
    }

    public function testARollCanNotScoreMoreThan10Points(): void
    {
        $this->expectException(Exception::class);
        $this->bowling->roll(11);
        $this->rollMany(19, 0);

        $this->bowling->score();
    }

    public function testTwoRollsInAFrameCanNotScoreMoreThan10Points(): void
    {
        $this->expectException(Exception::class);
        $this->bowling->roll(5);
        $this->bowling->roll(6);
        $this->rollMany(18, 0);

        $this->bowling->score();
    }

    public function testTwoBonusRollsAfterAStrikeInTheLastFrameCanNotScoreMoreThan10Points(): void
    {
        $this->expectException(Exception::class);

        $this->rollMany(18, 0);
        $this->bowling->roll(10);
        $this->bowling->roll(5);
        $this->bowling->roll(6);

        $this->bowling->score();
    }

    public function testAnUnstartedGameCanNotBeScored(): void
    {
        $this->expectException(Exception::class);

        $this->bowling->score();
    }

    public function testAnIncompleteGameCanNotBeScored(): void
    {
        $this->expectException(Exception::class);
        $this->bowling->roll(0);
        $this->bowling->roll(0);

        $this->bowling->score();
    }

    public function testAGameWithMoreThanTenFramesCanNotBeScored(): void
    {
        $this->expectException(Exception::class);
        $this->rollMany(21, 0);

        $this->bowling->score();
    }

    public function testBonusRollsForAStrikeInTheLastFrameMustBeRolledBeforeScoreCanBeCalculated(): void
    {
        $this->expectException(Exception::class);
        $this->rollMany(18, 0);
        $this->bowling->roll(10);

        $this->bowling->score();
    }

    public function testBothBonusRollsForAStrikeInTheLastFrameMustBeRolledBeforeScoreCanBeCalculated(): void
    {
        $this->expectException(Exception::class);
        $this->rollMany(18, 0);
        $this->bowling->roll(10);
        $this->bowling->roll(10);

        $this->bowling->score();
    }

    public function testBonusRollForASpareInTheLastFrameMustBeRolledBeforeScoreCanBeCalculated(): void
    {
        $this->expectException(Exception::class);
        $this->rollMany(18, 0);
        $this->bowling->roll(7);
        $this->bowling->roll(3);

        $this->bowling->score();
    }

    private function rollStrike(): void
    {
        $this->bowling->roll(10);
    }

    private function rollSpare(): void
    {
        $this->rollMany(2, 5);
    }

    private function rollMany($n, $pins): void
    {
        for ($i = 0; $i < $n; $i++) {
            $this->bowling->roll($pins);
        }
    }
}
