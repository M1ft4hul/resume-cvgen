<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use CodeIgniter\HTTP\CLIRequest;
use CodeIgniter\HTTP\IncomingRequest;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use Psr\Log\LoggerInterface;

/**
 * Class BaseController
 *
 * BaseController provides a convenient place for loading components
 * and performing functions that are needed by all your controllers.
 * Extend this class in any new controllers:
 *     class Home extends BaseController
 *
 * For security be sure to declare any new methods as protected or private.
 */
abstract class BaseController extends Controller
{
    /**
     * Instance of the main Request object.
     *
     * @var CLIRequest|IncomingRequest
     */
    protected $request;

    /**
     * An array of helpers to be loaded automatically upon
     * class instantiation. These helpers will be available
     * to all other controllers that extend BaseController.
     *
     * @var array
     */
    protected $helpers = [];

    /**
     * Constructor.
     */
    public function initController(RequestInterface $request, ResponseInterface $response, LoggerInterface $logger)
    {
        // Do Not Edit This Line
        parent::initController($request, $response, $logger);

        // Preload any models, libraries, etc, here.

        // E.g.: $this->session = \Config\Services::session();

        $this->validation =  \Config\Services::validation();
        $this->session = \Config\Services::session();
        $this->gambarku = \Config\Services::image();
        $this->email = \Config\Services::email();

        $this->Muser = new \App\Models\Muser();
        $this->Mdata = new \App\Models\Mdata();
        $this->Mpendidikan = new \App\Models\Mpendidikan();
        $this->Mpengalaman = new \App\Models\Mpengalaman();
        $this->Mbahasa = new \App\Models\Mbahasa();
        $this->Mkeahlian = new \App\Models\Mkeahlian();
        $this->Mdoctravel = new \App\Models\Mdoctravel();
        $this->Msertifikat = new \App\Models\Msertifikat();
        $this->Msearecord = new \App\Models\Msearecord();
        $this->Msemuabahasa = new \App\Models\Msemuabahasa();
        $this->Mnegara = new \App\Models\Mnegara();
        $this->Mform = new \App\Models\Mform();
        $this->Mlowongan = new \App\Models\Mlowongan();
    }
}
