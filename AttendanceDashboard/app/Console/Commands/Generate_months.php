<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Db;
use Carbon\Carbon;

class Generate_months extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:generate_months';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Generate Months';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $currentYear = Carbon::now()->year;
        $currentMonth = Carbon::now()->month;

        // Get the number of days in the current month
        $daysInMonth = Carbon::create($currentYear, $currentMonth, 1)->daysInMonth;

        // Loop through each day of the month
        for ($day = 1; $day <= $daysInMonth; $day++) {
            // Create a Carbon instance for each day
            $date = Carbon::create($currentYear, $currentMonth, $day);

            // Check if the day is Saturday or Sunday
            $isHoliday = $date->isWeekend() ? 1 : 0;

            // Check if the date already exists in the database
            $exists = DB::table('attendances')->where('date', $date->toDateString())->exists();

            if (!$exists) {
                // Insert the date into the database
                DB::table('attendances')->insert([
                    'date' => $date->toDateString(),  // The actual date
                    'is_holiday' => $isHoliday,       // 1 for weekends (Saturday and Sunday), 0 for weekdays
                    'reason' => null,
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);

                $this->info("Date {$date->toDateString()} (Holiday: {$isHoliday}) has been added.");
            } 
            else {
                $this->info("Date {$date->toDateString()} already exists.");
            }
        }

        $this->info('Month generation process completed.');
    }
}

