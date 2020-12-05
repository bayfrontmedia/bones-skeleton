<?php

namespace App\Controllers;

use App\Models\SampleModel;
use Bayfront\Bones\Controller;
use Bayfront\Bones\Exceptions\ModelException;

class Home extends Controller
{

    /**
     * Homepage.
     *
     * @throws ModelException
     */

    public function index()
    {

        /** @var SampleModel $model */

        $model = get_model('SampleModel');

        $version = $model->getBonesVersion();

        $this->response->setBody('<h1>Bones v' . $version . ' is successfully installed</h1>')->send();

    }

}