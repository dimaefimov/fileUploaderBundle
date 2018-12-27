<?php

namespace Photobank\FileUploaderBundle\Tests\Controller;

use Photobank\FileUploaderBundle\Tests\Controller\BaseTest;
use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\Persistence\ObjectRepository;

class FileUploaderControllerTest extends BaseTest
{

  public function testTest()
  {
    var_dump($this->getUploadParameters());
  }

  public function testUpload()
  {

  }

  public function testUnfinishedGet()
  {

  }

  private function getUploadParameters()
  {
    $params = array(
      "resumableChunkNumber"=>"1",
      "resumableChunkSize"=>"1048576",
      "resumableCurrentChunkSize"=>"37411",
      "resumableTotalSize"=>"37411",
      "resumableType"=>"image/jpeg",
      "resumableIdentifier"=>"a2ba46bbe92c326c9408cf82b282db01",
      "resumableFilename"=>"adorable-puppies-cute-puppies-41481449-700-550 (1).jpg",
      "resumableRelativePath"=>"adorable-puppies-cute-puppies-41481449-700-550 (1).jpg",
      "resumableTotalChunks"=>"1",
      "itemId"=>$this->sampleData->items[0],
      "itemCode"=>$this->sampleData->items[0],
    );
  }

  private function getChunkData()
  {
    $data = openssl_random_pseudo_bytes(37411);
    return $data;
  }

}
