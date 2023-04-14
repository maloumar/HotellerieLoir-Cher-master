<?php

namespace Controller;

use App\View;
/*
use Model\NomModel as Model-NomModel;
*/

class NomClass
{

/*
    // Si vous possédez un formulaire qui contient une écriture d'image comme dans un create ou un update
    private $imageFileName
    private $imageFileType
    private $file_name
*/

/*
// 1er cas : juste de l'affichage
    // Le NomFonction correspond au nom que vous indiquerez dans 'routes'->NomFonction
    public function NomFonction()
    {
        View::Start();
        View::Set('NameValue',$NomModel);
        View::Render('NomFichierView');
    }
*/

/*
// 2nd cas : affichage de données
    // Le NomFonction correspond au nom que vous indiquerez dans 'routes'->NomFonction
    public function NomFonction() => get
    {
        // Le NomFonctionModel correspond à la fonction dans le modèle qui executera la requête voulu
        $Model-NomModel = new Model-NomModel();
        $NomModel = $Model-NomModel->NomFonctionModel(
            // Si vous voulez afficher un élément en fonction de son id
            $_params['NomId']
        );

        View::Start();
        View::Set('NameValue',$NomModel);
        View::Render('NomFichierView');
    }
*/

/*
// 3eme cas : formulaire d'entrée de données
    // Le NomFonction correspond au nom que vous indiquerez dans 'routes'->NomFonction
    public function NomFonction() => create
    {
        if(isset($_POST['IdButton'])){
            if(!empty($_POST['IdInput']) && !empty($_FILES['IdInputTypeFile']){
                // Vérification de chaque champ 1 par 1
                // Si vous avez une écriture d'image dans votre formulaire
                $path_parts = pathinfo($_FILES['IdInputTypeFile']['name']);
                $this->imageFileName = $path_parts['basename'];
                $this->imageFileType = $path_parts['extension'];
                if($this->imageFileType == 'jpeg' || $this->imageFileType == 'jpg' || $this->imageFileType == 'png' || $this->imageFileType == 'svg')
                {
                    $this->file_name = md5(uniqid().microtime());
                    move_uploaded_file($_FILES['IdInputTypeFile']['tmp_name'],DIR_UPLOAD.'NomDossierUpload/'.$this->file_name.'.png');
                    // Dans chaque formulaire vous retrouverez
                    $datas = $_POST;
                    unset($datas['IdButton'])
                    // Si vous avez une écriture d'image dans votre formulaire
                    $datas['IdInputTypeFile'] = $this->file_name.'.png';
                    $Model-NomModel = new Model-NomModel();
                    $Model-NomModel->NomFonctionModel($datas);
                    header('location: /Lien');
                    exit();
            }
        }

        // Le NomFonctionModel correspond à la fonction dans le modèle qui executera la requête voulu
        $Model-NomModel = new Model-NomModel();
        $NomModel = $Model-NomModel->NomFonctionModel();

        View::Start();
        View::Set('NameValue',$NomModel);
        View::Render('NomFichierView');
    }
*/

/*
// 4eme cas : formulaire de modification de données
    // Le NomFonction correspond au nom que vous indiquerez dans 'routes'->NomFonction
    public function NomFonction() => update
    {
        if(isset($_POST['IdButton'])){
            if(!empty($_POST['IdInput']) && !empty($_FILES['IdInputTypeFile']){
                // Vérification de chaque champ 1 par 1
                // Si vous avez une écriture d'image dans votre formulaire
                $path_parts = pathinfo($_FILES['IdInputTypeFile']['name']);
                $this->imageFileName = $path_parts['basename'];
                $this->imageFileType = $path_parts['extension'];
                if($this->imageFileType == 'jpeg' || $this->imageFileType == 'jpg' || $this->imageFileType == 'png' || $this->imageFileType == 'svg')
                {
                    $this->file_name = md5(uniqid().microtime());
                    move_uploaded_file($_FILES['IdInputTypeFile']['tmp_name'],DIR_UPLOAD.'NomDossierUpload/'.$this->file_name.'.png');
                    // Dans chaque formulaire vous retrouverez
                    $datas = $_POST;
                    unset($datas['IdButton'])
                    // Si vous avez une écriture d'image dans votre formulaire
                    $datas['IdInputTypeFile'] = $this->file_name.'.png';

                    $Model-NomModel = new Model-NomModel();
                    $Model-NomModel->NomFonctionModel($datas);
                    header('location: /Lien');
                    exit();
            }
        }

        // Le NomFonctionModel correspond à la fonction dans le modèle qui executera la requête voulu
        $Model-NomModel = new Model-NomModel();
        $NomModel = $Model-NomModel->NomFonctionModel($_params['NomId']);

        View::Start();
        View::Set('NameValue',$NomModel);
        View::Render('NomFichierView');
    }
*/

/*
// 5eme cas : suppression de données
    // Le NomFonction correspond au nom que vous indiquerez dans 'routes'->NomFonction
    public function NomFonction() => delete
    {
        // Le NomFonctionModel correspond à la fonction dans le modèle qui executera la requête voulu
        $Model-NomModel = new Model-NomModel();
        $Model-NomModel->NomFonctionModel($_params['NomId']);
        header('location: /Lien');
        exit();
    }
*/

}

?>