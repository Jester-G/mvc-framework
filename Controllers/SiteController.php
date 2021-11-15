<?php

namespace app\Controllers;

use jesterone\mvccore\Application;
use jesterone\mvccore\Controller;
use jesterone\mvccore\Request;
use jesterone\mvccore\Response;
use app\Models\ContactForm;

class SiteController extends Controller
{

    public function home()
    {
        $params = [
            'name' => 'The Teacher',
        ];
        return $this->render('home', $params);
    }

    public function contact(Request $request, Response $response)
    {
        $contact = new ContactForm();

        if ($request->isPost()) {
            $contact->loadData($request->getBody());

            if ($contact->validate() && $contact->send()) {
                Application::$app->session->setFlash('success', 'Thanks for contacting us.');
                $response->redirect('/contact');
            }
        }

        return $this->render('contact', [
            'model' => $contact
        ]);
    }

    public function handleContact(Request $request)
    {
        $body = $request->getBody();
        var_dump($body);
        return 'Handling contact';
    }



}