<?php
class RichestPeople extends Controller {
  // Properties, field
  private $richestPeopleModel;

  // Dit is de constructor
  public function __construct() {
    $this->richestPeopleModel = $this->model('RichPerson');
  }

  public function index() {
    $richestPeople = $this->richestPeopleModel->getRichestPeople();

    $rows = '';
    foreach ($richestPeople as $value){
      $rows .= "<tr>
                  <td>$value->MyName</td>
                  <td>$value->Networth</td>
                  <td>$value->Age</td>
                  <td>$value->Company</td>
                  <td><a href='" . URLROOT . "/richestpeople/delete/$value->Id'>delete</a></td>
                </tr>";
    }


    $data = [
      'title' => '<h1>De vijf rijkste mensen ter wereld</h1>',
      'richestPeople' => $rows
    ];
    $this->view('richestpeople/index', $data);
  }

  public function delete($Id) {
    $this->richestPeopleModel->deleteRichPerson($Id);

    $data =[
      'deleteStatus' => "Het record met Id = $Id is verwijdert"
    ];
    $this->view("richestpeople/delete", $data);
    header("Refresh:3; url=" . URLROOT . "/richestpeople/index");
  }
}

?>