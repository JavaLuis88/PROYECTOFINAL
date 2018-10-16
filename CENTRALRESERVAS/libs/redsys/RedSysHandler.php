<?php

include_once 'apiRedsys.php';
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of RedSysHandler
 *
 * @author Fu-Manchu
 */
class RedSysHandler {

//---------------------
//Propiedades  privadas
//---------------------
    private $fuc = "999008881";
    private $terminal = "871";
    private $moneda = "978";
    private $trans = "0";
    private $urlprocess = "";
    private $urlOK = "";
    private $urlKO = "";
    private $id = 0;
    private $amount = 0;
    private $version = "HMAC_SHA256_V1";
    private $key = 'Mk9m98IfEblmPfrpsawt7BmxObt98Jev'; //Clave recuperada de CANALES
    private $produccion = TRUE;
    private $laspetitionresult = NULL;

//-----------
//Constructor
//-----------


    public function __construct($fuc = "999008881", $terminal = "871", $moneda = "978", $trans = "0", $id = 0, $key = 'Mk9m98IfEblmPfrpsawt7BmxObt98Jev', $produccion = TRUE, $urlprocess = "", $urlOK = "", $urlKO = "", $amount = 0, $version = "HMAC_SHA256_V1") {
        $this->fuc = $fuc;
        $this->terminal = $terminal;
        $this->moneda = $moneda;
        $this->trans = $trans;
        $this->urlprocess = $urlprocess;
        $this->urlOK = $urlOK;
        $this->urlKO = $urlKO;
        $this->id = $id;

        if ($moneda == 978) {

            $this->amount = round($amount * 100);
        } else {

            $this->amount = $amount;
        }

        $this->version = $version;
        $this->key = $key;
        $this->produccion = $produccion;
        $this->laspetitionresult = NULL;
    }

//----------------
//Métodos públicos
//----------------


    public function setFuc($fuc) {

        $this->fuc = $fuc;
    }

    public function getFuc() {

        return $this->fuc;
    }

    public function setTerminal($terminal) {

        $this->terminal = $terminal;
    }

    public function getTerminal() {

        return $this->terminal;
    }

    public function setMoneda($moneda) {

        $this->moneda = $moneda;
    }

    public function getMoneda() {

        return $this->moneda;
    }

    public function setTrans($trans) {

        $this->trans = $trans;
    }

    public function getTrans() {

        return $this->trans;
    }

    public function setUrlprocess($urlprocess) {

        $this->urlprocess = $urlprocess;
    }

    public function getUrlprocess() {

        return $this->urlprocess;
    }

    public function setUrlOK($urlOK) {

        $this->urlOK = $urlOK;
    }

    public function getUrlOK() {

        return $this->urlOK;
    }

    public function setUrlKO($urlKO) {

        $this->urlKO = $urlKO;
    }

    public function getUrlKO() {

        return $this->urlKO;
    }

    public function setId($id) {

        $this->id = $id;
    }

    public function getId() {

        return $this->id;
    }

    public function setAmount($amount) {

        if ($this->moneda == 978) {

            $this->amount = round($amount * 100);
        } else {

            $this->amount = $amount;
        }
    }

    public function getAmount() {

        return $this->amount;
    }

    public function setVersion($version) {

        $this->version = $version;
    }

    public function getVersion() {

        return $this->version;
    }

    public function setKey($key) {

        $this->key = $key;
    }

    public function getKey() {

        return $this->key;
    }

    public function setProduccion($produccion) {

        $this->produccion = $produccion;
    }

    public function getProduccion() {

        return $this->produccion;
    }

    function getLaspetitionresult() {

        return $this->laspetitionresult;
    }

