<?php

namespace AdamAlvis\CsvImporter\Controllers;

use Illuminate\Routing\Controller as BaseController;

class CsvImporterController extends BaseController {


    /**
     * Displays CSV Import form
     *
     * @return Illuminate\Http\Response
     */
    public function getForm()
    {
        $modelNames = array_map(function ($fqModel) {
            $modelArr = explode('\\', $fqModel);
            return $modelArr[count($modelArr) - 1];
        }, config('csv-importer.models'));

        return view('adamalvis/csv-importer::form')->with([
            'models' => $modelNames,
        ]);
    }

    /**
     * Form submission endpoint
     * runs importer
     *
     * @return void
     */
    public function submitForm()
    {

    }

}