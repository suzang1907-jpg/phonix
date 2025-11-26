<?php

namespace App\Actions\Dashboard;

use App\Models\UpcomingDomain;
use App\Routing\Admin;
use Carbon\Carbon;
use Dev\PHPActions\Action;
use Illuminate\Support\Facades\Validator;

class DashboardStore extends Action
{
    public function handle()
    {
        $validator = Validator::make($this->data, [
            'project_id' => 'required|exists:projects,id',
            'domain' => 'required|string|unique:upcoming_domains,domain',
            'date' => 'required|date|after_or_equal:today',
        ]);

        if ($validator->fails()) {
            return Admin::redirect('dashboard.show')->with('error', $validator->errors()->first());
        }

        UpcomingDomain::create([
            'project_id' => $this->data['project_id'],
            'domain' => $this->data['domain'],
            'date' => Carbon::parse($this->data['date'])->format('Y-m-d'),
        ]);

        return Admin::redirect('dashboard.show')->with('success', 'Upcoming domain added successfully!');
    }
}
