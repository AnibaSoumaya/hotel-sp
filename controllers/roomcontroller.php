
<?php
require_once(__DIR__.'/../models/room.php');
require_once(__DIR__.'/../database/config/config.php');

class roomcontroller extends Connexion{


    function __construct() {
        parent::__construct();
        }

    
        function getRoomsById($id){
            $query="SELECT * FROM rooms WHERE hotel_id=? ";
            $res = $this->conn->prepare($query);
            $res->execute(array($id));
            $array= $res->fetchAll(PDO::FETCH_ASSOC);
            return $array;


            
        }
    function listeRooms(){
        $query = "select * from rooms";
        $res=$this->conn->prepare($query);
        $res->execute();
        $allrooms=$res->fetchAll(PDO::FETCH_OBJ);
        return $allrooms;
        }
    
    
    function roomsbydisp(){
                   
        $query="SELECT * FROM rooms WHERE status = 1";
        $res = $this->conn->prepare($query);
        $res->execute();
        $array= $res->fetchAll(PDO::FETCH_ASSOC);
        return $array;
        
    
}

public function getroombyidstatus($id){
    $query="SELECT * FROM rooms WHERE status = 1 AND id=? ";
    $r=$this->conn->prepare($query);
	$r->execute([$id]);
	$singleroom=$r->fetch(PDO::FETCH_ASSOC);
    return $singleroom;
}
public function getutilities($id){
    $query="SELECT * FROM utilities WHERE room_id=?";
    $utilities=$this->conn->prepare($query);
	$utilities->execute([$id]);
	$allutilities=$utilities->fetchAll(PDO::FETCH_ASSOC);	
    return $allutilities;
}

function insert(Rooms $h){
    
    $query = "INSERT INTO rooms (name,image, num_persons, size, view,num_beds, hotel_id,hotel_name,price) 
              VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";

    $res = $this->conn->prepare($query);
    
    $array = array(
        $h->getName(),
        $h->getImage(),
        $h->getNumPersons(), 
        $h->getSize(),
        $h->getView(),
        $h->getNumBeds(),
        $h->getHotelId(),
        $h->getHotelName(),
        $h->getPrice()
    );

    
    return $res->execute($array);
}

   
function update($status, $id){
    $update = $this->conn->prepare("UPDATE rooms SET status = ? WHERE id = ?");
    $update->execute(array($status, $id));
}

function delete($roomId){
    $query = "DELETE FROM rooms WHERE id = ?";
    $stmt = $this->conn->prepare($query);

    $stmt->execute([$roomId]);
}
public function getCountRooms() {
    $stmt = $this->conn->query("SELECT COUNT(*) AS count_rooms FROM rooms");
    $stmt->execute();
    return $stmt->fetch(PDO::FETCH_OBJ);
}
public function searchByHotelName($hotel_name) {
    $query = "SELECT * FROM rooms WHERE hotel_name LIKE ?";
    $stmt = $this->conn->prepare($query);
    $stmt->execute(["%$hotel_name%"]);
    $rooms = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $rooms;
}
}
