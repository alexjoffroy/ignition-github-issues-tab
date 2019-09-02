<?php

namespace AlexJoffroy\GithubIssuesTab;

use Facade\Ignition\Tabs\Tab as BaseTab;

class Tab extends BaseTab
{
    public function name(): string
    {
        return 'Github Issues';
    }

    public function component(): string
    {
        return 'ignition-github-issues-tab';
    }

    public function registerAssets()
    {
        $this->script('ignition-github-issues-tab', __DIR__.'/../dist/js/tab.js');
    }

    public function meta(): array
    {
        return [
            'title' => $this->name(),
        ];
    }
}
