<?php
class RichestPeople extends Controller {
  // Properties, field
  private $richestPeopleModel;

  // Dit is de constructor
  public function __construct() {
    $this->richestPeopleModel = $this->model('RichPerson');
  }

  public function index() {
    /**
     * Haal via de method getFruits() uit de model Fruit de records op
     * uit de database
     */
    $countries = $this->richestPeopleModel->getCountries();

    /**
     * Maak de inhoud voor de tbody in de view
     */
    $rows = '';
    foreach ($countries as $value){
      $rows .= "<tr>
                  <td>$value->id</td>
                  <td>$value->name</td>
                  <td>$value->capitalCity</td>
                  <td>$value->continent</td>
                  <td>" . number_format($value->population, 0, ',', '.') . "</td>
                  <td><a href='" . URLROOT . "/countries/update/$value->id'>update</a></td>
                  <td><a href='" . URLROOT . "/countries/delete/$value->id'>delete</a></td>
                </tr>";
    }


    $data = [
      'title' => '<h1>Landenoverzicht</h1>',
      'countries' => $rows
    ];
    $this->view('countries/index', $data);
  }

  public function delete($id) {
    $this->richestPeopleModel->deleteCountry($id);

    $data =[
      'deleteStatus' => "Het record met id = $id is verwijdert"
    ];
    $this->view("countries/delete", $data);
    header("Refresh:3; url=" . URLROOT . "/countries/index");
  }
}

?>