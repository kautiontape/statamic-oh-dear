<?php

namespace Jonassiewertsen\OhDear\Http\Controllers;

use Jonassiewertsen\OhDear\OhDear;

class UptimeController {
    public function index() {
        $ohdear = new OhDear;

        $pastDays = $ohdear->uptime(now()->subDays(6), now(), 'day');
        $pastMonths = $ohdear->uptime(now()->subMonths(11), now(), 'month');

        return view('oh-dear::uptime.index', compact('pastDays', 'pastMonths'));
    }
}