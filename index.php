<?php 

//1. formos patvirtinimas kai turime objekta x
//2. su failais. Informacijos nuskaitymas/irasymas i faila x
//3. Mini filmu duomenu baze. CRUD principus
// C - create
// R - read
// U - update
// D - delete

?>
<!-- Klases itraukimas -->
<?php include("classes/formSubmit-class.php"); ?>
<?php include("classes/createElement-class.php"); ?>
<?php include("classes/fileManager-class.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- Objekto sukurimas pagal klase -->
    <?php $formSubmit = new FormSubmit(); ?>

    <form action="index.php" method="POST">
        <input name="skaicius" />
        <input name="skaicius1" />
        <button type="submit" name="patvirtinti">Patvirtinti</button>
    </form>
    
    <?php $div = new createElement("div", "div", "labas"); ?>


    <?php 

        $fileManager = new FileManager("tekstinis.json", "labas labas is klases");
        // $file = $fileManager->fileRead();
        // echo $file;
        
        // $fileManager->fileWrite();
        // echo $fileManager->fileRead();


        //i faila irasyti tam tikra informacija/ naujo failo sukurimui

        // for($i=0; $i<100; $i++) {
        //     file_put_contents("tekstinis".$i.".txt", "labas");
        // }
        

        // $file = file_get_contents("tekstinis1.txt");

        // echo $file;

        //PHP JSON masyva mato kaip tiesiog teksta

        $employeesArray= $fileManager->fileReadJsonToPhpArray();
        

         $employeesArray["employees"][] = array(
             'name' => 'Test',
             'email' => 'test@gmail.com',
            'age' => 115
         );

         $fileManager->fileWriteJsonString($employeesArray);


    ?>


</body>
</html>