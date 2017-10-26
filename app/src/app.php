<?php
require __DIR__ . '/../../vendor/autoload.php';
require __DIR__ . '/../requests/Request.php';
require __DIR__ . '/../requests/RequestRepository.php';
// require __DIR__ . '/db.php';

use Respect\Validation\Validator;
use Respect\Validation\Exceptions\NestedValidationException;
use App\Requests\Request;
use App\Requests\RequestRepository;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $activation_date = trim($_POST['activationDate']);
    $deactivation_date = trim($_POST['deactivationDate']);
    $tel_no = trim($_POST['telNo']);
    #$tel_no = $_POST['telNo'];
    $reason = trim($_POST['reason']);
    $name = trim($_POST['name']);

        
    $activation_validator = Validator::date('Y-m-d')->notEmpty()->setName('Registrerings Datum');
    $deactivate_validator = Validator::date('Y-m-d')->notEmpty()->between($activation_date, '2050-01-01')->setName('Upphör att gälla');
    $tel_validator = Validator::Phone()->notEmpty()->setName('Mobilnummer');
    $reason_validator = Validator::stringType()->length(1, 750)->setName('Anledning');
    $name_validator = Validator::stringType()->length(1, 50)->setName('Namn');

    try {
        $activation_validator->assert($activation_date);
        $deactivate_validator->assert($deactivation_date);
        $tel_validator->assert($tel_no);
        $reason_validator->assert($reason);
        $name_validator->assert($name);
        $data = array(
            'activation_date' => $activation_date,
            'deactivation_date' => $deactivation_date,
            'tel_no' => $tel_no,
            'name' => $name,
            'reason' => $reason,
        );
        $request = new Request($data);
        $db = new RequestRepository();
        $db->save($request);
    } catch (NestedValidationException $e) {
        echo $e->getFullMessage();
        echo "<ul>";
        $errors = $e->findMessages([
            'alnum' => '{{name}} must contain only letters and digits',
            'length' => '{{name}} must not have more than 15 chars',
            'noWhitespace' => '{{name}} cannot contain spaces',
            'notEmpty' => '{{name}} Får inte vara tomt',
            'date' => '{{name}} Måste vara ett giltigt datum ({{format}})',
            'Phone' => '{{name}} Inget giltigt mobilnummer'
        ]);
        print_r($errors);
        foreach ($e->getMessages() as $message) {
            echo "<li>$message</li>";
        }
        echo "</ul>";
    }
}

$db = new RequestRepository();
