<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 11/10/17
 * Time: 16:07
 * PHP version 7
 */

namespace AppBundle\Controller\Admin;


use AppBundle\Entity\Production;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\FormTypeInterface;
use AppBundle\Entity\Photo;
use AppBundle\Form\ProjectType;
use Symfony\Component\Filesystem\Filesystem;


/**
 * Class ProjectController
 * @Route("admin")
 */
class ProjectController extends Controller
{

    /**
     * Display admin space show production list
     *
     * @Route("/production", name="production_list")
     * @Method("GET")
     */
    public function productionList()
    {
        $em = $this->getDoctrine()->getManager();
        $productions = $em->getRepository(Production::class)->findAll();

        $deleteForms = [];
        foreach ($productions as $production) {
            $photosProduction = $production->getPhotos();

            foreach ($photosProduction as $photo) {
                $deleteForms[$photo->getId()] = $this->createDeleteForm($photo)->createView();
            }
        }

        return $this->render('/Back/admin/productions_list.html.twig', [
            'productions' => $productions,
            'deleteForms' => $deleteForms,
        ]);
    }

    /**
     * Display admin space show productions
     *
     * @Route("/productions/{id}/edit", name="productions_edit")
     * @Method({"GET","POST"})
     */
    public function productionEdit(Request $request, Production $production)
    {

        $editForm = $this->createForm(ProjectType::class, $production);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('production_list');
        }

        return $this->render('Back/admin/production_edit.html.twig', [
            'production' => $production,
            'edit_form' => $editForm->createView(),
        ]);
    }

    /**
     * Display admin space delete image
     *
     * @Route("/photo/{id}/delete", name="photo_delete", requirements={"id"="\d+"})
     * @Method("DELETE")
     */
    public function photoDelete(Request $request, Photo $photo)
    {
        $form = $this->createDeleteForm($photo);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($photo);
            $fileSystem = new Filesystem();
            $project_directory = $this->container->getParameter('project_directory');
            $web_directory = $this->container->getParameter('web_directory');
            $fileSystem->remove($project_directory.$web_directory.$photo->getPath());
            $em->flush();
        }
        return $this->redirectToRoute('production_list', ['id'=> $photo->getProduction()->getId()]);
    }

    /**
     * Creates a form to delete an image.
     *
     * @param Photo $photo The photo entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Photo $photo)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('photo_delete', ['id' => $photo->getId()]))
            ->setMethod('DELETE')
            ->getForm()
            ;
    }
}