    public function createButton($etiqueta, $idboton = "", $claseboton = "") {

        $miObj = NULL;
        $request = "";
        $params = NULL;
        $signature = "";
        $retval = "";


        $miObj = new RedsysAPI;

        $miObj->setParameter("DS_MERCHANT_AMOUNT", $this->amount);
        $miObj->setParameter("DS_MERCHANT_ORDER", strval($this->id));
        $miObj->setParameter("DS_MERCHANT_MERCHANTCODE", $this->fuc);
        $miObj->setParameter("DS_MERCHANT_CURRENCY", $this->moneda);
        $miObj->setParameter("DS_MERCHANT_TRANSACTIONTYPE", $this->trans);
        $miObj->setParameter("DS_MERCHANT_TERMINAL", $this->terminal);
        $miObj->setParameter("DS_MERCHANT_MERCHANTURL", $this->urlprocess);
        $miObj->setParameter("DS_MERCHANT_URLOK", $this->urlOK);
        $miObj->setParameter("DS_MERCHANT_URLKO", $this->urlKO);


        $request = "";
        $params = $miObj->createMerchantParameters();
        $signature = $miObj->createMerchantSignature($this->key);

        if ($this->produccion == TRUE) {
            $retval = "<form name = \"frm\" action = \"https://sis.redsys.es/sis/realizarPago\" method = \"POST\" target = \"_blank\">\n";
        } else {
            $retval = "<form name = \"frm\" action = \"https://sis-t.redsys.es:25443/sis/realizarPago\" method = \"POST\" target = \"_blank\">\n";
        }
        $retval = $retval . "<input type = \"hidden\" name = \"Ds_SignatureVersion\" value = \"" . $this->version . "\" />\n";
        $retval = $retval . "<input type = \"hidden\" name = \"Ds_MerchantParameters\" value = \"" . $params . "\"/>\n";
        $retval = $retval . "<input type = \"hidden\" name = \"Ds_Signature\" value = \"" . $signature . "\" />\n";
        $retval = $retval . "<input type = \"submit\" value = \"" . $etiqueta . "\" id=\"" . $idboton . "\" class=\"" . $claseboton . "\">\n";
        $retval = $retval . "</form>\n";

        return $retval;
    }

    public function processPetition() {



        $versionfirma = "";
        $datos = "";
        $signatureRecibida = "";
        $decodec = "";
        $firma = "";
        $retval = 0;

        $this->laspetitionresult = NULL;


        if (!empty($_POST)) {//URL DE RESP. ONLINE
    
            $this->laspetitionresult = new RedsysAPI;
            $versionfirma = $_POST["Ds_SignatureVersion"];
            $datos = $_POST["Ds_MerchantParameters"];
            $signatureRecibida = $_POST["Ds_Signature"];


            $decodec = $this->laspetitionresult->decodeMerchantParameters($datos);
            $firma = $this->laspetitionresult->createMerchantSignatureNotif($this->key, $datos);

            if ($firma === $signatureRecibida) {





                if ($this->laspetitionresult->getParameter("Ds_Response") <= 99) {

                    $retval = 0;
                
                } else {

                    $retval = 3;
                 
                }
            } else {

                $retval = 2;
           
            }
        } else {

            $retval = 1;

            
        }

        return $retval;
    }

    public function processPetitionURL() {


        $versionfirma = "";
        $datos = "";
        $signatureRecibida = "";
        $decodec = "";
        $firma = "";
        $retval = 0;

        $this->laspetitionresult = NULL;
       

        if (!empty($_GET)) {//URL DE RESP. ONLINE
           
            $this->laspetitionresult = new RedsysAPI;
            $versionfirma = $_GET["Ds_SignatureVersion"];
            $datos = $_GET["Ds_MerchantParameters"];
            $signatureRecibida = $_GET["Ds_Signature"];


            $decodec = $this->laspetitionresult->decodeMerchantParameters($datos);
            $firma = $this->laspetitionresult->createMerchantSignatureNotif($this->key, $datos);

            if ($firma === $signatureRecibida) {

               



                if ($this->laspetitionresult->getParameter("Ds_Response") <= 99) {

                    $retval = 0;
              
                } else {

                    $retval = 3;
                
                }
            } else {

                $retval = 2;
                
            }
        } else {

            $retval = 1;

           
        }
  
        return $retval;
    }

}
