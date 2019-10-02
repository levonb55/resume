<?php

namespace App\Traits;

trait FormatDate {

    public function startDate()
    {
        return date('M Y', strtotime($this->start_date));
    }

    public function endDate()
    {
        if($endDate = $this->end_date) {
            return date('M Y', strtotime($endDate));
        } else {
            return 'Current';
        }
    }
}