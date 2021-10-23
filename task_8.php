<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="utf-8">
        <title>
            Подготовительные задания к курсу
        </title>
        <meta name="description" content="Chartist.html">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, user-scalable=no, minimal-ui">
        <link id="vendorsbundle" rel="stylesheet" media="screen, print" href="css/vendors.bundle.css">
        <link id="appbundle" rel="stylesheet" media="screen, print" href="css/app.bundle.css">
        <link id="myskin" rel="stylesheet" media="screen, print" href="css/skins/skin-master.css">
        <link rel="stylesheet" media="screen, print" href="css/statistics/chartist/chartist.css">
        <link rel="stylesheet" media="screen, print" href="css/miscellaneous/lightgallery/lightgallery.bundle.css">
        <link rel="stylesheet" media="screen, print" href="css/fa-solid.css">
        <link rel="stylesheet" media="screen, print" href="css/fa-brands.css">
        <link rel="stylesheet" media="screen, print" href="css/fa-regular.css">
    </head>
    <body class="mod-bg-1 mod-nav-link ">
        <main id="js-page-content" role="main" class="page-content">
            <div class="col-md-6">
                <div id="panel-1" class="panel">
                    <div class="panel-hdr">
                        <h2>
                            Задание
                        </h2>
                        <div class="panel-toolbar">
                            <button class="btn btn-panel waves-effect waves-themed" data-action="panel-collapse" data-toggle="tooltip" data-offset="0,10" data-original-title="Collapse"></button>
                            <button class="btn btn-panel waves-effect waves-themed" data-action="panel-fullscreen" data-toggle="tooltip" data-offset="0,10" data-original-title="Fullscreen"></button>
                        </div>
                    </div>

                    <?php
                       

                        $pdo = new PDO("mysql:host=localhost;dbname=rahimcourseseptember", "root", "");
                        $sql = "SELECT * FROM usual_table";
                        // можно и так написать, меньше строк и с маленькими буквами
                        // $statement = $pdo->prepare("select * from usual_table");
                        $statement = $pdo->prepare($sql);
                        $statement->execute();
                        $usual_table = $statement->fetchAll(PDO::FETCH_ASSOC);
                    ?>

                    <div class="panel-container show">
                        <div class="panel-content">
                            <h5 class="frame-heading">
                                Обычная таблица
                            </h5>
                            <div class="frame-wrap">
                                <table class="table m-0">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>First Name</th>
                                            <th>Last Name</th>
                                            <th>Username</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                            
                                    <tbody>

                                        <?php foreach ($usual_table as $key): ?>
                                        
                                            <tr>
                                                <!-- здесь можно row не писать и в базу не добавлять, просто брать из id, написать echo $key["id"]; -->
                                            <th scope="row"><? echo $key["row"];?></th>
                                            <td><? echo $key["name"];?></td>
                                            <td><? echo $key["surname"];?></td>
                                            <td><? echo $key["username"];?></td>
                                            <td>
                                                <!-- задание 
                                                    добавить файлы как внизу в ahref 3 файла с адресами 
                                                я просто цифры написал, а в решений надо писать echo $key["id"];-->
                                                <a href="show.php?id=<? echo $key["id"];?>" class="btn btn-info">Редактировать</a>
                                                <a href="edit.php?id=<? echo $key["id"];?>" class="btn btn-warning">Изменить</a>
                                                <a href="delete.php?id=<? echo $key["id"];?>" class="btn btn-danger">Удалить</a>
                                            </td>
                                        </tr>
                                      
                                    </tbody>

                                        <?php endforeach;?>

                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        

        <script src="js/vendors.bundle.js"></script>
        <script src="js/app.bundle.js"></script>
        <script>
            // default list filter
            initApp.listFilter($('#js_default_list'), $('#js_default_list_filter'));
            // custom response message
            initApp.listFilter($('#js-list-msg'), $('#js-list-msg-filter'));
        </script>
    </body>
</html>
