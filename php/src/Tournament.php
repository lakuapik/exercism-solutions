<?php

namespace App;

/**
 * @link https://exercism.org/tracks/php/exercises/tournament
 */
class Tournament
{
    public $teams = [];

    public function addTeams(string ...$teams): void
    {
        foreach ($teams as $team) {
            if (! array_key_exists($team, $this->teams)) {
                $this->teams[$team] = [
                    'MP' => 0, 'W' => 0, 'D' => 0, 'L' => 0, 'P' => 0
                ];
            }
        }
    }

    public function matchPlayedBy(string $team1, string $team2): void
    {
        $this->teams[$team1]['MP'] += 1;
        $this->teams[$team2]['MP'] += 1;
    }

    public function matchWin(string $team): void
    {
        $this->teams[$team]['W'] += 1;
        $this->teams[$team]['P'] += 3;
    }

    public function matchLoss(string $team): void
    {
        $this->teams[$team]['L'] += 1;
        $this->teams[$team]['P'] += 0;
    }

    public function matchDraw(string $team): void
    {
        $this->teams[$team]['D'] += 1;
        $this->teams[$team]['P'] += 1;
    }

    public function calculateMatch($match): void
    {
        [$team1, $team2, $game] = explode(';', $match);

        $this->addTeams($team1, $team2);
        $this->matchPlayedBy($team1, $team2);

        switch ($game) {
            case 'win':
                $this->matchWin($team1);
                $this->matchLoss($team2);
                break;
            case 'loss':
                $this->matchLoss($team1);
                $this->matchWin($team2);
                break;
            default: // draw
                $this->matchDraw($team1);
                $this->matchDraw($team2);
                break;
        }

        $this->sortTeamByScores();
    }

    public function sortTeamByScores()
    {
        array_multisort(
            array_column($this->teams, 'P'),
            SORT_DESC,
            array_keys($this->teams),
            SORT_ASC,
            $this->teams,
        );
    }

    public function displayScoreBoard(): string
    {
        $board = "Team                           | MP |  W |  D |  L |  P";

        foreach ($this->teams as $name => $scores) {
            $name = str_pad($name, 31, ' ');
            $board .= "\n{$name}|  {$scores['MP']} |  {$scores['W']} |";
            $board .= "  {$scores['D']} |  {$scores['L']} |  {$scores['P']}";
        }

        return $board;
    }

    public function tally(string $scores): string
    {
        $matches = explode("\n", $scores);

        if ($matches[0] != '') {
            array_walk($matches, fn($m) => $this->calculateMatch($m));
        }

        return $this->displayScoreBoard();
    }

    public static function handle(string $scores): string
    {
        return (new static())->tally($scores);
    }
}
