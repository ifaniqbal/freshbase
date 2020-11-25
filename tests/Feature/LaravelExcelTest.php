<?php

namespace Tests\Feature;

use App\Exports\UsersExport;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Maatwebsite\Excel\Facades\Excel;
use Tests\TestCase;

class LaravelExcelTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testBasicUsage()
    {
        $this->assertEquals(
            'xlsx',
            Excel::download(new UsersExport, 'users.xlsx')
                ->getFile()
                ->getExtension()
        );
    }
}
