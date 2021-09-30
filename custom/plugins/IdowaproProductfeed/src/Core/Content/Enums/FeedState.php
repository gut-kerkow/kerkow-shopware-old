<?php declare(strict_types=1);

namespace Productfeed\Core\Content\Enums;

abstract class FeedState {
    const SUCCESS = 'feed_state_success';
    const ERROR = 'feed_state_error';

    public static function getFormattedFeedState(string $state): string 
    {
        switch ($state) {
            case FeedState::SUCCESS:
                return 'success';
            case FeedState::ERROR:
                return 'error';
            default:
                return '';   
        }
    }
}
