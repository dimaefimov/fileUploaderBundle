<?php

namespace PhotoBank\FileUploaderBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\RequestStack;
use Symfony\Component\HttpFoundation\Response;
use PhotoBank\FileUploaderBundle\Service\UploadRecordManager;

class UploadManagerController extends AbstractController
{
    /**
     * @Route("/check", name="upload_check")
     */
    public function check()
    {

    }
    /**
     * @Route("/commit", name="upload_commit")
     */
    public function set(RequestStack $requestStack, UploadRecordManager $recordManager)
    {
      $request = $requestStack->getCurrentRequest();
      $uploads = $request->request->all();
      $recordManager->insert($uploads, $this->getUser());
      return new Response();
    }

    /**
     * @Route("/remove", name="upload_remove")
     */
    public function remove(RequestStack $requestStack, UploadRecordManager $recordManager)
    {
      $request = $requestStack->getCurrentRequest();
      $uploads = $request->request->all();
      $recordManager->remove($uploads, $this->getUser());
      return new Response();
    }

}
