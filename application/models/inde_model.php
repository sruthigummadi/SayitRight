class inde_model extends CI_Model
{
	 public function __construct()
        {
            parent::__construct();
        }
function insert()
{
$f1 = $_POST['first'];
$f2 = $_POST['last'];
$f3 = $_POST['email'];
$f4 = $_POST['phone'];

$this->database->query("INSERT INTO client(fname,lname,phone,email,userid)VALUES('$f1','$f2','$f3','$f4',100)");
}
}