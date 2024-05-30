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

        // $pdf = SnappyPdf::loadView('my_cv', [])->setPaper();
        $pdf = SnappyPdf::loadView('my_cv')->setPaper('a4')->setOrientation('landscape')->setOption('margin-bottom', 0);
        return $pdf->download('usman_cv.pdf');

        $snappy = App::make('snappy.pdf');

        $html = view('my_cv')->render();

        // $snappy->generateFromHtml($html, public_path('usman_cv.pdf'));

        $snappy->generate($html, public_path('usman_cv.pdf'));

        return new Response(
            $snappy->getOutputFromHtml($html),
            200,
            array(
                'Content-Type'          => 'application/pdf',
                'Content-Disposition'   => 'attachment; filename="123.pdf"'
            )
        );
    }
}
