<?php
// read the contents of the file "polaznici-proba.json"
    print_r (__DIR__);
    $students = file_get_contents( __DIR__."/polaznici_proba.json") or die("Unable to open file 'polaznici_proba.json'");
    print_r ($students);

    //decode the contents of the file "polaznici.json"
    $students_data = json_decode($students, true);
    print_r($students_data);

    //add a new student to the array
    $students_data[] = [
        "name" => "Pero",
        "surname" => "Perić",
        "age"=> 25,
        "phone" => "098/123-456",
        "email" => "pero@pero.com",
    ];
    function checkNameStudents($students_data) {
         foreach ($students_data as $students) { 
            if ($students["name"] === "Pero" && $students["surname"] === "Perić") {
                 echo "Student exits in database";
                 } 
             else { ($students = json_encode($students_data) && file_put_contents( __DIR__."/polaznici_proba.json", $students) ); 
             }
     }
    };

    //encode the array of students
   // $students = json_encode($students_data);

    //write the contents of the file "polaznici.json"
    //file_put_contents( __DIR__."/polaznici_proba.json", $students) or die("Unable to write to file!");
?>
<!--Display data from the JSON file-->
<table border="1" cellpadding="10">
    <tr>
        
        <th>Ime</th>
        <th>Prezime</th>
        <th>Godine</th>
        <th>Broj telefona</th>
        <th>Email</th>
        
    </tr>
    
        <?php foreach ($students_data as $student): ?>
        <tr>
            <td><?php echo $student["name"]?></td>
            <td><?php echo $student["surname"]?></td>
            <td><?php echo $student["age"]?></td>
            <td><?php echo $student["phone"]?></td>
            <td><?php echo $student["email"]?></td>
        </tr>
    <?php endforeach; ?>
    </tr>    
</table>