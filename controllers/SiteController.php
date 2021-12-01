<?php

namespace app\controllers;

use theworker\phpmvc\Application;
use theworker\phpmvc\Controller;
use theworker\phpmvc\Request;
use theworker\phpmvc\Response;
use app\models\ContactForm;

class SiteController extends Controller
{

    public function home()
    {
        $params = [
            'name' => "HomePage"
        ];

        return $this->render('home', $params);
    }

    public function contact(Request $request, Response $response)
    {
        $contact = new ContactForm();
        if($request->isPost()){
            $contact->loadData($request->getBody());
            if($contact->validate() && $contact->send()){
                Application::$app->session->setFlash('success', 'Thanks for contacting us');
                return $response->redirect('/contact');
            }
        }

        return $this->render('contact', [
            'model' => $contact
            ]);
    }

}