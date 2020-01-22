<?php

namespace RccLightSimulacion\Client;

use \RccLightSimulacion\Client\Configuration;
use \RccLightSimulacion\Client\ApiException;
use \RccLightSimulacion\Client\ObjectSerializer;

class ReporteDeCreditoConsolidadoLightFICOScorePLDApiTest extends \PHPUnit_Framework_TestCase
{
    
    public function setUp()
    {
        $config = new \RccLightSimulacion\Client\Configuration();
        $config->setHost('the_url');
        $client = new \GuzzleHttp\Client();
        $this->apiInstance = new \RccLightSimulacion\Client\Api\ReporteDeCreditoConsolidadoLightFICOScorePLDApi($client, $config);
        $this->x_api_key = "your_api_key";
    }

    public function testGetFullReporte()
    {
        $x_full_report = true;
        $request = new \RccLightSimulacion\Client\Model\PersonaPeticion();
        
        $request->setPrimerNombre("xxxxx");
        $request->setSegundoNombre(null);
        $request->setApellidoPaterno("xxxxx");
        $request->setApellidoMaterno("xxxxx");
        $request->setApellidoAdicional(null);
        $request->setFechaNacimiento("yyyy-MM-dd");

        try {
            $result = $this->apiInstance->getReporte($this->x_api_key, $request, $x_full_report);
            $this->assertNotNull($result);
            echo "testGetFullReporte finished\n";
        } catch (Exception $e) {
            echo 'Exception when calling ReporteDeCreditoConsolidadoLightFICOScorePLDApi->getReporte: ', $e->getMessage(), PHP_EOL;
        }
    }

    public function testGetSegmentedReporte()
    {
        $x_full_report = false;
        $request = new \RccLightSimulacion\Client\Model\PersonaPeticion();
        
        $request->setPrimerNombre("xxxxx");
        $request->setSegundoNombre(null);
        $request->setApellidoPaterno("xxxxx");
        $request->setApellidoMaterno("xxxxx");
        $request->setApellidoAdicional(null);
        $request->setFechaNacimiento("yyyy-MM-dd");

        try {
            $result = $this->apiInstance->getReporte($this->x_api_key, $request, $x_full_report);
            $this->assertNotNull($result);
            echo "testGetSegmentedReporte finished\n";
            return $result->getFolioConsulta();
        } catch (Exception $e) {
            echo 'Exception when calling ReporteDeCreditoConsolidadoLightFICOScorePLDApi->getReporte: ', $e->getMessage(), PHP_EOL;
        }
    }

    /**
     * @depends testGetSegmentedReporte
     */
    public function testGetCreditos($folioConsulta){
        try {
            $result = $this->apiInstance->getCreditos($folioConsulta, $this->x_api_key);
            $this->assertTrue($result->getCreditos() !== null);
            echo "testGetCreditos finished\n";
        } catch (Exception $e) {
            echo 'Exception when calling ReporteDeCrditoApi->getCreditos: ', $e->getMessage(), PHP_EOL;
        }
    }

    /**
     * @depends testGetSegmentedReporte
     */
    public function testGetDomicilios($folioConsulta){
        try {
            $result = $this->apiInstance->getDomicilios($folioConsulta, $this->x_api_key);
            $this->assertTrue($result->getDomicilios() !== null);
            echo "testGetDomicilios finished\n";
        } catch (Exception $e) {
            echo 'Exception when calling ReporteDeCrditoApi->getDomicilios: ', $e->getMessage(), PHP_EOL;
        }
    }

    /**
     * @depends testGetSegmentedReporte
     */
    public function testGetEmpleos($folioConsulta){
        try {
            $result = $this->apiInstance->getEmpleos($folioConsulta, $this->x_api_key);
            $this->assertTrue($result->getEmpleos() !== null);
            echo "testGetEmpleos finished\n";
        } catch (Exception $e) {
            echo 'Exception when calling ReporteDeCrditoApi->getEmpleos: ', $e->getMessage(), PHP_EOL;
        }
    }

    /**
     * @depends testGetSegmentedReporte
     */
    public function testGetConsultas($folioConsulta){
        try {
            $result = $this->apiInstance->getConsultas($folioConsulta, $this->x_api_key);
            $this->assertTrue($result->getConsultas() !== null);
            echo "testGetConsultas finished\n";
        } catch (Exception $e) {
            echo 'Exception when calling ReporteDeCrditoApi->getConsultas: ', $e->getMessage(), PHP_EOL;
        }
    }

    /**
     * @depends testGetSegmentedReporte
     */
    public function testGetScores($folioConsulta){
        try {
            $result = $this->apiInstance->getScores($folioConsulta, $this->x_api_key);
            $this->assertTrue($result->getScores() !== null);
            echo "testGetScores finished\n";
        } catch (Exception $e) {
            echo 'Exception when calling ReporteDeCrditoApi->getScores: ', $e->getMessage(), PHP_EOL;
        }
    }

    /**
     * @depends testGetSegmentedReporte
     */
    public function testGetPLD($folioConsulta){
        try {
            $result = $this->apiInstance->getPLD($folioConsulta, $this->x_api_key);
            $this->assertTrue($result->getPLD() !== null);
            echo "testGetPLD finished\n";
        } catch (Exception $e) {
            echo 'Exception when calling ReporteDeCrditoApi->getPLD: ', $e->getMessage(), PHP_EOL;
        }
    }
}
