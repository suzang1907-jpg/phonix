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
        $project_id = $this->getData('project_id');
        $domain = $this->getData('domain');
        $date = $this->getData('date');

        $data = [
            'project_id' => $project_id,
            'domain' => $domain,
            'date' => $date,
        ];

        $validator = Validator::make($data, [
            'project_id' => 'required|exists:projects,id',
            'domain' => 'required|string|unique:upcoming_domains,domain',
            'date' => 'required|date|after_or_equal:today',
        ]);

        if ($validator->fails()) {
            return Admin::redirect('admin.dashboard.show')->with('error', $validator->errors()->first());
        }

        UpcomingDomain::create([
            'project_id' => $data['project_id'],
            'domain' => $data['domain'],
            'date' => Carbon::parse($data['date'])->format('Y-m-d'),
        ]);

        return Admin::redirect('admin.dashboard.show')->with('success', 'Upcoming domain added successfully!');
    }
}
