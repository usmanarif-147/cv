<?php

namespace App\Http\Controllers;

use Barryvdh\Snappy\Facades\SnappyPdf;
use Illuminate\Http\Request;

use Exception;
use Illuminate\Http\Client\Response;
use Illuminate\Support\Facades\App;
use Knp\Snappy\Pdf;

class CvController extends Controller
{

    public function download()
    {
        $snappy = App::make('snappy.pdf');
        //To file
        $html = '<h1>Bill</h1><p>You owe me money, dude.</p>';
        $snappy->generateFromHtml($html, '/tmp/bill-123.pdf');
        $snappy->generate('http://www.github.com', '/tmp/github.pdf');
        //Or output:
        return new Response(
            $snappy->getOutputFromHtml($html),
            200,
            array(
                'Content-Type'          => 'application/pdf',
                'Content-Disposition'   => 'attachment; filename="file.pdf"'
            )
        );
    }

    public function old_two_download()
    {
        $pdf = SnappyPdf::loadView('chartjs');
        $pdf->setOption('enable-javascript', true);
        $pdf->setOption('javascript-delay', 5000);
        $pdf->setOption('enable-smart-shrinking', true);
        $pdf->setOption('no-stop-slow-scripts', true);
        return $pdf->download('chart.pdf');
    }

    public function old_download()
    {
        // return view('my_cv');
        $data = [
            'name' => 'usman',
            'title' => 'Software engineer'
        ];
        // $pdf = SnappyPdf::loadView('my_cv', [])->setPaper();
        $pdf = SnappyPdf::loadView('my_cv', $data)
            ->setPaper('a4')
            ->setOrientation('landscape')
            ->setOption('margin-bottom', 0);
        return $pdf->download('usman_cv.pdf');

        // $snappy = App::make('snappy.pdf');

        // $html = view('my_cv')->render();

        // $snappy->generate($html, public_path('usman_cv.pdf'));

        // return new Response(
        //     $snappy->getOutputFromHtml($html),
        //     200,
        //     array(
        //         'Content-Type'          => 'application/pdf',
        //         'Content-Disposition'   => 'attachment; filename="123.pdf"'
        //     )
        // );
    }
}
