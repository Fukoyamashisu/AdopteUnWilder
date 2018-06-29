<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 11/10/17
 * Time: 16:07
 * PHP version 7
 */

namespace AppBundle\Controller\Back;

use AppBundle\Entity\Profil;
use AppBundle\Entity\Project;
use AppBundle\Entity\User;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\Picture;
use AppBundle\Form\ProjectType;
use Symfony\Component\Filesystem\Filesystem;


/**
 * Class ProjectController
 * @Route("user-project")
 */
class ProjectController extends Controller
{

    /**
     * Display admin space show production list
     *
     * @Route("/", name="project_list")
     * @Method("GET")
     */
    public function projectList()
    {
        $em = $this->getDoctrine()->getManager();
        $projects = $em->getRepository(Project::class)->findAll();

        $deleteForms = [];
        foreach ($projects as $project) {
            $picturesProject = $project->getPictures();

            foreach ($picturesProject as $picture) {
                $deleteForms[$picture->getId()] = $this->createDeleteForm($picture)->createView();
            }
        }

        return $this->render('profil/project_list.html.twig', [
            'projects' => $projects,
            'deleteForms' => $deleteForms,
        ]);
    }

    /**
     *
     * @Route("/add", name="project_add")
     * @Method({"GET","POST"})
     */
    public function projectAdd(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $profil = $em->getRepository(Profil::class)->find(1);

        $project = new Project();
        $form = $this->createForm(ProjectType::class, $project);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $em = $this->getDoctrine()->getManager();
            $project->setProfil($profil);
            $em->persist($project);
            $em->flush();

            return $this->redirectToRoute('project_list');
        }

        return $this->render('profil/project_add.html.twig', [
            'project' => $project,
            'form' => $form->createView(),
            'profil' =>$profil,
        ]);

    }

    /**
     *
     * @Route("/{id}/edit", name="project_edit")
     * @Method({"GET","POST"})
     */
    public function projectEdit(Request $request, Project $project)
    {

        $editForm = $this->createForm(ProjectType::class, $project);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('project_list');
        }

        return $this->render('profil/project_edit.html.twig', [
            'project' => $project,
            'edit_form' => $editForm->createView(),
        ]);
    }

    /**
     * Display admin space delete image
     *
     * @Route("/picture/{id}/delete", name="picture_delete", requirements={"id"="\d+"})
     * @Method("DELETE")
     */
    public function pictureDelete(Request $request, Picture $picture)
    {
        $form = $this->createDeleteForm($picture);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($picture);
            $fileSystem = new Filesystem();
            $project_directory = $this->container->getParameter('project_directory');
            $web_directory = $this->container->getParameter('web_directory');
            $fileSystem->remove($project_directory.$web_directory.$picture->getPictureUrl());
            $em->flush();
        }
        return $this->redirectToRoute('project_list', ['id'=> $picture->getProject()->getId()]);
    }

    /**
     * Creates a form to delete an image.
     *
     * @param Picture $picture The photo entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Picture $picture)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('picture_delete', ['id' => $picture->getId()]))
            ->setMethod('DELETE')
            ->getForm()
            ;
    }
}
